<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="<?php echo site_url('vectors/img/storie_details.jpg')?>" media="(min-width: 992px)"/><img class="img--bg" src="img/storie_details.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Women Greatness</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
										<h1 class="promo-primary__title"><span></span> <span><?php echo $storie['storie_title']?></span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- storie details start-->
				<section class="section storie-details"><img class="storie-details__bg" src="img/storie_details-bg.png" alt="img"/>
					<div class="container">
						<div class="row">
							<div class="col-xl-8 offset-xl-2">
								<div class="storie-details__top">
									<div class="storie-details__img"><img class="img--bg" src="<?php echo site_url($storie['storie_picture'])?>" alt="img"/></div>
									<div class="storie-details__description">
										<div class="row align-items-center">
											<div class="col-md-4 text-center text-md-left">
												<h5 class="storie-details__name"><?php echo $storie['storie_title']?></h5>
											</div>
											<div class="col-md-4 text-center text-md-left"><span>Donation So Far: <strong>845$</strong></span></div>
											<div class="col-md-4 text-center text-md-right"><a class="storie-details__button button button--primary" href="#">+ Donate</a></div>
										</div>
									</div>
								</div>
								
								<p><?php echo $storie['storie_content']?></p>
								<blockquote class="storie-details__blockquote blockquote"><span class="blockquote__icon">“</span>
									<p class="blockquote__text">Slickhead grunion lake trout. Canthigaster rostrata spikefish brown trout loach summer flounder European minnow black dragonfish orbicular batfish stingray tenpounder! Flying characin herring, Moses sole sea snail grouper discus. </p>
								</blockquote>
								
								<div class="storie-details__details">
									<div class="row align-items-center">
										<div class="col-md-8">
											<div class="storie-details__tags">Category: <a class="storie-details__tag" href="#">#Donate</a> <a class="storie-details__tag" href="#">#Homelesspeople</a> <a class="storie-details__tag" href="#">#Poor</a> <a class="storie-details__tag" href="#">#Child</a></div>
										</div>
										<div class="col-md-4">
											<ul class="storie-details__socials">
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- storie details end-->
				<!-- donors start-->
				
				<!-- donors end-->
				<!-- bottom bg start-->
				<section class="bottom-background">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="img/bottom-bg.png" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>
				<!-- bottom bg end-->
			</main>