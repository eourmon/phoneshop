@extends('layouts.master')
@section('content')
<div class="container">

    <div class="container text-center aboutusBackground-main py-4 mt-3">

        <div class="text-center aboutus-title mb-2">
            <h1 class="mt-2">About Us</h1>
        </div>
        <!-- <hr class="mhr" style="color:black;"> -->
        <div class="row align-items-center">
            <div class="col-4">
                <img class=""  style="width:15em; height:15em;"  src="{{asset('assets/img/RUPP_logo.png')}}">
            </div>
            <div class="col-8 aboutus-school-info mt-2">
                <h1>Royal University of Phnom Penh</h1>
                <strong><h2>Faculty of Science</h2></strong>
                <h3>Department of Information System</h2>
                <h4>Class E8 Year 4</h4>
                <h4>Academic Year 2022-2023</h4>
                <h4>Semester 1</h4>
                <h4>Subject: Web Application Development</h4>
                <h4>Lecturer: Chim Bunthoeurn</h4>
                <h4>Group 3 Assignment</h4>
            </div>
        </div>
    </div>

    
    </br>
    <div id="carouselExampleIndicators" class="carousel carousel-dark slide aboutusBackground-main mb-5 py-5" style="width:100%" data-bs-ride="carousel">
        <div class="text-center aboutus-title mb-5">
            <div class="team">
                <h2>Team Member</h2>
            </div>
        </div>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <!-- <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button> -->
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container py-0">
                    <div class="row mb-2">
                        <div class="col-12 col-md-4">
                            <div class="profile">
                                <div class="picture">
                                    <img src="{{asset('cus_service.jpg')}}" alt="">
                                </div>
                                <div class="title_profile">
                                    <p>
                                        <strong>Ly Naysereyvath</strong><br>
                                        Android Developer 
                                    </p>
                                </div>
                                <div class="team-social text-center mb-4">
                                    <ul>
                                        <li>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="profile">
                                <div class="picture">
                                    <img src="{{asset('assets/img/team/eourmon.jpg')}}" alt="">
                                </div>
                                <div class="title_profile">
                                    <p>
                                        <strong>Eour Mon</strong><br>
                                        Database Adminstrator 
                                    </p>
                                </div>
                                <div class="team-social text-center mb-4">
                                    <ul>
                                        <li>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="profile">
                                <div class="picture">
                                    <img src="{{asset('assets/img/team/brathna.jpg')}}" alt="">
                                </div>
                                <div class="title_profile">
                                    <p>
                                        <strong>Sam Brathna</strong><br>
                                        Web Design 
                                    </p>
                                </div>
                                <div class="team-social text-center mb-4">
                                    <ul>
                                        <li>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="carousel-item">
                <div class="container py-0">
                    <div class="row mb-2">
                        <div class="col-12 col-md-4">
                            <div class="profile">
                                <div class="picture">
                                    <img src="{{asset('assets/img/team/chomnan.JPG')}}" alt="">
                                </div>
                                <div class="title_profile">
                                    <p>
                                        <strong>Son Chomnam</strong><br>
                                        Web Design 
                                    </p>
                                </div>
                                <div class="team-social text-center mb-4">
                                    <ul>
                                        <li>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="profile">
                                <div class="picture">
                                    <img src="{{asset('assets/img/team/roth.jpg')}}" alt="">
                                </div>
                                <div class="title_profile">
                                    <p>
                                        <strong>Kim Chansereyroth</strong><br>
                                        Mobile Developer 
                                    </p>
                                </div>
                                <div class="team-social text-center mb-4">
                                    <ul>
                                        <li>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="profile">
                                <div class="picture">
                                    <img src="{{asset('assets/img/team/kuyeng.jpg')}}" alt="">
                                </div>
                                <div class="title_profile">
                                    <p>
                                        <strong>Kheang Kuyeng</strong><br>
                                        Web Design
                                    </p>
                                </div>
                                <div class="team-social text-center mb-4">
                                    <ul>
                                        <li>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="carousel-item">
                <div class="container py-0">
                    <div class="row mb-2">
                        <div class="col-12 col-md-4">
                            <div class="profile">
                                <div class="picture">
                                    <img src="{{asset('assets/img/team/thida.jpg')}}" alt="">
                                </div>
                                <div class="title_profile">
                                    <p>
                                        <strong>Vuth Sovathida</strong><br>
                                        Web Design 
                                    </p>
                                </div>
                                <div class="team-social text-center mb-4">
                                    <ul>
                                        <li>
                                        <a href="#"><i class="bi bi-facebook"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-twitter"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-instagram"></i></a>
                                        </li>
                                        <li>
                                        <a href="#"><i class="bi bi-line"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>

            <!-- <div class="carousel-item">
                <div class="container py-5">
                    <div class="row">
                        <div class="col position-relative">
                            <img class="profileImg position-absolute top-50 start-50 translate-middle" src="{{asset('assets/img/team/roth.jpg')}}" alt="">
                        </div>
                        <div class="col">
                            <h3>Kim Chansereyroth</h2>
                            <p>
                                <a href="https://www.facebook.com/chherry.milk.9">
                                    <i class="bi bi-facebook"></i>
                                    https://www.facebook.com/chherry.milk.9
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-linkedin"></i>
                                    https://www.linkedin.com/in/sereyroth-kim-132jh87w/
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-envelope"></i>
                                    kimchansereyroth@gmail.com
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-telephone-fill"></i>
                                    012 356 599
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container py-5">
                    <div class="row">
                        <div class="col position-relative">
                            <img class="profileImg position-absolute top-50 start-50 translate-middle" src="{{asset('assets/img/team/brathna.jpg')}}" alt="">
                        </div>
                        <div class="col">
                            <h3>Som Brathna</h2>
                            <p>
                                <a href="https://www.facebook.com/profile.php?id=100011238464410">
                                    <i class="bi bi-facebook"></i>
                                    https://www.facebook.com/profile.php?id=100011238464410
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-linkedin"></i>
                                    https://www.linkedin.com/in/brathna-som-23fasg9d/
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-envelope"></i>
                                    brathnasom@hotmail.com
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-telephone-fill"></i>
                                    010 715 816
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container py-5">
                    <div class="row">
                        <div class="col position-relative">
                            <img class="profileImg position-absolute top-50 start-50 translate-middle" src="{{asset('assets/img/team/thida.jpg')}}" alt="">
                        </div>
                        <div class="col">
                            <h3>Vuth Sovathida</h2>
                            <p>
                                <a href="https://www.facebook.com/besatha.vuth">
                                    <i class="bi bi-facebook"></i>
                                    https://www.facebook.com/besatha.vuth
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-linkedin"></i>
                                    https://www.linkedin.com/in/sovathida-vuth-a98dg7asd/
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-envelope"></i>
                                    thida1818@gmail.com
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-telephone-fill"></i>
                                    097 153 592
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container py-5">
                    <div class="row">
                        <div class="col position-relative">
                            <img class="profileImg position-absolute top-50 start-50 translate-middle" src="{{asset('assets/img/team/kuyeng.jpg')}}" alt="">
                        </div>
                        <div class="col">
                            <h3>Keangly Kuyeng</h2>
                            <p>
                                <a href="">
                                    <i class="bi bi-facebook"></i>
                                    https://www.facebook.com/kuyeng.keangly/
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-linkedin"></i>
                                    https://www.linkedin.com/in/kuyeng-keangly-a86daf12/
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-envelope"></i>
                                    kuyeng@gmail.com
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-telephone-fill"></i>
                                    070 908 738
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container py-5">
                    <div class="row">
                        <div class="col position-relative">
                            <img class="profileImg position-absolute top-50 start-50 translate-middle" src="{{asset('assets/img/team/chomnan.JPG')}}" alt="">
                        </div>
                        <div class="col">
                            <h3>Son Chomnan</h2>
                            <p>
                                <a href="">
                                    <i class="bi bi-facebook"></i>
                                    https://www.facebook.com/chomnan.son/
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-linkedin"></i>
                                    https://www.linkedin.com/in/chomnan-son-187wdfhkas/
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-envelope"></i>
                                    sonchomnan@gmail.com
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-telephone-fill"></i>
                                    012 256 473
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="container py-5">
                    <div class="row">
                        <div class="col position-relative">
                            <img class="profileImg position-absolute top-50 start-50 translate-middle" src="{{asset('assets/img/team/sereyvath.jpg')}}" alt="">
                        </div>
                        <div class="col">
                            <h3>Ly Nay Sereyvath</h2>
                            <p>
                                <a href="https://www.facebook.com/sereyvath.lynay/">
                                    <i class="bi bi-facebook"></i>
                                    https://www.facebook.com/sereyvath.lynay/
                                </a>
                            </p>
                            <p>
                                <a href="https://www.linkedin.com/in/naysereyvath-ly-1b9470200/">
                                    <i class="bi bi-linkedin"></i>
                                    https://www.linkedin.com/in/naysereyvath-ly-1b9470200/
                                </a>
                            </p>
                            <p>
                                <a href="lynaysereyvath7@gmail.com">
                                    <i class="bi bi-envelope"></i>
                                    lynaysereyvath7@gmail.com
                                </a>
                            </p>
                            <p>
                                <a href="">
                                    <i class="bi bi-telephone-fill"></i>
                                    092 299 667
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</div>
@endsection
