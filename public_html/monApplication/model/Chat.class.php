<?php

class chat Extends basemodel
{
	public static function getPost()
	{
		$res = postTable::getPostbyId($this->post);
		return $res;
	}
	public static function getEmetteur()
	{
		$res = utilisateurTable::getUserById($this->emetteur);
		return $res;
		}
}
