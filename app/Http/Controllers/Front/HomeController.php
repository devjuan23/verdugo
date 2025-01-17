<?php

namespace App\Http\Controllers\Front;

use App\Shop\Categories\Repositories\Interfaces\CategoryRepositoryInterface;

class HomeController
{
    /**
     * @var CategoryRepositoryInterface
     */
    private $categoryRepo;

    /**
     * HomeController constructor.
     * @param CategoryRepositoryInterface $categoryRepository
     */
    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepo = $categoryRepository;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $categories = array();
        foreach ($this->categoryRepo->all() as $key => $category) {
            if ($category->parent_id == null && $category->status) {
                $categories[] = $category;
            }
        }
        /*
        dd($categories);
        $cat1 = $this->categoryRepo->findCategoryById(2);
        $cat2 = $this->categoryRepo->findCategoryById(3);*/

        return view('front.index', compact('categories'));
    }
}
