<?php

class PostController extends \BaseController {

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
		$post = new Post;
		$post->title 	= $_POST['title'];
		$post->content	= $_POST['content'];
		$post->category_id = $_POST['category'];
		
		if($post->save())
		{
			$category = $post->category()->select('name')->first();
			echo $category->name. ' kategorisine '. $post->title. ' Postu eklenmitir.';
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
	}

	/**
	 * Display the specified resource.
	 *
	 * @return Response
	 */
	public function show_all()
	{
		//
		$post = Post::find(1);
		echo "<pre>";
		var_dump($post->category()->first()->name);
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