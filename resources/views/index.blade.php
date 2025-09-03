<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Budaya Nusantara</title>
  <style>
    /* ===== RESET ===== */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Poppins", sans-serif;
    }

    body {
      background: #fff;
      color: #222;
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    img {
      max-width: 100%;
      border-radius: 12px;
    }

    /* ===== NAVBAR ===== */
    header {
      width: 100%;
      background: #f8f9f6;
      padding: 1rem 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    header .logo {
      font-size: 1.5rem;
      font-weight: 700;
      color: #222;
    }

    nav ul {
      display: flex;
      list-style: none;
      gap: 2rem;
    }

    nav ul li a {
      font-weight: 500;
      transition: 0.3s;
    }

    nav ul li a:hover,
    nav ul li a.active {
      color: #939D60;
      border-bottom: 2px solid #939D60;
      padding-bottom: 3px;
    }

    .btn-login {
      padding: 0.5rem 1.2rem;
      background: #939D60;
      color: #fff;
      border-radius: 25px;
      font-weight: 500;
      transition: 0.3s;
    }

    .btn-login:hover {
      background: #7d864d;
    }

    /* ===== HERO ===== */
    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 3rem 5%;
      gap: 2rem;
    }

    .hero-text {
      flex: 1;
    }

    .hero-text h1 {
      font-size: 2.2rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }

    .hero-text p {
      font-size: 1rem;
      color: #555;
    }

    .hero img {
      flex: 1;
      max-width: 350px;
    }

    /* ===== SECTION ===== */
    section {
      padding: 3rem 5%;
    }

    section h2 {
      font-size: 1.8rem;
      margin-bottom: 2rem;
      text-align: center;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .card {
      background: #f5f9e2;
      border-radius: 12px;
      padding: 1rem;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      transition: 0.3s;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card h3 {
      margin: 0.8rem 0;
      font-size: 1.1rem;
      font-weight: 600;
    }

    .card p {
      font-size: 0.9rem;
      color: #555;
    }

    .card a {
      display: inline-block;
      margin-top: 0.8rem;
      font-size: 0.9rem;
      font-weight: 500;
      color: #939D60;
    }

    /* ===== ARTIKEL ===== */
    .artikel {
      display: grid;
      grid-template-columns: 2fr 1fr;
      gap: 2rem;
    }

    .artikel .main-article img {
      border-radius: 12px;
      margin-bottom: 1rem;
    }

    .artikel .main-article h3 {
      font-size: 1.2rem;
      margin-bottom: 0.5rem;
    }

    .artikel .side-articles article {
      margin-bottom: 1.5rem;
    }

    .artikel .side-articles h4 {
      font-size: 1rem;
      margin-bottom: 0.3rem;
    }

    .btn-more {
      display: block;
      text-align: center;
      margin: 2rem auto 0;
      width: max-content;
      padding: 0.7rem 1.5rem;
      border-radius: 25px;
      background: #939D60;
      color: #fff;
      font-weight: 500;
      transition: 0.3s;
    }

    .btn-more:hover {
      background: #7d864d;
    }

    /* ===== FOOTER ===== */
    footer {
      background: #939D60;
      color: #fff;
      text-align: center;
      padding: 1.5rem;
      margin-top: 3rem;
    }
  </style>
</head>
<body>

  <!-- ===== NAVBAR ===== -->
  <header>
    <div class="logo">NUSAYA</div>
    <nav>
      <ul>
        <li><a href="#" class="active">Beranda</a></li>
        <li><a href="#">Explore</a></li>
        <li><a href="#">Budaya</a></li>
        <li><a href="#">About</a></li>
      </ul>
    </nav>
    <a href="#" class="btn-login">Login</a>
  </header>

  <!-- ===== HERO ===== -->
  <section class="hero">
    <div class="hero-text">
      <h1>Explore Budaya Nusantara</h1>
      <p>Temukan ragam kebudayaan nusantara, cita rasa kuliner, event budaya seru, artikel inspiratif, hingga pustaka warisan bangsa.</p>
    </div>
    <img src="garuda.png" alt="Budaya Nusantara">
  </section>

  <!-- ===== KEINDAHAN & WARISAN ===== -->
  <section>
    <h2>Menjelajahi Keindahan dan Kekayaan Warisan Indonesia</h2>
    <div class="cards">
      <div class="card">
        <h3>Ragam Budaya Nusantara</h3>
        <a href="#">Pelajari Lebih →</a>
      </div>
      <div class="card">
        <h3>Tradisi & Upacara Adat</h3>
        <a href="#">Pelajari Lebih →</a>
      </div>
      <div class="card">
        <h3>Bahasa & Aksara Daerah</h3>
        <a href="#">Pelajari Lebih →</a>
      </div>
      <div class="card">
        <img src="tari.jpg" alt="Tari Puspanjali">
        <h3>Tari Puspanjali - Bali</h3>
        <a href="#">Tari Tradisional</a>
      </div>
      <div class="card">
        <img src="candi.jpg" alt="Candi Prambanan">
        <h3>Candi Prambanan - Yogyakarta</h3>
        <a href="#">Peninggalan Budaya</a>
      </div>
    </div>
  </section>

  <!-- ===== KULINER ===== -->
  <section>
    <h2>Kuliner Nusantara</h2>
    <div class="cards">
      <div class="card">
        <img src="makanan.jpg" alt="">
        <h3>Makanan Khas Nusantara</h3>
        <a href="#">Pelajari Lebih →</a>
      </div>
      <div class="card">
        <img src="jajanan.jpg" alt="">
        <h3>Jajanan Tradisional</h3>
        <a href="#">Pelajari Lebih →</a>
      </div>
      <div class="card">
        <img src="minuman.jpg" alt="">
        <h3>Minuman</h3>
        <a href="#">Pelajari Lebih →</a>
      </div>
    </div>
  </section>

  <!-- ===== ARTIKEL ===== -->
  <section>
    <h2>Ragam Artikel Budaya Nusantara</h2>
    <div class="artikel">
      <div class="main-article">
        <img src="batik.jpg" alt="">
        <h3>Batik Pekalongan: Filosofi Warna dan Motif Pesisir</h3>
        <p>Batik Pekalongan dikenal dengan motif cerah bernuansa laut...</p>
        <a href="#">Baca Selengkapnya →</a>
      </div>
      <div class="side-articles">
        <article>
          <h4>Rumah Gadang: Arsitektur Megah Minangkabau</h4>
          <a href="#">Baca Selengkapnya →</a>
        </article>
        <article>
          <h4>Rendang: Hidangan Ikonik yang Mendunia</h4>
          <a href="#">Baca Selengkapnya →</a>
        </article>
        <article>
          <h4>Festival Danau Toba</h4>
          <a href="#">Baca Selengkapnya →</a>
        </article>
      </div>
    </div>
    <a href="#" class="btn-more">Baca Artikel Lainnya →</a>
  </section>

  <!-- ===== PUSTAKA ===== -->
  <section>
    <h2>Pustaka Nusantara</h2>
    <div class="cards">
      <div class="card">
        <img src="timun-mas.jpg" alt="">
        <h3>Timun Mas</h3>
        <a href="#">Baca Selengkapnya →</a>
      </div>
      <div class="card">
        <img src="aksara.jpg" alt="">
        <h3>Aksara Jawa (Hanacaraka)</h3>
        <a href="#">Baca Selengkapnya →</a>
      </div>
      <div class="card">
        <img src="danau-toba.jpg" alt="">
        <h3>Legenda Danau Toba</h3>
        <a href="#">Baca Selengkapnya →</a>
      </div>
    </div>
    <a href="#" class="btn-more">Baca Pustaka Lainnya →</a>
  </section>

  <!-- ===== FOOTER ===== -->
  <footer>
    <p>© 2025 NUSAYA - Explore Budaya Nusantara</p>
  </footer>

</body>
</html>
