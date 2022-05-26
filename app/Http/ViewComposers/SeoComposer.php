<?php
namespace App\Http\ViewComposers;

use App\Models\Doctor\Doctor;
use App\Models\Seo\Seo;
use Illuminate\View\View;

class SeoComposer
{

    /**
     * @param View $view
     * @return View
     */
    public function compose(View $view)
    {

        if( request()->routeIs('doctor.show') )
        {

            return $view->with('seo', request()->doctor->page);

        }elseif (request()->routeIs('direction.detail')) {

            return $view->with('seo', request()->direction->page);

        }elseif (request()->routeIs('direction.category')) {

            return $view->with('seo', request()->category->page);

        }elseif (request()->routeIs('news.detail')) {

            return $view->with('seo', request()->blog->page);

        }elseif (request()->routeIs('contact.clinic')) {

            return $view->with('seo', request()->clinic->page);

        }else{

            return $view->with('seo', Seo::where('page', \Request::path())->first());

        }

    }

}
