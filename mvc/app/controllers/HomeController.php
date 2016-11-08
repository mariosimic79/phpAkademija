<?php
class Home extends Controller
{
	public function index($name = '')
	{
		
		$user = $this->model('User');
		$user->name = $name;
		
		
	$this->view('home/index', ['name' => 'pocetna.php']);
		
	}
	
	
	public function forma()
	{
		
		$this->view('home/index', ['name' => 'form.php']);
	}
	public function login()
	{
		
		$this->view('home/index', ['name' => 'login.php']);
	}
	

	
	
}
