<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();

		return View::make('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new post
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		if(Auth::check()){
			$user_id=Auth::user()->id;
			$post=new Post;
			$post->title=Input::get('title');
			$post->content=Input::get('content');
			$post->city=Input::get('tinh');
			$post->district=Input::get('huyen');
			$post->area=Input::get('area');
			$post->price=Input::get('price');
			//$post->phonenumber=Input::get('phonenumber');
			$post->user_id=$user_id;
			$post->save();
			return Redirect::to('/');
		}
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return View::make('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('posts.index');
	}


	public function search(){
		$t=Input::get('tinh');
		$h=Input::get('huyen');
		$s=Input::get('area');
		$p=Input::get('price');
		if($s=="1"){
			$s1=0;
			$s2=15;
		} elseif($s=="2"){
			$s1=15;
			$s2=30;
		} elseif($s=="3") {
			$s1=30;
			$s2=100;
		} else {
			$s1=0;
			$s2= 100;
		}

		if($p=="1"){
			$p1=0;
			$p2=1000000;
		} elseif($p=="2"){
			$p1=1000000;
			$p2=2000000;
		} elseif($p=="3") {
			$p1=2000000;
			$p2=50000000;
		} else {
			$p1=0;
			$p2= 50000000;
		}
		//$post=Post::whereRaw('city = ?',array($t));
		if($t==""){
			$d=DB::select('select * from posts where  area >? and area <=? and price > ? and price<=?',array($s1,$s2,$p1,$p2));
			return View::make('posts.listsearch')->with('posts',$d);
		} elseif($t!=""&&$h!="") {
			$d=DB::select('select * from posts where district=? and area >? and area <=? and price > ? and price<=?',array($h,$s1,$s2,$p1,$p2));
		}
		else {
			$d=DB::select('select * from posts where city=? and area >? and area <=? and price > ? and price<=?',array($t,$s1,$s2,$p1,$p2));
		}
		return View::make('posts.listsearch')->with('posts',$d);
	}

	public function search_string(){
		$string=Input::get('string');
		//$post = Post::whereRaw('content LIKE ? or title LIKE ?', array('%'.$string.'%','%'.$string.'%'))->get();
		$post=DB::select('select * from posts where content LIKE ? or title LIKE ?', array('%'.$string.'%','%'.$string.'%'));
		return View::make('posts.listsearch')->with('posts',$post);
	}
}
