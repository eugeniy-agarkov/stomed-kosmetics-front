<?php

namespace App\Observers;

use App\Enums\ReviewEnum;
use App\Mail\Admin\FormMail;
use App\Mail\Admin\ReviewMail;
use App\Models\Reviews\Review;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ReviewObserver
{

    /**
     * Handle the Product "created" event.
     *
     * @param  \App\Models\Review  $review
     * @return void
     */
    public function creating(Review $review)
    {

        //

    }

    /**
     * Handle the Review "created" event.
     *
     * @param  \Frontend\Models\Review  $review
     * @return void
     */
    public function created(Review $review)
    {

        $emails = Str::of(settings('email_appointments'))->explode(',');

        dispatch(function () use ($review, $emails)
        {

            foreach ( $emails as $email )
            {
                Mail::to($email)->send(new ReviewMail($review));
            }

        })->afterResponse();

    }

    /**
     * Handle the Review "updated" event.
     *
     * @param  \Frontend\Models\Review  $review
     * @return void
     */
    public function updated(Review $review)
    {
        //
    }

    /**
     * Handle the Review "deleted" event.
     *
     * @param  \Frontend\Models\Review  $review
     * @return void
     */
    public function deleted(Review $review)
    {
        //
    }

    /**
     * Handle the Review "restored" event.
     *
     * @param  \Frontend\Models\Review  $review
     * @return void
     */
    public function restored(Review $review)
    {
        //
    }

    /**
     * Handle the Review "force deleted" event.
     *
     * @param  \Frontend\Models\Review  $review
     * @return void
     */
    public function forceDeleted(Review $review)
    {
        //
    }
}
