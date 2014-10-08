<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// $posts = Post::all();
		$posts = Post::paginate(4);
		return View::make('posts.index')->with('posts', $posts);

    
	}


	/**
	 *
	 * @return Response
	 */// Show the form for creating a new resource
	public function create()
	  
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();
		$post->title = Input::get('title');
		$post->content = Input::get('content');
		$post->save();
		return Redirect::action('PostsController@index');

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		return View::make('posts.show')->with('post', $post);
	
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
			$post = Post::findOrFail($id);
			return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		$post->title=Input::get('title');
		$post->content=Input::get('content');
		$post->save();
		return Redirect::action('PostsController@index');
	}
	
	


	// *
	//  * Remove the specified resource from storage.
	//  *
	//  * @param  int  $id
	//  * @return Response
	 
	public function destroy($id)
	{
		return View::make('posts.destroy')->with('post' , $post);

	}


}
