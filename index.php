<?php
include 'koneksi.php';

// ambil data
$about = mysqli_query($conn, "SELECT * FROM about LIMIT 1");
$data_about = mysqli_fetch_assoc($about);

$skills = mysqli_query($conn, "SELECT * FROM skills");
$exp = mysqli_query($conn, "SELECT * FROM experience");
$cert = mysqli_query($conn, "SELECT * FROM certificates");
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Loren | Portfolio</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- NAVBAR -->
<header class="navbar">
  <div class="container nav-wrapper">
    <div class="logo">Lawrend</div>
    <nav>
      <ul class="nav-menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Me</a></li>
        <li><a href="#skills">Skills</a></li>
        <li><a href="#certificates">Certificates</a></li>
      </ul>
    </nav>
  </div>
</header>

<!-- HERO -->
<section id="home" class="hero">
  <div class="container hero-content">
    <h1>Hello, I’m Lawrend</h1>
    <p>Information Systems student with a passion for structured systems and efficient solutions.</p>
  </div>
</section>

<!-- ABOUT -->
<section id="about" class="section">
  <div class="container">
    <h2 class="section-title">About Me</h2>

    <div class="row align-items-center gx-5 gy-4">
      <div class="col-12 col-md-4 text-center">
        <img src="img/foto profile.jpeg" class="img-fluid rounded shadow-sm">
      </div>

      <div class="col-12 col-md-8">
        <p><?= $data_about['deskripsi']; ?></p>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills" class="section bg-strawberry">
  <div class="container">
    <h2 class="section-title">Skills</h2>

    <div class="skills-container">
      <?php while($row = mysqli_fetch_assoc($skills)) : ?>
        <div class="skill-item">
          <span><?= $row['nama_skill']; ?></span>
          <div class="progress-bar">
            <div class="progress-fill" style="width: <?= $row['persen']; ?>%"></div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

    <!-- EXPERIENCE -->
    <div class="experience">
      <h3>Experience</h3>
      <ul>
        <?php while($row = mysqli_fetch_assoc($exp)) : ?>
          <li><?= $row['pengalaman']; ?></li>
        <?php endwhile; ?>
      </ul>
    </div>

  </div>
</section>

<!-- CERTIFICATES -->
<section id="certificates" class="section section-soft">
  <div class="container">
    <h2 class="section-title">Certificates</h2>

    <div class="card-grid">
      <?php while($row = mysqli_fetch_assoc($cert)) : ?>
        <div class="card">
          <img src="img/<?= $row['gambar']; ?>" class="card-img-top">
          <div>
            <h3 class="mt-2"><?= $row['judul']; ?></h3>
            <p><?= $row['deskripsi']; ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>

  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <p>© 2026 nerolaeno — Designed with purpose.</p>
</footer>

</body>
</html>