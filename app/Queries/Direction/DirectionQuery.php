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
            $this->where('clinic_id', $clinic);

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

}
