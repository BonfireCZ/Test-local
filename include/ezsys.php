<?php 

//ezsys v.0.1

require_once("init.php");       // inicializacni skript
require_once("functions.php");  // definice funkci
require_once("config.php");     // uzivatelske nastaveni
require_once("sql.php");        // pripojeni k databazi

require_once("user.php");       // trida uzivatelu
//require_once("page.php");       // trida stranek


class EZsys()
{ var $user;
  var $page;
  
  function EZsys {
  $this->user = new User();   //vytvoreni uzivatele
  $this->page = new Page();   //nacteni stranky
  }
  

}




?>