<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyApp | Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
</head>

<body class="bg-dark">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-5">
                <div class="card o-hidden border-1 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-1g">
                                <div class="p-5">
                                    <div class="text-center mb-4">
                                        <h4>Welcome to MyApp</h4>
                                    </div>
                                    <form action="config.php" method="post">
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="fas fa-user"></i></span>
                                            <input type="text" class=" form-control" placeholder="Username"
                                                aria-label="Username" aria-describedby="basic-addon1" name="username">
                                        </div>
                                        <div class="input-group mb-3">
                                            <span class="input-group-text" id="basic-addon1"><i
                                                    class="fas fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password"
                                                aria-label="Password" aria-describedby="basic-addon1" name="password">
                                        </div>
                                        <div class="input-group mb-3">
                                            <input type="submit" class="btn btn-primary form-control" name="login"
                                                value="Login">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>