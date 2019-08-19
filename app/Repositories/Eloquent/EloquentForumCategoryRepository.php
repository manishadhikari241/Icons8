<?php

namespace App\Repositories\Eloquent;

use App\Model\ForumCategory;
use App\Repositories\Contracts\ForumCategoryRepository;

use Kurt\Repoist\Repositories\Eloquent\AbstractRepository;

class EloquentForumCategoryRepository extends AbstractRepository implements ForumCategoryRepository
{
    public function entity()
    {
        return ForumCategory::class;
    }

    public function getCategories()
    {
        $categories = ForumCategory::where('parent_id', 0)->take(12)->get();
        $categories = $this->addRelation($categories);
        return $categories;
    }

    public function addRelation($categories)
    {

        $categories->map(function ($item, $key) {

//            dd($item);
            $sub = $this->selectChild($item->id);

            return $item = array_add($item, 'subCategory', $sub);


        });

        return $categories;
    }

    public function selectChild($id)
    {
        $categories = ForumCategory::where('parent_id', $id)->get(); //rooney

        $categories = $this->addRelation($categories);

        return $categories;

    }
}
