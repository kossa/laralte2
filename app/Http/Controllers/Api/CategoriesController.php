<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller\Api;
use App\Http\Requests;
use Illuminate\Http\Request;

class CategoriesController extends ApiController
{
    

	/**
	 * @api {get} /categories Get all categories 
	 * @apiDescription Get categories 
	 * @apiGroup Categories
	 *
	 * @apiVersion 0.1.0
	 * 
	 * @apiSuccess {Integer} id Id of category.
	 * @apiSuccess {String} name Name of category.
	 * @apiSuccess {Integer} parent_id Parent id of category.
	 * @apiSuccess {Timestamp} created_at Created time.
	 * @apiSuccess {Timestamp} updated_at Created time.
	 * @apiSuccess {Category} parent Instance of parent category.
	 */
	public function index(Request $request)
	{
		$categories = Category::with('parent')->get();
		return $this->rest->listing($categories)->render();
	}


	/**
	 * @api {get} /categories/:id Get category details by ID
	 * @apiGroup Categories
	 *
	 * @apiParam {Integer} id ID of the category.
	 *
	 * @apiVersion 0.1.0
	 * @apiSuccess {Category} Object Instance of category.
	 */
	public function show($id)
	{
		$category = Category::where('id', $id)->with('parent')->first();

		return $this->rest->single($category)->render();
	}

}
