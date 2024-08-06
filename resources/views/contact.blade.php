<!doctype html>
<html class="no-js" lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Contact | Tether Elite Finance</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon -->
		@include('include.css')

        <link href="{{asset('backend/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('frontend/css/marquee-crypto.css') }}" rel="stylesheet"> <!-- Include the marquee CSS file -->
	</head>
		<body>

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
                                <h3>Contact us</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Contact us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start contact Area -->
        <div class="contact-area page-padding">
            <div class="container">
                <div class="row">
                    <div class="contact-inner">
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-mobile"></i>
                                    <p>
                                        Call : +1 236-499-2617</43<br>
                                        {{-- <span>Monday-Friday (10am-8pm)</span> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-envelope-o"></i>
                                    <p>
                                        Email : info@tetherelitefinance.com<br>
                                        {{-- <span>24 hours timely responds</span> --}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Start contact icon column -->
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="contact-icon text-center">
                                <div class="single-icon">
                                    <i class="fa fa-map-marker"></i>
                                    <p>
                                        Location : British Columbia<br>
                                        <span>23 house/3 Road</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                     <div class="col-md-6 col-sm-6 col-xs-12">
                         <!-- Start Map -->
                        <div class="map-area">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59824202.87471126!2d162.00564994068557!3d23.76949431311844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x537a66c7aa6b6aaf%3A0x881b41e937e7f1f9!2sBritish%20Columbia%2C%20Canada!5e0!3m2!1sen!2sng!4v1722895335854!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <!-- End Map -->
                    </div>
                    <!-- Start Left contact -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="contact-form">
                            <div class="row">

                                @if(session('message'))
                                    <div class="alert alert-success">
                                        {{ session('message') }}
                                    </div>
                                @endif

                                <form method="POST" action="{{ route('contact.store') }}" class="contact-form">
                                    @csrf
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" class="email form-control" id="email" name="email" placeholder="Email" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <input type="text" id="msg_subject" name="subject" class="form-control" placeholder="Subject" required>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea id="message" name="message" rows="7" placeholder="Message" class="form-control" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                        <button type="submit" id="submit" class="add-btn contact-btn">Send Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- End Left contact -->
                </div>
            </div>
        </div>
        <!-- End Contact Area -->
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
