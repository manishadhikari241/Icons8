<?php

namespace App\Repositories\Contracts;

interface StyleRepository
{
    public function getCategories();

    public function addRelation($categories);

    public function selectChild($id);
}
