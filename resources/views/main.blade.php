@extends("layout.master")
@section("meta")
    <title> پوشش سازان | فروش انواع رنگ صنعتی</title>

@endsection
@section("content")


    <!-- Modal -->
    <div class="modal fade bg-white" id="sabioweb_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="جست و جو">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!-- Close Modal -->

    <!-- Start Banner Hero -->
    <div id="sabiowebherocarousel" class="bg-dark" data-bs-ride="carousel">
                <div class="container">
                    <div class="row text-white">
                        <div class="mx-auto col-md-8  col-lg-6 order-lg-last">
                            <img class="img-fluid" src="/assets/img/slider_1.png" alt="">
                        </div>
                        <div class="col-md-4 col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-primary"><b>رنگ صنعتی</b> پوشش سازان</h1>
                                <h3 class="h2 text-secondary">زیبایی را با پوشش سازان کشف کنید!</h3>
                                <p>
                                    مداد رنگی ها مشغول بودند به جز مداد سفید، هیچکس به او کار نمیداد، همه میگفتند : تو به هیچ دردی نمیخوری، یک شب که مداد رنگی ها تو سیاهی شب گم شده بودند، مداد سفید تا صبح ماه کشید مهتاب کشید و انقدر ستاره کشید که کوچک و کوچکتر شد صبح توی جعبه مداد رنگی جای خالی او با هیچ رنگی  پر نشد، به یاد هم باشیم شاید فردا ما هم در کنار هم نباشیم…
                                    طراح
                                    <a rel="sponsored" class="text-primary" href="https://sabioweb.com" target="_blank" >دانا وب</a> می باشد.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- End Banner Hero -->

    <!-- start section 2 -->
    <section class="mt-5">
        <div class="container">
            <div class="row text-center">
                <h3 class="text-primary">انواع رنگ ها</h3>
                <hr class="text-secondary pb-3 bar">
                <div class="col-md-6 col-lg-4  service-paint p-3" >
                    <a href="#" class="text-decoration-none ">
                        <div class="card shadow" style="width: 18rem;">
                            <img src="/assets/img/section2/anticorossion.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text ">رنگ ضد زنگ</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4  service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card shadow" style="width: 18rem;">
                            <img src="/assets/img/section2/decorative.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text">رنگ دکوراتیو</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4  service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card shadow" style="width: 18rem;">
                            <img src="/assets/img/section2/industrial.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text">رنگ ساختمانی</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4  service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card shadow" style="width: 18rem;">
                            <img src="/assets/img/section2/pipeline.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text">رنگ لوله صنعتی</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4  service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card shadow" style="width: 18rem;">
                            <img src="/assets/img/section2/powder2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text">رنگ پودری</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 col-lg-4  service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card shadow" style="width: 18rem;">
                            <img src="/assets/img/section2/floor.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text">رنگ زمین</h4>
                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>
    </section>
    <!-- end section 2 -->

    <!-- start section 3 -->
    <section id="contactsm" class="mt-3 mb-3 bg-dark">
        <div class="container p-5">
        <div class="row text-center text-secondary">
                <div class="col-md-9">
                    <h3 class="">برای دریافت مشاوره روی دکمه رو به رو کلیک کنید</h3>
                </div>
                <div class="col-md-3 text-center">
                    <a href="tel:02133138164" class="btn btn-outline-primary ">تماس بگیرید</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 3 -->

    <!-- start section 4 -->
    <section id="aboutsm" class="mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <img class="img-fluid" src="{{ asset('assets/img/about/about-us.jpg') }}" alt="">
                </div>
                <div class="col-md-6 col-lg-6 p-5 text-start align-self-center">
                    <h4 class="fw-bold text-primary">شرکت رنگ صنعتی پوشش سازان</h4>
                    <hr class="bar">
                    <p class=""> این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه را افزایش دهد، و طراحان به جای تایپ و نگارش متن می توانند تنها با یک کپی و پست این متن را در کادرهای مختلف جایگزین نمائید. این نوشته توسط سایت لورم ایپسوم فارسی نگاشته شده است.
                    </p>
                    <div class="text-end">
                        <a href="tel:02133138164" class="btn btn-outline-info text-dark">درباره ما</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 4 -->

    <!-- start section 5 -->
    <section id="banershome">
        <div class="container p-5">
            <div class="row p-2">
                <h4 class="text-center text-primary">
                    بنر های سایت
                </h4>
                <hr class="text-secondary">
                <div class="col-md-3 col-lg-3 p-1">
                    <a href="#" >
                        <img class="img-fluid bg-primary-subtle p-0 m-0" src="{{ asset('assets/img/SabioWeb/baner1.png  ') }}" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 p-1">
                   <a href="#" >
                       <img class="img-fluid bg-primary-subtle p-0 m-0" src="{{ asset('assets/img/SabioWeb/baner2.png  ') }}" alt="">
                   </a>
                </div>
                <div class="col-md-3 col-lg-3 p-1">
                    <a href="#" >
                        <img class="img-fluid bg-primary-subtle p-0 m-0" src="{{ asset('assets/img/SabioWeb/baner1.png  ') }}" alt="">
                    </a>
                </div>
                <div class="col-md-3 col-lg-3 p-1">
                    <a href="#" >
                        <img class="img-fluid bg-primary-subtle p-0 m-0" src="{{ asset('assets/img/SabioWeb/baner2.png  ') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- end section 5 -->

    <!-- Gallery Start -->
    <section id="gallery" class="pb-1">
        <div class="container-xxl pt-5">
            <div class="container">
                <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                    <p class="section-title bg-white text-center text-secondary px-3">گالری</p>
                    <h3 class="text-primary">نمونه کارهای مجموعه</h3>
                    <hr class="text-secondary mb-5">
                </div>
                <div class="row g-0">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="row g-0">
                            <div class="col-12">
                                <a class="d-block" href="{{ asset('assets/img/section2/decorative.jpg') }}" data-lightbox="gallery">
                                    <img class="img-fluid" src="{{ asset('assets/img/section2/decorative.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="d-block" href="{{ asset('assets/img/section2/anticorossion.jpg') }}" data-lightbox="gallery">
                                    <img class="img-fluid" src="{{ asset('assets/img/section2/anticorossion.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="row g-0">
                            <div class="col-12">
                                <a class="d-block" href="{{ asset('assets/img/section2/floor.jpg') }}" data-lightbox="gallery">
                                    <img class="img-fluid" src="{{ asset('assets/img/section2/floor.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="d-block" href="{{ asset('assets/img/section2/pipeline.jpg') }}" data-lightbox="gallery">
                                    <img class="img-fluid" src="{{ asset('assets/img/section2/pipeline.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="row g-0">
                            <div class="col-12">
                                <a class="d-block" href="{{ asset('assets/img/section2/powder2.jpg') }}" data-lightbox="gallery">
                                    <img class="img-fluid" src="{{ asset('assets/img/section2/powder2.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="d-block" href="{{ asset('assets/img/section2/industrial.jpg') }}" data-lightbox="gallery">
                                    <img class="img-fluid" src="{{ asset('assets/img/section2/industrial.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="row g-0">
                            <div class="col-12">
                                <a class="d-block" href="{{ asset('assets/img/section2/anticorossion.jpg') }}" data-lightbox="gallery">
                                    <img class="img-fluid" src="{{ asset('assets/img/section2/anticorossion.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="col-12">
                                <a class="d-block" href="{{ asset('assets/img/section2/powder2.jpg') }}" data-lightbox="gallery">
                                    <img class="img-fluid" src="{{ asset('assets/img/section2/powder2.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery End -->

    <!-- start ontact us Area ( home section 5 ) -->
    <section class="contact-area pt-5 pb-3 text-center">
        <div class="container">
            <div class="section-title">
                <h3 class="text-primary">تماس با ما</h3>
                <hr class="text-secondary"></hr>
                <p> هرگونه پیشنهاد را با ما درمیان بگذارید</p>
            </div>

            <div class="row p-5">
                <div class="col-lg-5 col-md-12 align-self-center">
                    <div class="contact-info">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <span>آدرس</span>
                                اتوبان  - ناکجا - ساختمان - پلاک 37 - طبقه
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <span>پست الکترونیک</span>
                                <a href="#">support@Posheshsazan.com</a>
                            </li>

                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-volume"></i>
                                </div>
                                <span>تلفن</span>
                                <a href="tel:02135868">021-35868</a>

                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-7 col-md-12">
                    <div class="w-75">
                        <br>
                        {{--<img class="img-fluid" src="{{ asset('assets/img/contact2.png') }}" alt="">--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact us Area ( home section 5 ) -->

@endsection


