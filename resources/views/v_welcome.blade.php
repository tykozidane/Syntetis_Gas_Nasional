@extends('layout.base')
@section('content')
<!----header home---->
<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
        <nav id="navbar" class="navbar">
            <ul>
                <li class="active"></li>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About US</a></li>
                <li><a class="nav-link scrollto" href="#product">Product</a></li>
                <li><a class="nav-link scrollto" href="#industries">Wasted</a></li>
                <!-- =======================================================  
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
               
              <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
            ======================================================== -->
                </li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url('img/buathome.jpg');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">PENGOLAHAN <span>SAMPAH</span></h2>
                            <p class="animate__animated animate__fadeInUp">Menerapkan teknologi pada pengolahan sampah menjadi bernilai ekonomis
                            </p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">About
                                Us</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url('img/alat/Biomassa.png');">
                    <div class="carousel-container">
                        <div class="carousel-content container">
                            <h2 class="animate__animated animate__fadeInDown">BIOMASSA GASIFIER</h2>
                            <p class="animate__animated animate__fadeInUp">Merupakan mesin yang dapat mengolah sampah kota secara ramah lingkungan</p>
                            <a href="#product"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">See Product</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 
          <div class="carousel-item" style="background-image: url('img/pb3.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
                <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>-->

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div>
            <div class="section-title-main" data-aos="fade-up">
                <h2>About Us</h2>
                <p> PT Syntesis Gas National adalah perusahaan yang bergerak dibidang pembuatan mesin
                    pengelolaan sampah. Fokus utama kami adalah untuk memberikan solusi dan mengurangi efek negative
                    pada penumpukan sampah, terutama pada sampah perkotaan. </p>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6 d-flex flex-column about-content" style="background-color: #262422"
                    data-aos="fade-right">
                    <div class="section-title">
                        <h2 style="color: white">Visi</h2>
                        <p>PT Syntesis Gas National menjadi Perusahaan penghasil mesin pengolah sampah paling inovativ
                            di Indonesia.</p>
                    </div>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center about-content"
                    style="background-color: #1E1D1B" data-aos="fade-left">
                    <div class="section-title">
                        <h2 style="color: white">Misi</h2>
                        <p></p>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-tag-alt"></i></div>
                            <!-- <h4 class="title"><a href="#industries">Industries</a></h4> -->
                            <p class="description">Mengolah sampah kota menjadi briket biomassa</p>
                        </div>
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-tag-alt"></i></div>
                            <!-- <h4 class="title"><a href="#product">Product</a></h4> -->
                            <p class="description">Memberikan solusi yang optimal kepada mitra kerja</p>
                        </div>
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-tag-alt"></i></div>
                            <!-- <h4 class="title"><a href="#industries">Industries</a></h4> -->
                            <p class="description">Mengurangi efek negative akibat penumpukan sampah</p>
                        </div>
                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bx bx-tag-alt"></i></div>
                            <!-- <h4 class="title"><a href="#industries">Industries</a></h4> -->
                            <p class="description">Meningkatkan produktifitas penggunaan limbah organik dan bahan bakar
                                batu
                                bara</p>
                        </div>
                    </div>
                </div>

            </div>
    </section>


    <!-- ======= Our Team Section ======= -->
    <section id="product" class="team">
        <div class="" data-aos="fade-up">
            <div class="row">
                <div class=" col-lg-8 col-md-6 p-0" data-aos="fade-up">
                    <div class="member">
                        <div><img class="product" src="img/alat/Biomassa.png" alt=""></div>
                    </div>
                </div>
                <div class=" col-lg-4 col-md-6 info-alat" data-aos="fade-up">
                    <div class="member">
                        <div class="member-info">
                            <h4>Our Product</h4>
                            <span>Biomassa Gasifier merupakan mesin yang dapat mengolah sampah kota 
                              dengan teknologi GASIFIKASI dan KARBONASI menjadi arang karbon dan gas murni sebagai Energi Baru Terbarukan (EBT)
                              dengan tingkat efisiensi sempurna yaitu 100% 
                               
                            </span>
                            <!-- <span>Biomassa Gasifier merupakan mesin yang dapat mengolah sampah kota, yang termasuk
                                sampah kota adalah sampah Rumah
                                Tangga, Pertanian, Komersial, tempat Umum </span> -->
                        </div>
                    </div>
                </div>

            </div>
    </section><!-- End Our Team Section -->
    
    <section id="industries" class="services">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>WASTE</h2>
                <p class="pb-2"> Macam-macam sampah yang dapat diolah </p>
            </div>

            <div class="row">
                <p class="pb-2" style="display: flex; justify-content: center; font-size: x-large; font-weight: bold">
                    Sampah Rumah Tangga</p>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-right">
                    <div class="icon"><img class="gambar" src="img/sampah/sampah6.jpg" alt="Sampah"></div>
                    <!-- <h4 class="title"><a href="">Pakan Ternak</a></h4> -->
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon"><img src="img/sampah/sampah2.jpg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Penggaraman</a></h4> -->

                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-left" data-aos-delay="200">
                    <div class="icon"><img src="img/sampah/sampahrt2.jpg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Textile</a></h4> -->
                    <!-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore
                        eu fugiat nulla pariatur</p> -->
                </div>
                <p class="pb-2" style="display: flex; justify-content: center; font-size: x-large; font-weight: bold">
                    Sampah Pertanian</p>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-right" data-aos-delay="300">
                    <div class="icon"><img src="img/sampah/sampah8.jpg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Manufaktur</a></h4> -->
                    <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        deserunt mollit anim id est laborum</p> -->
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon"><img src="img/sampah/sampahpertanian2.jpg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Manufaktur</a></h4> -->
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-left" data-aos-delay="500">
                    <div class="icon"><img src="img/sampah/sampahpertanian3.jpg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Pertambangan</a></h4> -->
                    <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque</p> -->
                </div>
                <p class="pb-2" style="display: flex; justify-content: center; font-size: x-large; font-weight: bold">
                    Sampah Komersil</p>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-right" data-aos-delay="500">
                    <div class="icon"><img src="img/sampah/sampahkomersil1.jpeg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Makanan</a></h4> -->
                    <!-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                        cum soluta nobis est eligendi</p> -->
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon"><img src="img/sampah/sampahkomersil2.jpg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Bahan Kimia</a></h4> -->
                    <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque</p> -->
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-left" data-aos-delay="700">
                    <div class="icon"><img src="img/sampah/sampahkomersil3.jpg" alt="Sampahr" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Pertanian</a></h4> -->
                    <!-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                        cum soluta nobis est eligendi</p> -->
                </div>
                <p class="pb-2" style="display: flex; justify-content: center; font-size: x-large; font-weight: bold">
                    Sampah Tempat Umum</p>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-right" data-aos-delay="500">
                    <div class="icon"><img src="img/sampah/sampah3.jpg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Makanan</a></h4> -->
                    <!-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                        cum soluta nobis est eligendi</p> -->
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon"><img src="img/sampah/sampah5.jpg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Bahan Kimia</a></h4> -->
                    <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        praesentium voluptatum deleniti atque</p> -->
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-left" data-aos-delay="700">
                    <div class="icon"><img src="img/sampah/sampah7.jpg" alt="Sampah" class="gambar"></div>
                    <!-- <h4 class="title"><a href="">Pertanian</a></h4> -->
                    <!-- <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore,
                        cum soluta nobis est eligendi</p> -->
                </div>
            </div>

        </div>
    </section>
    <!-- ======= Our Portfolio Section ======= -->
    <!-- =======<section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Our Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-1.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-2.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-3.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-4.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-5.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-6.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-7.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-8.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="img/portfolio/portfolio-9.jpg" data-galleryery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bi bi-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section>=== -->
    <!-- End Our Portfolio Section -->



    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <!-- ======= 
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch">

          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
          </div>

        </div>

      </div>======= -->
    </section>
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact Us</h2>
            </div>

            <div class="row">
                <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
                    <div class="info-box">
                        <a href="mailto:sutanputeramulya@gmail.com"><i class="bx bx-mail-send bx-tada-hover"></i></a>
                        <h3>Email Us</h3>
                        <p>in to<br>syntetisgasnational@gmail.com</p>
                    </div>
                </div>

                <div class="col-lg-6 d-flex" data-aos="fade-up">
                    <div class="info-box">
                        <i class="bx bx-map bx-tada-hover"></i>
                        <h3>Our Address</h3>
                        <p>Perumahan Citra Indah, Bukit Menteng Blok A9, No 17 <br>Sukamaju - Jonggol - Bogor<br>Jawa
                            Barat</p>
                    </div>
                </div>



                <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-box ">
                        <i class="bx bx-phone bx-tada-hover"></i>
                        <h3>Call Us</h3>
                        <p>(021) 27828256</p>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section><!-- End Contact Us Section -->
    <!-- email section -->
    <section id="faq" class="faq section-bg">
        <div class="container">
            <div class="section-title-email">
                <h2>Mail Us</h2>
            </div>
            <form action="/" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputName" class="form">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                            @error('name')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputEmail" class="form">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
                            @error('email')
                                <span class="text-danger"> {{ $message }} </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputSubject" class="form">Subject</label>
                    <input type="text" name="subject" class="form-control" placeholder="Enter The Subject">
                    @error('subject')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputMessage" class="form">Message</label>
                    <textarea name="content" rows="5" class="form-control" placeholder="Enter Your Message"></textarea>
                    @error('content')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                </div>
                <div class="text-center">
                    <div class="buttonemail"><button type="submit">Send Message</button></div>
                </div>
            </form>
        </div>
    </section>

    @endsection
