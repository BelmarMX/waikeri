
<?php
use \Illuminate\Database\Eloquent\Model;

class User extends Model {
	protected $fillable = [
		'name', 'email', 'password', 'phone'
	];
	
	protected $hidden = [
		'password'
	];
}