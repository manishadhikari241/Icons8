<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 7/24/2019
 * Time: 1:30 PM
 */

namespace App\composer;
use App\Repositories\Contracts\ForumCategoryRepository;
use Illuminate\View\View;


class ForumCategoryComposer
{

    protected $category;

    public function __construct(ForumCategoryRepository $category)
    {
        $this->category = $category;
    }

    public function compose(View $view)
    {
        $category = ($this->category->getCategories());

        $view->with('categorycomp',$category);
    }

}