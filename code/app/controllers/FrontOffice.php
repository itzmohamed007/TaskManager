<?php
class FrontOffice extends Controller {
    // Home page
    public function home(){
        if(empty($_SESSION['client'])){
            header('location: authentification');
        }

        $id_client = $_SESSION['client'];

        $object = $this->model('Task');
        $ToDoTasks = $object->selectTasks('to-do', $id_client);
        $DoingTasks = $object->selectTasks('doing', $id_client);
        $DoneTasks = $object->selectTasks('done', $id_client);

        if(isset($_POST['search'])){
            $target = $_POST['target'];
            
        }
        
        $this->view('pages/home', $ToDoTasks, $DoingTasks, $DoneTasks);
    }

    // Authentification form
    public function authentification(){
        $this->view('forms/authentification');

        if(isset($_POST['submit'])){
            $Uname = $_POST["name"];
            $Uemail = $_POST["email"];
            $Ucompany = $_POST["company"];
            $Uphone = $_POST["phone"];
            $Upass = $_POST["password"];

            // hashing password
            $Upass = password_hash($Upass, PASSWORD_DEFAULT);

            $object = $this->model('Client');
            $querry = $object->signUp($Uname, $Uemail, $Ucompany, $Uphone, $Upass);

            if($querry == true){
                header('location: connection');
            } else {
                die ('authentification failed');
            }
        }
    }

    // Connection form
    public function connection(){
        $this->view('forms/connection');
        
        if(isset($_POST['submit'])){
            $Uemail = $_POST['email'];
            $Upass = $_POST['password'];
            
            $object = $this->model('Client');
            $clientData = $object->signIn($Uemail);
            $storedPassword = $clientData['password'];
            
            if(password_verify($Upass, $storedPassword)){
                $_SESSION["client"] = $clientData['id'];
                header('location: home');
            } else {
                die ('connection failed');
            }
        }
    }
    
    // LogOut function
    public function logOut(){
        session_destroy();
        header("location: ../");
    }

    // Adding tasks form
    public function addTask(){
        $this->view('forms/addTask');

        if(isset($_POST['submit'])){
            $title = ucwords($_POST['title']);
            $description = $_POST['description'];
            $status = 'To-do';
            $deadLine = $_POST['deadLine'];
            $id_client = $_SESSION['client'];

            $object = $this->model('Task');
            $result = $object->create($id_client, $title, $description, $status, $deadLine);

            if($result){
                header('location: home');
            } else {
                die('adding task failed');
            }
        }
    }

    // adding multipla tasks
    public function addTasks(){
        if(isset($_POST['submit'])){
            $count = $_POST['number'];

            if($count == ""){
                header('location: addTasks');
            }

            $id_user = $_SESSION['client'];

            $title = [];
            $description = [];
            $status = [];
            $deadLine = [];

            for($i = 0; $i < $count; $i++){
                $title[$i] = $_POST["title$i"];
                $description[$i] = $_POST["description$i"];
                $status[$i] = 'To-do';
                $deadLine[$i] = $_POST["deadLine$i"];
            }

            $object = $this->model('Task');
            
            $result = $object->addTasks($id_user, $count, $title, $description, $status, $deadLine);

            if($result){
                header('location: home');
            } else {
                die('an error occured while sending data to database'); 
            }
        }

        $this->view('forms/addMultipleTasks');
    }

    // Deleting tasks functions
    public function delete($taskId){
        $object = $this->model('Task');
        $result = $object->delete($taskId);

        if($result){
            header('location: ../home');
        } else {
            die('operation failed');
        }
    }   

    // Updating tasks 
    public function update($id_task){
        $id_client = $_SESSION['client'];

        $object = $this->model('Task');
        $task = $object->selectTask($id_task, $id_client);

        if(isset($_POST['submit'])){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $status = $_POST['status'];
            $deadLine = $_POST['deadLine'];

            $object = $this->model('Task');
            $result = $object->update($id_task, $title, $description, $status, $deadLine);

            if($result){
                header('location: ../home');
            } else {
                die('adding task failed');
            }
        }

        $this->view('forms/update', $task);
    }
}