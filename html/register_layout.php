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
        <p class="text-white mt-4 text-start">Seminárny projekt z predmetu vývoj mobilných aplikácii.<br>Slúži výhradne na edukatívne účely.<br><br><i>© Martin Lonský 2024</i></p>
      </section>
      <section class="col-12 col-md-4">
        <?php if ($registrationSuccess): ?>
          <div class="login-form-container text-center">
            <h2>Registrácia bola úspešná!</h2>
            <p>Váš profil bol úspešne vytvorený.</p>
            <a href="login.php"><button class="btn btn-primary">Prihlásenie</button></a>
          </div>
        <?php else: ?>
          <form class="login-form-container" action="register.php" method="POST">
            <h4 class="text-center font-weight-bold"> Registrácia </h4>
            <?php if (!empty($error)): ?>
              <p class="text-danger text-center"><?php echo $error; ?></p>
            <?php endif; ?>
            <div class="form-group">
              <label for="InputUsername">Prihlasovacie meno</label>
              <input type="text" class="form-control" id="InputUsername" placeholder="Enter username" name="username" required>
            </div>
            <div class="form-group">
              <label for="InputPassword">Heslo</label>
              <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
              <label for="InputConfirmPassword">Potvrdiť heslo</label>
              <input type="password" class="form-control" id="InputConfirmPassword" placeholder="Confirm Password" name="confirm_password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Registrovať</button>
            <div class="form-footer text-center">
              <p> Už máte vytvorený účet? <a href="login.php">Prihlásenie</a></p>
            </div>
          </form>
        <?php endif; ?>
      </section>
    </section>
  </section>
</body>
</html>