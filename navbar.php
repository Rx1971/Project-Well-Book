<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Mirip Gramedia</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
  <link rel="stylesheet" href="asset/Css/nav.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="asset/img/landing.png" alt="Logo" width="100">
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">

        <form class="form-inline">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link search-categories" href="#">
                <select style="color: black;">
                  <option value="" style="color: black;">Kategori</option>
                  <option value="semua" style="color: black;">Semua</option>
                  <option value="buku" style="color: black;">Buku</option>
                  <option value="majalah" style="color: black;">Majalah</option>
                </select>
              </a>

            </li>
          </ul>
          <input class="form-control mr-sm-2" type="search" placeholder="Cari buku" aria-label="Search">
          <button class="btn btn-primary my-2 my-sm-0" type="submit" style="border: 1px solid black;">Cari</button>
        </form>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-shopping-cart" style="color: #595959;"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fas fa-user" style="color: #595959;"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- header mulai -->
  <div class="card-container">
    <div class="card">
      <h2 class="card-title">Judul Card</h2>
      <form class="search-form">
        <input type="text" placeholder="Cari...">
        <button type="submit">Cari</button>
      </form>
      <div class="links">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
        <a href="#">Link 4</a>
        <a href="#">Link 5</a>
        <a href="#">Link 6</a>
      </div>
    </div>
  </div>
  <!-- header selesai -->

  <!-- apaja dah -->
  <main>
    <section class="hero">
      <div class="container">
        <h1>Selamat Datang Well Book</h1>
        <p>Toko buku terlengkap di Indonesia</p>
        <a href="#" class="btn">Belanja Sekarang</a>
      </div>
    </section>

    <section class="promo">
  <div class="container">
    <h2>Promo Buku</h2>
    <div class="promo-list">
      <div class="promo-item">
        <img src="book1.jpg" alt="Buku 1">
        <h3>Buku 1</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="btn">Beli</a>
      </div>
      <div class="promo-item">
        <img src="book2.jpg" alt="Buku 2">
        <h3>Buku 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="btn">Beli</a>
      </div>
      <div class="promo-item">
        <img src="book3.jpg" alt="Buku 3">
        <h3>Buku 3</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <a href="#" class="btn">Beli</a>
      </div>
    </div>
  </div>
</section>

  </main>

  <footer>
    <div class="container">
      <p>Hak Cipta &copy; 2023 Gramedia</p>
    </div>
  </footer>
  <!-- apaja dah -->

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>