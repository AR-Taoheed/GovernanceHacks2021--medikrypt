<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Medcity - Medical Healthcare HTML5 Template">
  <link href="assets/images/favicon/favicon.png" rel="icon">
  <title>MediKrypt - Home</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
  <link rel="stylesheet" href="assets/css/libraries.css">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <?php
        include_once("includes/header.php");
    ?>

    <!-- ============================
        Slider
    ============================== -->
    <section class="slider slider-centerd">
      <div class="slick-carousel m-slides-0 carousel-arrows-light carousel-dots-light"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src="assets/images/sliders/8.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                <div class="slide__content">
                  <h2 class="slide__title color-white">Medical Supplies <br> And Equipment</h2>
                  <p class="slide__desc color-white">The health and well-being of our patients and their health care
                    team will
                    always be our priority, so we follow the best practices for cleanliness.</p>
                  <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <a href="about-us.html" class="btn btn__white btn__rounded mr-30">
                      <span>More About Us</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a class="video__btn video__btn-white popup-video"
                      href="https://www.youtube.com/watch?v=xPcqac0iu2k">
                      <div class="video__player">
                        <i class="fa fa-play"></i>
                      </div>
                      <span class="video__btn-title color-white">Watch Our Video!</span>
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src="assets/images/sliders/9.jpg" alt="slide img"></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
                <div class="slide__content">
                  <h2 class="slide__title color-white">Large Selections <br> Of Medical Products</h2>
                  <p class="slide__desc color-white">The health and well-being of our patients and their health care
                    team will
                    always be our priority, so we follow the best practices for cleanliness.</p>
                  <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <a href="about-us.html" class="btn btn__white btn__rounded mr-30">
                      <span>More About Us</span>
                      <i class="icon-arrow-right"></i>
                    </a>
                    <a class="video__btn video__btn-white popup-video"
                      href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                      <div class="video__player">
                        <i class="fa fa-play"></i>
                      </div>
                      <span class="video__btn-title color-white">Watch Our Video!</span>
                    </a>
                  </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
       shop 
    =========================== -->
    <section class="shop-grid">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Low Priced Medical Supplies</h2>
              <h3 class="heading__title">The Largest Selections Of Medical Products</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Product item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="product-item">
              <div class="product__img">
                <img src="assets/images/products/1.jpg" alt="Product" loading="lazy">
                <div class="product__action">
                  <a href="#" class="btn btn__primary btn__rounded">
                    <i class="icon-cart"></i> <span>Add To Cart</span>
                  </a>
                </div><!-- /.product-action -->
              </div><!-- /.product-img -->
              <div class="product__info">
                <h4 class="product__title"><a href="#">Calming Herps</a></h4>
                <span class="product__price">$18.99</span>
              </div><!-- /.product-content -->
            </div><!-- /.product-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Product item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="product-item">
              <div class="product__img">
                <img src="assets/images/products/2.jpg" alt="Product" loading="lazy">
                <div class="product__action">
                  <a href="#" class="btn btn__primary btn__rounded">
                    <i class="icon-cart"></i> <span>Add To Cart</span>
                  </a>
                </div><!-- /.product-action -->
              </div><!-- /.product-img -->
              <div class="product__info">
                <h4 class="product__title"><a href="#">Biotin Complex</a></h4>
                <span class="product__price">$12,99</span>
              </div><!-- /.product-content -->
            </div><!-- /.product-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Product item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="product-item">
              <div class="product__img">
                <img src="assets/images/products/3.jpg" alt="Product" loading="lazy">
                <div class="product__action">
                  <a href="#" class="btn btn__primary btn__rounded">
                    <i class="icon-cart"></i> <span>Add To Cart</span>
                  </a>
                </div><!-- /.product-action -->
              </div><!-- /.product-img -->
              <div class="product__info">
                <h4 class="product__title"><a href="#">Facial Serum</a></h4>
                <span class="product__price">$19,99</span>
              </div><!-- /.product-content -->
            </div><!-- /.product-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Product item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="product-item">
              <div class="product__img">
                <img src="assets/images/products/4.jpg" alt="Product" loading="lazy">
                <div class="product__action">
                  <a href="#" class="btn btn__primary btn__rounded">
                    <i class="icon-cart"></i> <span>Add To Cart</span>
                  </a>
                </div><!-- /.product-action -->
              </div><!-- /.product-img -->
              <div class="product__info">
                <h4 class="product__title"><a href="#">Calming Herps</a></h4>
                <span class="product__price">$33.00</span>
              </div><!-- /.product-content -->
            </div><!-- /.product-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Product item #5 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="product-item">
              <div class="product__img">
                <img src="assets/images/products/5.jpg" alt="Product" loading="lazy">
                <div class="product__action">
                  <a href="#" class="btn btn__primary btn__rounded">
                    <i class="icon-cart"></i> <span>Add To Cart</span>
                  </a>
                </div><!-- /.product-action -->
              </div><!-- /.product-img -->
              <div class="product__info">
                <h4 class="product__title"><a href="#">Essential Oil</a></h4>
                <span class="product__price">$63.00</span>
              </div><!-- /.product-content -->
            </div><!-- /.product-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Product item #6 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="product-item">
              <div class="product__img">
                <img src="assets/images/products/6.jpg" alt="Product" loading="lazy">
                <div class="product__action">
                  <a href="#" class="btn btn__primary btn__rounded">
                    <i class="icon-cart"></i> <span>Add To Cart</span>
                  </a>
                </div><!-- /.product-action -->
              </div><!-- /.product-img -->
              <div class="product__info">
                <h4 class="product__title"><a href="#">Natural Cacao Powder</a></h4>
                <span class="product__price">$12,99</span>
              </div><!-- /.product-content -->
            </div><!-- /.product-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Product item #7 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="product-item">
              <div class="product__img">
                <img src="assets/images/products/7.jpg" alt="Product" loading="lazy">
                <div class="product__action">
                  <a href="#" class="btn btn__primary btn__rounded">
                    <i class="icon-cart"></i> <span>Add To Cart</span>
                  </a>
                </div><!-- /.product-action -->
              </div><!-- /.product-img -->
              <div class="product__info">
                <h4 class="product__title"><a href="#">Natural Gel</a></h4>
                <span class="product__price">$38,00</span>
              </div><!-- /.product-content -->
            </div><!-- /.product-item -->
          </div><!-- /.col-lg-3 -->
          <!-- Product item #8 -->
          <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="product-item">
              <div class="product__img">
                <img src="assets/images/products/8.jpg" alt="Product" loading="lazy">
                <div class="product__action">
                  <a href="#" class="btn btn__primary btn__rounded">
                    <i class="icon-cart"></i> <span>Add To Cart</span>
                  </a>
                </div><!-- /.product-action -->
              </div><!-- /.product-img -->
              <div class="product__info">
                <h4 class="product__title"><a href="#">Goji Powder</a></h4>
                <span class="product__price">$16,00</span>
              </div><!-- /.product-content -->
            </div><!-- /.product-item -->
          </div><!-- /.col-lg-3 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-12 text-center">
            <a href="shop.html" class="btn btn__secondary btn__rounded">
              <span>Explore All</span>
              <i class="icon-arrow-right"></i>
            </a>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.shop -->

    <!-- ========================
     Banner Layout 2
    =========================== -->
    <section class="banner-layout2 py-0">
      <div class="bg-img"><img src="assets/images/backgrounds/8.jpg" alt="backgrounds"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="banner-text">
              <div class="heading-layout2 heading-light">
                <h2 class="heading__title">Committed To Build A Positive, Safe, Patient Focused Culture.</h2>
                <p class="heading__desc mb-40">Today the hospital is recognised as a world renowned institution, not
                  only providing outstanding care and treatment, our goal is to deliver quality care in a respectful &
                  compassionate manner. We strive to be the first and best choice for healthcare.
                </p>
              </div>
              <ul class="list-items list-items-layout2 list-items-light list-horizontal list-unstyled mb-50">
                <li>Fractures and dislocations</li>
                <li>Health Assessments</li>
                <li>Desensitisation injections</li>
                <li>High Quality Care</li>
                <li>Desensitisation injections</li>
              </ul>
              <div class="d-flex flex-wrap">
                <a href="doctors-timetable.html" class="btn btn__white btn__rounded mr-30">
                  <span>Find A Doctor</span> <i class="icon-arrow-right"></i>
                </a>
                <a href="contact-us.html" class="btn btn__white btn__outlined btn__rounded">
                  Contact us
                </a>
              </div>
            </div><!-- /.banner-text -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6 banner-img">
            <div class="bg-img">
              <img src="assets/images/banners/9.jpg" alt="backgrounds">
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner Layout 2 -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid pt-170 pb-50">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Resource Library</h2>
              <h3 class="heading__title">Recent Articles</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/1.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Mental Health</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <a class="post__meta-author" href="#">Martin King</a>
                </div>
                <h4 class="post__title"><a href="#">6 Tips to Protect Your Mental Health When You’re Sick</a></h4>

                <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a
                  condition that’s certainly true if you test positive for COVID-19, or are presumed to be positive...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #2 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/2.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Infectious</a><a href="#">Tips</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <a class="post__meta-author" href="#">John Ezak</a>
                </div>
                <h4 class="post__title"><a href="#">Unsure About Wearing a Face Mask? Here’s How and Why</a></h4>
                <p class="post__desc">That means that you should still be following any shelter-in-place orders in your
                  community. But when you’re venturing out to the grocery store, pharmacy or hospital..
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
          <!-- Post Item #3 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-single-post.html">
                  <img src="assets/images/blog/grid/3.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="#">Life Style</a><a href="#">Nutrition</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 28, 2022</span>
                  <a class="post__meta-author" href="#">Saul Wade</a>
                </div>
                <h4 class="post__title"><a href="#">Tips for Eating Healthy When You’re Working From Home </a></h4>

                <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a
                  condition that’s certainly true if you test positive for COVID-19, or are presumed to be positive...
                </p>
                <a href="blog-single-post.html" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->

    <!-- ========================
      Footer
    ========================== -->
    <?php
        include_once("includes/footer.php");
    ?>