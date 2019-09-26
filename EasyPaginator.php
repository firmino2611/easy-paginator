<?php

namespace Firmino\EasyPaginator;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class EasyPaginator {

    /**
     * @param array $items
     * @param int $itemsCount
     * @param int $perPage
     * @param null $currentPage
     * @return LengthAwarePaginator
     */
    public function paginate($items, int $itemsCount, int $perPage, $currentPage = null) {
        $pages = [];
        $count = 0;
        // slice the arrays and generate an array with the results
        foreach ($items as $index => $p) {
            // Collection::make()->toArray()
            // Convert the result before to array valid that can use in the function array_slice
            $pages[] = (object) array_slice(Collection::make($items)->toArray(), $count, $perPage);
            // Variable that control slice array
            $count += $perPage;
        }
        // Generate paginator custom Laravel
        $page = new LengthAwarePaginator($pages[
            // Get correct current page
            isset($currentPage) ? $currentPage - 1 : 1
            ] ?? [], $itemsCount, $perPage, $currentPage ?? 1);
        // Add path base of site. ex: mobit.mobimix.com.br/produtos
         $page->withPath(url(request()->path()));
         return $page;
    }

    /**
     * Order the data by field
     * @param $field
     */
    public function orderBy($field) {

    }
}
