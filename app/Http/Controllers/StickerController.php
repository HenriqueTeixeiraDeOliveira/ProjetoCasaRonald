<?php

namespace App\Http\Controllers;

use App\Sticker;
use Illuminate\Http\Request;

class StickerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stickers = Sticker::all();

        return view('sticker.index')->with('stickers', $stickers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sticker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Sticker::create([
            'name' => request('name'),
            'registration' => request('registration'),
            'photo_path' => request('photopath'),
            'type'  => request('type')
        ]);

        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sticker  $sticker
     * @return \Illuminate\Http\Response
     */
    public function show(Sticker $sticker)
    {
        return view('sticker.show')->with('sticker', $sticker);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sticker  $sticker
     * @return \Illuminate\Http\Response
     */
    public function edit(Sticker $sticker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sticker  $sticker
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sticker $sticker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sticker  $sticker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sticker $sticker)
    {
        //
    }
}
