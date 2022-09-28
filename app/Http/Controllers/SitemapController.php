<?php

namespace App\Http\Controllers;

use App\Models\Direction\Direction;
use App\Models\Direction\DirectionCategory;
use App\Models\Doctor\Doctor;
use App\Models\News\Blog;
use App\Models\News\BlogCategory;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $directionCategories = DirectionCategory::all();
        $directions = Direction::all();
        $doctors = Doctor::all();
        $newsCategories = BlogCategory::all();
        $news = Blog::all();

        return view('sitemap', [
            'domain' => $request->getSchemeAndHttpHost(),
            'directionCategories' => $directionCategories,
            'directions' => $directions,
            'doctors' => $doctors,
            'newsCategories' => $newsCategories,
            'news' => $news,
        ]);

    }

}
