<?php
namespace App\Http\ViewComposers;

use App\Models\Clinic\Clinic;
use Illuminate\View\View;

class ClinicComposer
{

    /**
     * @param View $view
     * @return View
     */
    public function compose(View $view)
    {
        return $view->with('clinics', Clinic::get());
    }

}
