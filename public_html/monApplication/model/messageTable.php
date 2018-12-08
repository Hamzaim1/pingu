<?php
class messageTable
{
	public static function getMessages()
	{
		$connection = new dbconnection();
		$$req2 = "select * from fredouil.message;";
		$res2 = $connection->doQuery( $req2 );
		return $res2;
	}
	public static function getMessagesSendTo($id)
	{
		$$req2 = ""
		
		
		
		$res2 = $connection->doQuery( $req2 );
		
	}
}