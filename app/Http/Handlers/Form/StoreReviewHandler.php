<?php
namespace App\Http\Handlers\Form;

use App\Http\Handlers\BaseHandler;
use App\Http\Requests\Form\ReviewRequest;
use App\Models\Reviews\Review;

class StoreReviewHandler extends BaseHandler
{

    /**
     * @param ReviewRequest $request
     * @param Review|null $Review
     * @return Review|null
     */
    public function process(ReviewRequest $request)
    {
        try {

            $review = new Review();

            $review->fill($request->all());

            if (!$review->save())
            {
                throw new \LogicException('Failed to store news record');
            }

            return $review;

        } catch (\Throwable $e) {

            $this->setErrors($e->getMessage());
            return null;

        }
    }

}
