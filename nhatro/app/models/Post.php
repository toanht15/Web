<?php

class Post extends \Eloquent {

	// Add your validation rules here
	// public $timestamps = false;
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

	public  function user()
	{
		return $this->belongTo('User');
	}
}