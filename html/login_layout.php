<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </head>
    <body class="login-body">
        <section class="container-fluid">
            <section class="row vh-100 justify-content-center align-items-center">
                <section class="col-12 col-md-6 text-start d-flex flex-column align-items-center">
                    <img src="uploads/logo.png" alt="Logo" class="logo">
                    <p class="text-white mt-4 text-start">Seminárny projekt z predmetu vývoj mobilných aplikácii.<br> Slúži výhradne na edukatívne účely.<br><br><i>© Martin Lonský 2024</i></p>
                </section>
                <section class="col-12 col-md-4">
                    <form class="login-form-container" action="login.php" method="POST">
                        <h4 class="text-center font-weight-bold"> Prihlásenie </h4>
                        <div class="form-group">
                            <label for="Inputuser1">Prihlasovacie meno</label>
                            <input type="text" class="form-control" id="Inputuser1" aria-describedby="usernameHelp" placeholder="Enter username" name="username">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1">Heslo</label>
                            <input type="password" class="form-control" id="InputPassword1" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Prihlásiť</button>
                        <div class="form-footer text-center">
                            <p> Nemáte vytvorený účet? <a href="register.php">Registrovať sa</a></p>
                        </div>
                    </form>
                </section>
            </section>
        </section>
    </body>
</html>
