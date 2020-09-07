<?php

namespace App\Http\Controllers;

use App\Category;
use App\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function good(int $id)
    {
        /** @var Good $good */
        $good = Good::query()->with('category')->find($id);
        return view('good', ['good' => $good]);
    }

    public function category(int $id)
    {
        /** @var Category $category */
        $goods = Good::query()->where('category_id', '=', $id)->paginate(6);
        return view('home', [
            'goods' => $goods,
            'categories' => Category::all(),
            'currentCategory' => Category::find($id)
        ]);
    }
}
