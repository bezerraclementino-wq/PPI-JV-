<?php 


require_once __DIR__ .'/app/controllers/tarefaController.php';

$controllers = new tarefaController();
$action =$_GET['action']?? 'index';
switch ($action) {
    case 'criar':
       $controllers->criar();
    
        break;
    case 'excluir':
      $controllers->excluir();
        break;
    default:
       $controllers->index();
        break;
}

?>