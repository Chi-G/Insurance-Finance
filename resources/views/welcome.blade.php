<!doctype html>
<html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home | Tether Elite Finance</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- favicon -->
        @include('include.css')

        <!--  CUSTOM MODAL FILE  -->
        <link href="{{asset('backend/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/marquee-crypto.css') }}" rel="stylesheet"> <!-- Include the marquee CSS file -->

        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- Include CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <style>
            .self-area {
                padding: 60px 0; /* Adjust as needed */
            }

            .self-area .container {
                max-width: 1170px; /* Adjust as needed */
                margin: 0 auto;
            }

            .self-area .row {
                display: flex;
                align-items: center;
            }

            .self-area .col-md-6,
            .self-area .col-sm-6,
            .self-area .col-xs-12 {
                position: relative;
                width: 50%;
                padding: 0 15px;
                box-sizing: border-box;
            }

            .self-area .col-md-6:first-child {
                background-image: url('img/background/ag1.jpg'); /* Adjust the path to your image */
                background-size: cover;
                background-position: center;
                height: 100%;
                min-height: 400px; /* Adjust as needed */
            }

            .self-area .col-md-6:last-child {
                display: none;
            }

            .investment-title {
                font-weight: bold;
                color: #E6922E; /* Change this color as needed */
                font-size: 1.2em; /* Adjust the size as needed */
                margin-bottom: 10px; /* Optional: Add some space below the title */
            }
        </style>
    </head>
	<body>
        <div id="preloader"></div>
        @include('include.header')
        <!-- header end -->
        <!-- Start Slider Area -->
        <div class="intro-area">
           <div class="main-overly"></div>
            <div class="intro-carousel">
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="{{asset('frontend/img/sliders/h1.jpg')}}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <!-- Start Slider content -->
                                            <div class="slide-content text-center">
                                                <h2 class="title2"></h2>
                                                <div class="layer-1-3">
                                                </div>
                                            </div>
                                            <!-- End Slider content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro-content">
                    <div class="slider-images">
                        <img src="{{asset('frontend/img/sliders/h2.jpg')}}" alt="">
                    </div>
                    <div class="slider-content">
                        <div class="display-table">
                            <div class="display-table-cell">
                                <div class="container">
                                    <div class="row">
                                         <div class="col-md-12 col-sm-12 col-xs-12">
                                            <!-- Start Slider content -->
                                            <div class="slide-content text-center">
                                                <h2 class="title2"></h2>
                                                <div class="layer-1-3">
                                                    {{-- <a href="{{route('register')}}" class="ready-btn left-btn" >Get started</a> --}}
                                                </div>
                                            </div>
                                            <!-- End Slider content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Slider Area -->
        <!-- Start Count area -->
        <div class="counter-area fix area-padding-2">
            <div class="container">
                <!-- Start counter Area -->
                 <div class="row">
                    <div class="fun-content">
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_text">
                                <span class="counter-icon"><i class="flaticon-035-savings"></i></span>
                                <span class="counter">$5,974,544</span>
                                <h4>Total Deposited</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_text">
                               <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                                <span class="counter">2,209</span>
                                <h4>Total Members</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_text">
                               <span class="counter-icon"><i class="flaticon-016-graph"></i></span>
                                <span class="counter">$3,974,544</span>
                                <h4>Total Payments</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- fun_text  -->
                            <div class="fun_text">
                              <span class="counter-icon"><i class="flaticon-043-world"></i></span>
                                <span class="counter">10</span>
                                <h4>World Country</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Count area -->
        <!-- Start Invest area -->
        <div class="invest-area bg-color area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>The best investment plan</h3>
                            <p>Empowering you to redefine your business goals with these investment solutions.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="pricing-content">
                        @foreach($investments as $investment)
                            <div class="col-md-3 col-sm-6 col-xs-12">
                                <div class="pri_table_list">
                                    <div class="top-price-inner">
                                        <div class="rates">
                                            <span class="prices">{{ $investment->daily_percent }}%</span><span class="users">Daily</span>
                                        </div>
                                        <span class="per-day">{{ $investment->per_day }} Days</span>
                                    </div>
                                    <ol class="pricing-text">
                                        <li class="check investment-title">{{ $investment->title }}</li>
                                        <li class="check">Minimum Investment: ${{ $investment->min_invest }}</li>
                                        <li class="check">Maximum Investment: ${{ $investment->max_invest }}</li>
                                        <li class="check">Average Monthly: {{ $investment->average_month }}%</li>
                                    </ol>
                                    <!-- Modal Button-->
                                    <div class="price-btn blue">
                                        <button style="background: #E6922E" type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal" data-target="#zoomupModal">
                                            Deposit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <!-- Modal -->
                        <div id="zoomupModal" class="modal animated zoomInUp custo-zoomInUp" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Notice</h5>
                                    </div>
                                    <div class="modal-body">
                                          <p class="modal-text">
                                            Please sign up and verify your account via the email we send. Once verified, choose an investment plan and make your payment to the provided USDT (TRC-20) address. Then, email a screenshot of your transaction receipt to <a href="mailto:info@tetherelitefinance.com">info@tetherelitefinance.com</a> for swift approval.
                                          </p>
                                    </div>
                                    <div class="modal-footer md-button">
                                        <button style="background: #E6922E" class="btn" data-dismiss="modal"><i style="color:blanchedalmond" class="flaticon-cancel-12"></i> Okay</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- End Invest area -->
        <!-- Start Support-service Area -->
        <div class="support-service-area fix area-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Why choose investment plan</h3>
                            <p>Explore why TetherELiteFinance is the top choice for secure, expert-driven investment solutions.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="support-all">
                        <!-- Start About -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="support-services wow ">
                                <a class="support-images" href="#"><i class="flaticon-023-management"></i></a>
                                <div class="support-content">
                                    <h4>Expert management</h4>
                                    <p>Benefit from our team’s extensive expertise in managing your investments effectively.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start About -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="support-services ">
                                <a class="support-images" href="#"><i class="flaticon-036-security"></i></a>
                                <div class="support-content">
                                    <h4>Secure investment</h4>
                                    <p>Invest with confidence knowing that your assets are safeguarded with our robust security measures.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="support-services ">
                                <a class="support-images" href="#"><i class="flaticon-003-approve"></i></a>
                                <div class="support-content">
                                    <h4>Registered company</h4>
                                    <p>We are a fully registered firm, adhering to industry standards for transparency and compliance.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="support-services">
                                <a class="support-images" href="#"><i class="flaticon-042-wallet"></i></a>
                                <div class="support-content">
                                    <h4>Instant withdrawal</h4>
                                    <p>Access your funds instantly with our fast and flexible withdrawal options.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="support-services ">
                                <a class="support-images" href="#"><i class="flaticon-032-report"></i></a>
                                <div class="support-content">
                                    <h4>Verified security</h4>
                                    <p>Our platform uses verified security protocols to protect your investments.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Start services -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="support-services">
                                <a class="support-images" href="#"><i class="flaticon-024-megaphone"></i></a>
                                <div class="support-content">
                                    <h4>Live customer support</h4>
                                    <p>Receive prompt assistance with our dedicated 24/7 customer support team.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Support-service Area -->
        <!-- Start Self-area -->
        <div class="self-area area-padding">
            <div class="container">
                <div class="row">
                    <!-- column end -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <!-- Add an image or any other content if needed -->
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>

        <!-- End Self-area -->
        <!-- Start Work proses Area -->

        <!-- End Work proses Area -->
        <!--Start payment-history area -->
        <div class="payment-history-area bg-color fix area-padding-2">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Deposits and withdrawals history</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <h4>Last deposits</h4>
                                <span><i class="flaticon-005-savings"></i></span>
                                <div class="deposite-table">
                                    <table>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                        </tr>
                                        @foreach($deposits as $deposit)
                                            <tr>
                                                <td>{{ $deposit->name }}</td>
                                                <td>{{ $deposit->date->format('M d, Y') }}</td>
                                                <td>${{ number_format($deposit->amount, 2) }}</td>
                                                <td>{{ $deposit->currency }}</td>
                                            </tr>
                                            @endforeach
                                    </table>
                                        {{ $deposits->links() }}
                                </div>
                            </div>
                            <div class="diposite-box">
                                <h4>Last withdrawals</h4>
                                <span><i class="flaticon-042-wallet"></i></span>
                                <div class="deposite-table">
                                    <table>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                        </tr>
                                        <tr>
                                            <td>Arnold</td>
                                            <td>May 10, 2024</td>
                                            <td>$10,000.76</td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>Jhon Abra</td>
                                            <td>Apr 07, 2024</td>
                                            <td>$62,000.21</td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>Lanisha</td>
                                            <td>May 08, 2024</td>
                                            <td>$25,000.36</td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>Gongales</td>
                                            <td>Jan 12, 2024</td>
                                            <td>$31,000.90</td>
                                            <td>USD</td>
                                        </tr>
                                        <tr>
                                            <td>Admond sayhel</td>
                                            <td>Jan 10, 2020</td>
                                            <td>$11,000.80</td>
                                            <td>Bitcoin</td>
                                        </tr>
                                        <tr>
                                            <td>Remond</td>
                                            <td>July 15, 2024</td>
                                            <td>$54,000.50</td>
                                            <td>USD</td>
                                        </tr>
                                    </table>
                                    {{ $deposits->links() }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End payment-history area -->
        <!-- Start Banner Area -->
        <div class="banner-area area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="banner-all area-80 text-center">
                            <div class="banner-content">
                                <h3>Our investment plan world wide business relations for development</h3>
                                <a class="banner-btn" href="{{ route('register') }}">Sign up now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Area -->
        <!-- Start reviews Area -->
        <div class="reviews-area fix area-padding">
            <div class="container">
                <div class="row">
                    <div class="reviews-top">
                        <div class="col-md-5 col-sm-5 col-xs-12">
                            <div class="testimonial-inner">
                                <div class="review-head">
                                    <h3>What Our Clients Say About Us</h3>
                                    <p>At TetherELiteFinance, we take pride in our exceptional client service and impressive financial returns. Our clients value our innovative approach and the impressive results we consistently deliver.</p>
                                    <a class="reviews-btn" href="review.html">More Reviews</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12">
                            <div class="reviews-content">
                                <!-- start testimonial carousel -->
                                <div class="testimonial-carousel item-indicator">
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <div class="clients-text">
                                                <div class="client-rating">
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                </div>
                                                <p>"TetherELiteFinance has revolutionized my investment strategy. Their cutting-edge trading bots and strategic approach have consistently delivered remarkable returns. I am impressed by their professionalism and transparency."</p>
                                            </div>
                                            <div class="testi-img">
                                                <div class="guest-details">
                                                    <h4>James Carter</h4>
                                                    <span class="guest-rev">Elite</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <div class="clients-text">
                                                <div class="client-rating">
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                </div>
                                                <p>"The 25% biweekly ROI offered by TetherELiteFinance is unparalleled. Their innovative strategies and real-time market insights have provided me with substantial returns. I highly recommend their services."</p>
                                            </div>
                                            <div class="testi-img">
                                                <div class="guest-details">
                                                    <h4>Linda Foster</h4>
                                                    <span class="guest-rev">Elite</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <div class="clients-text">
                                                <div class="client-rating">
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                </div>
                                                <p>"TetherELiteFinance's use of Tether tokens and advanced trading techniques has provided me with a secure and profitable investment experience. Their team is knowledgeable and committed to delivering results."</p>
                                            </div>
                                            <div class="testi-img">
                                                <div class="guest-details">
                                                    <h4>Michael Lee</h4>
                                                    <span class="guest-rev">Elite</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                    <div class="single-testi">
                                        <div class="testi-text">
                                            <div class="clients-text">
                                                <div class="client-rating">
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                    <a href="#"><i class="ti-star"></i></a>
                                                </div>
                                                <p>"I've been thoroughly impressed with TetherELiteFinance's innovative trading strategies and consistent returns. Their use of Tether's stable tokens has ensured a high level of security and profitability."</p>
                                            </div>
                                            <div class="testi-img">
                                                <div class="guest-details">
                                                    <h4>Emily White</h4>
                                                    <span class="guest-rev">Elite</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End single item -->
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End reviews Area -->
        <!-- Start FAQ area -->
        <div class="faq-area bg-color area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Some Important FAQs</h3>
                            <p>Discover how TetherELiteFinance leverages advanced trading strategies and Tether's hedge fund deposits to provide exceptional financial growth opportunities.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Start Column -->
                    <div class="col-md-7 col-sm-6 col-xs-12">
                        <div class="company-faq">
                            <div class="faq-full">
                                <div class="faq-details">
                                    <div class="panel-group" id="accordion">
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                                        <span class="acc-icons"></span>What is TetherELiteFinance's Investment Strategy?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check1" class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>
                                                        TetherELiteFinance utilizes Tether's hedge fund deposits in USDT to execute strategic trades in both spot and futures markets. Our approach involves arbitrage trading, investment in low-cap projects, and participation in ICOs and token presales, all powered by advanced technical analysis and custom trading bots.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                        <span class="acc-icons"></span>How does TetherELiteFinance ensure high returns?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check2" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        Our platform guarantees a remarkable ROI paid biweekly by employing sophisticated trading strategies and leveraging real-time market insights. We engage in various profit streams, including arbitrage trading and funding ICOs, to optimize investor returns.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                        <span class="acc-icons"></span>What makes TetherELiteFinance stand out?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check3" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                    <p>
                                                        TetherELiteFinance differentiates itself through its diversified profit streams, including arbitrage trading across multiple exchanges, investment in promising low-cap projects, and participation in ICOs. Our exclusive connection with Tether and sophisticated trading tools further enhance our competitive edge.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                        <span class="acc-icons"></span>How can I get started with TetherELiteFinance?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check4" class="panel-collapse collapse ">
                                                <div class="panel-body">
                                                    <p>
                                                        To join TetherELiteFinance, simply sign up on our platform and become part of an exclusive network of elite investors. Invest with confidence and benefit from our advanced trading strategies and exceptional returns.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->
                                        <!-- Panel Default -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="check-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#check5">
                                                        <span class="acc-icons"></span>What is the role of Tether tokens in your strategy?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="check5" class="panel-collapse collapse">
                                                <div class="panel-body">
                                                    <p>
                                                        Tether tokens are crucial to our investment strategy as they provide stability and liquidity. Pegged 1-to-1 with fiat currencies and backed by substantial reserves, Tether tokens enable us to engage in high-yield trading opportunities while minimizing risk.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Panel Default -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Column -->
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="faq-content">
                            <h4>Have Any Questions?</h4>
                            <div class="faq-quote">
                                <div class="row">
                                    <div class="row">

                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('faq.home') }}" class="contact-form">
                                            @csrf
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                                <div class="help-block with-errors"></div>
                                                <input type="email" class="email form-control" id="email" name="email" placeholder="Email" required>
                                                <div class="help-block with-errors"></div>
                                                <input type="text" id="msg_subject" name="msg_subject" class="form-control" placeholder="Subject" required>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <textarea id="message" name="message" rows="7" placeholder="Message" class="form-control" required></textarea>
                                                <div class="help-block with-errors"></div>
                                                <button type="submit" id="submit" class="quote-btn">Submit</button>
                                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                <div class="clearfix"></div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Column -->
                </div>
            </div>

        </div>
        <!-- End FAQ area -->
        <!-- Start Footer Area -->
        @include('include.footer')
        <!-- End Footer area -->

		<!-- all js here -->

		<!-- jquery latest version -->
		@include('include.script')

        <script src="{{ asset('js/app.js') }}"></script>

        <script>
            async function fetchCryptoPrices() {
                try {
                    const response = await fetch('https://api.coingecko.com/api/v3/simple/price?ids=bitcoin,ethereum,ripple,cardano,dogecoin,solana,polkadot,uniswap,chainlink,litecoin&vs_currencies=usd');
                    const data = await response.json();

                    const prices = [
                        { name: 'Bitcoin', price: data.bitcoin.usd },
                        { name: 'Ethereum', price: data.ethereum.usd },
                        { name: 'Ripple', price: data.ripple.usd },
                        { name: 'Cardano', price: data.cardano.usd },
                        { name: 'Dogecoin', price: data.dogecoin.usd },
                        { name: 'Solana', price: data.solana.usd },
                        { name: 'Polkadot', price: data.polkadot.usd },
                        { name: 'Uniswap', price: data.uniswap.usd },
                        { name: 'Chainlink', price: data.chainlink.usd },
                        { name: 'Litecoin', price: data.litecoin.usd }
                    ];

                    const pricesElement = document.querySelector('.crypto-prices');
                    pricesElement.innerHTML = ''; // Clear existing prices
                    prices.forEach(coin => {
                        const coinElement = document.createElement('li');
                        coinElement.innerHTML = `<strong>${coin.name}</strong>: $${coin.price}`;
                        pricesElement.appendChild(coinElement);
                    });

                    // Initialize Simple Marquee
                    new SimpleMarquee('.crypto-marquee', {
                        speed: 50,
                        gap: 20,
                        delayBetweenCycles: 0
                    });
                } catch (error) {
                    console.error('Error fetching crypto prices:', error);
                }
            }

            document.addEventListener('DOMContentLoaded', fetchCryptoPrices);
    </script>

    </script>

	</body>

</html>
