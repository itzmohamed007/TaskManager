<?php
/*
* Tasks class
* Contains all crud operations 
*/
  
class Task {  
    // reading function
    public function selectTasks($taskType, $id_client){
        $object = new Database;
        $connection = $object->connection();

        $stmt = $connection->prepare("SELECT * FROM `task` WHERE `status` = ? AND `id_client` = ? ORDER BY `deadLine`");
        $stmt->bind_param('si', $taskType, $id_client);
        $stmt->execute();
        $result = $stmt->get_result();
        $tasks = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();

        if(!empty($tasks)) {
          return $tasks;
        } else {
          return false;
        }
    }

    public function selectTask($id_task, $id_client){
      $object = new Database;
      $connection = $object->connection();

      $stmt = $connection->prepare("SELECT * FROM `task` WHERE `id` = ? AND `id_client` = ?");
      $stmt->bind_param('ii', $id_task, $id_client);
      $stmt->execute();
      $result = $stmt->get_result();
      $task = $result->fetch_all(MYSQLI_ASSOC);
      $stmt->close();

      if(empty($task)){
        return false;
      } else {
        return $task;
      }
    }
  

    // adding function
    public function create($id_client, $title, $description, $status, $deadLine){
        $object = new Database;
        $connection = $object->connection();

        $stmt = $connection->prepare("INSERT INTO `task`(`id_client`, `title`, `description`, `status`, `deadLine`) VALUES ( ?, ?, ?, ?, ?)");

        // binding parameters
        $stmt->bind_param('issss', $id_client, $title, $description, $status, $deadLine);
        $result = $stmt->execute();
        $stmt->close();

        return $result;
    }

    // adding multiple tasks
    public function addTasks($id_user, $count, $title, $description, $status, $deadLine){
      $object = new Database;
      $connection = $object->connection();
  
      $stmt = $connection->prepare("INSERT INTO task(`id_client`, `title`, `description`, `status`, `deadLine`) VALUES ( ?, ?, ?, ?, ?)");
      for($i = 0; $i < $count; $i++){
        $stmt->bind_param('issss', $id_user, $title[$i], $description[$i], $status[$i], $deadLine[$i]);
        $result = $stmt->execute();
      }
      $stmt->close();

      return $result;
    }

  // updating function
  public function update($id_task, $title, $description, $status, $deadLine){

    $object = new Database;
    $connection = $object->connection();

    $stmt = $connection->prepare("UPDATE task SET `title` = ?, `description` = ?, `status` = ?, `deadLine` = ? WHERE `id` = ?");
    $stmt->bind_param('ssssi', $title, $description, $status, $deadLine, $id_task);
    $result = $stmt->execute();
    $stmt->close();

    return $result;
  }

  // deleting function
  public function delete($id){
    $object = new Database;
    $connection = $object->connection();

    $stmt = $connection->prepare("DELETE FROM task WHERE id = ?");
    $stmt->bind_param('i', $id);
    $result = $stmt->execute();

    return $result;
  }
}