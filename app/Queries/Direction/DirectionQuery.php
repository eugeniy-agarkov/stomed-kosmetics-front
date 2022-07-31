<?php
namespace App\Queries\Direction;

use Illuminate\Database\Eloquent\Builder;

class DirectionQuery extends Builder
{

    /**
     * @param string $status
     */
    public function whereSearch(string $search = null): static
    {

        if( $search )
            $this->where('name', 'LIKE', '%'.$search.'%');

        return $this;

    }

    /**
     * @param string $status
     */
    public function whereClinic($clinic = null): static
    {

        if( $clinic )
        {
            $this->where('clinic_id', $clinic);
        }else{
            $this->whereNull('clinic_id');
        }

        return $this;

    }

    /**
     * @param string $status
     */
    public function wherePrice(string $price = null): static
    {

//        if( $search )
//            $this->where('name', 'LIKE', '%'.$search.'%');

        return $this;

    }

    /**
     * @param string $status
     */
    public function whereIsMenu(): static
    {

        $this->whereHas('category', function($query)
        {
            $query->where('is_menu', 1);
        });

        return $this;

    }

    /**
     * @param string $status
     */
    public function whereIsTop(): self
    {
        $this->where('is_top', 1);

        return $this;
    }

}
