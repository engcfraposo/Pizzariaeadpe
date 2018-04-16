<?php

   require_once '../persistence/dao_nomesobrenome.php';
   
   $objetoDao = new DAONomeSobreNome();
   $objetoDao->removerNomeSobreNome($_REQUEST['codigo']);
 	
	header('Location: ../view/view_nomesobrenome.php');
	exit;
?>