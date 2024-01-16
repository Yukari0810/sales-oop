<?php
session_start();
?>
<nav class="navbar bg-white navbar-dark navbar-expand-lg px-5">
    
  <ul class="navbar-nav">
    <li class="nav-item">
      <a href="../views/dashboard.php" class= "fs-4 text-dark text-decoration-none me-2"><i class="fa-solid fa-house"></i></a>
    </li>
  </ul>

  <ul class="navbar-nav ms-auto">
    <li class="nav-item">
      <p class="fw-bold fs-5 text-secondary">Welcome, <?=$_SESSION['username']?></p>
    </li>
  </ul>
  
  <ul class="navbar-nav ms-auto">
    <li class="nav-item">
      <a href="../actions/logout.php" class="nav-link text-danger"><i class="fa-solid fa-right-from-bracket fs-4"></i></a>
    </li>
  </ul>
  
</nav>
