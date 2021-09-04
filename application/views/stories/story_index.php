<main class="main">
		<section class="promo-primary">
			<picture>
				<source srcset="<?=base_url()?>vectors/img/stories.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=base_url()?>vectors/img/stories.jpg" alt="img"/>
			</picture>
			<div class="promo-primary__description"> <span>Compassion</span></div>
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="align-container">
							<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
								<h1 class="promo-primary__title"><span>Our</span> <span>Stories</span></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- stories start-->
	<?php foreach ($stories as $story):?>
		<section class="section stories">
			<div class="container">
				<div class="row offset-70">
					<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
						<div class="stories-item">
							<div class="row align-items-center">
								<div class="col-lg-6 col-xl-5">
									<div class="img-box"><img class="img--layout" src="<?=base_url()?>vectors/img/storie_1-layout.png" alt="img"/>
										<div class="img-box__img"><img class="img--bg" src="<?=base_url()?>vectors/img/storie_1.jpg" alt="img"/></div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-6 offset-xl-1">
									<div class="heading heading--primary"><span class="heading__pre-title">01</span>
										<h2 class="heading__title"><span>Jonathan</span> <span>Weaver</span></h2>
									</div>
									<p>Burma danio black bass straptail southern Dolly Varden orbicular velvetfish trumpetfish; bluntnose minnow. Hatchetfish pricklefish sixgill ray sawfish scaly dragonfish! Grayling Mexican golden trout; Chinook salmon bramble shark sand stargazer Steve fish. Scat zebra pleco graveldiver river shark tripod fish; flagtail bala shark warbonnet.</p><a class="button stories-item__button button--primary" href="">Read Story</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
						<div class="stories-item">
							<div class="row align-items-center flex-column-reverse flex-lg-row">
								<div class="col-lg-6 col-xl-6">
									<div class="heading heading--primary"><span class="heading__pre-title">02</span>
										<h2 class="heading__title"><span>Lillian</span> <span>Summers</span></h2>
									</div>
									<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet.</p><a class="button stories-item__button button--primary" href="">Read Story</a>
								</div>
								<div class="col-lg-6 col-xl-5 offset-xl-1">
									<div class="img-box"><img class="img--layout" src="<?=base_url()?>vectors/img/storie_2-layout.png" alt="img"/>
										<div class="img-box__img"><img class="img--bg" src="<?=base_url()?>vectors/img/storie_2.jpg" alt="img"/></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
						<div class="stories-item">
							<div class="row align-items-center">
								<div class="col-lg-6 col-xl-5">
									<div class="img-box"><img class="img--layout" src="<?=base_url()?>vectors/img/storie_3-layout.png" alt="img"/>
										<div class="img-box__img"><img class="img--bg" src="<?=base_url()?>vectors/img/storie_3.jpg" alt="img"/></div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-6 offset-xl-1">
									<div class="heading heading--primary"><span class="heading__pre-title">03</span>
										<h2 class="heading__title"><span>Lambert</span> <span>Hodges</span></h2>
									</div>
									<p>Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet. Sea chub demoiselle whalefish zebra lionfish mud cat pelican eel. Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch</p><a class="button stories-item__button button--primary" href="">Read Story</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
						<div class="stories-item">
							<div class="row align-items-center flex-column-reverse flex-lg-row">
								<div class="col-lg-6 col-xl-6">
									<div class="heading heading--primary"><span class="heading__pre-title">04</span>
										<h2 class="heading__title"><span>William</span> <span>Ellis</span></h2>
									</div>
									<p>Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet.</p><a class="button stories-item__button button--primary" href="">Read Story</a>
								</div>
								<div class="col-lg-6 col-xl-5 offset-xl-1">
									<div class="img-box"><img class="img--layout" src="<?=base_url()?>vectors/img/storie_4-layout.png" alt="img"/>
										<div class="img-box__img"><img class="img--bg" src="<?=base_url()?>vectors/img/storie_4.jpg" alt="img"/></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endforeach;?>
		<!-- stories end-->
</main>
