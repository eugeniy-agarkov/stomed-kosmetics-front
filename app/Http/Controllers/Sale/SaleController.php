<?php

namespace App\Http\Controllers\Sale;

use App\Http\Controllers\Controller;
use App\Models\Sales\Sale;
use App\Models\Sales\SaleCategory;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, SaleCategory $category, Sale $sale)
    {

        $categories = SaleCategory::all();
        if( $category->id )
        {
            $items = $category->sales()->whereSearch($request->input('search'))->paginate(6);
        }else{
            $items = $sale->whereSearch($request->input('search'))->paginate(6);
        }

        if ( $request->ajax() )
        {
            return view('sale.sale-items', compact('items', 'categories', 'category'));
        }

        return view('sale.index', [
            'category' => $category,
            'items' => $items,
            'categories' => $categories,
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
    public function show(Request $request, Sale $sale)
    {

        return view('sale.detail.index', [
            'sales' => $sale,
            'prices' => $sale->prices,
            'relevant' => Sale::whereRelevant($sale->id, 5)->get()
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
