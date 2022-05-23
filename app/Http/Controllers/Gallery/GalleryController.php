<?php

namespace App\Http\Controllers\Gallery;

use App\Http\Controllers\Controller;
use App\Models\Direction\Direction;
use App\Models\Direction\DirectionCategory;
use App\Models\Gallery\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Gallery $gallery)
    {

        $galleries = $gallery->paginate(4);

        if ( $request->ajax() )
            return view('gallery.gallery-items', compact('galleries'));

        return view('gallery.index', [
            'galleries' => $galleries
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, DirectionCategory $category, Direction $direction)
    {


        if( $direction->id )
        {

            $galleries = $direction->gallery()->paginate(4);

        }else{

            $directions = $category->directions->pluck('id')->toArray();
            $galleries = Gallery::whereIn('direction_id', $directions)->paginate(4);

        }

        if ( $request->ajax() )
        {
            return view('gallery.gallery-items', compact('galleries'));
        }


        return view('gallery.index', [
            'direction' => $direction,
            'category' => $category,
            'galleries' => $galleries
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
