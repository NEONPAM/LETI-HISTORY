<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
     <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
     <link rel="shortcut icon" href="/favicon.ico" />
     <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
     <link rel="manifest" href="/site.webmanifest" />

     <title>LETI | History</title>

     <link rel="shortcut icon" href="{{asset('./assets/img/Images/logo-foursquare.svg')}}">
     
     <!-- CSS -->
     <link rel="stylesheet" href="{{asset('./assets/style.css')}}">
     <link rel="stylesheet" href="{{asset('./assets/grid.css')}}">
     <link rel="stylesheet" href="{{asset('./assets/component.css')}}">

     <!-- GOOGLE FONTS -->
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
          
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Monoton&family=Open+Sans:ital,wght@0,400;1,300&family=Playfair+Display:wght@400;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&family=Shizuru&display=swap" rel="stylesheet">

     <!-- BOX ICON  -->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <link rel="stylesheet" href="{{asset('./assets/fontawesome-free-5.15.4-web/css/all.min.css')}}">
     <link rel="stylesheet" href="{{asset('./themify-icons/themify-icons.css')}}">
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
     <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>
<body>

     @if(!session('user_name'))
     <script>window.location.href = '{{ url('/Register') }}';</script>
     @endif

     <!-- SECTIONS -->

     <section class="movie-banner">
          <div class="hero-wrapper">
               <div class="movie-banner-item">
                    <img src="{{asset('assets/img/hero-bg.jpg')}}" alt="">
               </div>

               <div class="movie-card">
                    <img src="{{asset('assets/img/nen.jpg')}}" alt="raya">

                    <div class="movie-card-content">
                         <h1>ПУТЕШЕСТВИЕ ВО ВРЕМЕНИ: ОТКРОЙТЕ ИСТОРИЮ ЛЭТИ</h1>

                         <p class="movie-card-description">
                         Добро пожаловать в виртуальный тур по славной истории ЛЭТИ! Давайте вместе отправимся в прошлое, откроем ключевые моменты, познакомимся с выдающимися личностями и прочувствуем дух науки и техники, который сделал наш университет одним из ведущих технических вузов. Вас ждёт увлекательное путешествие, полное неожиданных открытий, интерактивных элементов и захватывающих фактов. Готовы ли вы к этому приключению?
                         </p>
                         <div class="movie-casts">
                              <div class="movie-cast-item">
                                   <img src="{{asset('assets/img/pic_home/anh_11.jpg')}}" alt="cast1">
                              </div>
                              <div class="movie-cast-item">
                                   <img src="{{asset('assets/img/pic_home/anh_10.jpg')}}" alt="cast1">
                              </div>
                              <div class="movie-cast-item">
                                   <img src="{{asset('assets/img/pic_home/anh_8.jpg')}}" alt="cast1">
                              </div>
                              <div class="movie-cast-item">
                                   <img src="{{asset('assets/img/pic_home/anh_7.jpg')}}" alt="cast1">
                              </div>
                         </div>
                    </div>
               </div>

          </div>
     </section>


     <section class="international-trailer">
        <div class="trailer-title">
               <h3>Введение в ЛЭТИ</h3>
        </div>
        <div class="international-vid">
            <div class="video-container">
              <iframe 
                src="https://drive.google.com/file/d/1Y-1Wl8kVWxRE5jKiC_9XVn8M3HDtSsRj/preview" 
                allow="autoplay" 
                allowfullscreen>
              </iframe>
            </div>
        </div>
        <div class="arrow-box">
          <a href="{{route('Museum')}}" target="_blank">Откройте для себя коллекцию изображений музея</a>
        </div>              
     </section>

     <section class="international-trailer2"> 
        <div class="trailer-title">
               <h3>История </h3>
        </div>
        <div class="international-vid">
            <div class="video-container">
              <iframe 
                src="https://drive.google.com/file/d/1By66qxyLdYyqJS3GnmOYeea-PpxxlCac/preview" 
                allow="autoplay" 
                allowfullscreen>
              </iframe>
            </div>
        </div>
        <div class="arrow-box">
          <a href="{{route('Museum')}}" target="_blank">Откройте для себя коллекцию изображений музея</a>
        </div>              
     </section>

     <section class="international-trailer2"> 
        <div class="trailer-title">
               <h3>ЛЭТИ в Период Второй Мировой Войны</h3>
        </div>
        <div class="international-vid">
            <div class="video-container">
              <iframe 
                src="https://drive.google.com/file/d/1F7s-wef1HzLci4YAJQPnbklINccvQFBK/preview" 
                allow="autoplay" 
                allowfullscreen>
              </iframe>
            </div>
        </div>
        <div class="arrow-box">
          <a href="{{route('Museum')}}" target="_blank">Откройте для себя коллекцию изображений музея</a>
        </div>              
     </section>

     <section class="international-trailer2"> 
        <div class="trailer-title">
               <h3>Послевоенное Развитие </h3>
        </div>
        <div class="international-vid">
            <div class="video-container">
              <iframe 
                src="https://drive.google.com/file/d/1-L6-SEEkQ69aNQZ5VBOS-rgjLfyMF0mF/preview" 
                allow="autoplay" 
                allowfullscreen>
              </iframe>
            </div>
        </div>
        <div class="arrow-box">
          <a href="{{route('Museum')}}" target="_blank">Откройте для себя коллекцию изображений музея</a>
        </div>              
     </section>

     <section class="international-trailer2"> 
        <div class="trailer-title">
               <h3>ЛЭТИ в Современную Эпоху </h3>
        </div>
        <div class="international-vid">
            <div class="video-container">
              <iframe 
                src="https://drive.google.com/file/d/1_qK6a_w_n7MV_pI_MDiP7ucjKx4Dmvlx/preview" 
                allow="autoplay" 
                allowfullscreen>
              </iframe>
            </div>
        </div>
        <div class="arrow-box">
          <a href="{{route('Museum')}}" target="_blank">Откройте для себя коллекцию изображений музея</a>
        </div>              
     </section>

     <section class="international-trailer2"> 
     <div class="trailer-title">
               <h3>🎉 Кто круче всех? </h3>
        </div>
        <div class="arrow-box">
          <a href="{{route('question')}}" target="_blank">🧠 Интеллект-Баттл: Проверь себя!</a>
        </div>              
     </section>
     



  <script src="main.js"></script>
<style>
.arrow-box {
  position: relative;
  display: inline-block;
  padding: 16px 28px;
  border: none;
  border-radius: 12px;
  background: linear-gradient(135deg, #6ec1e4, #b58ecc); /* Gradient */
  color: #fff;
  font-weight: bold;
  text-align: center;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  margin-top: 2rem;
  box-shadow: 0 0 40px 10px rgba(253, 252, 253, 0.2);
}

.arrow-box:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 40px 10px rgba(253, 252, 253, 0.7);
}

.arrow-box a {
  text-decoration: none;
  color: inherit;
}

.arrow-box::after {
  content: "";
  position: absolute;
  top: 50%;
  right: -20px;
  transform: translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 20px solid #b58ecc; /* Màu mũi tên đồng bộ */
}
</style>
</body>
</html>