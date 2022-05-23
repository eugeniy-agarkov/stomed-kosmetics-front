<?php

namespace App\Observers;

use App\Enums\FormEnum;
use App\Models\Form;

class FormObserver
{

    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Form  $form
     * @return void
     */
    public function creating(Form $form)
    {

        //

    }

    /**
     * Handle the Form "created" event.
     *
     * @param  \Frontend\Models\Form  $form
     * @return void
     */
    public function created(Form $form)
    {

        if( $form->form == FormEnum::APPOINTMENTS )
        {
            $dateTime = (new \Carbon\Carbon(request()->input('time')))->format('H:i');
            $form->content = 'Дата записи: ' . request()->input('date') . ' в ' . $dateTime;
            $form->save();
        }

    }

    /**
     * Handle the Form "updated" event.
     *
     * @param  \Frontend\Models\Form  $form
     * @return void
     */
    public function updated(Form $form)
    {
        //
    }

    /**
     * Handle the Form "deleted" event.
     *
     * @param  \Frontend\Models\Form  $form
     * @return void
     */
    public function deleted(Form $form)
    {
        //
    }

    /**
     * Handle the Form "restored" event.
     *
     * @param  \Frontend\Models\Form  $form
     * @return void
     */
    public function restored(Form $form)
    {
        //
    }

    /**
     * Handle the Form "force deleted" event.
     *
     * @param  \Frontend\Models\Form  $form
     * @return void
     */
    public function forceDeleted(Form $form)
    {
        //
    }
}
