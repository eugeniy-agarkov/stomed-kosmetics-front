<?php
namespace App\Services\Search;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchService
{

    protected $query;

    public function __construct($request)
    {
        $this->query = $request->q;
    }

    /**
     * @param string $status
     */
    public function whereSearch()
    {

        $sales = DB::table('sales')->select('id', 'slug', 'name', 'excerpt', DB::raw('"sales" as "model"'))->where('name', 'like', "%{$this->query}%");
        $directions = DB::table('directions')->select('id', 'slug', 'name', 'excerpt', DB::raw('"directions" as "model"'))->where('name', 'like', "%{$this->query}%");

        $results = DB::table('blogs')->select('id', 'slug', 'name', 'excerpt', DB::raw('"blogs" as "model"'))->where('name', 'like', "%{$this->query}%")
            ->union($sales)
            ->union($directions);

        return $results;

    }

}
