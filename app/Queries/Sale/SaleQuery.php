<?php
namespace App\Queries\Sale;

use Illuminate\Database\Eloquent\Builder;

class SaleQuery extends Builder
{

    /**
     * @param string $status
     */
    public function whereLast(int $limit = 4): static
    {

        $this->orderBy('published_at', 'desc')->take($limit);

        return $this;

    }

    /**
     * @param string $status
     */
    public function whereSearch($search): static
    {

        $this->where('name', 'LIKE', '%'.$search.'%');

        return $this;

    }

}
