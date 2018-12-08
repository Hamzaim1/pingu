<?php

abstract class message
{	
	
	public  function getPost(){
		$res=postTable::getPostbyId($this->post);
		return $res;
		}
		
	public function getParent(){
		return utilisateurTable::getUserById($this->parent);
		}
	
	public function getLikes(){
		return this->aime;
		}
	public function getDestinataire(){
		return utilisateurTable::getUserById($this->destinataire);
		}
	public function getEmetteur()
	{
		return utilisateurTable::getUserByID($this->emetteur)
		}
	
	public function getDestinataire(){
		return utilisateurTable::getUserById($this->emetteur);
		}

}
