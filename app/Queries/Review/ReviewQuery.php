<?php
namespace App\Queries\Review;

use Illuminate\Database\Eloquent\Builder;

class ReviewQuery extends Builder
{

    /**
     * @param string $status
     */
    public function whereLast(int $limit = 5): self
    {

        $this->orderBy('published_at', 'desc')->take($limit);

        return $this;

    }

}
