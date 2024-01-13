@extends("layout.master")
@section("meta")
     <title> پوشش سازان </title>

@endsection
@section("content")

    {{--<div class="mainsl">

        <!-- Don't wrap targets in parent -->
        <s id="s1"></s>
        <s id="s2"></s>
        <s id="s3"></s>
        <s id="s4"></s>

        <div
            class="mainslider">
            <div
                style="">
                <img
                    src="{{
                     asset
                     ('assets/img/slider/slider1.3.jpg') }}" alt="Image" class="img-fluid"  >
            </div>
            <div>
                <img
                    src="{{
                     asset
                     ('assets/img/slider/slider1.4.jpg') }}" alt="Image" class="img-fluid"  >            </div>
            <div>
                <img
                    src="{{
                     asset
                     ('assets/img/slider/slider1.5.jpg') }}" alt="Image" class="img-fluid"  >
            </div>
            <div>
                <h2>Slide 4</h2>
            </div>
        </div>

        <div class="prevNext">
            <div><a href="#s4"></a><a href="#s2"></a></div>
            <div><a href="#s1"></a><a href="#s3"></a></div>
            <div><a href="#s2"></a><a href="#s4"></a></div>
            <div><a href="#s3"></a><a href="#s1"></a></div>
        </div>

        <div class="bullets">
            <a href="#s1">1</a>
            <a href="#s2">2</a>
            <a href="#s3">3</a>
            <a href="#s4">4</a>
        </div>

    </div>--}}

    <!-- slider-main--------------------------->
    <div class="slider-main-container d-block">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/slider/slider1.3.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/slider/slider1.3.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/slider/slider1.3.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/slider/slider1.3.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/slider/slider1.3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
               data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
               data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- about -->
    <div class="about section section-4">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading text-orange mb-4">
                        درباره شرکت پوشش سازان نوین
                    </h2>
                    <p class="text-black-50">
                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5" dir="rtl">
                <div class="col-lg-6 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="{{ asset('assets/img/hero_bg_3.jpg') }}" alt="Image" class="img-fluid" >
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <span class="h3">خدمات شرکت</span>
                        <p>این یک نوشته آزمایشی است که به طراحان و برنامه نویسان کمک میکند تا این عزیزان با بهره گیری از این نوشته تستی و آزمایشی بتوانند نمونه تکمیل شده از پروژه و طرح خودشان را به کارفرما نمایش دهند، استفاده از این متن تستی می تواند سرعت پیشرفت پروژه را افزایش دهد، و طراحان به جای تایپ و نگارش متن می توانند تنها با یک کپی و پست این متن را در کادرهای مختلف جایگزین نمائید. این نوشته توسط سایت لورم ایپسوم فارسی نگاشته شده است.</p>
                    </div>
                    <div class="row" >
                        <div class="d-flex feature-h">
                            <span class="wrap-icon m-3">
                                <span class="icon-home2"></span>
                            </span>
                            <div class="feature-text">
                                <span class="heading text-orange" >لورم ایپسوم</span>
                                <p class="text-black-50">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                                </p>
                            </div>

                        </div>

                        <div class="d-flex feature-h" dir="ltr">
                            <span class="wrap-icon m-3">
                               <span class="icon-person"></span>
                  </span>
                            <div class="feature-text" dir="rtl">
                                <span class="heading text-orange">لورم ایپسوم</span>
                                <p class="text-black-50">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.

                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- category -->
    <div class="category section bg-light">
        <div class="container">
            <div class="row section-counter">
                <h3 class="text-center">دسته بندی های شرکت پوشش سازان</h3>
                <hr class="text-orange">
                <div class="col-12 col-lg-4 mt-3" data-aos="fade-up">
                    <div class="counter-wrap mb-5 shadow mb-lg-0">
                        <img src="{{ asset('assets/img/section/industrial.jpg') }}" class="img-fluid">
                        <span class="number">
                                 <a href="#" class="text-primary">رنگ صنعتی</a>
                             </span>
                        <!--<a href="#" class="caption">بیشتر</a>-->
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-3" data-aos="fade-up">
                    <div class="counter-wrap mb-5 shadow mb-lg-0">

                        <!-- <span class="number">
                             <span class="countup text-primary">2181</span>
                         </span>-->
                        <img src="{{ asset('assets/img/section/anticorossion.jpg') }}" class="img-fluid">
                        <span class="number">
                                <a href="#" class=" text-primary">رنگ ضد زنگ</a>
                            </span>
                        <!--<a href="#" class="caption">بیشتر</a>-->
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-3" data-aos="fade-up">
                    <div class="counter-wrap mb-5 shadow mb-lg-0">
                        <img src="{{ asset('assets/img/section/powder2.jpg') }}" class="img-fluid">

                        <span class="number">
                                <a href="#" class=" text-primary">رنگ پودری</a>
                             </span>
                        <!--<a href="#" class="caption">بیشتر</a>-->
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-3" data-aos="fade-up">
                    <div class="counter-wrap mb-5 shadow mb-lg-0">
                        <img src="{{ asset('assets/img/section/cat1.jpg') }}" class="img-fluid">
                        <span class="number">
                                <a href="#" class="text-primary">رنگ ساختمانی</a>
                            </span>
                        <!--<a href="#" class="caption">بیشتر</a>-->
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-3" data-aos="fade-up">
                    <div class="counter-wrap mb-5 shadow mb-lg-0">
                        <img src="{{ asset('assets/img/section/floor.jpg') }}" class="img-fluid">
                        <span class="number">
                                <a href="#" class="text-primary">رنگ زمین</a>
                            </span>
                        <!--<a href="#" class="caption">بیشتر</a>-->
                    </div>
                </div>
                <div class="col-12 col-lg-4 mt-3" data-aos="fade-up">
                    <div class="counter-wrap mb-5 shadow mb-lg-0">
                        <img src="{{ asset('assets/img/section/pipeline.jpg') }}" class="img-fluid">
                        <span class="number">
                                <a href="#" class="text-primary">رنگ لوله صنعتی</a>
                            </span>
                        <!--<a href="#" class="caption">بیشتر</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- products -->
    <div id="products" class="section">
        <div class="container">
            <div class="row mb-5  text-center align-items-center" dir="rtl">
                <div class="col-lg-6 ">
                    <h2 class="font-weight-bold text-orange heading">
                        محصولات اخیر
                    </h2>
                </div>
                <div class="col-lg-6 text-lg-start">
                    <p>
                        <a
                            href="#"
                            target="_blank"
                            class="btn btn-primary  py-3 px-4">تمامی محصولات</a>
                    </p>
                </div>
                <hr class="text-orange">
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="products-slider-wrap">
                        <div  class="products-slider">

                            <div class="products-item">
                                <a href="#" class="img">
                                    <img src="{{ asset('assets/img/home/products/poudr/still-roz-gold.webp') }}" alt="Image" class="img-fluid"  >
                                </a>

                                <div class="products-content text-center">
                                    <div class="price mb-2"><span>تومان 1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50 text-end">رنگ پودری در صنایع کاربر زیادی دارد</span>
                                        <span class="city d-block mb-3">رنگ پودری</span>


                                        <!--<span>ویژگی محصول</span>
                                      <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                          <span class="icon-bed me-2"></span>
                                          <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                          <span class="icon-bath me-2"></span>
                                          <span class="caption">2 baths</span>
                                        </span>
                                      </div>-->

                                        <a href="#" class="btn btn-primary py-2 px-3"> مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="products-item">
                                <a href="#" class="img">
                                    <img src="{{ asset('assets/img/home/products/poudr/blue.webp')  }}" alt="Image" class="img-fluid" >
                                </a>

                                <div class="products-content text-center">
                                    <div class="price mb-2"><span>تومان 1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50 text-end">رنگ پودری در صنایع کاربر زیادی دارد</span>
                                        <span class="city d-block mb-3">رنگ پودری</span>


                                        <!--<span>ویژگی محصول</span>
                                      <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                          <span class="icon-bed me-2"></span>
                                          <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                          <span class="icon-bath me-2"></span>
                                          <span class="caption">2 baths</span>
                                        </span>
                                      </div>-->

                                        <a href="#" class="btn btn-primary py-2 px-3"> مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="products-item">
                                <a href="#" class="img">
                                    <img src="{{ asset('assets/img/home/products/poudr/blue.webp')}}" alt="Image" class="img-fluid" >
                                </a>

                                <div class="products-content text-center">
                                    <div class="price mb-2"><span>تومان 1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50 text-end">رنگ پودری در صنایع کاربر زیادی دارد</span>
                                        <span class="city d-block mb-3">رنگ پودری</span>


                                        <!--<span>ویژگی محصول</span>
                                      <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                          <span class="icon-bed me-2"></span>
                                          <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                          <span class="icon-bath me-2"></span>
                                          <span class="caption">2 baths</span>
                                        </span>
                                      </div>-->

                                        <a href="#" class="btn btn-primary py-2 px-3"> مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

          {{--                  <div class="products-item">
                                <a href="#" class="img">
                                    <img src="../../../public/assets/themeIMG/home/products/poudr/still-bronze.webp" alt="Image" class="img-fluid" >
                                </a>

                                <div class="products-content text-center">
                                    <div class="price mb-2"><span>تومان 1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50 text-end">رنگ پودری در صنایع کاربر زیادی دارد</span>
                                        <span class="city d-block mb-3">رنگ پودری</span>


                                        <!--<span>ویژگی محصول</span>
                                      <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                          <span class="icon-bed me-2"></span>
                                          <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                          <span class="icon-bath me-2"></span>
                                          <span class="caption">2 baths</span>
                                        </span>
                                      </div>-->

                                        <a href="#" class="btn btn-primary py-2 px-3"> مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="products-item">
                                <a href="#" class="img">
                                    <img src="../../../public/assets/themeIMG/home/products/poudr/pink.webp" alt="Image" class="img-fluid" >
                                </a>

                                <div class="products-content text-center">
                                    <div class="price mb-2"><span>تومان 1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50 text-end">رنگ پودری در صنایع کاربر زیادی دارد</span>
                                        <span class="city d-block mb-3">رنگ پودری</span>


                                        <!--<span>ویژگی محصول</span>
                                      <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                          <span class="icon-bed me-2"></span>
                                          <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                          <span class="icon-bath me-2"></span>
                                          <span class="caption">2 baths</span>
                                        </span>
                                      </div>-->

                                        <a href="#" class="btn btn-primary py-2 px-3"> مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="products-item">
                                <a href="#" class="img">
                                    <img  src="../../../public/assets/themeIMG/home/products/poudr/purple.webp" alt="Image" class="img-fluid" >
                                </a>

                                <div class="products-content text-center">
                                    <div class="price mb-2"><span>تومان 1,291,000</span></div>
                                    <div>
                                        <span class=" text-endd-block mb-2 text-black-50">رنگ پودری در صنایع کاربر زیادی دارد</span>
                                        <span class="city d-block mb-3">رنگ پودری</span>


                                        <!--<span>ویژگی محصول</span>
                                      <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                          <span class="icon-bed me-2"></span>
                                          <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                          <span class="icon-bath me-2"></span>
                                          <span class="caption">2 baths</span>
                                        </span>
                                      </div>-->

                                        <a href="#" class="btn btn-primary py-2 px-3"> مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="products-item">
                                <a href="#" class="img">
                                    <img src="../../../public/assets/themeIMG/home/products/poudr/yellow.webp" alt="Image" class="img-fluid" >
                                </a>

                                <div class="products-content text-center">
                                    <div class="price mb-2"><span>تومان 1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50 text-end">رنگ پودری در صنایع کاربر زیادی دارد</span>
                                        <span class="city d-block mb-3">رنگ پودری</span>

                                        <!--<span>ویژگی محصول</span>
                                      <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                          <span class="icon-bed me-2"></span>
                                          <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                          <span class="icon-bath me-2"></span>
                                          <span class="caption">2 baths</span>
                                        </span>
                                      </div>-->

                                        <a href="#" class="btn btn-primary py-2 px-3"> مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="products-item">
                                <a href="#" class="img">
                                    <img src="../../../public/assets/themeIMG/home/products/poudr/red.webp" alt="Image" class="img-fluid" >
                                </a>

                                <div class="products-content text-center">
                                    <div class="price mb-2"><span>تومان 1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50 text-end">رنگ پودری در صنایع کاربر زیادی دارد</span>
                                        <span class="city d-block mb-3">رنگ پودری</span>


                                        <!--<span>ویژگی محصول</span>
                                      <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                          <span class="icon-bed me-2"></span>
                                          <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                          <span class="icon-bath me-2"></span>
                                          <span class="caption">2 baths</span>
                                        </span>
                                      </div>-->

                                        <a href="#" class="btn btn-primary py-2 px-3"> مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="products-item">
                                <a href="#" class="img">
                                    <img src="../../../public/assets/themeIMG/home/products/poudr/still-roz-gold.webp" alt="Image" class="img-fluid" >
                                </a>

                                <div class="products-content text-center">
                                    <div class="price mb-2"><span>تومان 1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50 text-end">رنگ پودری در صنایع کاربر زیادی دارد</span>
                                        <span class="city d-block mb-3">رنگ پودری</span>


                                        <!--<span>ویژگی محصول</span>
                                      <div class="specs d-flex mb-4">
                                        <span class="d-block d-flex align-items-center me-3">
                                          <span class="icon-bed me-2"></span>
                                          <span class="caption">2 beds</span>
                                        </span>
                                        <span class="d-block d-flex align-items-center">
                                          <span class="icon-bath me-2"></span>
                                          <span class="caption">2 baths</span>
                                        </span>
                                      </div>-->

                                        <a href="#" class="btn btn-primary py-2 px-3"> مشاهده بیشتر</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->--}}
                        </div>

                        <div
                            id="products-nav"
                            class="controls"
                            tabindex="0"
                            aria-label="Carousel Navigation">
                    <span class="prev"
                          data-controls="prev"
                          aria-controls="property"
                          tabindex="-1">قبلی</span>
                            <span class="next"
                                  data-controls="next"
                                  aria-controls="property"
                                  tabindex="-1">بعدی</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery -->
    <div class="slider-gallery bg-light">
        <h3 class="text-orange mb-5">گالری نمونه کار ها</h3>

        <div class="gallery">

            <div class="innerContainer gallery-active">
                <div class="slider">
                    <div class="slide">
                        <div style="background:url('{{ asset('assets/img/section/pipeline.jpg')}}')"></div>
                    </div>
                    <div class="slide">
                        <div style="background:url('{{ asset('assets/img/section/powder2.jpg')}}')"></div>
                    </div>
                    <div class="slide">
                        <div style="background:url('{{ asset('assets/img/section/anticorossion.jpg')}}')"></div>
                    </div>
                    <div class="slide">
                        <div style="background:url('{{ asset('assets/img/section/cat1.jpg')}}')"></div>
                    </div>
                    <div class="slide">
                        <div style="background:url('{{ asset('assets/img/section/industrial.jpg')}}')"></div>
                    </div>
                    <div class="slide">
                        <div style="background:url('{{ asset('assets/img/section/cat3.jpg')}}')"></div>
                    </div>

                </div>

                <div class="handles">
          <span class="prev">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15.0001 19.92L8.48009 13.4C7.71009 12.63 7.71009 11.37 8.48009 10.6L15.0001 4.07999" stroke="rgb(55 65 81/1)" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
                    <span class="next">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M8.99991 19.92L15.5199 13.4C16.2899 12.63 16.2899 11.37 15.5199 10.6L8.99991 4.07999" stroke="rgb(55 65 81/1)" stroke-width="3" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
          </span>
                </div>
                <div class="dots">
                </div>
            </div>
        </div>
    </div>
    <!-- contact & faQ  -->
    <div class="section">
        <div class="container">
            <div class="row" dir="rtl">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
                    <h4 class="mb-md-5">سوالات متداول</h4>
                    <div class="faq">
                        <button class="accordion text-end ">سوال اول</button>
                        <div class="panel p-3">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>

                        <button class="accordion text-end">سوال دوم</button>
                        <div class="panel p-3">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>

                        <button class="accordion text-end">سوال سوم</button>
                        <div class="panel p-3">
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <form action="#">
                        <div class="row">
                            <h4 class="mb-md-5">فرم تماس با ما</h4>

                            <div class="col-6 mb-3">
                                <input type="text" class="form-control" placeholder="نام و نام خانوادگی">
                            </div>
                            <div class="col-6 mb-3">
                                <input type="email" class="form-control" placeholder="ایمیل">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="text" class="form-control" placeholder="موضوع">
                            </div>
                            <div class="col-12 mb-3">
                                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="پیام شما"></textarea>
                            </div>

                            <div class="col-12">
                                <input type="submit" value="ارسال" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- fixed catalog button   -->
    <div class='download-catalog'>
        <a class="btn">دانلود کاتالوگ</a>
    </div>
    <!-- fixed contact button   -->
    <div class='contact-action'>
        <div class='item' onclick="actionToggle();"> <i class="icon-help"></i> </div>
        <span class='item'><img class="img-fluid" src="{{ asset('assets/img/icons/telegram.webp') }}"></span>
        <span class='item'><img class="img-fluid" src="{{ asset('assets/img/icons/call.png') }}"> </span>
        <span  class='item' onclick="topFbtn()" id="topbtn" title="Go to top"> <i class="icon-arrow-up"></i> </span>
        <span class='item d-none d-md-flex '><img class="img-fluid" src="{{ asset('assets/img/icons/whatsapp.webp') }}"> </span>
    </div>





@endsection

@section("src")
<script>

</script>
@endsection
