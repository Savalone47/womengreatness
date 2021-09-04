<main class="main">
		<section class="promo-primary">
			<picture>
				<source srcset="<?=base_url()?>vectors/img/causes.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=base_url()?>vectors/img/causes.jpg" alt="img"/>
			</picture>
			<div class="promo-primary__description"> <span>Charity</span></div>
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="align-container">
							<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
								<h1 class="promo-primary__title"><span>Our</span> <span>Causes</span></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- causes inner start-->
		<section class="section causes-inner">
			<div class="container">
				<div class="row offset-margin">
					<?php foreach ($books as $book):?>
					<div class="col-md-8 offset-md-2 col-lg-12 offset-lg-0">
						<div class="causes-item causes-item--style-3">
							<div class="causes-item__body">
								<div class="row align-items-center">
									<div class="col-lg-5 col-xl-4">
										<div class="causes-item__img"><img class="img--bg" src="<?=base_url('assets/images/books/'.$book['bo_picture'])?>" alt="img"/></div>
									</div>
									<div class="col-lg-7 col-xl-8">
										<div class="causes-item__action">
											<div class="causes-item__badge" style="background-color: #49C2DF"><?php echo $book['bo_cat_name']?></div>
										</div>
										<div class="causes-item__top">
											<h6 class="causes-item__title"> <a href="<?php echo site_url('Books/details/').$book['bo_id']?>"><?php echo $book['bo_title']?></a></h6>
											<p><?php echo $book['bo_description']?></p>
										</div>
										<div class="causes-item__lower">

											<div class="causes-item__details-holder">
												<div class="causes-item__details-item"><span>Price </span><span>$ <?php echo $book['bo_price']?></span></div>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endforeach;?>
				</div>
			</div>

			<div class="container">
				<div class="row">
				</div>
			</div>
		</section>
		<!-- causes inner end-->
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

