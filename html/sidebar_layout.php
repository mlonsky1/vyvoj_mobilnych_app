<div class="d-flex flex-column flex-shrink-0 bg-dark text-white" style="height: 100vh; width: 100%;">
    <div class="pt-5">
  <a href="index.php?menu=4" class="d-block  text-center">
    <img src="uploads/logo.png" alt="logo" class="img-fluid" style="max-width: 80%; height: auto;">
  </a>
    </div>
  <ul class="nav nav-pills flex-column mb-auto px-4 pt-4">
    <li class="nav-item">
      <a href="index.php?menu=1" class="nav-link text-primary ">
        <i class="bi bi-house me-2"></i>
        <b>Pridať tovar</b>
      </a>
    </li>
    <li class="nav-item">
      <a href="index.php?menu=4" class="nav-link text-primary">
        <i class="bi bi-speedometer2 me-2"></i>
        <b>Zoznam tovaru</b>
      </a>
    </li>
  </ul>
  <div class="mt-auto px-4 pb-5">
    <a href="index.php?menu=2" class="d-flex align-items-center text-white text-decoration-none mb-3">
      <img src="<?php echo htmlspecialchars($profile_image_path); ?>" alt="Profile Image" class="rounded-circle me-2" style="width: 40px; height: 40px;">
      <strong>Profil</strong>
    </a>
    <a href="logout.php" class="d-flex align-items-center text-white text-decoration-none">
      <i class="bi bi-box-arrow-right me-2"></i>
      <strong>Odhlásenie</strong>
    </a>
  </div>
</div>
