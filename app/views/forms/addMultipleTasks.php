<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Add Task</title>
</head>
<body class="mainBody">
    <!-- Adding -->
    <section class="authentification-section">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 align-items-center justify-content-center">
            <div class="head col-lg-8 col-xl-6 justify-content-center">
                <h2 class="mt-3 text-white text-center mt-5 mb-5">Ajouter une tâche:</h2>
            </div>
        </div>
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="adding-task col-lg-6 rounded-4 p-4">
                    <form action="#" method="post">
                        <!-- Name1 input-->
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-4" type="text" name="title1" placeholder="titre"/>
                            <label for="name">titre</label>
                        </div>
                        <!-- description1 input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control rounded-4" placeholder="description1" name="description${i}"></textarea>
                            <label for="floatingTextarea">description</label>
                        </div>
                        <!-- DeadLine1 input-->
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-4" type="date" name="deadLine1" placeholder="DeadLine"/>
                            <label for="phone">Dead line</label>
                        </div>
                        <hr class="divider-light w-100 mb-5 mt-3"/>
                        <!-- Name2 input-->
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-4" type="text" name="title2" placeholder="titre"/>
                            <label for="name">titre</label>
                        </div>
                        <!-- description2 address input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control rounded-4" placeholder="description2" name="description${i}"></textarea>
                            <label for="floatingTextarea">description</label>
                        </div>
                        <!-- DeadLine2 input-->
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-4" type="date" name="deadLine2" placeholder="DeadLine"/>
                            <label for="phone">Dead line</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button class="add-task-button btn rounded-4 btn-xl py-3" name="submit" type="envoyer">Ajouter</button>
                        </div>
                    </form>
                    <div>
                        <!-- Return Button-->
                        <div class="d-grid pt-3">
                            <a href="#"><button class="add-task-return btn btn-primary rounded-4 btn-xl py-3 text-white w-100" type="submit">Revenir</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="../js/main.js"></script>
</body>
</html>