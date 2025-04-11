<!-- resources/views/pages/home.blade.php -->
@extends('layouts.main')

@section('title', 'LETI')

@section('content')
<main class="main">
<!-- Hero Section -->
@if(session('success'))
    <div id="success-alert" class="alert-modal">
        <div class="alert-content">
            <p>{{ session('success') }}</p>
            <button class="alert-btn close-success-alert">OK</button>
        </div>
    </div>
@endif

@if(session('error'))
    <div id="error-alert" class="alert-modal">
        <div class="alert-content">
            <p>{{ session('error') }}</p>
            <button class="alert-btn close-error-alert">OK</button>
        </div>
    </div>
@endif

<section id="home" class="hero section dark-background">

  <img src="{{asset('assets/img/hero-bg.jpg')}}" alt="" data-aos="fade-in">

  <div class="container d-flex flex-column align-items-center">
    <h1 data-aos="fade-up" data-aos-delay="100">Погружение в Историю ЛЭТИ: Виртуальный Тур</h1>
    <p data-aos="fade-up" data-aos-delay="200">Добро пожаловать в наш университет, где оживают мечты</p>
    <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
      <a href="{{asset('history')}}" class="btn-get-started">Get Started</a>
      <a href="{{asset('assets/img/VIDEO.mp4')}}" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Watch Video</span></a>
    </div>
  </div>

</section><!-- /Hero Section -->

<!-- About Section -->
<section id="history" class="about section">

  <div class="container">

    <div class="row gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <h3>История ЛЭТИ</h3>
        <img src="{{asset('assets/img/pic_home/anh_121.jpg')}}" class="img-fluid rounded-4 mb-4" alt="">
        <p>Миссия ЛЭТИ заключается в подготовке высококвалифицированных технических специалистов, отвечающих на вызовы глобального технологического развития.</p>
        <p>Университет стремится к продвижению инновационных исследований и международного сотрудничества, поддерживая основные ценности качества образования и академического превосходства.</p>
      </div>
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
        <div class="content ps-0 ps-lg-5">
          
          <ul>
            <li><i class="bi bi-check-circle-fill"></i> <span>ЛЭТИ был основан в 1886 году и является одним из первых технических университетов России.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Создание глобальных партнерств и программ студенческого обмена.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>От электротехнического института ЛЭТИ расширился до многопрофильного центра исследований и обучения.</span></li>
            <li><i class="bi bi-check-circle-fill"></i> <span>Участие в прикладных исследованиях и промышленном сотрудничестве.</span></li>
          </ul>
          <p>
          ЛЭТИ гордится своей богатой историей и значительными достижениями, которые способствуют развитию науки и образования, как в России, так и за её пределами. Университет продолжает вести передовые исследования и готовить высококвалифицированных специалистов для будущего.
          </p>

          <div class="position-relative mt-4">
            <img src="{{asset('assets/img/pic_home/anh_122.jpg')}}" class="img-fluid rounded-4" alt="">
          
          </div>
        </div>
      </div>
    </div>

  </div>

</section><!-- /About Section -->

<!-- Stats Section -->
<section id="stats" class="stats section light-background">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-4">

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="365" data-purecounter-duration="1" class="purecounter"></span>
            <p>days of joy</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end=" 24" data-purecounter-duration="1" class="purecounter"></span>
            <p>hours of happiness</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-headset color-green flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1" class="purecounter"></span>
            <p>minutes of love</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

      <div class="col-lg-3 col-md-6">
        <div class="stats-item d-flex align-items-center w-100 h-100">
          <i class="bi bi-people color-pink flex-shrink-0"></i>
          <div>
            <span data-purecounter-start="0" data-purecounter-end="60" data-purecounter-duration="1" class="purecounter"></span>
            <p>seconds of cherishing life</p>
          </div>
        </div>
      </div><!-- End Stats Item -->

    </div>

  </div>

</section><!-- /Stats Section -->

<!-- Services Section -->
<section id="program" class="services section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Educational programs</h2>
    <p>Образовательные программы<br></p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5">

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
        <div class="service-item">
          <div class="img">
            <img src="{{asset('assets/img/pic_home/anh_132.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-activity"></i>
            </div>
           
              <h3>Бакалавр - Специалист</h3>
            </a>
            <p>Бакалавр: 4 года обучения, базовые технические знания.</p>
            <p>Специалист: 5.5 лет обучения, углубленная профессиональная подготовка.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="service-item">
          <div class="img">
            <img src="{{asset('assets/img/pic_home/anh_133.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-broadcast"></i>
            </div>
      
              <h3>Магистр</h3>
            </a>
            <p>Магистерские программы в ЛЭТИ направлены на развитие продвинутых знаний и исследовательских навыков.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

      <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
        <div class="service-item">
          <div class="img">
            <img src="{{asset('assets/img/pic_home/anh_134.jpg')}}" class="img-fluid" alt="">
          </div>
          <div class="details position-relative">
            <div class="icon">
              <i class="bi bi-easel"></i>
            </div>
           
              <h3>Доктор наук</h3>
            </a>
            <p>Программы аспирантуры в ЛЭТИ предлагают возможность проводить оригинальные исследования и вносить вклад в академическую науку.</p>
          </div>
        </div>
      </div><!-- End Service Item -->

    </div>

  </div>

</section><!-- /Services Section -->





<!-- Testimonials Section -->
<section id="testimonials" class="testimonials section dark-background">

  <img src="{{asset('assets/img/hero-bg.jpg')}}" class="testimonials-bg" alt="">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{asset('assets/img/testimonials/anh1.png')}}" class="testimonial-img" alt="">
            <h3>Александр Степанович Попов</h3>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Считается одним из пионеров в изобретении радиоприёмника. В 1895 году он продемонстрировал устройство для беспроводного обнаружения молний, заложив основу для технологии радио.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{asset('assets/img/testimonials/anh2.png')}}" class="testimonial-img" alt="">
            <h3>Михаил Александрович Бонч-Бруевич</h3>
  
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Специалист в области радиотехники и разработки вакуумных ламп. Построил одну из самых мощных радиостанций в мире в Москве и занимал должность заведующего кафедрой радиотехники в ЛЭТИ.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{asset('assets/img/testimonials/anh3.jpg')}}" class="testimonial-img" alt="">
            <h3>Анатолий Шалыто</h3>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Известен своими работами в области программирования на основе автоматов. Разработал методы и инструменты для программирования реактивных систем.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="{{asset('assets/img/testimonials/anh4.jpg')}}" class="testimonial-img" alt="">
            <h3>Жорес Алфёров</h3>
        
           
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>Физик и учёный, лауреат Нобелевской премии по физике 2000 года за разработку полупроводниковых гетероструктур для оптоэлектроники.</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->

<!-- Portfolio Section -->
<section id="demo" class="portfolio section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Digital Photo Museum</h2>
    <p>Цифровой музей фотографий</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">


      <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_64.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_64.jpg')}}"  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_116.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_116.jpg')}}" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_68.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_68.jpg')}}"  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>

            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_65.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_65.jpg')}}" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>

            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_66.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_66.jpg')}}"  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_74.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_74.jpg')}}"  data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
  
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_69.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_69.jpg')}}"  data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
           
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_76.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">

              <a href="{{asset('assets/img/pic_home/anh_76.jpg')}}"  data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_89.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_89.jpg')}}"  data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_123.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_123.jpg')}}" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_85.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <a href="{{asset('assets/img/pic_home/anh_85.jpg')}}" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
           
            </div>
          </div>
        </div><!-- End Portfolio Item -->

        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
          <div class="portfolio-content h-100">
            <img src="{{asset('assets/img/pic_home/anh_88.jpg')}}" class="img-fluid" alt="">
            <div class="portfolio-info">
          
              <a href="{{asset('assets/img/pic_home/anh_88.jpg')}}" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      
            </div>
          </div>
        </div><!-- End Portfolio Item -->

      </div><!-- End Portfolio Container -->

    </div>

  </div>

</section><!-- /Portfolio Section -->

<!-- Team Section -->
<section id="team" class="team section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p>Наша команда</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-5">

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <div class="pic"><img src="{{asset('assets/img/team/manh.jpg')}}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Pham Manh</h4>
            <span>Programmer</span>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <div class="pic"><img src="{{asset('assets/img/team/duong.jpg')}}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>Tung Duong</h4>
            <span>Designer</span>
          </div>
        </div>
      </div><!-- End Team Member -->

      <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <div class="pic"><img src="{{asset('assets/img/team/duy.jpg')}}" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4>The Duy</h4>
            <span> Content Manager</span>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Team Section -->

<!-- Contact Section -->
<section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p>Контакты</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">
  <!-- Địa chỉ -->
  <div class="col-lg-4 col-md-6">
    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="200">
      <i class="bi bi-geo-alt"></i>
      <h3>Адрес</h3>
      <p>Аптекарский проспект, 11, Санкт-Петербург, Россия, 197022</p>
    </div>
  </div>

  <!-- Số điện thoại -->
  <div class="col-lg-4 col-md-6">
    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="300">
      <i class="bi bi-telephone"></i>
      <h3>Номер телефона</h3>
      <p>+7 (812) 2343553</p>
    </div>
  </div>

  <!-- Email -->
  <div class="col-lg-4 col-md-12">
    <div class="info-item d-flex flex-column justify-content-center align-items-center" data-aos="fade-up" data-aos-delay="400">
      <i class="bi bi-envelope"></i>
      <h3>Электронная почта</h3>
      <p>2343553@mail.ru</p>
    </div>
  </div>
</div>
<style>
  .alert-modal {
    display: none; /* Mặc định ẩn thông báo */
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #f8f9fa;
    border: 1px solid #ccc;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    z-index: 9999; /* Đảm bảo thông báo nằm trên tất cả các phần tử khác */
}

.alert-content {
    text-align: center;
}

.alert-btn {
    background-color: #007bff;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.alert-btn:hover {
    background-color: #0056b3;
}
</style>
<script>
    // Kiểm tra nếu có thông báo thành công hoặc lỗi
    @if(session('success'))
        document.getElementById('success-alert').style.display = 'block';
    @elseif(session('error'))
        document.getElementById('error-alert').style.display = 'block';
    @endif

    // Đóng thông báo khi nhấn "OK"
    document.getElementById('close-alert').addEventListener('click', function() {
        document.getElementById('success-alert').style.display = 'none';
        document.getElementById('error-alert').style.display = 'none';
    });
</script>
</section><!-- /Contact Section -->

</main>
@endsection
