<?php
namespace App\Http\ViewComposers;

use App\Models\Direction\DirectionCategory;
use Illuminate\View\View;

class DirectionCategoryComposer
{

    /**
     * @param View $view
     * @return View
     */
    public function compose(View $view)
    {
        return $view->with('directionCategories', DirectionCategory::whereParent()->whereIsMenu()->get());
    }

}
