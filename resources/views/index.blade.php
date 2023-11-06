<!doctype html>
<html lang="en" id="home">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Profile | Rani</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Playfair+Display:wght@400;600;700&family=Poppins:ital,wght@0,600;0,700;1,400&display=swap" rel="stylesheet">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>
  
  <body>
    <!-- Header -->
    <div class="header m-3">
    <nav class="navbar navbar-expand-lg pt-4">
      <div class="container">
        <a class="navbar-brand fw-bold " href="#";">My Profile.</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mx-auto text-center">
            <a class="nav-link" aria-current="page" href="#home">Home</a>
            <a class="nav-link" href="#skills">Skills</a>
            <a class="nav-link" href="#about">About Me</a>
            <a class="nav-link" href="#experience">Experience</a>
            <a class="nav-link" href="#academic">Academic</a>
          </div>
          <a href="#contact" class="btn btn-outline-danger rounded-5 d-lg-flex d-block mx-lg-0 mx-auto ">Contact Me</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col">
          <h1 class="fw-bold mb-4"> Hai! I am Dewi Maharani </h1>
          <p class="lh-lg mb-4">Usually I am called rani</p>
          <button class="btn btn-danger rounded-5 me-2">Hire Me</button>
          <button class="btn btn-outline-danger rounded-5">Know More</button>
          <div class="d-flex align-items-center mt-4">
            <i class="fa-solid fa-people-roof fs-1 me-3"></i>
            <p class="lh-lg m-0">I am a majoring in Information Systems<br> at Sepuluh Nopember Institute of Technology</p>
          </div>
        </div>
        <div class="col d-flex align-self-end position-relative">
          <img src="{{ asset('gambar/rani.png') }}"  alt="" class="d-block mx-auto">
          <img src="{{ asset('gambar/hero-bg.png') }}" alt="" class="position-absolute start-50 bottom-0 translate-middle-x">
          <img src="{{ asset('gambar/hero-awards.png') }}" class="position-absolute" alt="" />
            <img src="{{ asset('gambar/hero-projects.png') }}" alt="" class="position-absolute" />
        </div>
      </div>
    </div>
  </div>
    <!-- Header -->

    <!-- Skills -->
    <section class="skills d-flex align-items-center pt-md-0 pt-5" id="skills">
      <div class="container">
        <h1 class="fw-bold text-center mb-5" data-aos="fade-up" data-aos-duration="1000">Skills</h1>
        <div class="row d-flex justify-content-lg-evenly justify-content-between text-center">
          <div class="col col-md-3 col-12 mb-md-0 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <i class="fa-solid fa-layer-group"></i>
            <h6 class="opacity-50 my-1">4 Years +</h6>
            <h5 class="fw-bold">Language</h5>
            <p> Indonesia (Advanced), English (Intermediate), Javanese (Advanced)</p>
          </div>
          <div class="col col-md-3 col-12 mb-md-0 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <i class="fa-solid fa-pen-ruler"></i>
            <h6 class="opacity-50 my-1">2 Years +</h6>
            <h5 class="fw-bold">Skills</h5>
            <p> Leadership, Negotiation, Creative & Critical Thinking, Problem Solving, Event
                Organizing, Interpersonal Skills, Adaptive, Systemic Thinking, Decision Making, 
                Training Management</p>
          </div>
          <div class="col col-md-3 col-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
            <i class="fa-solid fa-pen-nib"></i>
            <h6 class="opacity-50 my-1">2 Years +</h6>
            <h5 class="fw-bold">Tools</h5>
            <p> Microsoft excel, Canva.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Skills -->

    <!-- About Me-->
    <section class="about m-3" id="about">
      <div class="container">
        <div class="row d-flex align-items-center justify-content-between row-cols-lg-2 row-cols-1">
          <div class="col align-self-end position-relative mx-auto pt-lg-0">
            <img src="{{ asset('gambar/aku.jpg') }}" alt="" width="570" height="700"/>
          </div>
          <div class="col col-lg-5 align-self-lg-center align-self-end pt-lg-0 text-lg-start text-center">
            <h1 class="fw-bold mb-4" data-aos="fade-up" data-aos-duration="1000">About Me</h1>
            <p class="mb-2" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">Dewi Maharani</p>
            <p data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">Malang, 17 Januari 2004</p>
            <p class="desc lh-lg mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
              I am an active student majoring in Information Systems at Sepuluh Nopember Institute of
              Technology who is currently studying semester 2. I am able to do programming and business 
              structure concepts. Through lectures and experience, I can have skills in a planning, 
              development and committee especially in the programming learning and training. Active on
              campus through organizational activities and each project team provide an opportunity for me
              to improve my leadership skills, time management discipline, communication and dare to try
              new things that are more challenging.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Experience-->
    <section class="projects min-vh-100 d-flex align-items-center" id="experience">
      <div class="container">
        <h1 class="text-center fw-bold mb-5" data-aos="fade-up" data-aos-duration="1000">Experience</h1>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
          <div class="col text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <div>
              <div id="carouselPaskibra" class="carousel slide w-100 mb-3">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselPaskibra" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselPaskibra" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselPaskibra" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('gambar/paski1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('gambar/paski2.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('gambar/paski3.jpg') }}"class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselPaskibra" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselPaskibra" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

            </div>
            <!-- <img src="assets/img/projects-1.jpg" alt="" class="w-100 mb-3" /> -->
            <h5 class="fw-bold">Paskibra of SMAN 1 Malang</h5>
            <h6 class="fw-bold">Secretarial Division Coordinator</h6>
            <p>I lead 8 of my members in secretarial division to taking care of and inventorying letter
              archives during the term of office, making permits for every event held by Paskibra
              SMAN 1 Malang</p>
          </div>
          <div class="col text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <div>
              <div id="carouselMalang" class="carousel slide w-100 mb-3">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselMalang" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselMalang" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselMalang" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{{ asset('gambar/pkm1.jpg') }}" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('gambar/pkm3.jpg') }}"  class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="{{ asset('gambar/pkm2.jpg') }}"  class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMalang" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMalang" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <!-- <img src="assets/img/projects-2.jpg" alt="" class="w-100 mb-3" /> -->
            <h5 class="fw-bold">Paskibra of Malang City</h5>
            <h6>PSDM Division</h6>
            <p> I organize activities to achieve agenda effectiveness, develop work programs, and
              improve human resource in the organization.</p>
          </div>
          <div class="col text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
            <div id="carouselKetiga" class="carousel slide w-100 mb-3">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselKetiga" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselKetiga" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselKetiga" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('gambar/arjuna1.jpg') }}"class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('gambar/arjuna2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('gambar/arjuna3.jpg') }}" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselKetiga" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselKetiga" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>            
            <!-- <img src="assets/img/projects-3.jpg" alt="" class="w-100 mb-3" /> -->
            <h5 class="fw-bold">LKBB ARJUNA 2021</h5>
            <h6 class="fw-bold">Secretary</h6>
            <p> made a proposal for an activity event and made an accountability report when the event
              was finished
              </p>
          </div>
          <div class="col text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="900">
            <div id="carouselKeempat" class="carousel slide w-100 mb-3">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselKeempat" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselKeempat" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselKeempat" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('gambar/soy1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('gambar/soy2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('gambar/soy3.jpg') }}" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselKeempat" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselKeempat" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>  
            <!-- <img src="assets/img/projects-4.jpg" alt="" class="w-100 mb-3" /> -->
            <h5 class="fw-bold">State of Youth Malang</h5>
            <h6 class="fw-bold">Event Division</h6>
            <p>Drafting the concept of events and activities carried out by State of Youth Malang,
              carrying out acts of activism such as lobbying and aspirations as a form of advocacy</p>
          </div>
          <div class="col text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1100">
            <div id="carouselKelima" class="carousel slide w-100 mb-3">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselKelima" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselKelima" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselKelima" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('gambar/ise1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('gambar/ise3.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('gambar/ise4.jpg') }}" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselKelima" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselKelima" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>            
            <!-- <img src="assets/img/projects-5.jpg" alt="" class="w-100 mb-3" /> -->
            <h5 class="fw-bold">ISE ITS 2023</h5>
            <h6 class="fw-bold">Public Relations Division Staff</h6>
            <p> Plan and carry out roadshow activities to target schools and  conduct media partner approaches, as well as make schedules and agendas of other 
              events</p>
          </div>
          <div class="col text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1300">
            <div id="carouselKeenam" class="carousel slide w-100 mb-3">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselKeenam" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselKeenam" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselKeenam" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="{{ asset('gambar/gerigi1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('gambar/gerigi2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="{{ asset('gambar/gerigi3.jpg') }}" class="d-block w-100" alt="...">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselKeenam" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselKeenam" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            
            <!-- <img src="assets/img/projects-6.jpg" alt="" class="w-100 mb-3" /> -->
            <h5 class="fw-bold">GERIGI ITS 2023</h5>
            <h6 class="fw-bold">Secretarial Division Staff</h6>
            <p> Coordinate with mentor staff to work together in all activities carried out with GERIGI 
              ITS 2023 participants according to the division of small groups that have been 
              divided
              </p>
          </div>
        </div>
      </div>
    </section>
    <!-- Experience -->

    <!-- Academic -->
    <section class="academic m-3" id="academic">
      <div class="container">
        <h1 class="fw-bold text-center mb-5" data-aos="fade-up" data-aos-duration="1000" >Academic</h1>
        <div class="row row-cols-lg-3 row-cols-1 gx-lg-5 gx-0 px-sm-0 px-2">
          <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
            <h5 class="fw-bold mb-3 border-bottom border-danger pb-2 border-2">SMP Negeri 8 Malang</h5>
            <p>Average School Exam Score 36.00</p>
          </div>
          <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
            <h5 class="fw-bold mb-3 border-bottom border-info pb-2 border-2">SMA Negeri 1 Malang</h5>
            <p>Average School Exam Score 86.93.</p>
          </div>
          <div class="col mb-lg-0 mb-3" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
            <h5 class="fw-bold mb-3 border-bottom border-success pb-2 border-2">Information Systems, ITS</h5>
            <p>Bachelor of Information Systems – GPA 3.64 / 4,00 I Total Credits : 18</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Academic -->

    <!-- CONTACT -->
    <section class="contact py-5" id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="contact-form">
              <h2 class="mb-4">Contact Me</h2>

              <form action="" method="get" id="myForm">
                <div class="row">
                  <div class="col-lg-6 col-12">
                    <input
                      type="text"
                      class="form-control"
                      name="first-name"
                      placeholder="First Name"
                      id="first-name"
                      required
                    />
                  </div>

                  <div class="col-lg-6 col-12">
                    <input
                      type="text"
                      class="form-control"
                      name="last-name"
                      placeholder="Last name"
                      id="last-name"
                      required
                    />
                  </div>

                  <div class="col-12">
                    <input
                      type="number"
                      class="form-control"
                      name="nrp"
                      placeholder="NRP"
                      id="nrp"
                      required
                    />
                  </div>

                  <div class="col-12">
                    <input
                      type="number"
                      class="form-control"
                      name="phone"
                      placeholder="Phone Number"
                      id="phone"
                      required
                    />
                  </div>

                  <div class="col-12">
                    <textarea
                      name="message"
                      rows="6"
                      class="form-control"
                      id="message"
                      placeholder="Message"
                    ></textarea>
                  </div>

                  <div class="ml-lg-auto col-lg-5 col-12">
                    <input
                      type="submit"
                      class="form-control submit-btn"
                      value="Send Button"
                    />
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- CONTACT -->

    <!-- Footer -->
    <section class="footer d-flex align-items-center py-lg-0 py-5 mx-3">
      <div class="container">
        <div class="row d-flex justify-content-between">
          <div class="col col-lg-5 col-12 mb-lg-0 mb-4">
            <h3 class="fw-bold">My Profile.</h3>
            <p class="mb-0">Thank you for visiting my profile, nice to meet you and see you soon</p>
          </div>
          <div class="col col-lg-2 col-12 d-flex flex-column mb-lg-0 mb-4">
            <h5 class="fw-bold">Menu</h5>
            <a class="text-decoration-none mb-2" href="#home">Home</a>
            <a class="text-decoration-none mb-2" href="#skills">Skills</a>
            <a class="text-decoration-none mb-2" href="#aboutMe">About Me</a>
            <a class="text-decoration-none mb-2" href="#experience">Experience</a>
            <a class="text-decoration-none" href="#academic">Academic</a>
          </div>
          <div class="col col-lg-2 col-12 d-flex flex-column">
            <h5 class="fw-bold">Follow Me</h5>
            <a class="text-decoration-none mb-2" href="https://www.instagram.com/dwmhr1.2_/"target="_blank">Instagram</a>
            <a class="text-decoration-none mb-2" href="https://www.linkedin.com/in/dewi-maharani-274366209/"target="_blank">LinkedIn</a>
            <a class="text-decoration-none" href="https://twitter.com/pinocio12_"target="_blank">Twitter</a>
          </div>
          <div class="col col-lg2 col-12 d-flex flex-column">
            <a class="fw-bold" href="https://www.instagram.com/dwmhr1.2_/"target="_blank">Contact Me.</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Footer -->

    <!-- Copyright -->
    <section class="copyright mx-3">
      <div class="container">
        <div class="row">
          <div class="col">
            <p class="text-center mb-0 py-3">UTS PWEB <span class="fw-bold">Dewi Maharani</span> 5026221046</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Copyright -->

    <!-- Loader -->
    <div class="container-loader">
      <div class="spinner-grow text-danger" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    <!-- Loader -->

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>