<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\News\BlogCategory;
use App\Models\News\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, BlogCategory $category, Blog $blog)
    {

        $categories = BlogCategory::all();
        if( $category->id )
        {
            $items = $category->blogs()->whereSearch($request->input('search'))->paginate(6);
        }else{
            $items = $blog->whereSearch($request->input('search'))->paginate(6);
        }

        if ( $request->ajax() )
        {
            return view('news.news-items', compact('items', 'categories', 'category'));
        }

        return view('news.index', [
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
    public function show(Request $request, Blog $blog)
    {

        return view('news.detail.index', [
            'news' => $blog,
            'prices' => $blog->prices
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
