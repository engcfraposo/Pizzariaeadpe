<?php
   require_once '../persistence/dao_nomesobrenome.php';
   
   $objeto = new NomeSobreNome();
   $objeto->setNome($_REQUEST['nome']);
   $objeto->setSobreNome($_REQUEST['sobrenome']);
   
   $dao = new DAONomeSobreNome();
   $dao->cadastrarNomeSobreNome($objeto); 
 	
	header('Location: ../view/view_nomesobrenome.php');
	exit;
?>