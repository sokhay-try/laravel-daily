<?php

namespace App\Pagination;


// use Illuminate\Pagination\LengthAwarePaginator;

// class CustomPaginator extends LengthAwarePaginator
// {
//      /**
//      * Get the instance as an array.
//      *
//      * @return array
//      */
//     public function toArray()
//     {
//         return [
//             'data' => $this->items->toArray(),
//             'pagination' => [
//                 'total'       => $this->total(),
//                 'count'       => $this->count(),
//                 'perPage'     => $this->perPage(),
//                 'currentPage' => $this->currentPage(),
//                 'totalPages'  => $this->lastPage(),
//             ],
//         ];
//     }
// }

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class CustomPaginator extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => $this->collection,
            'pagination' => [
                "current_page" => $this->currentPage(),
                // "first_page_url" =>  $this->getOptions()['path'].'?'.$this->getOptions()['pageName'].'=1',
                // "prev_page_url" =>  $this->previousPageUrl(),
                // "next_page_url" =>  $this->nextPageUrl(),
                // "last_page_url" =>  $this->getOptions()['path'].'?'.$this->getOptions()['pageName'].'='.$this->lastPage(),
                // "last_page" =>  $this->lastPage(),
                "per_page" =>  $this->perPage(),
                "total" =>  $this->total(),
                // "path" =>  $this->getOptions()['path'],
            ],
        ];
    }
}
