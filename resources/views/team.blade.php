<!doctype html>
<html class="no-js" lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Team| Tether Elite Finance</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->
		@include('include.css')

        <link href="{{asset('backend/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/marquee-crypto.css') }}" rel="stylesheet"> <!-- Include the marquee CSS file -->
	</head>
		<body>

		<!--[if lt IE 8]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

        <div id="preloader"></div>
        @include('include.header')
        <!-- header end -->
        <!-- Start breadcumb Area -->
        <div class="page-area">
            <div class="breadcumb-overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb text-center">
                            <div class="section-headline white-headline">
                                <h3>Expert team </h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Our team</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
         <!-- Team area start -->
        <div class="team-page-area page-padding-2">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Our experts member</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="team-member text-center">
                        <!-- Single team member -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{asset('frontend/img/team/t1.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Hamilton</a></h5>
                                    <p>Software developer</p>

                                </div>
                            </div>
                        </div>
                        <!-- Single team member -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{asset('frontend/img/team/t2.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Timeo poll</a></h5>
                                    <p>Syber security</p>

                                </div>
                            </div>
                        </div>
                        <!-- Single team member -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{asset('frontend/img/team/t3.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Angle Lilou</a></h5>
                                    <p>Server expert</p>

                                </div>
                            </div>
                        </div>
                        <!-- Single team member -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{asset('frontend/img/team/t4.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Louise</a></h5>
                                    <p>Software developer</p>

                                </div>
                            </div>
                        </div>
                                                <!-- Single team member -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{asset('frontend/img/team/t5.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Gabriel hank</a></h5>
                                    <p>web developer</p>

                                </div>
                            </div>
                        </div>
                        <!-- Single team member -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{asset('frontend/img/team/t6.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Arnold loil</a></h5>
                                    <p>Software developer</p>

                                </div>
                            </div>
                        </div>
                        <!-- Single team member -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{asset('frontend/img/team/t7.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Lania Inès</a></h5>
                                    <p>Syber security</p>

                                </div>
                            </div>
                        </div>
                        <!-- Single team member -->
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="{{asset('frontend/img/team/t8.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Arthur doil</a></h5>
                                    <p>Web developer</p>

                                </div>
                            </div>
                        </div>
                        <!-- Single team member -->
                    </div>
                </div>
            </div>
        </div>
        <!-- team area end -->
        <!-- Start Footer Area -->
        @include('include.footer')
        <!-- End Footer area -->

		<!-- all js here -->

		<!-- jquery latest version -->
		@include('include.script')

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
	</body>

</html>
