<?php
namespace App\Queries\News;

use Illuminate\Database\Eloquent\Builder;

class BlogQuery extends Builder
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

    /**
     * @param string $status
     */
    public function whereRelevant(int $id, int $limit = 4): static
    {

        $this->whereNot('id', $id)->take($limit);

        return $this;

    }

}
