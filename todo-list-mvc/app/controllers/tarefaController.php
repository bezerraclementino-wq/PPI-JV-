<?php 
require_once __DIR__ .'/../model/tarefa.php';
class  tarefaController{
private function __construct(){
 $this->tarefaModel= new Tarefa();


}
## Criar 
public function criar (){
if (isset($_POST['descricao']) && !empty(trim($_POST['descricao']))) ;{
 $this->tarefaModel->criar($_POST['descricao']);

}
    header("location: index.php");
}
## Excluir
public function excluir (){

    if (isset($_GET['delte'])) {
        $this->tarefaModel->excluir($_GET['delete']);
    }
    header('Location: index.php');
} 

}






?>