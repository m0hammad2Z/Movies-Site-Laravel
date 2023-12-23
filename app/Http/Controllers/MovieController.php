<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $movies = Movie::orderBy('id', 'desc')->paginate(12);
        $movies = Movie::all();
        if(count($movies) == 0) {
            return redirect()->route('movies.create');
        }

        return view('movies.index', ['movies' => $movies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if($this->isAnyNull($data)) {
            return redirect()->back();
        }

        Movie::create($data);
        return redirect()->route('movies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {   
        if(!is_numeric($id) || $id < 0) {
            return redirect()->route('movies.index');
        }

        $movie = Movie::findOrFail($id);
        
        return view('movies.show', ['movie' => $movie]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(!is_numeric($id) || $id < 0) {
            return redirect()->route('movies.index');
        }

        $movie = Movie::findOrFail($id);
        return view('movies.edit', ['movie' => $movie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        if($this->isAnyNull($data)) {
            return redirect()->back();
        }

        if (strlen($data['name']) > 255 || strlen($data['description']) > 255 || strlen($data['genre']) > 255) {
            return redirect()->back();
        }

        $movie = Movie::findOrFail($id);
        $movie->update($data);
        return redirect()->route('movies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
        return redirect()->route('movies.index');
    }

    function isAnyNull($data) : bool {
        foreach($data as $key => $value){
            if($value == null)
                return true;
        }
        return false;
    }
}
