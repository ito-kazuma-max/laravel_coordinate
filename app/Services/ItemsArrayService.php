<?php

namespace App\Services;

class ItemsArrayService {

    public function getArray($items) {
        return [
            'Tops' => $items->where('category_id', 1),
            'Bottoms' => $items->where('category_id', 2),
            'Shoes' => $items->where('category_id', 3),
            'Outer' => $items->where('category_id', 4),
            'Bag' => $items->where('category_id', 5),
        ];
    }


}
