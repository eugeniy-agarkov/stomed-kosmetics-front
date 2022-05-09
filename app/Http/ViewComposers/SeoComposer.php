<?php
namespace App\Http\ViewComposers;

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
        return $view->with('seo', Seo::where('page', \Request::path())->first());
    }

}
