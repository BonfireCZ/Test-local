<?php 

// trida User

class User {           
  var $login;  // login
  var $name;   // jmeno uzivatele
  var $type;   // typ od 0 do 99
  
  
  public function __construct() {   
      $this->name="Nepřihlášen";
      $this->type="0";
      $this->login="";    
    }
  
  private function HashPassword($password)
   {
      ///Dont do this has the hash, but im just keeping it simple
      return md5($password . 'a}{!@#' . $this->login);
   }
   
  public function Login($login,$pass) {                       // konstruktor
    
    if (($login=="admin") && ($pass=="123456")) {     // prozatim jenom admin
      $this->name="Administrator";
      $this->type="99";
      $this->login=$login;   
      debug_info("User ".$login." (".$this->name.") logged in.<br/>"); 
    }

    
  }
}


?>