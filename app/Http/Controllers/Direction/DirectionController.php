<?php

namespace App\Http\Controllers\Direction;

use App\Http\Controllers\Controller;
use App\Models\Clinic\Clinic;
use App\Models\Direction\Direction;
use App\Models\Direction\DirectionCategory;
use App\Models\Doctor\Doctor;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, DirectionCategory $category, Clinic $clinic, Direction $direction)
    {

        if( $category->id )
        {

            $items = $category
                ->directions()
                ->whereClinic($request->input('clinic'))
                ->wherePrice($request->input('price'))
                ->whereSearch($request->input('search'))
                ->paginate(6);

        }else{

            $items = $direction
                ->whereClinic($request->input('clinic'))
                ->wherePrice($request->input('price'))
                ->whereSearch($request->input('search'))
                ->paginate(6);

        }


        if ( $request->ajax() )
        {
            return view('direction.direction-items', compact('items'));
        }

        return view('direction.index', [
            'category' => $category,
            'items' => $items,
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
    public function show(Request $request, Direction $direction)
    {

        return view('direction.detail.index', [
            'direction' => $direction,
            'prices' => $direction->prices,
            'galleries' => $direction->gallery->take(2),
            'reviews' => $direction->reviews->take(10),
            'doctorsIsTop' => Doctor::whereIsTop(4)->get(),
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
