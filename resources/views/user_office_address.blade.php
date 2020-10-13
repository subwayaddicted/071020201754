<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">

  <title>address ::: user office ::: foodclub</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href="{{ asset('css/default.css')  }}" rel="stylesheet" type="text/css" />

</head>

<body>
	<div class="cbc">
		<div class="main">
			<header>
				<div class="center_box">
					<div class="wrapper">

						<div class="logo_box">
							<a href="index.html"><img src="img/logo.png" alt="foodclub" /></a>
						</div>

						<div class="lng_box">
							<a href="#" class="flag_ar"></a>
						</div>

						<div class="orders_counter">
							<span class="num">2<span class="line"></span></span>
							<span class="num">1<span class="line"></span></span>
							<span class="num">7<span class="line"></span></span>
							<span class="num">0<span class="line"></span></span>

							<span class="label">orders<br/>today</span>
						</div>

						<div class="r_box">
							<a href="tel:8800117117" class="h_phone"><span class="ico"></span><span>800 117-117</span></a>

							<div class="upan">
								<div class="notice">
									<a href="#" class="ico_notice nftoggle"></a>

									<nav class="utnav">
										<ul>
											<li class="item">
												<span class="ico ico_1"></span>
												<div class="text_box">
													<h3>5 points</h3>
													<p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
												</div>
												<a href="#" class="gcross"></a>
											</li>
											<li class="item">
												<span class="ico ico_2"></span>
												<div class="text_box">
													<h3>5 points</h3>
													<p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
												</div>
												<a href="#" class="gcross"></a>
											</li>
											<li class="item">
												<span class="ico ico_3"></span>
												<div class="text_box">
													<h3>5 points</h3>
													<p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
												</div>
												<a href="#" class="gcross"></a>
											</li>
											<li><a href="#" class="more">Show more notifications</a></li>
										</ul>
									</nav>
								</div>
								<div class="navbox">
									<a href="#" class="midbox nftoggle">
										<img src="imgc/user_ava_1_40.jpg" alt="" />
										<span class="warrd"></span>
									</a>
									<nav class="utnav">
										<ul>
											<li class="points">600 points</li>
											<li class="sepor"></li>
											<li><a href="#">Profile</a></li>
											<li><a href="#">Orders</a></li>
											<li><a href="#">Address</a></li>
											<li><a href="#">Settings</a></li>
											<li class="sepor"></li>
											<li><a href="#" class="logout">Log Out</a></li>
										</ul>
									</nav>

									<!--
										<nav class="utnav">
											<ul>
												<li><a href="#">Menu</a></li>
												<li><a href="#">Orders</a></li>
												<li><a href="#">Reviews</a></li>
												<li><a href="#">Account Settings</a></li>
												<li><a href="#">Profile Settings</a></li>
												<li class="sepor"></li>
												<li><a href="#">Subway</a></li>
												<li><a href="#">McDonalds</a></li>
												<li class="sepor"></li>
												<li><a href="#"><span class="bplus"></span> Add Restaurant</a></li>
												<li class="sepor"></li>
												<li><a href="#" class="logout">Log Out</a></li>
											</ul>
										</nav>
									 -->
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</header>

			<div class="center_box cb">
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
				<div class="uo_tabs cf">
					<a href="#"><span>profile</a>
					<a href="#"><span>Reviews</span></a>
					<a href="#"><span>orders</span></a>
					<a href="#" class="active"><span>My Address</span></a>
					<a href="#"><span>Settings</span></a>
				</div>
				<div class="page_content bg_gray">
					<div class="uo_header">
						<div class="wrapper cf">
							<div class="wbox ava">
								<figure><img src="imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
							</div>
							<div class="main_info">
								<h1>Helena Afrassiabi</h1>
								<div class="midbox">
									<h4>560 points</h4>
									<div class="info_nav">
										<a href="#">Get Free Points</a>
										<span class="sepor"></span>
										<a href="#">Win iPad</a>
									</div>
								</div>
								<div class="stat">
									<div class="item">
										<div class="num">30</div>
										<div class="title">total orders</div>
									</div>
									<div class="item">
										<div class="num">14</div>
										<div class="title">total reviews</div>
									</div>
									<div class="item">
										<div class="num">0</div>
										<div class="title">total gifts</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="uo_body">
						<div class="wrapper">
							<div class="uofb cf">
								<div class="l_col adrs">
									<h2>Add New Address</h2>

									<form action="/adresses/new" method="post">
                                        @csrf
										<div class="field">
											<label>Name *</label>
											<input type="text" name="name" value="" palceholder="" class="vl_empty" />
                                            @if ($errors->has('name'))
                                                <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
										</div>
										<div class="field">
											<label>Your city *</label>
											<select name="city" class="vl_empty">
												<option class="plh"></option>
												<option value="1">City 1</option>
												<option value="2">City 2</option>
											</select>
                                            @if ($errors->has('city'))
                                                <span class="text-danger">{{ $errors->first('city') }}</span>
                                            @endif
										</div>
										<div class="field">
											<label>Your area *</label>
											<select name="area">
												<option class="plh"></option>
												<option>Area 1</option>
												<option>Area 2</option>
											</select>
                                            @if ($errors->has('area'))
                                                <span class="text-danger">{{ $errors->first('area') }}</span>
                                            @endif
										</div>

										<div class="field">
											<label>Street</label>
											<input type="text" name="street" value="" palceholder="" class="vl_empty" />
										</div>
										<div class="field">
											<label>House # </label>
											<input type="text" name="house" value="" palceholder="House Name / Number" />
										</div>

										<div class="field">
											<label class="pos_top">Additional information</label>
											<textarea name="additional_info"></textarea>
										</div>

										<div class="field">
											<input type="submit" value="add address" class="green_btn" />
										</div>
									</form>
								</div>

								<div class="r_col">
									<h2>My Addresses</h2>

									<div class="uo_adr_list">
										<div class="item">
											<h3>HOME Address</h3>
											<p>Dubai, Business Bay Area, Sheikh Zayed Road, Single </p>
											<div class="actbox">
												<a href="#" class="bcross"></a>
											</div>
										</div>
										<div class="item">
											<h3>Work Address</h3>
											<p>Dubai, Business Bay Area, Sheikh Zayed Road, Single<br/>Business Tower, Suite 2204</p>
											<div class="actbox">
												<a href="#" class="bcross"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<div class="center_box">
				<div class="wrapper">

					<nav class="f_nav">
						<ul>
							<li>
								<a href="#">
									<span class="fadv_ico"><span class="ico_1"></span></span>
									<span class="title">Rewards Program</span>
									<span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fadv_ico"><span class="ico_2"></span></span>
									<span class="title">monthly lottery</span>
									<span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fadv_ico"><span class="ico_3"></span></span>
									<span class="title">Restaurant Owners</span>
									<span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fadv_ico"><span class="ico_4"></span></span>
									<span class="title">about foodclub</span>
									<span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="bt_box">
				<div class="center_box">
					<div class="wrapper">
						<div class="soc_link">
							<a href="#" class="apple"></a>
							<a href="#" class="android"></a>
							<a href="#" class="email"></a>
							<a href="#" class="fb"></a>
						</div>
						<div class="copyright">
							<div>© 2014 Zomlex Inc. All rights reserved.</div>
							<nav>
								<a href="#">Partner Agreement</a>
								<span>|</span>
								<a href="#">User Agreement</a>
								<span>|</span>
								<a href="#">FAQ</a>
								<span>|</span>
								<a href="#">Careers</a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>
