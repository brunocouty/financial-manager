<?php

namespace BrunoCouty\FinancialManager\Controllers;

use App\Http\Controllers\Controller;
use BrunoCouty\FinancialManager\Models\FinancialCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriesController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function load()
    {
        $user = Auth::user();
        $categories = [];
        try {
            $categories = FinancialCategory::orderBy('name')->where('user_id', $user->id)->get();
        } catch (\Exception $e) {

        }
        return response([
            'categories' => $categories
        ], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function save(Request $request)
    {
        $user = Auth::user();
        $name = $request->get('name');
        $categories = [];
        try {
            $testCategory = FinancialCategory::where('name', $name)->where('user_id', $user->id)->get();
            if (count($testCategory) > 0) {
                return response([], 422);
            }
            FinancialCategory::create([
                'name' => $name,
                'user_id' => $user->id
            ]);
            $categories = FinancialCategory::orderBy('name')->get();
        } catch (\Exception $e) {
            return response([
                'code' => $e->getCode(),
                'message' => $e->getMessage()
            ], 422);
        }
        return response([
            'categories' => $categories
        ], 200);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function delete(Request $request)
    {
        $category_id = $request->get('category');
        try {
            $category = FinancialCategory::findOrFail($category_id);
            $category->delete();
        } catch (\Exception $e) {
            return response([], 422);
        }
        return response([], 200);
    }
}