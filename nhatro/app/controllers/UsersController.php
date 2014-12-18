<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of users
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();

		return View::make('users.index', compact('users'));
	}

	/**
	 * Show the form for creating a new user
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}

	/**
	 * Store a newly created user in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		User::create($data);

		return Redirect::route('users.index');
	}

	/**
	 * Display the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($user_id)
	{


	$post = Post::where('user_id', '=', $user_id)->get();
	return View::make('users.listposts')->with('posts', $post);

		// $user = User::findOrFail($id);

		// return View::make('users.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified user.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);

		return View::make('users.edit', compact('user'));
	}

	/**
	 * Update the specified user in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::findOrFail($id);

		$validator = Validator::make($data = Input::all(), User::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$user->update($data);

		return Redirect::route('users.index');
	}

	/**
	 * Remove the specified user from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return Redirect::route('users.index');
	}

//các hàm tự viết
	public function postRegister(){
		$user=new User;
		$user->username=Input::get('username');
		$user->password=Hash::make(Input::get('password'));
		$user->email=Input::get('email');
		$user->save();
		return Redirect::to('/')->with('message','Đăng kí thành công. Hãy đăng nhập');
	}

	public function postLogin(){
		if(Auth::attempt(array('email'=>Input::get('user_input'),'password'=>Input::get('password')))){
			return Redirect::to('/');
		}
		return Redirect::to('/')->with('message','Tài khoản hoặc mật khẩu không đúng');
	}


	public function postChangePassword(){
		if(Auth::check()){

			$user=User::where('email',Auth::user()->email)->first();
			if(!Auth::validate(array('email'=>$user->email,'password'=>Input::get('password')))){
				Session::flash('message','Mật khẩu cũ không đúng');
				return Redirect::to('/');
			}
			else{
				$user->password=Hash::make(Input::get('newpassword'));
				if($user->save())	{
					Session::flash('message','Đổi mật khẩu thành công');
					return Redirect::to('/');
				}
			}		
		}
		else {
			return Redirect::to('/')->with('message',"Bạn chưa đăng nhập");
		}
	}


	public function logout(){
		Auth::logout();
		return Redirect::to('/')->with('message','Bạn đã đăng xuất');
	}

	 	
	public function check(){
		if(User::check_email(Input::get("email")))
			return "true";
		else return "false";	
	}

	public function edit_profile(){
		$user= Auth::user();
		$user->firstname=Input::get('firstname');
		$user->lastname=Input::get('lastname');
		$user->phonenumber=Input::get('phonenumber');
		$user->address=Input::get('address');
		$user->save();

		return Redirect::to('edit-profile');
	}


}
