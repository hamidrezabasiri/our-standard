<?php require 'pages_intersections/PHP/header.php'; ?>
<?php require 'pages_intersections/PHP/footer.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"     integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/cced6ca7a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/path/to/flickity.css" media="screen">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="CSS/font_imports.css">
    <link rel="stylesheet" href="./CSS/swiper.min.css">
    <link rel="stylesheet" href="./CSS/abrang.css">
    <title>نقاشی ابرنگ</title>
</head>
<body class="iranSans" style="background: url(./img/bgc2.jpg); background-repeat: no-repeat; background-attachment: fixed;">
        
<?php generate_header(); ?>
        
    <h1 class="margining text-center"> اولین نقاشی ها ابرنگ من </h1>
  <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .swiper-container-v {
      background: #eee;
    }
  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container swiper-container-h">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Horizontal Slide 1</div>
      <div class="swiper-slide">
        <div class="swiper-container swiper-container-v">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Vertical Slide 1</div>
            <div class="swiper-slide">Vertical Slide 2</div>
            <div class="swiper-slide">Vertical Slide 3</div>
            <div class="swiper-slide">Vertical Slide 4</div>
            <div class="swiper-slide">Vertical Slide 5</div>
          </div>
          <div class="swiper-pagination swiper-pagination-v"></div>
        </div>
      </div>
      <div class="swiper-slide">Horizontal Slide 3</div>
      <div class="swiper-slide">Horizontal Slide 4</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-h"></div>
  </div>

  <!-- Swiper JS -->
  <script src="./js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiperH = new Swiper('.swiper-container-h', {
      spaceBetween: 50,
      pagination: {
        el: '.swiper-pagination-h',
        clickable: true,
      },
    });
    var swiperV = new Swiper('.swiper-container-v', {
      direction: 'vertical',
      spaceBetween: 50,
      pagination: {
        el: '.swiper-pagination-v',
        clickable: true,
      },
    });
  </script>
                <h1 class="margining text-center">  نقاشی های بعد ابرنگ من </h1>
              <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .swiper-container-v {
      background: #eee;
    }
  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container swiper-container-h">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Horizontal Slide 1</div>
      <div class="swiper-slide">
        <div class="swiper-container swiper-container-v">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Vertical Slide 1</div>
            <div class="swiper-slide">Vertical Slide 2</div>
            <div class="swiper-slide">Vertical Slide 3</div>
            <div class="swiper-slide">Vertical Slide 4</div>
            <div class="swiper-slide">Vertical Slide 5</div>
          </div>
          <div class="swiper-pagination swiper-pagination-v"></div>
        </div>
      </div>
      <div class="swiper-slide">Horizontal Slide 3</div>
      <div class="swiper-slide">Horizontal Slide 4</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-h"></div>
  </div>

  <!-- Swiper JS -->
  <script src="./js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiperH = new Swiper('.swiper-container-h', {
      spaceBetween: 50,
      pagination: {
        el: '.swiper-pagination-h',
        clickable: true,
      },
    });
    var swiperV = new Swiper('.swiper-container-v', {
      direction: 'vertical',
      spaceBetween: 50,
      pagination: {
        el: '.swiper-pagination-v',
        clickable: true,
      },
    });
  </script>
    <h1 class="margining text-center"> نقاشی های حرفه ای ابرنگ من </h1>
  <!-- Demo styles -->
  <style>
    html, body {
      position: relative;
      height: 100%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      height: 100%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .swiper-container-v {
      background: #eee;
    }
  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container swiper-container-h">
    <div class="swiper-wrapper">
      <div class="swiper-slide">Horizontal Slide 1</div>
      <div class="swiper-slide">
        <div class="swiper-container swiper-container-v">
          <div class="swiper-wrapper">
            <div class="swiper-slide">Vertical Slide 1</div>
            <div class="swiper-slide">Vertical Slide 2</div>
            <div class="swiper-slide">Vertical Slide 3</div>
            <div class="swiper-slide">Vertical Slide 4</div>
            <div class="swiper-slide">Vertical Slide 5</div>
          </div>
          <div class="swiper-pagination swiper-pagination-v"></div>
        </div>
      </div>
      <div class="swiper-slide">Horizontal Slide 3</div>
      <div class="swiper-slide">Horizontal Slide 4</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination swiper-pagination-h"></div>
  </div>

  <!-- Swiper JS -->
  <script src="./js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiperH = new Swiper('.swiper-container-h', {
      spaceBetween: 50,
      pagination: {
        el: '.swiper-pagination-h',
        clickable: true,
      },
    });
    var swiperV = new Swiper('.swiper-container-v', {
      direction: 'vertical',
      spaceBetween: 50,
      pagination: {
        el: '.swiper-pagination-v',
        clickable: true,
      },
    });
  </script>

<?php generate_footer(); ?>




        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="./js/swiper.min.js"></script>
    <script src="./js/abrang.js.js"></script>
</body>
</html>