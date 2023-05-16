<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <div class="logo-holder">
                    <div class="bg"></div>
                    <div class="bar"></div>
                    <div class="bar fill1"></div>
                    <div class="bar fill2"></div>
                    <div class="bar fill3"></div>
                    <div class="bar fill4"></div>
                    <div class="bar fill1"></div>
                    <div class="bar fill5"></div>
                    <div class="bar fill6"></div>
                    <div class="bar"></div>
                </div>
            </div>
            <div class="col-sm-2 position-absolute top-50 start-50 translate-middle">
                <form action="./db/ClassPoo.php" method="post" class="">
                    <div class="row">
                        <h1 class="py-5">Login</h1>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <button type="submit" name="submit_login" class="btn btn-danger position-absolute start-50 translate-middle-x">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
