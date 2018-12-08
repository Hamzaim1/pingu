<?php

class utilisateurTable
{
  public static function getUserByLoginAndPass($login,$pass)
  {
	$connection = new dbconnection() ;

    $sql = "select * from fredouil.utilisateur where identifiant='".$login."' and pass='".sha1($pass)."'" ;
    $res = $connection->doQuery( $sql );
    
    if($res === false)
      return false ;

    return $res ;
  }
  public static function getUserById($id)
  {
	$req = "select * from fredouil.utilisateur where id=".$id;
	$res2 = $connection->doQuery( $req ); 
	return $res2;
  }

  public static function getUsers()
  {
	$connection = new dbconnection();
	$req2 = "select * from fredouil.utilisateur";
	$res2 = $connection->doQuery( $req2 );
	return $res2;
	}
}