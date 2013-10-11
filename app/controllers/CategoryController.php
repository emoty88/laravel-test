<?php

class CategoryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$category = new Category;
		$category->name = $_POST["name"];
		$category->description = $_POST["description"];
		
		if($category->save())
		{
			echo "Category eklendi";
		}
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
		$category =  Category::find($id);
		
		
		echo $category->name;
		echo "<br />";
		echo $category->description;
		echo "<br />";
		$postlar = $category->posts();
		echo "kategorideki postlar <br/>";
		echo "<pre>";
		//var_dump($postlar->get());
		
		
		foreach($postlar->get() as $post)
		{
			echo $post->title;
			echo "<br />";
			echo $post->content;
		}
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}