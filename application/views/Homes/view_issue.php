			<!-- header end-->
			<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="<?=base_url()?>vectors/img/volunteer.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=base_url()?>vectors/img/volunteer.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Women Greatness</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
										<h1 class="promo-primary__title"><span></span> <span><?= $issue['is_title']?></span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section start-->
				<section class="section team-member no-padding-bottom">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-lg-6 col-xl-5">
								<div class="img-box"><img class="img--layout" src="<?=base_url()?>vectors/img/about_layout-reverse.png" alt="img"/>
									<div class="img-box__img"><img class="img--bg" src="<?=base_url()?>assets/images/issues/<?= $issue['is_picture']?>" alt="img"/></div>
								</div>
							</div>
							<div class="col-lg-6 col-xl-6 offset-xl-1">
								<div class="heading heading--primary" style="text-align: justify"><span class="heading__pre-title">Women Greatness Issues</span>
									<h2 class="heading__title"><span><?= $issue['is_title']?></span></h2>
									<?= $issue['is_description']?>
								</div>
							</div>
						</div>
					</div>
				</section>

				<!-- section end-->
				<!-- section start-->

				<!-- section end-->
				<!-- bottom bg start-->
				<section class="bottom-background background--brown">
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
			<!-- footer start-->
			