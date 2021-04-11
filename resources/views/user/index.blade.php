<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Title-->
    <title>Quantum | Home</title>
    @include('user.partials.head')



</head>

<body>
    <!----------------------------------------top area start---------------------------------------->
    @include('user.partials.nav')
    <!----------------------------------------top area end---------------------------------------->

    <!--top slider start-->
    <section class="slider-area">
        <div class="sliders owl-carousel">
            <div class="single-slider"
                style="background-image: url({{asset('frontend-asstets/assets/image/banner/banner1.png')}});">

                <!--top slider animation start-->
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <!--top slider animation end-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-slider-content">
                                <h1>Experience</h1>
                                <p>Quantum Markets provides a full investment management solution for individuals and
                                    firms seeking to add value to their portfolios.</p>
                                @foreach(App\Brochure::latest()->limit(1)->get() as $cat)
                                <button> <a href="{{asset('uploads/brochure/'.$cat->brochure_file)}}">Request
                                        Information</a> <i class="ti-arrow-right"></i></button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider"
                style="background-image: url({{asset('frontend-asstets/assets/image/banner/banner2.png')}});">
                <!--top slider animation start-->
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <!--top slider animation end-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-slider-content">

                                <h1>Investment</h1>
                                <p>Through our unparalleled money manager and investment network, the highest potential
                                    trading strategies both present and future are at your fingertips.
                                </p>
                                @foreach(App\Brochure::latest()->limit(1)->get() as $cat)
                                <button> <a href="{{asset('uploads/brochure/'.$cat->brochure_file)}}">Request
                                        Information</a> <i class="ti-arrow-right"></i></button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slider"
                style="background-image: url({{asset('frontend-asstets/assets/image/banner/banner3.png')}});">
                <!--top slider animation start-->
                <div class="area">
                    <ul class="circles">
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
                <!--top slider animation end-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="top-slider-content">
                                <h1>Innovation</h1>
                                <p>Our innovative offering provides a fully outsourced investment management solution,
                                    reducing overheads substantially and allowing you to focus on growth and building
                                    the business your portfolio. Quantum Markets sources the investment opportunities,
                                    performs full due diligence on each, then oversees the portfolio on an ongoing
                                    basis.
                                </p>
                                @foreach(App\Brochure::latest()->limit(1)->get() as $cat)
                                <button> <a href="{{asset('uploads/brochure/'.$cat->brochure_file)}}">Request
                                        Information</a> <i class="ti-arrow-right"></i></button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--top slider end-->

    <!--main area start-->
    <main class="main-area">
        <!--Top-Features-start-->
        <div class="container">
            <div class="row">
                <div class="Top-Features">
                    <div class="col-xxl-6 col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="left-features">
                            <img src="{{asset('frontend-asstets/assets/image/features/watermark.png')}}" alt="">
                            <div class="title">
                                <h2>
                                    <span>OUR</span>Features
                                </h2>
                            </div>
                            <div class="top-features-content">
                                <p>Investors always look for the best investment opportunities. Sometimes, they are
                                    required to take the risk which is associated with a specific investment opportunity
                                    in order to have gain returns. We offer an investment opportunity where initial
                                    investment and inherent risk are both low, but have a huge upside potential.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-6  col-lg-12  col-md-12 col-sm-12">
                        <div class="right-features">
                            <div class="features-single-box" data-aos="flip-down" data-aos-duration="1000">
                                <img src="{{asset('frontend-asstets/assets/image/features/1.svg')}}" alt="">
                                <p>There is no setup fee, management fee or hidden costs. We will only get a share of
                                    your monthly profits, meaning we are determined to ensure we deliver positive
                                    results.</p>
                            </div>
                            <div class="features-single-box" data-aos="flip-down" data-aos-duration="1000">
                                <img src="{{asset('frontend-asstets/assets/image/features/2.svg')}}" alt="">
                                <p>There is no lock-in period; you can withdraw your money whenever you want.</p>
                            </div>
                            <div class="features-single-box" data-aos="flip-down" data-aos-duration="1000">
                                <img src="{{asset('frontend-asstets/assets/image/features/3.svg')}}" alt="">
                                <p>We have a verified track record that shows consistent returns month after month.</p>
                            </div>
                            <div class="features-single-box" data-aos="flip-down" data-aos-duration="1000">
                                <img src="{{asset('frontend-asstets/assets/image/features/4.svg')}}" alt="">
                                <p>We currently offer our services to over 150 clients globally, including professional,
                                    retail and institutional clients.
                                    <p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Top-Features-end-->

        <!--Who-is-this-for-start-->
        <section class="who-is-this-for-area pt-200 pb-200 bg-overlay:before bg-overlay"
            style="background-image: url({{asset('frontend-asstets/assets/image/banner/who_is_this_for/1.png')}});">
            <div class="container">
                <div class="row">
                    <div class="title-dark">
                        <h2>
                            <span>Who</span>is this for
                        </h2>
                        <div class="title-content">
                            <p>From strategy creation to strategy optimisation, we ensure that our actions are
                                consistent long term.</p>
                        </div>
                    </div>
                </div>
                <div class="all-box-thisfor">
                    <div class="row">
                        <!--single-box-start-->
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-box-thisfor" data-aos="fade-right" data-aos-duration="1000">
                                <div class="thisfor-content-img">
                                    <img src="{{asset('frontend-asstets/assets/image/banner/who_is_this_for/1.svg')}}"
                                        alt="">
                                </div>
                                <div class="thisfor-content">
                                    <p>You know the potential of the markets but know acknowledge your limitations with
                                        regards to experience or emotional involvement whilst trading, and prefer
                                        trading to be handled by professionals, then this is the place for you.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-end-->
                        <!--single-box-start-->
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-box-thisfor" data-aos="fade-left" data-aos-duration="1000">
                                <div class="thisfor-content-img">
                                    <img src="{{asset('frontend-asstets/assets/image/banner/who_is_this_for/2.svg')}}"
                                        alt="">
                                </div>
                                <div class="thisfor-content">
                                    <p>You want to use your time on other endeavours and don’t have the time to analyse
                                        the markets 24/7, then we are here to analyse them for you.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-end-->
                        <!--single-box-start-->
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-box-thisfor" data-aos="fade-right" data-aos-duration="1000">
                                <div class="thisfor-content-img">
                                    <img src="{{asset('frontend-asstets/assets/image/banner/who_is_this_for/3.svg')}}"
                                        alt="">
                                </div>
                                <div class="thisfor-content">
                                    <p>You understand that the market is setup for 98% of traders to fail. Usually, it
                                        is you against your own broker, but join us and we will be this together.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-end-->
                        <!--single-box-start-->
                        <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-box-thisfor" data-aos="fade-left" data-aos-duration="1000">
                                <div class="thisfor-content-img">
                                    <img src="{{asset('frontend-asstets/assets/image/banner/who_is_this_for/4.svg')}}"
                                        alt="">
                                </div>
                                <div class="thisfor-content">
                                    <p>Retail Investors, Professional Investors and Institutional Investors are all
                                        welcome.</p>
                                </div>
                            </div>
                        </div>
                        <!--single-box-end-->
                    </div>
                </div>
            </div>

        </section>
        <!--Who-is-this-for-end-->


        <!--works-area-start-->
        <section class="works pt-100 pb-100 bgcolor text-center">
            <div class="container">
                <div class="row">
                    <div class="title-dark">
                        <h2 style="
                        border-bottom: 2px solid white;
                        display: inline-block;
                        padding: 8px 15px;">
                            <span>How</span>It Works
                        </h2>
                    </div>
                </div>
                <div class="all-work-box">
                    <div class="row">
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/1.svg')}}" alt="">
                                </div>
                                <h4>
                                    Deposit
                                </h4>
                                <p>
                                    You will deposit funds into your own account with a regulated third-party broker,
                                    which we will provide a referral ID for.</p>
                                <div class="box-number">
                                    <span>1</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/2.svg')}}" alt="">
                                </div>
                                <h4>
                                    Paperwork
                                </h4>
                                <p>
                                    You will then sign a Limited Power of Attorney (LPOA) which will allow us to trade
                                    on your behalf.</p>
                                <div class="box-number">
                                    <span>2</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/3.svg')}}" alt="">
                                </div>
                                <h4>
                                    Funding
                                </h4>
                                <p>
                                    Once all checks have been completed by the broker, you will then fund your account
                                    with a minimum of $5,000 USD. </p>
                                <div class="box-number">
                                    <span>3</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/4.svg')}}" alt="">
                                </div>
                                <h4>
                                    MAM & Trading
                                </h4>
                                <p>
                                    Your account will then be placed into our Multi Account Manager (MAM) and traded.
                                </p>
                                <div class="box-number">
                                    <span>4</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/5.svg')}}" alt="">
                                </div>
                                <h4>
                                    Profit
                                </h4>
                                <p>
                                    At the end of the month, we will receive our profit share. </p>
                                <div class="box-number">
                                    <span>5</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                        <!--single-work-box-start-->
                        <div class="col-xxl-4 col-xl-4 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-box-work" data-aos="flip-right" data-aos-duration="1000">
                                <div class="work-img">
                                    <img src="{{asset('frontend-asstets/assets/image/work_box/6.svg')}}" alt="">
                                </div>
                                <h4>
                                    No Extra Charge
                                </h4>
                                <p>
                                    If we have a poor month, a higher water mark level will be implemented and no
                                    performance fee will be charged. </p>
                                <div class="box-number">
                                    <span>6</span>
                                </div>
                            </div>
                        </div>
                        <!--single-work-box-end-->
                    </div>
                    <div class="row">
                        <div class="work-content">
                            <p>Another major advantage of having a managed account is that you, as an investor, have
                                complete control of your deposits and withdrawals. You can start and stop trading
                                whenever you like. </p>
                            <p>When you open a managed account, you control the amount of funds you deposit. There is a
                                minimum account opening balance, but ultimately, you control how much you deposit above
                                the initial required balance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--works-area-end-->
        <!--home-Statistics-area-start-->
        <section class="pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="bar-chart">
                            <h4><span>Pie </span> Chart</h4>
                            <span>Pie Chart</span>
                        </div>
                        <canvas id="myChart2" style="max-width: 600px; max-height: 400px;"></canvas>
                        <script>
                            var urll = "{{url('stock/piechartjson')}}";
                            var Pielabel = new Array();
                            var Pielabels = new Array();
                            var Piedata = new Array();
                            $(document).ready(function () {
                                $.get(urll, function (response) {
                                    response.forEach(function (data) {
                                        Pielabel.push(data.label_1);
                                        Pielabels.push(data.labels_1);
                                        Piedata.push(data.data_1);
                                    });
                                    var ctx = document.getElementById('myChart2').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'pie',
                                        data: {
                                            labels: Pielabels,
                                            datasets: [{
                                                label: "Our Overview",
                                                backgroundColor: ["#172A3A ", "#36cbba",
                                                    "#3581b8", "#13505b",
                                                    "#333333"
                                                ],
                                                data: Piedata
                                            }]
                                        },
                                        options: {
                                            title: {
                                                display: true,

                                            }
                                        }
                                    });
                                });
                            });

                        </script>
                    </div>
                    <div class="col-xl-6 col-md-12 col-sm-12">
                        <div class="bar-chart">
                            <h4><span>Bar </span> Chart</h4>
                            <span>Monthly </span>
                        </div>
                        <canvas id="myChart" style="max-width: 600px; max-height: 600px;"></canvas>
                        <script>
                            /*charts table*/
                            var url = "{{url('stock/barchartjson')}}";
                            var Barlabel = new Array();
                            var Barlabels = new Array();
                            var Bardata = new Array();
                            $(document).ready(function () {
                                $.get(url, function (response) {
                                    response.forEach(function (data) {
                                        console.log(response);
                                        Barlabel.push(data.label_1);
                                        Barlabels.push(data.labels_1);
                                        Bardata.push(data.data_1);
                                    });
                                    var ctx = document.getElementById('myChart').getContext('2d');
                                    var myChart = new Chart(ctx, {
                                        type: 'bar',
                                        data: {
                                            labels: Barlabels,
                                            datasets: [{
                                                label: '# of Votes',
                                                data: Bardata,
                                                backgroundColor: [
                                                    '#36cbba',
                                                    '#36cbba',
                                                    '#36cbba',
                                                    '#36cbba',
                                                    '#36cbba',
                                                    '#36cbba'
                                                ],

                                            }]
                                        },
                                        options: {
                                            scales: {
                                                yAxes: [{
                                                    ticks: {
                                                        beginAtZero: true
                                                    }
                                                }]
                                            }
                                        }
                                    });
                                });
                            });

                        </script>
                    </div>
                </div>

            </div>
        </section>
        <!--home-Statistics-area-end-->
        <!--home-BLOG POSTS-area-start-->
        <section class="pt-100 pb-100 bgcolor text-center">
            <div class="container">
                <div class="row">
                    <div class="title-dark">
                        <h2 style="
                        border-bottom: 2px solid white; display: inline-block; padding: 8px 15px;">
                            <span>BLOG</span> POSTS
                        </h2>
                    </div>
                </div>
                <div class="all-home-blog">
                    <div class="row">
                        @foreach(App\Blog::latest()->limit(2)->get() as $row)
                        <!--single-blog-box-area-start-->
                        <div class="col-xl-6 col-md-6 col-lg-6">
                            <div class="single-blog-box" data-aos="zoom-in" data-aos-duration="1000">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="research-img">
                                            @if($row->blogimageName=='default.jpg')
                                            <img src="{{asset('image/default.jpg')}}">
                                            @else
                                            <img src="{{asset('uploads/Blog/'.$row->blogimageName)}}" alt="">
                                            @endif
                                            <div class="mian-blog-status">
                                                <span>NEWS</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="research-details" style="padding-left: 15px !important;">
                                            <a href="{{action('BlogController@blogshow',['id' => $row->id])}}">
                                                <h4>{{str_limit($row->blog_title,60)}} </h4>
                                            </a>
                                            <p>{{str_limit($row->blog_description,100)}}</p>
                                            <div class="research-details-bottom">
                                                <button><a
                                                        href="{{action('BlogController@blogshow',['id' => $row->id])}}">Read
                                                        More</a> </button>
                                                <div class="blog-date">
                                                    <span> <i
                                                            class="far fa-clock"></i>{{$row->created_at->diffForHumans()}}</span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>
                        </div>
                        <!--single-blog-box-area-start-->
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <!--home-BLOG POSTS-area-end-->

        <!--home-contact-area-start-->
        <section class="pt-100 pb-100">
            <div class="container p-0">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-contact text-center position-relative">
                            <div class="title-light">
                                <h2 style="
                                display: inline-block; padding: 8px 15px; text-transform: uppercase;">
                                    <span>Drop</span> US A line
                                </h2>
                                <p>Get In Touch!</p>
                            </div>
                            <div class="input-contact">
                                @if(Session::has('message'))
                                <div class="alert alert-success">
                                    {{Session::get('message')}}
                                </div>
                                @endif
                                <form action="{{route('contact.store')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <input name="name" type="text" placeholder="Enter Name"
                                                class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                value="{{ old('name') }}">
                                            @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-xl-6">
                                            <input name="email" type="text" placeholder="Enter Email"
                                                class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                value="{{ old('email') }}">
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-xl-12">
                                            <input name="subject" type="text" id="" placeholder="Enter Subject"
                                                class="form-control{{ $errors->has('subject') ? ' is-invalid' : '' }}"
                                                value="{{ old('subject') }}">
                                            @if ($errors->has('subject'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('subject') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-xl-12">
                                            <textarea name="message" name="" id="" placeholder="Message"
                                                class="form-control{{ $errors->has('message') ? ' is-invalid' : '' }}"
                                                value="{{ old('message') }}" rows="10"></textarea>
                                            @if ($errors->has('message'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('message') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="submit-inpute">
                                                <button type="submit">Send </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="back-image-watermark ">
                                <img data-aos="zoom-in" data-aos-easing="ease-out-cubic" data-aos-duration="1000"
                                    src="{{asset('frontend-asstets/assets/image/features/watermark.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home-contact-area-end-->
        <!--home-PDF-area-end-->
        <section class="pt-100 pb-100 bgcolor text-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="title-dark">
                            <h2 style="
                            border-bottom: 2px solid white;
                            display: inline-block;
                            padding: 8px 15px;">
                                <span>Download</span> PDF
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="main-pdf-home">
                    <div class="row d-flex  align-items-center">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                            <div class="all-list-pdf">
                                <li data-aos="fade-right" data-aos-duration="700">STRATEGY</li>
                                <li data-aos="fade-right" data-aos-duration="800">ALGORITHM CONDITIONING</li>
                                <li data-aos="fade-right" data-aos-duration="900">ACTIVE SESSIONS</li>
                                <li data-aos="fade-right" data-aos-duration="1000">RISK LIMITATION</li>
                                <li data-aos="fade-right" data-aos-duration="1100">SAFETY AND SECURITY</li>
                                <li data-aos="fade-right" data-aos-duration="1200">EXPECTED ROI AGAINST RISK APPETITE
                                </li>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 ">
                            @foreach(App\Brochure::latest()->limit(1)->get() as $cat)
                            <a href="{{asset('uploads/brochure/'.$cat->brochure_file)}}">
                                <div class="download-pdf" style="margin: 20px 0;">
                                    <img src="{{asset('frontend-asstets/assets/image/pdf/1.svg')}}" alt="">
                                    <span>download now</span>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--home-PDF-area-end-->
    </main>
    <!----------------------------------------main area end---------------------------------------->
    @include('user.partials.footer')



</body>

</html>
