<?php

namespace App\Observers;

use App\Enums\FormEnum;
use App\Mail\Admin\FormMail;
use App\Models\Form;
use Illuminate\Support\Facades\Mail;

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

        if( $form->form == FormEnum::DOCTORS )
        {

            $content = '<div>Доктор: ' . request()->input('doctor') . '</div>';
            $content .= '<div>Клиника: ' . request()->input('location') . '</div>';
            $content .= '<div>Дата: ' . request()->input('date') . '</div>';
            $content .= '<div>Время: ' . request()->input('time') . '</div>';

            $form->content = $content;
            $form->save();

        }

        dispatch(function () use ($form) {
            Mail::to(settings('email_appointments'))
                ->send(new FormMail($form));
        })->afterResponse();

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
