<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categories = [
        [
            "id" => 1,
            "name" => "Lập trình cơ bản",
            "total_post" => 10,
            "slug" => "lap-trinh-co-ban"
        ],
        [
            "id" => 2,
            "name" => "Ebooks",
            "total_post" => 500,
            "slug" => "ebooks"
        ],
    ];

    public function index()
    {
        $totals = 2;
        $categories = $this->categories;
        return view('category.index', compact('categories', 'totals'));
    }

    public function showEdit(Request $request)
    {

        $id = ($request->id) - 1;
        $cate = $this->categories[$id];
        $categories = $this->categories;
        return view('category.edit', compact('cate', 'categories'));
    }
    public function delete(Request $request)
    {

        $id = +($request->id);
        unset($this->categories[$id]);
        $categories = $this->categories;
        return view('category.index',compact('categories'));
    }

    public function edit(Request $request)
    {
        $id = ($request->input('id')) - 1;
        $cate = $this->categories[$id];

        $cate['name'] = $request->name;
        $cate['slug'] = $request->slug;

        $categories = $this->categories;
        $categories[$id] = $cate;

        return view('category.edit', compact('cate', 'categories'))->with('msg_sucess', 'Cập nhật dữ liệu thành công!');
        //->withInput(Input::all())->with('message', 'Some message');
    }
    public function add( Request $request)
    {

        return view('category.edit');
    }
}
