@include('awesomemagazine/layouts/header')
    <main>


            <table class="table">
                            
                    <thead>
                        <tr>
                            <th>idActualities</th>
                            <th>Titre</th>
                            <th>Descriptions</th>
                            <th>Images</th>
                            <th>Categorie</th>
                            <th>Publication</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($actualities as $actuality)
                        <tr>
                            <td>{{$actuality->idActualities}}</td>
                            <td>{{$actuality->titre}}</td>
                            <td>{{$actuality->description}}</td>
                            {{-- <img class="images" id="image" src="{{ $actuality->image }}" /> --}}
                           <td> <img src="{{ asset('storage/'.$actuality->image) }}" alt="..."> </td>
                            {{-- <td>{{$actuality->image}}</td> --}}
                            <td>{{$actuality->actuality_cat->categorie}}</td>

                            <td>{{$actuality->publication}}</td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>

                
        <!-- Banner News Area Start -->
        <div class="banner-news">
            <div class="container-fluid p-0">
                <div class="banner-slider-active no-gutters ">
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap1.png" alt="">
                                    <!--video iocn -->
                                    <div class="video-icon">
                                            <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a> <br>

                                  <br><br>  <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum enim optio dignissimos repudiandae </p>
                                    </div>
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Calling time on irresponsible junk food advertising to children</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap2.png" alt="">
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                   <h3><a href="post_details.html">The pomelo case: scope of plant variety rights in China</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap3.png" alt="">
                                    <!--video iocn -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                        <br><br>  <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum enim optio dignissimos repudiandae </p>
                                   
                                    </div>
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Valuable lessons to take away from COVID-19</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap4.png" alt="">
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Building on consumer preferences shaped by the pandemic</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sliders">
                        <div class="single-baner-nw mb-30 text-center">
                            <div class="banner-img-cap">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/banner-cap2.png" alt="">
                                    <!--video iocn -->
                                    <div class="video-icon">
                                        <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                        <br><br>  <p style="color:white;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum enim optio dignissimos repudiandae </p>
                                   
                                    </div>
                                </div>
                                <div class="banner-cap">
                                    <p>Trending</p>
                                    <h3><a href="#">Building on consumer preferences shaped by the pandemic</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner News Area End -->
        <!-- Latest Posts Area -->
        <div class="latest-posts pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Latest Posts</h2>
                        </div>
                    </div>
                </div>
                <!-- Slider -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="latest-slider">
                            <div class="slider-active">
                                <!-- Single slider -->
                                <div class="single-slider">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img text-center">
                                            <img src="assets/img/gallery/latest-post.png" alt="">
                                            <div class="trend-top-cap">
                                                <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Design</span>
                                                <h2><a href="post_details.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Calling time on irresponsible junk food advertising to children</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single slider -->
                                <div class="single-slider">
                                    <div class="trending-top mb-30">
                                        <div class="trend-top-img text-center">
                                            <img src="assets/img/gallery/latest-post.png" alt="">
                                            <div class="trend-top-cap">
                                                <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Design</span>
                                                <h2><a href="post_details.html"  data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Calling time on irresponsible junk food advertising to children</a></h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- smoll items -->
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30 ">
                                    <div class="banner-img-cap2">
                                        <div class="banner-img">
                                            <img src="assets/img/gallery/latest-post2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30">
                                    <div class="banner-img-cap2">
                                        <div class="banner-cap2 banner-cap3">
                                            <p>Trending</p>
                                           <h3><a href="post_details.html">The pomelo case: scope of plant variety rights in China</a></h3>
                                            <p class="normal">Passion for their subjects from the subtleties of regional Thai home cooking to the intersection of food and queer culture.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30">
                                    <div class="banner-img-cap2">
                                        <div class="banner-cap2 banner-cap3">
                                            <p>Technology</p>
                                            <h3><a href="post_details.html">Valuable lessons to take away from COVID-19</a></h3>
                                            <p  class="normal">Passion for their subjects from the subtleties of regional Thai home cooking to the intersection of food and queer culture.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6">
                                <div class="single-baner-nw2 mb-30 ">
                                    <div class="banner-img-cap2">
                                        <div class="banner-img">
                                            <img src="assets/img/gallery/latest-post02.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-baner-nw2 mb-30 text-center">
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/latest-post3.png" alt="">
                                </div>
                                <div class="banner-cap2">
                                    <p>Technology</p>
                                    <h3><a href="post_details.html">Calling time on irresponsible junk food advertising to children</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-baner-nw2 mb-30 text-center">
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/latest-post4.png" alt="">
                                </div>
                                <div class="banner-cap2">
                                    <p>Design</p>
                                    <h3><a href="post_details.html">Researchers control cattle microbiome  to reduce greenhouse gases</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Posts End-->
        <!-- Video Area Start -->
        {{-- <div class="video-area">
            <div class="container-fluid">
                <div class="video-wrapper">
                    <div class="left-content">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="section-tittle section-tittle2 mb-35">
                                    <h2 class="mb-10">Videos</h2>
                                    <p>TOP OF THE WEEK PLAYLIST</p>
                                    <p class="video-cap">
                                        Calling time on<br> irresponsible junk<br> food advertising
                                    </p>
                                    <small>Business / 5.0m</small>
                                </div>
                            </div>
                            <!--Left Single -->
                            <div class="col-lg-6 col-md-6">
                                <div class="single-baner-nw4 mb-30">
                                    <div class="banner-img-cap4">
                                        <div class="banner-img4">
                                            <img src="assets/img/gallery/video_img1.png" alt="">
                                            <!--video iocn -->
                                            <div class="video-icon video-icon2">
                                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="banner-cap4">
                                            <h3><a href="post_details.html">Editors with strong points  of view</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-baner-nw4 mb-30">
                                    <div class="banner-img-cap4">
                                        <div class="banner-img4">
                                            <img src="assets/img/gallery/video_img2.png" alt="">
                                            <!--video iocn -->
                                            <div class="video-icon video-icon2">
                                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="banner-cap4">
                                            <h3><a href="post_details.html">Dill is part of an unexpected groundswell</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-content">
                        <div class="video-img">
                            <img src="assets/img/gallery/video_bg.png" alt="">
                            <!--video iocn -->
                            <div class="video-icon video-icon2">
                                <a class="popup-video btn-icon" href="https://www.youtube.com/watch?v=up68UAfH0d0" data-animation="bounceIn" data-delay=".4s"><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Video Area End -->
        <!-- Nwes slider Start -->
        <div class="nes-slider-area pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="news-slider-active">
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider2.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider3.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider4.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider1.png" alt=""></a>
                                </div>
                            </div>
                            <div class="single-news-slider">
                                <div class="news-img">
                                    <a href="category.html"><img src="assets/img/gallery/news-slider2.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- Nwes slider End -->
        <!-- Top Posts Start -->
        <div class="top-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Top Posts</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-lg-between">
                    <div class="col-lg-8 col-md-8">
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot1.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html"><h4>The pomelo case: scope of plant variety rights in China</h4></a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot2.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html"><h4>The pomelo case:scope of plant variety rights in China</h4></a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot3.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html"><h4>The pomelo case:scope of plant variety rights in China</h4></a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot4.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html"><h4>The pomelo case:scope of plant variety rights in China</h4></a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                        <!-- single-job-content -->
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="#"><img src="assets/img/gallery/top-psot5.png" alt=""></a>
                                </div>
                                <div class="job-tittle">
                                    <span>Trending</span>
                                    <a href="post_details.html"><h4>The pomelo case:scope of plant variety rights in China</h4></a>
                                    <p>We present things in a way that isn’t sensational, said Ms. Cham mavanijakul, 20, whose family has roots...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3">
                        <div class="google-add mb-40">
                            <img src="assets/img/gallery/Ad.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Posts End -->
        <!-- Latest Posts Area -->
        <div class="latest-posts pt-80 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle mb-35">
                            <h2>Latest Posts</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-baner-nw2 mb-30">
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/trend1.png" alt="">
                                </div>
                                <div class="banner-cap2">
                                    <p>Technology</p>
                                   <h3><a href="post_details.html">The pomelo case: scope of plant rights in China</a></h3>
                                    <p class="blog-text" style="text-transform: normal !important;">Indie folks start out by making something they want to read, that tell stories they want told..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-baner-nw2 mb-30">
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/trend2.png" alt="">
                                </div>
                                <div class="banner-cap2">
                                    <p>Technology</p>
                                   <h3><a href="post_details.html">The pomelo case: scope of plant rights in China</a></h3>
                                    <p class="blog-text" style="text-transform: normal !important;">Indie folks start out by making something they want to read, that tell stories they want told..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-baner-nw2 mb-30">
                            <div class="banner-img-cap2">
                                <div class="banner-img">
                                    <img src="assets/img/gallery/trend3.png" alt="">
                                </div>
                                <div class="banner-cap2">
                                    <p>Technology</p>
                                   <h3><a href="post_details.html">The pomelo case: scope of plant rights in China</a></h3>
                                    <p class="blog-text" style="text-transform: normal !;">Indie folks start out by making something they want to read, that tell stories they want told..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest Posts End-->
        <!-- Want To work -->
        {{-- <section class="wantToWork-area gray-bg ">
            <div class="container">
                <div class="wants-wrapper w-padding2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-xl-6 col-lg-7 col-md-10">
                            <div class="wantToWork-caption wantToWork-caption2">
                                <h2>Subscribe for latest updates</h2>
                                <p>Indie folks start out by making something they want to read, that tell stories they want told..</p>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 col-md-12">
                            <form action="#" class="search-box">
                                <div class="input-form">
                                    <input type="text" placeholder="Enter your email">
                                </div>
                                <div class="search-form">
                                    <a href="#">Subscribe</a>
                                </div>	
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Want To work End -->

    </main>
    
@include('awesomemagazine/layouts/footer')
    
    </body>
</html>