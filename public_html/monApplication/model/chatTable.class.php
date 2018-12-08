<?php
class chatTable
{
	public static function getChat()
	{
		$connection = new dbconnection();
		$req4 = "select * from fredouil.chat";
		$res4 = $connection->doQuery( $req4 );
		return $res3;
	}
	public static function getLastChat()
	{
		$connection = new dbconnection();
		$req5= "select p.texte,p.date from fredouil.post p inner join fredouil.chat c on p.id=c.post order by date desc limit 1;";
		$res5 = $connection->doQuery( $req5 );
		return $res5;
	}
		public static function getLast10Chat()
	{
		$connection = new dbconnection();
		$req5= "select p.texte from fredouil.post p inner join fredouil.chat c on p.id=c.post order by date desc limit 10;";
		$res5 = $connection->doQuery( $req5 );
		return $res5;
	}
}
