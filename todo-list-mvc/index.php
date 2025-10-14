<?php 


require_once __DIR__ .'/app/controllers/tarefaController.php';

$conttrollers = new tarefaController();
$action =$_GET['action']?? 'index';
switch ($action) {
    case 'criar':
       $conttroller->criar();
    
        break;
    case 'excluir':
      $conttroller->excluir();
        break;
    default:
       $conttroller->index();
        break;
}

?>