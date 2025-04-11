<!-- resources/views/pages/home.blade.php -->
@extends('layouts.main')

@section('title', 'Museum')

@section('content')
<main class="main">
<!-- Hero Section -->
@if(!session('user_name'))
     <script>window.location.href = '{{ url('/login') }}';</script>
     @endif

    
  <main class="main">
    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>Lens of Time</h2>
  <p>Объектив времени</p>
</div><!-- End Section Title -->

<div class="container">

  <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
      <li data-filter="*" class="filter-active">Все </li>
      <li data-filter=".filter-hero"> Выдающиеся личности</li>
      <li data-filter=".filter-establish">История основания</li>
      <li data-filter=".filter-war">ЛЭТИ во Второй мировой войне </li>
      <li data-filter=".filter-develop">Развитие после войны</li>
      <li data-filter=".filter-modern">Современная эпоха </li>
    </ul><!-- End Portfolio Filters -->

    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_1.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_1.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%9A%D1%80%D0%B0%D0%BA%D0%B0%D1%83,_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_2.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_2.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%A5%D0%B2%D0%BE%D0%BB%D1%8C%D1%81%D0%BE%D0%BD,_%D0%9E%D1%80%D0%B5%D1%81%D1%82_%D0%94%D0%B0%D0%BD%D0%B8%D0%BB%D0%BE%D0%B2%D0%B8%D1%87#:~:text=%D0%9E%D1%80%D0%B5%CC%81%D1%81%D1%82%20%D0%94%D0%B0%D0%BD%D0%B8%CC%81%D0%BB%D0%BE%D0%B2%D0%B8%D1%87%20%D0%A5%D0%B2%D0%BE%CC%81%D0%BB%D1%8C%D1%81%D0%BE%D0%BD%20(%2022%20%D0%BD%D0%BE%D1%8F%D0%B1%D1%80%D1%8F,%D1%81%201925%20%E2%80%94%20%D0%90%D0%9D%20%D0%A1%D0%A1%D0%A1%D0%A0). " title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_3.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_3.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://uk.wikipedia.org/wiki/%D0%91%D0%BE%D1%80%D0%B3%D0%BC%D0%B0%D0%BD_%D0%86%D0%B2%D0%B0%D0%BD_%D0%86%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_4.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_4.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%9F%D1%83%D1%88%D0%B8%D0%BD,_%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B9_%D0%90%D0%BD%D1%82%D0%BE%D0%BD%D0%BE%D0%B2%D0%B8%D1%87#:~:text=%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B9%20%D0%90%D0%BD%D1%82%D0%BE%D0%BD%D0%BE%D0%B2%D0%B8%D1%87%20%D0%9F%D1%83%D1%88%D0%B8%D0%BD%20(%207%20%D1%84%D0%B5%D0%B2%D1%80%D0%B0%D0%BB%D1%8F,%D1%81%D0%BF%D0%BE%D1%81%D0%BE%D0%B1%D0%BE%D0%BC%20%D0%B0%D0%BB%D1%8E%D0%BC%D0%B8%D0%BD%D0%B8%D0%B9%20%D0%B8%D0%B7%20%D1%80%D1%83%D1%81%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%20%D1%81%D1%8B%D1%80%D1%8C%D1%8F." title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_5.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_5.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%BE%D1%80%D0%BE%D0%BD%D0%BE%D0%B2,_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2%D0%B8%D1%87_(%D1%84%D0%B8%D0%B7%D0%B8%D0%BA)" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_6.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_6.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%B5%D1%82%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9,_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B5%D0%B9_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B5%D0%B5%D0%B2%D0%B8%D1%87#:~:text=%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B5%D0%B9%20%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B5%D0%B5%D0%B2%D0%B8%D1%87%20%D0%9F%D0%B5%D1%82%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9%20(%202%20%5B14,%D0%B3%D0%B5%D0%BE%D1%84%D0%B8%D0%B7%D0%B8%D0%BA%D0%B8%2C%20%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D1%84%D0%B8%D0%B7%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D1%85%20%D0%BC%D0%B5%D1%82%D0%BE%D0%B4%D0%BE%D0%B2%20%D0%B3%D0%B5%D0%BE%D0%BB%D0%BE%D0%B3%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B9%20%D1%80%D0%B0%D0%B7%D0%B2%D0%B5%D0%B4%D0%BA%D0%B8." title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_7.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_7.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%A4%D1%80%D0%B5%D0%B9%D0%BC%D0%B0%D0%BD,_%D0%98%D0%BC%D0%B0%D0%BD%D1%82_%D0%93%D0%B5%D0%BE%D1%80%D0%B3%D0%B8%D0%B5%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_8.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_8.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%BA%D1%80%D0%B8%D1%86%D0%BA%D0%B8%D0%B9,_%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B9_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_9.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_9.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/muzej/vydayushhiesya-uchenye/holuyanov-fedor-ivanovich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_10.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_10.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/universitet/novosti-i-obyavleniya/a-f-shorin-sozdatel-zvukovogo-kino" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_11.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_11.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%9C%D0%BE%D0%BC%D0%BE%D1%82,_%D0%95%D0%B2%D0%B3%D0%B5%D0%BD%D0%B8%D0%B9_%D0%93%D1%80%D0%B8%D0%B3%D0%BE%D1%80%D1%8C%D0%B5%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_12.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_12.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_13.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_13.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/assets/files/ru/endaument/kolybel%20ehlektrotekhniki/pisarevskij-nikolaj-grigorevich.pdf" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_14.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_14.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%94%D0%BC%D0%B8%D1%82%D1%80%D0%B8%D0%B5%D0%B2,_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B8%D1%87_(%D1%8D%D0%BB%D0%B5%D0%BA%D1%82%D1%80%D0%BE%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA)#:~:text=%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80%20%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B8%D1%87%20%D0%94%D0%BC%D0%B8%D1%82%D1%80%D0%B8%D0%B5%D0%B2%20(1873%E2%80%941946,%D0%BD%D0%B0%D1%83%D0%BA%D0%B8%20%D0%B8%20%D1%82%D0%B5%D1%85%D0%BD%D0%B8%D0%BA%D0%B8%20%D0%A0%D0%A1%D0%A4%D0%A1%D0%A0%2C%20%D0%BF%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%81%D0%BE%D1%80." title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_15.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_15.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_16.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_16.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%BE%D0%B9%D0%BD%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9,_%D0%9F%D0%B0%D0%B2%D0%B5%D0%BB_%D0%94%D0%BC%D0%B8%D1%82%D1%80%D0%B8%D0%B5%D0%B2%D0%B8%D1%87#:~:text=%D0%9F%D0%B0%D0%B2%D0%B5%D0%BB%20%D0%94%D0%BC%D0%B8%D1%82%D1%80%D0%B8%D0%B5%D0%B2%D0%B8%D1%87%20%D0%92%D0%BE%D0%B9%D0%BD%D0%B0%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%B8%D0%B9%20(%203%20%5B15,%D0%BF%D0%BE%20%D0%B2%D0%BE%D0%B7%D0%B4%D1%83%D1%88%D0%BD%D1%8B%D0%BC%20%D0%B8%20%D0%BA%D0%B0%D0%B1%D0%B5%D0%BB%D1%8C%D0%BD%D1%8B%D0%BC%20%D0%BB%D0%B8%D0%BD%D0%B8%D1%8F%D0%BC%2C" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_17.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_17.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%9F%D0%BE%D0%BF%D0%BE%D0%B2,_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80_%D0%A1%D1%82%D0%B5%D0%BF%D0%B0%D0%BD%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_18.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_18.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%9A%D0%BE%D0%B7%D1%8B%D1%80%D0%B5%D0%B2,_%D0%91%D0%BE%D1%80%D0%B8%D1%81_%D0%9F%D0%B0%D0%B2%D0%BB%D0%BE%D0%B2%D0%B8%D1%87#:~:text=%D0%91%D0%BE%D1%80%D0%B8%D1%81%20%D0%9F%D0%B0%D0%B2%D0%BB%D0%BE%D0%B2%D0%B8%D1%87%20%D0%9A%D0%BE%D0%B7%D1%8B%D1%80%D0%B5%D0%B2%20(01.08.1895,%D0%BB%D0%B0%D1%83%D1%80%D0%B5%D0%B0%D1%82%20%D0%A1%D1%82%D0%B0%D0%BB%D0%B8%D0%BD%D1%81%D0%BA%D0%BE%D0%B9%20%D0%BF%D1%80%D0%B5%D0%BC%D0%B8%D0%B8%20(1950).&text=%D0%A0%D0%BE%D0%B4%D0%B8%D0%BB%D1%81%D1%8F%2001.08.1895%20%D0%B2%20%D0%A1%D0%B0%D0%BD%D0%BA%D1%82,%D0%B8%20%D0%B4%D0%BE%20%D1%8F%D0%BD%D0%B2%D0%B0%D1%80%D1%8F%201921%20%D0%B3." title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_19.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_19.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->


      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_21.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_21.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/muzej/muzej-istorii/rektory" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_22.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_22.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/muzej/vydayushhiesya-uchenye/shhurkevich-pantelejmon-antonovich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_23.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_23.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/muzej/vydayushhiesya-uchenye/glagolev-mitrofan-mihajlovich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_24.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_24.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%9E%D1%81%D0%B0%D0%B4%D1%87%D0%B8%D0%B9,_%D0%9F%D1%91%D1%82%D1%80_%D0%A1%D0%B5%D0%BC%D1%91%D0%BD%D0%BE%D0%B2%D0%B8%D1%87#:~:text=%D0%9F%D1%91%D1%82%D1%80%20%D0%A1%D0%B5%D0%BC%D1%91%D0%BD%D0%BE%D0%B2%D0%B8%D1%87%20%D0%9E%D1%81%D0%B0%CC%81%D0%B4%D1%87%D0%B8%D0%B9%20(%2022%20%D1%84%D0%B5%D0%B2%D1%80%D0%B0%D0%BB%D1%8F,%D0%9F%D1%80%D0%BE%D1%84%D0%B5%D1%81%D1%81%D0%BE%D1%80%2C%20%D1%80%D0%B5%D0%BA%D1%82%D0%BE%D1%80%20%D0%9B%D0%AD%D0%A2%D0%98." title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_25.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_25.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%93%D1%80%D0%B0%D1%84%D1%82%D0%B8%D0%BE,_%D0%93%D0%B5%D0%BD%D1%80%D0%B8%D1%85_%D0%9E%D1%81%D0%B8%D0%BF%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_26.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_26.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/fakultety/fakultet-radiotehniki-i-telekommunikaciy/obshaya-informaciya/vklad-v-radiotehniku/gurov-vladimir-alekseevich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_27.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_27.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%A1%D0%B2%D0%B8%D1%80%D1%81%D0%BA%D0%B8%D0%B9,_%D0%95%D0%B2%D0%B3%D0%B5%D0%BD%D0%B8%D0%B9_%D0%90%D0%BD%D1%82%D0%BE%D0%BD%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_28.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_28.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_29.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_29.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2,_%D0%90%D1%80%D1%88%D0%B0%D0%BA_%D0%A1%D0%B5%D0%BC%D1%91%D0%BD%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_30.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_30.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_31.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_31.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_32.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_32.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%A8%D0%B8%D0%BD%D0%B3%D0%B0%D1%80%D0%B5%D0%B2,_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80_%D0%A4%D1%91%D0%B4%D0%BE%D1%80%D0%BE%D0%B2%D0%B8%D1%87#:~:text=%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%20%D0%A4%D1%91%D0%B4%D0%BE%D1%80%D0%BE%D0%B2%D0%B8%D1%87%20%D0%A8%D0%B8%D0%BD%D0%B3%D0%B0%D1%80%D0%B5%D0%B2%20(18%20%D0%BC%D0%B0%D1%80%D1%82%D0%B0,%D1%81%201934%20%D0%BF%D0%BE%201937%20%D0%B3%D0%BE%D0%B4" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_33.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_33.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://visz.nlr.ru/blockade/show/1055431" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_34.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_34.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_35.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_35.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%A4%D0%B0%D1%82%D0%B5%D0%B5%D0%B2,_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80_%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D1%8C%D0%B5%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_36.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_36.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_37.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_37.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_38.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_38.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://www.computer-museum.ru/articles/histsoft/3405/" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_39.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_39.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_40.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_40.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/muzej/vydayushhiesya-uchenye/deryugin-vasilij-haritonovich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_41.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_41.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%91%D0%BE%D0%B3%D0%BE%D1%80%D0%BE%D0%B4%D0%B8%D1%86%D0%BA%D0%B8%D0%B9,_%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B9_%D0%9F%D0%B5%D1%82%D1%80%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_42.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_42.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%B0%D0%B2%D0%B8%D0%BB%D0%BE%D0%B2,_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80_%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B0%D0%BD%D0%B4%D1%80%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_43.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_43.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.wikipedia.org/wiki/%D0%90%D0%BB%D0%B5%D0%BA%D1%81%D0%B5%D0%B5%D0%B2,_%D0%9E%D0%BB%D0%B5%D0%B3_%D0%92%D0%B0%D1%81%D0%B8%D0%BB%D1%8C%D0%B5%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_44.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_44.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/universitet/nash-universitet/korporativnye-nagrady/zasluzhennyy-professor-leti/puzankov-dmitriy-viktorovich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_45.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_45.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/universitet/administraciya/prezident" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_46.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_46.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.m.wikipedia.org/wiki/%D0%95%D1%80%D0%BC%D0%BE%D0%BB%D0%B8%D0%BD,_%D0%9D%D0%B8%D0%BA%D0%BE%D0%BB%D0%B0%D0%B9_%D0%9F%D0%B0%D0%BD%D1%82%D0%B5%D0%BB%D0%B5%D0%B9%D0%BC%D0%BE%D0%BD%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_47.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_47.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_48.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_48.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.m.wikipedia.org/wiki/%D0%A1%D0%BC%D0%B8%D1%80%D0%BD%D0%BE%D0%B2,_%D0%92%D0%B5%D0%BD%D0%B8%D0%B0%D0%BC%D0%B8%D0%BD_%D0%98%D0%B2%D0%B0%D0%BD%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_49.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_49.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_50.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_50.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/fakultety/fakultet-radiotehniki-i-telekommunikaciy/obshaya-informaciya/vklad-v-radiotehniku/ryftin-yakov-aleksandrovich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_51.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_51.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/fakultety/ifio/sostav-instituta/kafedra-fiziki/istoriya-kafedry/vydayushhiesya-fiziki/grammakov-a-g" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_52.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_52.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://www.kmay.ru/sample_pers.phtml?n=5621" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_53.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_53.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_54.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_54.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.m.wikipedia.org/wiki/%D0%AE%D1%80%D0%BE%D0%B2,_%D0%AE%D1%80%D0%B8%D0%B9_%D0%AF%D0%BA%D0%BE%D0%B2%D0%BB%D0%B5%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_55.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_55.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://энциклопедия.минобороны.рф/encyclopedia/dictionary/details_rvsn.htm?id=13050@morfDictionary" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->


      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_57.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_57.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/muzej/vydayushhiesya-uchenye/ahutin-v-m" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_58.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_58.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/universitet/nash-universitet/korporativnye-nagrady/zasluzhennyy-professor-leti/chernyavskiy-evgeniy-aleksandrovich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_59.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_59.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://ru.m.wikipedia.org/wiki/%D0%A1%D0%BC%D0%BE%D0%BB%D0%BE%D0%B2,_%D0%92%D0%BB%D0%B0%D0%B4%D0%B8%D0%BC%D0%B8%D1%80_%D0%91%D0%BE%D1%80%D0%B8%D1%81%D0%BE%D0%B2%D0%B8%D1%87" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_60.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_60.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/universitet/nash-universitet/korporativnye-nagrady/zasluzhennyy-professor-leti/bystrov-yuriy-aleksandrovich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_61.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_61.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="https://etu.ru/ru/fakultety/fakultet-radiotehniki-i-telekommunikaciy/obshaya-informaciya/vklad-v-radiotehniku/kazarinov-yurty-mihaylovich" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-hero">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_62.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_62.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="#" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->


      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_64.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_64.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_65.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_65.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
    
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_66.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_66.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       
          </div>
        </div>
      </div><!-- End Portfolio Item -->

     

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_68.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_68.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
           
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_69.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_69.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_110.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_110.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_111.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_111.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_112.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_112.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_113.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_113.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_114.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_114.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_115.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_115.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_116.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_116.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_117.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_117.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_118.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_118.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-establish">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_119.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_119.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-war">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_70.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Радиоприемник K32GWB. Производитель Siemens-Halske, c1941r Предназначался для офицеров Luftwaffe (BBC),т.н. «Офицерский чемоданчик» Питание от батарей или от сети, 5 ламп.
При помощи этого приемника в блокадном Ленинграде преподаватель А.Б. Крайчик с группой студенток ЛЭТИ определял частоту немецких передатчиков с целью создания помех их работе.
Помехи создавались радиопередатчиком, установленным на кафедре «Радиопередающие устройства»</h4>
            <a href=" {{asset('assets/img/pic_home/anh_70.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-war">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_71.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Киловольтметр. Электростатический малогабаритный киловольтметр. Место создания: СССР, Ленинград, «ЛЭТИ», кафедра электроизмерительной техники Время создания: 1941 г.</h4>
            <a href=" {{asset('assets/img/pic_home/anh_71.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-war">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_72.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Макет высоковольтной лаборатории профессора А. А. Смурова. Макет представляет интерьер высоковольтной лаборатории Электротехнического института, крупнейшей в Европе 30-х годов.Показаны трансформаторы, конденсатор, генераторы и шаровые разрядники, на которые подавалось напряжение до 1000 кВ.
Автор: А. Н. Лансере</h4>
            <a href=" {{asset('assets/img/pic_home/anh_72.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
           
          </div>
        </div>
      </div><!-- End Portfolio Item -->


      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-war">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_131.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
         
            <a href=" {{asset('assets/img/pic_home/anh_131.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
           
          </div>
        </div>
      </div><!-- End Portfolio Item -->


      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-war">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_73.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Радиоприемник 6Н1
Производитель Воронежский завод Электросигнал, выпуск с 1938 по 1941г
Изготавливался по лицензии американской компании RCA на основе приемника 612
Питание от сети, 6 ламп
Приемник подарен музею семьёй А.Б. Крайчика</h4>
            <a href=" {{asset('assets/img/pic_home/anh_73.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-war">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_74.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_74.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-war">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_75.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_75.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-war">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_76.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_76.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
    
          </div>
        </div>
      </div><!-- End Portfolio Item -->


      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-war">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_78.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_78.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_80.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Макет двухканальной сверхширокополосной всенаправленной антенны дециметрового диапазона волн
Место создания: ЛПО «Равенство»
Время создания: 1970-е гг.</h4>
            <a href=" {{asset('assets/img/pic_home/anh_80.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_81.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Опытный образец спутниковый приемоиндикатор навигационной системы «Глонас»
Место создания: ЛЭТИ, кафедра РС
Время создания: 1990-1991 гг.
Авторы: под руководством проф. Ю.А. Коломенского</h4>
            <a href=" {{asset('assets/img/pic_home/anh_81.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
           
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_82.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Макет зеркальной антенны 3-см диапазона 
Антенна разработана для ВМС погранвойск 
Место создания ЛПО "Равенство"
Время создания 1970 -е гг
Авторы В. И. Винокуров, С. П. Калининград</h4>
            <a href=" {{asset('assets/img/pic_home/anh_82.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_83.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Телеграфный ключ
Предназначен для коммутации линии с целью передачи сигналов
Производитель Завод Сименс-Гальске в Санкт-Петербурге
~1900 г.</h4>
            <a href=" {{asset('assets/img/pic_home/anh_83.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
           
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_84.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Макет лаборатории прикладной химии
Электрохимическая лаборатория, расположенная в подвале первого корпуса 
Авторы: А. Горбоконь , В. Морозов
Время создания: 1990 год.</h4>
            <a href=" {{asset('assets/img/pic_home/anh_84.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
           
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_85.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Макет промышленного электролизера, установленного на Волгоградском алюминиевом заводе
          Место создания: СССР, Ленинград, ВНИИ алюминиевой промышленности Время создания: 1980-е гг.</h4>
            <a href=" {{asset('assets/img/pic_home/anh_85.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_86.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Радиопередающее устройство «МУССОН»
Устройство предназначено для использования в качестве главного (навигационного) передатчика на судах морского и промыслового флотов и рассчитано на эксплуатацию во внутренних помещениях судна при плавании в любых широтах.
Авторы: О.В. Алексеев, А.П. Бехтерев и др.
</h4>
            <a href=" {{asset('assets/img/pic_home/anh_86.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_87.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Телевизионный приемник «Знамя-58»
Телевизор с черно-белым изображением, 12 каналов, 15 ламп, 7 диодов и кинескоп 43ЛК25 «Гран-При» всемирной выставки «Экспо-58» (Брюссель)
Место создания: СССР, Ленинград, Ленинградский завод им. Козицкого Время создания: 1958 г.
</h4>
            <a href=" {{asset('assets/img/pic_home/anh_87.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_88.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Аналоговая вычислительная машина типа М.Использовалась в ЛЭТИ на кафедре МИРС в научных исследованиях и учебном процессе Место создания: СССР, г. Пенза, завод счетно-аналитических машин САМ Время создания: 1960-е гг.</h4>
            <a href=" {{asset('assets/img/pic_home/anh_88.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_89.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Импульсный модуляторный тетрод ГМИ-25A
Предназначен для работы в импульсных модуляторах, в качестве регулирующего элемента в электронных стабилизаторах
Автор: Московская Г.М. (1916-1975), выпускница ЛЭТИ 1939 года.
В 1966 за создание особо мощных генераторных и модуляторных приборов Галине Михайловне Московской присвоено звание
Героя Социалистического Труда.
Место создания: Ленинград, завод «Светлана».
Время создания: 1969 год.</h4>
            <a href=" {{asset('assets/img/pic_home/anh_89.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_93.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Прибор для определения наличия окалины типа ИО-2. Предназначен для обнаружения следов окалины на поверхности стальных деталей судостроительных конструкций после обработки поверхности потоком стальной дроби 
Место создания: СССР, Ленинград, «ЛЭТИ»,лаборатория ЭЛАП
Время создания: 1967 г.
Авторы: В.А. Солнцев, А.И. Солдатов</h4>
            <a href=" {{asset('assets/img/pic_home/anh_93.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_94.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Арифмометр "ВК-1"
Место создания: СССР
Пензенский завод "Счетмаш"
Время создания: 1950 -е гг</h4>
            <a href=" {{asset('assets/img/pic_home/anh_94.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
         
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_95.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Прибор для контроля качества обработки поверхности ИШ-1
Предназначен для контроля качества обработки (степени шероховатости) поверхности деталей судостроительных конструкций Место создания: СССР, Ленинград, «ЛЭТИ»,
лаборатория ЭЛАП
Время создания: 1970 г.
Авторы: В.А. Солнцев, А.С. Потемкин, Е.Е. Смирнов
</h4>
            <a href=" {{asset('assets/img/pic_home/anh_95.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_96.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Прибор для контроля параметров намоточных изделий ТИП ИВ-І
Предназначен для измерения числа витков обмоток различных катушек, контроля правильности монтажа вывода обмоток, наличия короткозамкнутых витков Место создания: СССР, Ленинград, «ЛЭТИ»,
лаборатория ЭЛАП
Время создания: 1964 г.
Автор: В.А. Солнцев</h4>
            <a href=" {{asset('assets/img/pic_home/anh_96.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_97.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Ультразвуковой дефектоскоп УЗД-10
Предназначен для контроля внутренней однородности металлических изделий Место создания: СССР, Ленинград, «ЛЭТИ»,
кафедра электроакустики
Время создания: 1952 г.
Автор: С.Я. Соколов</h4>
            <a href=" {{asset('assets/img/pic_home/anh_97.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_98.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
          <h4>Радиовысотомер РВ-2
Первый отечественный радиовысотомер
Сферы применения: для определения истинной высоты
полета самолета над пролетаемой местностью
Место создания. СССР, Ленинград, «ЛЭТИ», кафедра радиосистем
Время создания: 1947-1948 гг.
Авторы: Е.И. Минаев, Ю.М. Казаринов</h4>
            <a href=" {{asset('assets/img/pic_home/anh_98.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_100.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_100.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       
          </div>
        </div>
      </div><!-- End Portfolio Item -->

   
    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-develop">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_75.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_75.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
       
          </div>
        </div>
      </div><!-- End Portfolio Item -->
      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_120.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_120.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_121.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_121.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_122.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_122.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_123.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_123.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_124.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_124.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_125.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_125.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
    
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_126.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_126.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
      
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_127.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_127.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_128.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_128.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
     
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_129.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_129.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_132.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_132.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->

      <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-modern">
        <div class="portfolio-content h-100">
          <img src=" {{asset('assets/img/pic_home/anh_133.jpg')}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <a href=" {{asset('assets/img/pic_home/anh_133.jpg')}}" title="" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        
          </div>
        </div>
      </div><!-- End Portfolio Item -->


    </div><!-- End Portfolio Container -->

  </div>

</div>

</section><!-- /Portfolio Section -->

  </main>
@endsection