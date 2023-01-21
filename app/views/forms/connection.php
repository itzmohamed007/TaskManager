<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Connection</title>
</head>
<body class="mainBody">
    <!-- authentification -->
    <section class="connection-section">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8 col-xl-6 text-center">
                <h2 class="mt-5 text-white mb-5">Connectez-vous:</h2>
                <!-- <hr class="divider-light mb-5 rounded-5"/> -->
            </div>
        </div>
            <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                <div class="col-lg-6">
                    <form action="#" method="post">
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-4" type="email" name="email" placeholder="name@example.com"/>
                            <label for="email">adresse email</label>
                        </div>
                        <!-- Password input-->
                        <div class="form-floating mb-3">
                            <input class="form-control rounded-4 py-3" type="password" name="password" placeholder="mot de pass"/>
                            <label for="phone">mot de pass</label>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid">
                            <button class="submit-button btn btn-primary rounded-4 btn-xl py-3 mb-5" name="submit" type="submit">Se Connecter</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>