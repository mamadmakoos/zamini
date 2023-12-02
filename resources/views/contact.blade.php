@extends("layout.master")
@section("meta")
    <title>پوشش سازان پوشش سازان | فروش انواع رنگ صنعتی</title>

@endsection
@section("content")
    <!-- start section 1 -->
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
    <!-- end section 1 -->
    <!-- start ontact us Area ( contact section 2 ) -->
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
    <!-- end contact us Area ( contact section 2 ) -->

@endsection

