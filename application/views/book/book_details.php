<main class="main">
		<section class="promo-primary">
			<picture>
				<source srcset="<?=base_url()?>vectors/img/cause_details.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=base_url()?>vectors/img/cause_details.jpg" alt="img"/>
			</picture>
			<div class="promo-primary__description"> <span>Charity</span></div>
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="align-container">
							<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
								<h1 class="promo-primary__title"><span>Healthy</span> <span>Food</span></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- donation start-->
		<?php foreach ($book_detail as $book):?>
		<section class="section donation">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="donation-item">
							<div class="donation-item__img"><img class="img--bg" src="<?=base_url('assets/images/books/'.$book->bo_picture)?>" alt="img"/></div>
							<div class="donation-item__body">
								<div class="row">
									<div class="col-12">
										<h5 class="donation-item__title"><?php echo $book->bo_title?></h5>
									</div>
								</div>
								<div class="row align-items-end">
									<div class="col-lg-7">
										<div class="progress-bar">
											<div class="progress-bar__inner" style="width: 42%;">
											</div>
										</div>
									</div>
									<div class="col-lg-5">
										<div class="donation-item__details-holder">
											<div class="donation-item__details-item"><span>price: </span>$<span><?=$book->bo_price?></span></div>
										</div>
									</div>
								</div>
								<form class="form donation-form" action="javascript:void(0);">
									<div class="row align-items-baseline margin-bottom">
										<div class="col-lg-5 col-xl-6">
										</div>
									</div>
									<div class="row margin-bottom">
										<div class="col-12">
											<h6 class="form__title">Payment Method</h6>
										</div>
										<div class="col-12">
											<label class="form__radio-label"><img class="form__label-img" src="<?=base_url()?>vectors/img/paypal.png" alt="paypal"/>
												<input class="form__input-radio" type="radio" name="method-select" value="paypal" checked="checked"/><span class="form__radio-mask form__radio-mask"></span>
											</label>
											<label class="form__radio-label"><img class="form__label-img" src="<?=base_url()?>vectors/img/visa.png" alt="visa"/>
												<input class="form__input-radio" type="radio" name="method-select" value="visa"/><span class="form__radio-mask form__radio-mask"></span>
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<h6 class="form__title">Personal Info</h6>
										</div>
										<div class="col-lg-4 margin-30">
											<input class="form__field" type="text" name="first-name" placeholder="First Name"/>
										</div>
										<div class="col-lg-4 margin-30">
											<input class="form__field" type="text" name="last-name" placeholder="Last Name"/>
										</div>
										<div class="col-lg-4 margin-30">
											<input class="form__field" type="email" name="email" placeholder="Email"/>
										</div>
										<div class="col-lg-4">
											<button class="form__submit" type="submit">Buy it</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- donation end-->
		<section class="section " style="margin-top:-20%;">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<!-- cause details tabs start-->
						<div class="tabs horizontal-tabs cause-details-tabs">
							<ul class="horizontal-tabs__header">
								<li><a href=""><span>Description </span></a></li>
							</ul>
							<div class="horizontal-tabs__content">
								<div class="horizontal-tabs__item" id="horizontal-tabs__item-1">
									<p><strong><?=$book->bo_description?></strong></p>
								</div>

								<div class="horizontal-tabs__item" id="horizontal-tabs__item-4">

								</div>
							</div>
						</div>
						<!-- cause details tabs end-->
					</div>
				</div>
			</div>
		</section>
		<!-- causes start-->

		<?php endforeach;?>
		<!-- causes end-->
	</main>
