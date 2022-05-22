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

}
