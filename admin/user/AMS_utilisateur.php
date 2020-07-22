<?php 
session_start();
if($_SESSION['login_user']==null){

 header('location:../../tamplate.php');
 
}
require_once('../../config.php');

function ajouter_utilisateur(){


 echo $_SESSION['login_user'];


}
ajouter_utilisateur();

?>