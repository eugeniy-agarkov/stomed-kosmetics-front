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

        if( $form->type == FormEnum::APPOINTMENTS )
        {
            $form->content = $form->date . ' в ' . $form->time;
        }

    }

    /**
     * Handle the Form "created" event.
     *
     * @param  \Frontend\Models\Form  $form
     * @return void
     */
    public function created(Form $form)
    {



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
