<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../style/main.css">
</head>
<body>
    <div class="row h-100">
        <div class="col-4"></div>
        <div class="col-4 my-auto">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <form action="authenticate.php" method="post" class="form-group">
                        <input type="username" name="username" class="form-control" placeholder="Gebruikersnaam">
                        <input type="password" name="password" class="form-control mt-2" placeholder="Wachtwoord">
                        <button type="submit" value="Login" class="btn submitbtn mt-2" style="float:right">Login</button> 
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4">
            <img src="../assets/logo.jpg" class="logo">
        </div>
    </div>
</body>
</html>