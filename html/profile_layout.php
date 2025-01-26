<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" >
</head>
<body>
    <div class="col-10" align="center">
        <div class="col-4">
            <div class="form-container">
                <div>
                    <img src="<?php echo htmlspecialchars($profileImage); ?>" style="border: 5px solid black; border-radius:50%; margin-bottom:20px" height="100px" alt="Profile Image">
                </div>
                <div class="mb-3">
                    <form action="update_profile.php" method="post" enctype="multipart/form-data">
                        <label for="username" class="form-label">Prihlasovacie meno</label>
                        <input type="text" name="username" id="username" class="form-input" value="<?php echo htmlspecialchars($username); ?>" required>
                        <label for="profile_picture" class="form-label">Zmeniť profilovú fotku</label>
                        <input type="file" name="profile_picture" id="profile_picture" class="form-input">
                        <input type="submit" value="Aktualizovať Profil" class="form-submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>