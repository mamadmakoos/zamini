
<!-- Start Footer -->
<!-- footer -->
<div class="site-footer text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="widget">
                    <div class="row">
                        <h5>نماد های اعتماد</h5>
                        <div class="col-12 p-3">
                            <img class="img-fluid" src="{{ asset('assets/img/namad/namad-etemad.png') }}" alt=""></div>

                    </div>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="widget">
                    <h5>دسترسی سریع</h5>
                    <ul class="list-unstyled links">
                        <li><a href="#">صفحه اصلی</a></li>
                        <li><a href="#">محصولات</a></li>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">تماس با ما</a></li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <div class="widget">
                    <h5>تماس با ما</h5>

                    <span>آدرس : <address class="d-inline">ایران ، تهران ، منطقه 1</address></span>
                    <ul class="list-unstyled links"  style="margin-top: 10px">
                        <li>
                            <i class="icon-phone2"></i>
                            <a  href="tel:02133138164">021-33138164</a>
                        </li>
                        <li>
                            <i class="icon-phone2"></i>
                            <a  href="tel:02133138165">021-33138165</a>
                        </li>
                        <li>
                            <i  class="icon-contact_mail"></i>
                            <a href="mailto:poosheshsazan@gmail.com">     poosheshsazan</a>
                        </li>
                    </ul>
                    <ul class="list-unstyled social">
                        <li>
                            <a href="#"><span class="icon-instagram"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-twitter"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-facebook"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-linkedin"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-pinterest"></span></a>
                        </li>
                        <li>
                            <a href="#"><span class="icon-dribbble"></span></a>
                        </li>
                    </ul>
                </div>
                <!-- /.widget -->
            </div>

            <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
    <div class="row mt-5">
        <div class="col-12 text-center">
            <!--
              **==========
              NOTE:
              Please don't remove this copyright link unless you buy the license here https://sabioweb.com/
              **==========
            -->



            <div class="d-inline-block">

                <a href="https://sabioweb.com/" target="_blank">دانا وب</a>
                طراحی و توسعه توسط شرکت و تیم
                |
                <p class="d-inline-block ">
                    کپی رایت
                    &copy;

                    <script>
                        document.write(new Date().getFullYear());
                    </script>

                </p>
            </div>


        </div>
    </div>
</div>


<!-- Start Script -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>
<script src="{{ asset('assets/js/aos.js')}}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('assets/js/navbar.js')}}"></script>
<script src="{{ asset('assets/js/counter.js')}}"></script>
<script src="{{ asset('assets/js/gallery.js')}}"></script>
<script src="{{ asset('assets/js/fixed-button.js')}}"></script>
<script src="{{ asset('assets/js/topbtn.js')}}"></script>
<script src="{{ asset('assets/js/faq.js')}}"></script>
<script src="{{ asset('assets/js/custom.js')}}"></script>
<script type="text/javascript">
    !function(){var i="d5qP0V",a=window,d=document;function g(){var g=d.createElement("script"),s="https://www.goftino.com/widget/"+i,l=localStorage.getItem("goftino_"+i);g.async=!0,g.src=l?s+"?o="+l:s;d.getElementsByTagName("head")[0].appendChild(g);}"complete"===d.readyState?g():a.attachEvent?a.attachEvent("onload",g):a.addEventListener("load",g,!1);}();
</script>

@yield("src")
<!-- End Script -->

<!-- End Footer -->




</body>
</html>
