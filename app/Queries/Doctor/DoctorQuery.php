<?php
namespace App\Queries\Doctor;

use Illuminate\Database\Eloquent\Builder;

class DoctorQuery extends Builder
{

    /**
     * @param string $status
     */
    public function whereIsTop(int $limit = 4): self
    {
        $this->where('is_top', 1)->take($limit);

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
    public function whereClinic($clinic): static
    {

        if( $clinic->id )
        {

            $this->whereHas('clinics', function (Builder $query) use ($clinic) {
                $query->where('clinic_id', $clinic->id);
            });

        }

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
