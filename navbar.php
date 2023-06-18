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

  <!-- Carousel start -->

  <!-- <div class="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="asset/img/cover600.jpg" alt="Gambar 1">
            </div>
            <div class="carousel-item">
                <img src="asset/img/cokelat.jpeg" alt="Gambar 2">
            </div>
            <div class="carousel-item">
                <img src="asset/img/OIP.jpeg" alt="Gambar 3">
            </div>
        </div>
        
        <div class="carousel-nav">
            <button id="prevBtn">&#8249;</button>
            <button id="nextBtn">&#8250;</button>
        </div>
    </div>

    <script>
        // Menambahkan fitur pengguliran ke carousel
        let carousel = document.querySelector('.carousel');
        let carouselInner = carousel.querySelector('.carousel-inner');
        let carouselItems = carousel.querySelectorAll('.carousel-item');
        let currentIndex = 0;
        let interval = null;
        let transitionInProgress = false;
        
        function goToSlide(index) {
            if (transitionInProgress || index < 0 || index >= carouselItems.length) {
                return;
            }
            
            carouselInner.style.transform = `translateX(-${index * 500}px)`;
            currentIndex = index;
            
            // Menghapus kelas "active" dari semua item dan menambahkannya ke item saat ini
            carouselItems.forEach((item, idx) => {
                if (idx === currentIndex) {
                    item.classList.add('active');
                } else {
                    item.classList.remove('active');
                }
            });
            
            // Memulai timer untuk menggulir otomatis setiap 3 detik
            clearInterval(interval);
            interval = setInterval(() => {
                goToSlide((currentIndex + 1) % carouselItems.length);
            }, 5000);
        }
        
        // Menggulir ke slide berikutnya saat tombol "Next" diklik
        document.querySelector('#nextBtn').addEventListener('click', () => {
            goToSlide((currentIndex + 1) % carouselItems.length);
        });
        
        // Menggulir ke slide sebelumnya saat tombol "Previous" diklik
        document.querySelector('#prevBtn').addEventListener('click', () => {
            goToSlide((currentIndex - 1 + carouselItems.length) % carouselItems.length);
        });
        
        // Menginisialisasi carousel
        goToSlide(0);
    </script> -->

<!-- carousel end -->
<div class="container-carousel">
        <div class="content-slide">
            <div class="imgslide fade">
                <div class="numberslide">1 / 3</div>
                <img src="asset/img/OPI.jpeg" alt="" class="img-carousel">
                <div class="text">Pemandangan</div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide">2 / 3</div>
                <img src="asset/img/cover600.jpeg" alt="" class="img-carousel">
                <div class="text">Jembatan</div>
            </div>

            <div class="imgslide fade">
                <div class="numberslide">3 / 3</div>
                <img src="asset/img/cokelat.jpeg" alt="" class="img-carousel">
                <div class="text">Jerapah</div>
            </div>

            <a class="prev" onClick="nextslide(-1)">&#10094;</a>
            <a class="next" onClick="nextslide(1)">&#10095;</a> 
        </div>

        <div class="page">
            <span class="dot" onClick="dotslide(1)"></span>
            <span class="dot" onClick="dotslide(2)"></span>
            <span class="dot" onClick="dotslide(3)"></span>
        </div>

    </div>

    <script>
        var slideIndex = 1;
            showSlide(slideIndex);

        function nextslide(n){
            showSlide(slideIndex += n);
        }

        function dotslide(n){
            showSlide(slideIndex = n);
        }

        function showSlide(n) {
            var i;
            var slides = document.getElementsByClassName("imgslide");
            var dot = document.getElementsByClassName("dot");
            
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length;
            }
            for (i = 0; i < slides.length; i++) {
                
                slides[i].style.display = "none";
            }

            for (i = 0; i < slides.length; i++) {
                
                dot[i].className = dot[i].className.replace(" active", "");
            }

            slides[slideIndex - 1].style.display = "block";

            dot[slideIndex - 1].className += " active";
            


        }
    </script>


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