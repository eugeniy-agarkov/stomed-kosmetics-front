<?php
namespace App\Queries\Direction;

use Illuminate\Database\Eloquent\Builder;

class DirectionCategoryQuery extends Builder
{

    /**
     * @param string $status
     */
    public function whereParent(): self
    {
        $this->whereNull('parent_id');

        return $this;
    }

    /**
     * @param string $status
     */
    public function whereIsMenu(): self
    {
        $this->where('is_menu', 1);

        return $this;
    }

}
