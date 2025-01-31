<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Genre;
use Illuminate\Http\Request;
use App\Http\Requests\AlbumRequest;
use Illuminate\Routing\Controllers\Middleware;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums=Album::all();
        return view('album.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres=Genre::all();   
        return view('album.create', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AlbumRequest $request)
    {
        $album =Album::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'img' => $request->file('img')->store('albums', 'public'),
            'user_id' => auth()->user()->id
        ]);

        $album->genres()->attach($request->input('genres'));

        return redirect(route('home'))->with('message', 'Album creato con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        return view('album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, Album $album)
    {
        $album->name=$request->input('name');
        $album->description=$request->input('description');
        $album->img=$request->has('img') ? $request->file('img')->store('albums', 'public') : $album->img;
        $album->save();
        return redirect(route('home'))->with('message', 'Album modificato con successo');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        return view('album.update', compact('album'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        // per togliere le relazioni
        $album->genres()->detach();
        

        $album->delete();
        return redirect(route('home'))->with('message', 'Album eliminato con successo');
    }

    
}
