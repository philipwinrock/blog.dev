<?php

class PostsController extends \BaseController {


	public function __construct()
{
    // call base controller constructor
    parent::__construct();

    // run auth filter before all methods on this controller except index and show
    $this->beforeFilter('auth.basic', array('except' => array('index', 'show')));
}

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
		$validator= Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()){
			return Redirect::back()->withInput();
			Session::flash('errorMessage', 'Your post needs title and body');
			log::error('Post validator failed', Input::all());

		 
		    } else{
			$post = new Post;
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			$post->save();

			Log::info('Post was sucessfully saved');

			$message = 'Post created sucessfully';

			Session::flash('sucessMessage', $message);

			return Redirect::action('PostsController@index');

		}

		}


	


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		if (!$post){
			App::abort(404);
		}
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
		$post = Post::find($id);
		if (!$post){
			App::abort(404);
		}
				$post->delete(); 
				log::info('Post deleted sucessfully');
				Session::flash('sucessMessage' , 'Post deleted sucessfully');
				return Redirect::action('PostsController@index');

		}

}



