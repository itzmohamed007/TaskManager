<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/65cfe681d2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Dashboard</title>
</head>

<body>
    <div class="container charts rounded-3 mt-lg-5 mt-sm-0 mb-lg-5 mb-sm-0 p-4">
        <div class="top-section d-flex flex-column">
            <div>
                <!-- operations menu -->
                <h1 class="fs-2 text-white mb-0">Team Tasks:</h1>
                <hr class="divider-light mt-1">
                <div class="search-group input-group mb-3 d-flex">
                    <input type="search" class="form-control rounded-right search" placeholder="Search By Title" id="target"/>
                </div>
            </div>
            <div>
                <div class="d-flex justify-content-between mb-5">
                    <a href="addTask"><button class="add-tasks btn rounded-2 text-white mb-3 py-2">Add Task</button></a>
                    <button class="add-tasks btn rounded-2 text-white mb-3"> Add Multiple</button>
                </div>
            </div>
        </div>
        <div class="row justify-content-center gap-5 mb-4">
            <!-- to do section -->
            <?php
            $count = 0;
            if($ToDoTasks){
                $count = count($ToDoTasks);
            }
            echo '
                <div class="col-lg-3 col-md-6 col-sm-8 to-do rounded-3">
                    <h2 class="fs-5 mt-2 text-white">To Do: <span id="ToDoCount">' . $count .'</span></h2>
                    <hr class="marker-to_do rounded-5 mt-0 mb-4">
                ';
                if($ToDoTasks){
                    foreach($ToDoTasks as $tasks){
                        echo '
                        <div class="task py-2 bg-white rounded-3 mb-3">
                            <div class="task-top d-flex justify-content-between">
                                <h3 class="fs-5 fw-normal mx-3" id="ToDoTitle">' . $tasks['title'] . ':</h3>
                                <div class="operations">
                                    <a href="update/'.$tasks['id'].'" class="text-black"><i class="update fa-regular fa-pen-to-square"></i></a>
                                    <a href="delete/'.$tasks['id'].'" class="text-black"><i class="delete fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                            <p class="mx-3 fw-lighter">' . $tasks['description'] . '.</p>
                            <p class="mx-3 fw-lighter"><span class="fw-bold text-danger">DeadLine:</span> ' . $tasks['deadLine'] . '</p>
                        </div>
                        ';
                    };
                }
                echo '</div>';
            ?>
            <!-- doing section -->
            <?php
            $count = 0;
            if($DoingTasks){
                $count = count($DoingTasks);
            }
            echo '
                <div class="col-lg-3 col-md-6 col-sm-8 to-do rounded-3">
                    <h2 class="fs-5 mt-2 text-white">Doing: <span id="DoingCount">' . $count .'</span></h2>
                    <hr class="marker-doing rounded-5 mt-0 mb-4">
                ';
                if($DoingTasks){
                    foreach($DoingTasks as $tasks){
                        echo '
                        <div class="task py-2 bg-white rounded-3 mb-3">
                            <div class="task-top d-flex justify-content-between">
                                <h3 class="fs-5 fw-normal mx-3" id="DoingTitle">' . $tasks['title'] . ':</h3>
                                <div class="operations">
                                    <a href="update/'.$tasks['id'].'" class="text-black"><i class="update fa-regular fa-pen-to-square"></i></a>
                                    <a href="delete/'.$tasks['id'].'" class="text-black"><i class="delete fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                            <p class="mx-3 fw-lighter">' . $tasks['description'] . '.</p>
                            <p class="mx-3 fw-lighter"><span class="fw-bold text-danger">DeadLine:</span> ' . $tasks['deadLine'] . '</p>
                        </div>
                        ';
                    };
                }
                echo '</div>';
            ?>
            <!-- done section -->
            <?php
            $count = 0;
            if($DoneTasks){
                $count = count($DoneTasks);
            }
            echo '
                <div class="col-lg-3 col-md-6 col-sm-8 to-do rounded-3">
                    <h2 class="fs-5 mt-2 text-white">Done: <span id="DoneCount">' . $count .'</span></h2>
                    <hr class="marker-done rounded-5 mt-0 mb-4">
                ';
                if($DoneTasks){
                    foreach($DoneTasks as $tasks){
                        echo '
                        <div class="task py-2 bg-white rounded-3 mb-3">
                            <div class="task-top d-flex justify-content-between">
                                <h3 class="fs-5 fw-normal mx-3" id="DoneTitle">' . $tasks['title'] . ':</h3>
                                <div class="operations">
                                    <a href="update/'.$tasks['id'].'" class="text-black"><i class="update fa-regular fa-pen-to-square"></i></a>
                                    <a href="delete/'.$tasks['id'].'" class="text-black"><i class="delete fa-solid fa-trash"></i></a>
                                </div>
                            </div>
                            <p class="mx-3 fw-lighter">' . $tasks['description'] . '.</p>
                            <p class="mx-3 fw-lighter"><span class="fw-bold text-danger">DeadLine:</span> ' . $tasks['deadLine'] . '</p>
                        </div>
                        ';
                    };
                }
                echo '</div>';
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="../js/main.js"></script>
</body>

</html>