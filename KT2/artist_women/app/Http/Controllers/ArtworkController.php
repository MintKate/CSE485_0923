<?php

namespace App\Http\Controllers;

use App\Models\Artwork;
use Illuminate\Http\Request;

class ArtworkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 
        $artworks = Artwork::orderBy('id', 'asc')->paginate(10); // Số lượng tác giả trên mỗi trang là 10
        return view('artworks.index', compact('artworks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('artworks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'artist_name'=>'required',
            'description'=> 'required',
            'art_type'=> 'required',
            'media_link'=> 'required',
            'cover_image'=> 'required',
            
        ]);

        Artwork::create($request->all());
        return redirect()->route('artworks.index')->with('success', 'Artwork created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Artwork $artwork)
    {
        return view('artworks.show', compact('artwork'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artwork $artwork)
    {
        return view('artworks.edit', compact('artwork'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artwork $artwork)
    {
        $request->validate([
            'artist_name'=>'required',
            'description'=> 'required',
            'art_type'=> 'required',
            'media_link'=> 'required',
            'cover_image'=> 'required',
            
        ]);

        $artwork->update($request->all());
        return redirect()->route('artworks.index')->with('success', 'Artwork updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artwork $artwork)
    {
        $artwork->delete();

        return redirect()->route('artworks.index')->with('success', 'Artwork deleted successfully');   

    }
}
