@extends("layout.master")
@section("meta")
    <title>روشنی رنگ | فروش انواع رنگ صنعتی</title>

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
    <div id="sabiowebherocarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="container">
                    <div class="row">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="/assets/img/slider_1.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-primary"><b>رنگ صنعتی</b> روشنی</h1>
                                <h3 class="h2 text-secondary">زیبایی را با روشنی کشف کنید!</h3>
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

    {{-- section 2 --}}
    <section class="mt-5">
        <div class="container">
            <div class="row text-center">
                <h3 class="">انواع رنگ ها</h3>
                <hr class="text-secondary pb-3">
                <div class="col-lg-4 service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="/assets/img/section2/anticorossion.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text ">رنگ ضد زنگ</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="/assets/img/section2/decorative.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text">رنگ دکوراتیو</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="/assets/img/section2/industrial.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text">رنگ ساختمانی</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="/assets/img/section2/pipeline.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text">رنگ لوله صنعتی</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
                            <img src="/assets/img/section2/powder2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-text paint-text">رنگ پودری</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 service-paint p-3" >
                    <a href="#" class="text-decoration-none">
                        <div class="card" style="width: 18rem;">
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

@endsection

