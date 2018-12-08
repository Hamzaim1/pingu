<?php

class message Extends basemodel
{
  public static function getPost()
  {
	$res=postTable::getPostById($this->post);
  }
  public static function getParent()
  {
	$res2=utilisateurTable::getUserById($this->parent);
  }
  public static function getEmeteur()
  {
	$res2=utilisateurTable::getUserById($this->emetteur);
  }
  public static function getDestinataire()
  {
	$res3=utilisateurTable::getUserById($this->destinataire);
  }
  public static function getLike()
  {
	return $this->aime;
  }
}