<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	// User Role Validation
	public $user_role = [
		'title'=> 'required|is_unique[user_role.title]'
	];

	public $user_role_errors = [
		'title'=> [
			'is_unique' => 'Sorry. That Title Has Been Taken. Please Choose Another'
		]
	];

	//User Validation
	public $user = [
		'username'=> 'required|is_unique[user.username]'
	];

	public $user_errors = [
		'username'=> [
			'is_unique' => 'Sorry. That Username Has Been Taken. Please Choose Another'
		]
	];

	//Menu Validation
	public $menu = [
		'name' => 'required|is_unique[menu.name]'
	];
	public $menu_errors = [
		'name' => [
			'is_unique' => 'Sory, That Name Has Been Taken, Please Choose Another'
		]
	];
}
