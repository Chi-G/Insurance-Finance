<!doctype html>
<html class="no-js" lang="en">

<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Investment plan| Tether Elite Finance</title>
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
                                <h3>Investment plan</h3>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Investment plan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcumb Area -->
        <!-- Start Invest area -->
        <div class="invest-area bg-color page-padding-2">
            <div class="container">
                <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Elite Investment Strategies for Success</h3>
                            <p>Benefit from our advanced trading strategies and exclusive investment opportunities for top-tier returns.</p>
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
                                        <h5 class="modal-title"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p class="modal-text">Please sign up and verify your account via the email we send. Once verified, choose an investment plan and make your payment to the provided USDT (ERC-20) address. Then, email a screenshot of your transaction receipt to <a href="mailto:info@tetherelitefinance.com">info@tetherelitefinance.com</a> for swift approval.
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
        <!--Start payment-history area -->
        <div class="payment-history-area bg-color fix area-padding-2">
            <div class="container">
               <div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="section-headline text-center">
                            <h3>Deposit and withdrawals history</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
						</div>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <h4>Last deposit</h4>
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
        <!-- Start Footer Area -->
        @include('include.footer')
        <!-- End Footer area -->

		<!-- all js here -->

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
