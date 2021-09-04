<main class="main">
		<section class="promo-primary">
			<picture>
				<source srcset="<?=base_url()?>vectors/img/storie_details.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=base_url()?>vectors/img/storie_details.jpg" alt="img"/>
			</picture>
			<div class="promo-primary__description"> <span>Compassion</span></div>
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="align-container">
							<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
								<h1 class="promo-primary__title"><span>Story</span> <span>Details</span></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php foreach ($stories as $story):?>
		<!-- storie details start-->
		<section class="section storie-details"><img class="storie-details__bg" src="<?=base_url()?>vectors/img/storie_details-bg.png" alt="img"/>
			<div class="container">
				<div class="row">
					<div class="col-xl-8 offset-xl-2">
						<div class="storie-details__top">
							<div class="storie-details__img"><img class="img--bg" src="<?=base_url()?>vectors/img/storie_details-img.jpg" alt="img"/></div>
							<div class="storie-details__description">
								<div class="row align-items-center">
									<div class="col-md-4 text-center text-md-left">
										<h5 class="storie-details__name"><?= $story->story_title ?>?></h5>
									</div>
									<!--<div class="col-md-4 text-center text-md-left"><span>Donation So Far: <strong>845$</strong></span></div>-->
									<!--<div class="col-md-4 text-center text-md-right"><a class="storie-details__button button button--primary" href="#">+ Donate</a></div>-->
								</div>
							</div>
						</div>

						<h6 class="storie-details__title"><?= $story->story_description ?></h6>

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
		<section class="section donors donors--style-2 no-padding-top">
			<div class="container">
				<div class="row margin-bottom">
					<div class="col-12">
						<div class="heading heading--primary heading--center"><span class="heading__pre-title">Donors</span>
							<h2 class="heading__title no-margin-bottom"><span>Who Help</span> <span>Us</span></h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<!-- donors slider start-->
						<div class="slider-holder">
							<div class="donors-slider donors-slider--style-1">
								<div class="donors-slider__item">
									<div class="donors-slider__img"><img src="<?=base_url()?>vectors/img/donor_1.png" alt="donor"/></div>
								</div>
								<div class="donors-slider__item">
									<div class="donors-slider__img"><img src="<?=base_url()?>vectors/img/donor_2.png" alt="donor"/></div>
								</div>
								<div class="donors-slider__item">
									<div class="donors-slider__img"><img src="<?=base_url()?>vectors/img/donor_3.png" alt="donor"/></div>
								</div>
								<div class="donors-slider__item">
									<div class="donors-slider__img"><img src="<?=base_url()?>vectors/img/donor_4.png" alt="donor"/></div>
								</div>
							</div>
						</div>
						<!-- donors slider end-->
					</div>
				</div>
			</div>
		</section>

	<?php endforeach ?>

		<!-- donors end-->
		<!-- bottom bg start-->
		<section class="bottom-background">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bottom-background__img"><img src="<?=base_url()?>vectors/img/bottom-bg.png" alt="img"/></div>
					</div>
				</div>
			</div>
		</section>
		<!-- bottom bg end-->
	</main>
