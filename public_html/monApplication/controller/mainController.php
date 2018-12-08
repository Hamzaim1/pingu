<?php
/*
 * Controler 
 */

class mainController
{

	public static function helloWorld($request,$context)
	{
		
	
		$context->mavariable="hello world";
	if(context::getSessionAttribute('user') != null) 
				
				
	return context::SUCCESS;
		
	}

	public static function superTest($request,$context)
	{
		$context->mavariable1=$request['param1'];
		$context->mavariable2=$request['param2'];
		return context::SUCCESS; 
	}
	public static function index($request,$context)
	{
		return context::SUCCESS;
	}
	
	public static function login($context,$request){

		if(isset($_REQUEST['log']) && isset($_REQUEST['pass']))
		{	
		$returnLogin = utilisateurTable::getUserByLoginAndPass($_REQUEST['log'], $_REQUEST['pass']);
			if($returnLogin == false)
			{
			}		
			else 
			{
				context::setSessionAttribute("user",$returnLogin);
				context::setSessionAttribute("id",$context->$returnLogin[0]['id']);

				context::redirect("monApplication.php?action=profil");
			}
		
		}
		 else
        {
            echo "welcome : ".$_SESSION['user']." vous etes déjas connecté  ... ";
        }				
		return context::SUCCESS;

	}
	public static function deconnexion($request,$context)
	{
	session_destroy();
	return context::SUCCESS;
	}
	 
	 public static function profil($request,$context)
{

			if(isset($_SESSION['user']))
			{
				if(!isset($_GET['id']))
				{
				$user = utilisateurTable::getUserById($_SESSION['id']);
				$user=$user[0];
				$context->user = $user;
				$user = utilisateurTable::getUsers();
				$context->usersList = $user;
				$posts=postTable::getPostById($_SESSION['id']);
				$context->posts=$posts;
			
		
			}
			else {
				$user = utilisateurTable::getUserById($_GET['id']);
				$user=$user[0];
				$context->user = $user;
				$user = utilisateurTable::getUsers();
				$context->usersList = $user;
				$posts=postTable::getPostById($_GET['id']);
				$context->posts=$posts;
				
			
			}
			}

	return context::SUCCESS;
}
	
	
	public static function listAmies(){
	return context::SUCCESS;
	}
		
	public static function chat(){
		return context::SUCCESS;
	}

	public static function postes(){
		return context::SUCCESS;
	}
	
	
	
	}//fin de class


?>
