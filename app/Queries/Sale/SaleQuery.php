<?php
namespace App\Queries\Sale;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;

class SaleQuery extends Builder
{

    /**
     * @return \App\Queries\Sales\SaleQuery
     */
    public function whereBanner(): self
    {
        $this->where('is_home_banner', 1)->take(3);

        return $this;
    }

    /**
     * @param string $status
     */
    public function whereLast(int $limit = 4): static
    {

        $this->where('date_end', '>=', Carbon::now())->orderBy('published_at', 'desc')->take($limit);

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

    /**
     * @param string $status
     */
    public function whereRelevant(int $id, int $limit = 4): static
    {

        $this->whereNot('id', $id)->take($limit);

        return $this;

    }

}
