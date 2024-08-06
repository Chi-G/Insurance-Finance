<!doctype html>
<html class="no-js" lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Reviews | Tether Elite Finance</title>
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
                                <h3>Reviews</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Reviews</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start testimonials Area -->
        <div class="reviews-area review-page-area page-padding-2">
            <div class="container">
                <div class="row">
                    <div class="reviews-content">
                        @foreach($reviews as $review)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-testi">
                                <div class="testi-text">
                                    <div class="clients-text">
                                        <div class="client-rating">
                                            @for ($i = 0; $i < 5; $i++)
                                                <a href="#"><i class="ti-star"></i></a>
                                            @endfor
                                        </div>
                                        <p>{{ $review->description }}</p>
                                    </div>
                                    <div class="testi-img">
                                        {{-- @if($review->image)
                                            <img src="{{ asset('storage/' . $review->image) }}" alt="{{ $review->name }}">
                                        @endif --}}
                                        <div class="guest-details">
                                            <h4>{{ $review->name }}</h4>
                                            <span class="guest-rev">{{ $review->position }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- End single item -->

                        <!-- End single item -->
                    </div>

                </div>
            </div>
        </div>
        <!-- End testimonials end -->
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
