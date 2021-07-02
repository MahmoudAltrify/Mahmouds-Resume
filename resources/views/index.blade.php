@extends('layout.app')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="hero-container" data-aos="fade-in">
            <h1>Mahmoud Al-Trify</h1>
            <p>I'm <span class="typed" data-typed-items="Full-Stack Developer, Freelancer"></span></p>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>About</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4" data-aos="fade-right">
                        <img src="iPortfolio/assets/img/profile-img.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Full-Stack Developer.</h3>
                        <p class="font-italic">
                            It's time for you to know me better, who I'm and every information you might need.
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>22 April 1999</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <a href="https://www.codexjo.com" target="_blank">WWW.CODEXJO.COM</a>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <a
                                            href="tel:00962790487428">+962 79 048 7428</a></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>Amman, Jordan</span></li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>22</span></li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                                        <span>Bachelor</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <a href="mailto:mahmoud.altrify@gmail.com">Mahmoud.Altrify@Gmail.com</a>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance Status:</strong>
                                        <span>Available</span></li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            I love to mix theoretical information and applied technical skills to produce efficient
                            software-based products.
                            Always looking for new adventurers to improve my skills and enhance my learning carve.
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div
                    class="skills-content row row-cols-lg-4 row-cols-sm-1 row-cols-md-2 d-flex flex-column align-items-center justify-content-center flex-lg-row">

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/laravel.svg" class="img-fluid w-50 h-50" alt="">
                        </div>
                        <div class="mt-1">
                            Laraval
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/lumen.svg" class="img-fluid w-75 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            Web services using Laraval Lumen
                        </div>
                    </div>


                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/dart.svg" class="img-fluid w-50 h-50" alt="">
                        </div>
                        <div class="mt-1">
                            Dart
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/flutter.svg  " class="img-fluid w-70 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            Flutter
                        </div>
                    </div>


                </div>
                <div
                    class="row mt-lg-4 row-cols-lg-4 row-cols-sm-1 row-cols-md-2 d-flex flex-column align-items-center justify-content-center flex-lg-row">

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/devops.svg" class="img-fluid w-75 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            DevOps
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/forge.png" class="img-fluid w-75 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            Forge
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/mysql.svg  " class="img-fluid w-75 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            MySQL
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/api-2.png  " class="img-fluid w-50 h-50" alt="">
                        </div>
                        <div class="mt-1">
                            RESTful API's
                        </div>
                    </div>


                </div>
                <div
                    class="row mt-lg-4 row-cols-lg-4 row-cols-sm-1 row-cols-md-2 d-flex flex-column align-items-center justify-content-center flex-lg-row">

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/github.svg  " class="img-fluid w-75 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            GitHub
                        </div>
                    </div>


                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/java.svg  " class="img-fluid w-75 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            JAVA
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/bootstrap.svg  " class="img-fluid w-75 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            BootStrap
                        </div>
                    </div>
                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/npm.svg  " class="img-fluid w-75 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            NPM
                        </div>
                    </div>

                </div>
                <div
                    class="row mt-lg-4 row-cols-lg-4 row-cols-sm-1 row-cols-md-2 d-flex flex-column align-items-center justify-content-lg-start  justify-content-center flex-lg-row">
                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/sass-1.svg  " class="img-fluid w-75 h-75" alt="">
                        </div>
                        <div class="mt-1">
                            SASS
                        </div>
                    </div>


                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/livewire.png" class="img-fluid w-75 h-75"
                                 alt="">
                        </div>
                        <div class="mt-1">
                            Laravel Livewire
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/cisco.svg  " class="img-fluid w-50 h-50"
                                 alt="">
                        </div>
                        <div class="mt-1">
                            Cisco certified
                        </div>
                    </div>

                    <div
                        class="col-lg-3 col-md-6 mt-5 mt-lg-0 d-flex flex-column justify-content-center align-items-center ">
                        <div class="rounded-circle d-flex justify-content-center align-items-center newSkills"
                             style="width: 100px ; height: 100px; cursor: pointer ; border: 2px solid #0563bb ">
                            <img src="iPortfolio/assets/img/skills/linux-svg.svg  " class="img-fluid w-50 h-50"
                                 alt="">
                        </div>
                        <div class="mt-1">
                            Linux
                        </div>
                    </div>


                </div>

            </div>
            <!-- End Skills Section -->

            <!-- ======= Resume Section ======= -->
            <section id="resume" class="resume">
                <div class="container">

                    <div class="section-title">
                        <h2>Resume</h2>

                    </div>

                    <div class="row">
                        <div class="col-lg-6" data-aos="fade-up">
                            <h3 class="resume-title">Sumary</h3>
                            <div class="resume-item pb-0">
                                <h4>Alex Smith</h4>
                                <p><em>Innovative and deadline-driven Graphic Designer with 3+ years of experience
                                        designing
                                        and developing user-centered digital/print marketing material from initial
                                        concept
                                        to final, polished deliverable.</em></p>
                                <ul>
                                    <li>Portland par 127,Orlando, FL</li>
                                    <li>(123) 456-7891</li>
                                    <li>alice.barkley@example.com</li>
                                </ul>
                            </div>

                            <h3 class="resume-title">Education</h3>
                            <div class="resume-item">
                                <h4>Master of Fine Arts &amp; Graphic Design</h4>
                                <h5>2015 - 2016</h5>
                                <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                                <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea
                                    vero
                                    voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>
                            </div>
                            <div class="resume-item">
                                <h4>Bachelor of Fine Arts &amp; Graphic Design</h4>
                                <h5>2010 - 2014</h5>
                                <p><em>Rochester Institute of Technology, Rochester, NY</em></p>
                                <p>Quia nobis sequi est occaecati aut. Repudiandae et iusto quae reiciendis et quis Eius
                                    vel
                                    ratione eius unde vitae rerum voluptates asperiores voluptatem Earum molestiae
                                    consequatur neque etlon sader mart dila</p>
                            </div>
                        </div>
                        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                            <h3 class="resume-title">Professional Experience</h3>
                            <div class="resume-item">
                                <h4>Senior graphic design specialist</h4>
                                <h5>2019 - Present</h5>
                                <p><em>Experion, New York, NY </em></p>
                                <ul>
                                    <li>Lead in the design, development, and implementation of the graphic, layout, and
                                        production communication materials
                                    </li>
                                    <li>Delegate tasks to the 7 members of the design team and provide counsel on all
                                        aspects of the project.
                                    </li>
                                    <li>Supervise the assessment of all graphic materials in order to ensure quality and
                                        accuracy of the design
                                    </li>
                                    <li>Oversee the efficient use of production project budgets ranging from $2,000 -
                                        $25,000
                                    </li>
                                </ul>
                            </div>
                            <div class="resume-item">
                                <h4>Graphic design specialist</h4>
                                <h5>2017 - 2018</h5>
                                <p><em>Stepping Stone Advertising, New York, NY</em></p>
                                <ul>
                                    <li>Developed numerous marketing programs (logos, brochures,infographics,
                                        presentations,
                                        and advertisements).
                                    </li>
                                    <li>Managed up to 5 projects or tasks at a given time while under pressure</li>
                                    <li>Recommended and consulted with clients on the most appropriate graphic design
                                    </li>
                                    <li>Created 4+ design presentations and proposals a month for clients and account
                                        managers
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </section><!-- End Resume Section -->

            <!-- ======= Portfolio Section ======= -->
            <section id="portfolio" class="portfolio section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Portfolio</h2>

                    </div>

                    <div class="row" data-aos="fade-up">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">App</li>
                                <li data-filter=".filter-web">Web</li>
                            </ul>
                        </div>
                    </div>

                    <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                            <div class="portfolio-wrap">
                                <img src="iPortfolio/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                                    <a href="{{route('details')}}" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                            <div class="portfolio-wrap">
                                <img src="iPortfolio/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                                <div class="portfolio-links">
                                    <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="{{route('details')}}" title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </section><!-- End Portfolio Section -->

            <!-- ======= Services Section ======= -->
            <section id="services" class="services">
                <div class="container">

                    <div class="section-title">
                        <h2>Services</h2>

                    </div>

                    <div class="row">
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-card-checklist"></i></div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip
                                ex ea commodo consequat tarad limino ata</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon"><i class="bi bi-bar-chart"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia
                                deserunt mollit anim id est laborum</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><i class="bi bi-brightness-high"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis
                                praesentium voluptatum deleniti atque</p>
                        </div>
                        <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                            <div class="icon"><i class="bi bi-calendar4-week"></i></div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div>

                </div>
            </section><!-- End Services Section -->

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials section-bg">
                <div class="container">

                    <div class="section-title">
                        <h2>Testimonials</h2>

                    </div>

                    <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="fade-up">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit
                                        rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen
                                        aliquam,
                                        risus at semper.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="iPortfolio/assets/img/testimonials/testimonials-1.jpg"
                                         class="testimonial-img"
                                         alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="100">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid
                                        cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure
                                        amet
                                        legam anim culpa.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="iPortfolio/assets/img/testimonials/testimonials-2.jpg"
                                         class="testimonial-img"
                                         alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="200">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                        veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis
                                        sint
                                        minim.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="iPortfolio/assets/img/testimonials/testimonials-3.jpg"
                                         class="testimonial-img"
                                         alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="300">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore
                                        quem
                                        dolore labore illum veniam.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="iPortfolio/assets/img/testimonials/testimonials-4.jpg"
                                         class="testimonial-img"
                                         alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                </div>
                            </div><!-- End testimonial item -->

                            <div class="swiper-slide">
                                <div class="testimonial-item" data-aos="fade-up" data-aos-delay="400">
                                    <p>
                                        <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                        Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster
                                        veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse
                                        veniam
                                        culpa fore nisi cillum quid.
                                        <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                    </p>
                                    <img src="iPortfolio/assets/img/testimonials/testimonials-5.jpg"
                                         class="testimonial-img"
                                         alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                </div>
                            </div><!-- End testimonial item -->

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </section><!-- End Testimonials Section -->

            <!-- ======= Contact Section ======= -->
            <section id="contact" class="contact">
                <div class="container">

                    <div class="section-title">
                        <h2>Contact</h2>

                    </div>

                    <div class="row" data-aos="fade-in">

                        <div class="col-lg-5 d-flex align-items-stretch">
                            <div class="info">

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 55s</p>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="name">Your Email</label>
                                        <input type="email" class="form-control" name="email" id="email" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="name">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="form-group">
                                    <label for="name">Message</label>
                                    <textarea class="form-control" name="message" rows="10" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </section><!-- End Contact Section -->
        </section>
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    {{--<footer id="footer">--}}
    {{--    <div class="container">--}}
    {{--        <div class="copyright">--}}
    {{--           --}}
    {{--        <div class="credits">--}}
    {{--            --}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</footer><!-- End  Footer -->--}}
@endsection
