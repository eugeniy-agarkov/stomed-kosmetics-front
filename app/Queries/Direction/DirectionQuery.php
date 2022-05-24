<?php
namespace App\Queries\Direction;

use Illuminate\Database\Eloquent\Builder;

class DirectionQuery extends Builder
{

    /**
     * @param string $status
     */
    public function whereSearch($search): static
    {

        $this->where('name', 'LIKE', '%'.$search.'%');

        return $this;

    }

}
