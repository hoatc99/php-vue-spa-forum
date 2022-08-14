<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        return Category::all();
    }

    public function topics(Request $request, $categoryId) {
        // $page = $request->input('page');

        // Paginator::currentPageResolver(function() use ($page) {
        //     return $page;
        // });

        $topics = Category::findOrFail($categoryId)
            ->topics()
            ->orderBy('created_at', 'desc')
            ->paginate(3);

        // if ($topics->isEmpty()) {
        //     return response('The provided page exceeds the available number of pages', 404);
        // }

        return $topics;
    }
}
