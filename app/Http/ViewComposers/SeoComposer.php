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

            if( isset(request()->direction->page) )
            {
                return $view->with('seo', request()->direction->page);
            }

        }elseif (request()->routeIs('direction.category')) {

            return $view->with('seo', request()->category->page);

        }elseif (request()->routeIs('news.detail')) {

            return $view->with('seo', request()->blog->page);

        }elseif (request()->routeIs('contact.clinic')) {

            return $view->with('seo', request()->clinic->page);

        }elseif (request()->routeIs('gallery')) {

            return $view->with('seo', (object) [
                'meta_title' => __( 'Фото до и после' ),
                'meta_description' => __( 'Фото до и после' ),
                'meta_keyword' => __( 'Фото до и после' )
            ]);

        }elseif (request()->routeIs('gallery.show')) {

            if ( isset(request()->direction) )
            {
                return $view->with('seo', (object) [
                    'meta_title' => request()->direction->name . ': ' . __( 'фото до и после' ),
                    'meta_description' => request()->direction->name . ': ' . __( 'фото до и после' ),
                    'meta_keyword' => request()->direction->name . ': ' . __( 'фото до и после' ),
                ]);
            }else{
                return $view->with('seo', (object) [
                    'meta_title' => request()->category->name . ': ' . __( 'фото до и после' ),
                    'meta_description' => request()->category->name . ': ' . __( 'фото до и после' ),
                    'meta_keyword' => request()->category->name . ': ' . __( 'фото до и после' ),
                ]);
            }


        }else{

            return $view->with('seo', Seo::where('page', \Request::path())->first());

        }

    }

}
