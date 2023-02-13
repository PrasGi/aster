<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="this page make by xlar about please subscribe and suppot " />
    <meta name="author" content="" />
    <title>ASTER SEMESTER 4</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/asterremove.ico" />
    <!-- xlar about yt //biswajit  -->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
  </head>
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="#page-top"><img src="assets\img\logos\asterremove.png" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
            <!-- <li class="nav-item"><a class="nav-link" href="#TitleSistemKomputer">Sistem Komputer</a></li>
              <li class="nav-item"><a class="nav-link" href="#TitleNumericalMethode">Numerical Methode</a></li>
              <li class="nav-item"><a class="nav-link" href="#TitleStruktureData">Strukture Data</a></li>
              <li class="nav-item"><a class="nav-link" href="#TitleStudiFiqh">Studi Fiqh</a></li>
              <li class="nav-item"><a class="nav-link" href="#TitleBahasaIngris1">Bahasa Ingris 1</a> -->
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#matkul">MataKuliah</a></li>
            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Masthead-->

    <header class="masthead" id="home">

        @error('name')
            <div class="alert alert-danger" role="alert">
                Failed send message, you'r have error check contact session for detail!!!
            </div>
        @enderror
        @error('email')
            <div class="alert alert-danger" role="alert">
                Failed send message, you'r have error check contact session for detail!!!
            </div>
        @enderror
        @error('phone')
            <div class="alert alert-danger" role="alert">
                Failed send message, you'r have error check contact session for detail!!!
            </div>
        @enderror
        @error('message')
            <div class="alert alert-danger" role="alert">
                Failed send message, you'r have error check contact session for detail!!!
            </div>
        @enderror

      <div class="container">
        <div class="masthead-subheading">WELCOME TO SEMESTER 4</div>
        <div class="masthead-heading text-uppercase">SILAHKAN PILIH KELASMU</div>
        <a class="btn btn-primary btn-xl text-uppercase" href="#matkul">Learn More</a>
      </div>
    </header>
    <!-- Mata Kuliah-->
    <section class="page-section bg-light" id="matkul">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Mata Kuliah</h2>
          <h3 class="section-subheading text-muted">- Bismillah Semester 4 Full Senyum -</h3>
        </div>
        <div class="row">
            @foreach ($data as $values)
                <div class="col-lg-4 col-sm-6 mb-4">
                <!-- ARTIFICIAL INTELLIGENCE-->
                    <div class="portfolio-item">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#matkulModal{{ $loop->index }}">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/imgmatkul/{{ $values[0]['mata_kuliah'] }}.png" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">{{ $values[0]['mata_kuliah'] }}</div>
                        <div class="portfolio-caption-subheading text-muted"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Teknik Informatika UIN Maliki Malang.</h3>
        </div>
        <ul class="timeline">
          <li>
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="..." /></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2004</h4>
                <h4 class="subheading">Our Humble Beginnings</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">
                  Teknik Informatika (Computer Science Department), Faculty of Science & Technology, Universitas Islam Negeri Maulana Malik Ibrahim Malang organizes undergraduate study (S-1) majoring in Computer Science based on a Decree of
                  the Ministry of National Education No 05/MPN/HK/1004 dated on 23 January 2004
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/logokemenag.png" alt="..." /></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2005</h4>
                <h4 class="subheading">Decree of Directorate General of Islamic Department</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">a Decree of Directorate General of Islamic Department No DJ.II/54/2005 dated on 28 March 2005.</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/quality.png" alt="..." /></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2014</h4>
                <h4 class="subheading">Good accreditaion level</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">
                  Based on a Decree of Indonesia’s National Accreditaion Board for Higher Education (Badan Akreditasi Nasional Perguruan Tinggi / BAN-PT) No 057/SK/BAN-PT/Akred/S/II/2014 dated on 14 February 2014, Jurusan Teknik Informatika
                  has been awarded B (good) accreditaion level.
                </p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/certified.png" alt="..." /></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2019-NOW</h4>
                <h4 class="subheading">Good accreditaion level</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Third accreditation of BAN-PT to reach B level (352) based on BAN-PT letter No. 1341/SK/BAN-PT/Akred/S/V/2019</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- Aster Team-->
    <section class="page-section bg-light" id="team">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="assets/img/team/asterremove.png" alt="..." />
              <h4>Aster People</h4>
              <p class="text-muted"></p>
              <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/aster_2021/"><i class="fab fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <p class="large text-muted">Buat kamu, semangat yaa! Udah masuk semua kelas kan?</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact-->
    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">Jika ada saran dan masukan, silahkan isi data di bawah ya</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" method="post" action="/send" enctype="multipart/form-data">
            @csrf
          <div class="row align-items-stretch mb-5">
            <div class="col-md-6">
              <div class="form-group">
                <!-- Name input-->
                <input class="form-control @error('name') is-invalid @enderror" id="name" name="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-group">
                <!-- Email address input-->
                <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-group mb-md-0">
                <!-- Phone number input-->
                <input class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group form-group-textarea mb-md-0">
                <!-- Message input-->
                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                @error('message')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
              </div>
            </div>
          </div>

        <button class="btn btn-primary btn-xl text-uppercase justify-center" type="submit">Send Message</button>
        </form>
      </div>
    </section>
    <!-- Footer-->
    <footer class="footer py-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-4 text-lg-start">Copyright &copy; Aster People</div>
          <div class="col-lg-4 my-3 my-lg-0">
            <a class="btn btn-dark btn-social mx-2" href="https://instagram.com/aster_2021/"><i class="fab fa-instagram"></i></a>
            <a class="btn btn-dark btn-social mx-2" href="https://github.com/PrasGi"><i class="fab fa-github"></i></a>
          </div>
          <div class="col-lg-4 text-lg-end">
            <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
            <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Matkul Modals-->
    <!-- AI modal popup-->

    @foreach ($data as $datas)
        <div class="portfolio-modal modal fade" id="matkulModal{{ $loop->index }}" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <br class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">{{ $datas[0]['mata_kuliah'] }}</h2>
                                <br>
                                <ul class="list-inline">
                                    <form action="">
                                        @foreach ($datas as $isi)
                                            <button class="btn btn-primary btn-l text-uppercase mt-1" data-bs-dismiss="modal" type="submit" formaction="{{ $isi['link_grupe'] }}">Kelas {{ $isi['kelas'] }}</button>
                                        @endforeach
                                    </form>
                                </ul>
                                </br>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               xlar about yt                                * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  </body>
</html>
