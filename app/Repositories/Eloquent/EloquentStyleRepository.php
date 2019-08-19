<?php

namespace App\Repositories\Eloquent;

use App\Model\IconStyle;
use App\Repositories\Contracts\StyleRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentStyleRepository extends AbstractRepository implements StyleRepository
{
    private $model;

    public function __construct(IconStyle $model)
    {
        parent::__construct();
        $this->model=$model;
    }

    public function entity()
    {
        return IconStyle::class;
    }

    public function getCategories()
    {
        $categories = IconStyle::where('parent_id', 0)->get();

        $categories = $this->addRelation($categories);
        return $categories;
    }

    public function addRelation($categories)
    {
        $categories->map(function ($item, $key) {
            $sub = $this->selectChild($item->id);

            return $item = array_add($item, 'subCategory', $sub);
        });
        return $categories;
    }

    public function selectChild($id)
    {
        $categories = IconStyle::where('parent_id', $id)->get();

        $categories = $this->addRelation($categories);

        return $categories;
    }
}
