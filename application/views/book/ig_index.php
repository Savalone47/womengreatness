			<!-- header end-->
			<main class="main">
				<section class="promo-primary promo-primary--shop">
					<picture>
						<source srcset="<?=base_url()?>/vectors/img/shop.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=base_url()?>/vectors/img/shop.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Women Greatness</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
										<h1 class="promo-primary__title"><span></span> <span>Librairy</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- shop start-->
				<section class="section shop">
					<div class="container">
						<div class="row align-items-baseline">
							<div class="col-5"><span class="shop__aside-trigger">Filter</span></div>
							<div class="col-7 text-right">
			
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3">
								<div class="aside-holder"><span class="shop__aside-close">
									<svg class="icon">
										<use xlink:href="#close"></use>
									</svg></span>
									<div class="shop-aside">
										<div class="shop-aside__filter-block">
											<ul class="brand-filter">
												<h6 class="shop-aside__title">Categories </h6>
												<li class="brand-filter__item"><a href="<?=base_url()?>book"><span class="brand-filter__brand">All</span></a><span class="brand-filter__count"></span>
												</li>
												<?php 
												foreach ($categories as $categorie) {
												?>
												<li class="brand-filter__item"><a href="<?=base_url()?>book/byCategory/<?=$categorie['bo_cat_id']?>"><span class="brand-filter__brand"><?=$categorie['bo_cat_name']?></span></a><span class="brand-filter__count"></span></li>

												<?php												}
												?>
								
											</ul>
										</div>
										
									</div>
									<div class="recent-posts">
										<h6 class="shop-aside__title">Recent Books</h6>
										<?php 
										foreach ($recent_books as $recent_book) {
										?>
										<div class="recent-posts__item">
											<div class="recent-posts__item-img"><img class="img--contain" src="<?= base_url();?>/assets/images/books/<?=$recent_book['bo_picture']?>" alt="img"/></div>
											<div class="recent-posts__item-description"><a class="recent-posts__item-link" href="<?=base_url()?>Book/view/<?=$recent_book['bo_id']?>"><?=$recent_book['bo_title']?></a><span class="recent-posts__item-value">By <?=$recent_book['bo_author']?></span></div>
										</div>
										
										<?php
										}
									    ?>
									</div>
								</div>
							</div>
							<div class="col-lg-9">
								<div class="row offset-30">

									<?php 
										foreach ($books as $book) {
									?>
									<div class="col-12 col-sm-6 col-md-4">
										<div class="shop-item">
											<div class="shop-item__img">
												<!--a class="shop-item__add" href="<?=base_url()?>Book/ReadPDF/<?=$book['bo_file']?>">
												<span>Read</span></a--><img class="img--contain" src="<?= base_url();?>/assets/images/books/<?=$book['bo_picture']?>" alt="img"/>
											</div>
										    


											<div class="shop-item__details">
												<h6 class="shop-item__name"><a href="<?=base_url()?>Book/view/<?=$book['bo_id']?>"><?=$book['bo_title']?></a></h6><span class="shop-item__price">Access: <?= $book['bo_access']?></span>
											</div>
										</div>
									</div>
									<?php
										}
									?>

								</div>
								<!--div class="row">
									<div class="col-12">
										<!-- pagination start-->
										<!--ul class="pagination">
											<li class="pagination__item pagination__item--prev"><i class="fa fa-angle-left" aria-hidden="true"></i><span>Back</span>
											</li>
											<li class="pagination__item"><span>1</span></li>
											<li class="pagination__item pagination__item--active"><span>2</span></li>
											<li class="pagination__item"><span>3</span></li>
											<li class="pagination__item"><span>4</span></li>
											<li class="pagination__item"><span>5</span></li>
											<li class="pagination__item pagination__item--disabled">...</li>
											<li class="pagination__item"><span>12</span></li>
											<li class="pagination__item pagination__item--next"><span>Next</span><i class="fa fa-angle-right" aria-hidden="true"></i>
											</li>
										</ul>
										<!-- pagination end-->
									<!--/div>
								</div-->
							</div>
						</div>
					</div>
				</section>
				<!-- shop end-->
				<!-- bottom bg start-->
				<section class="bottom-background background--brown">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="<?=base_url()?>/vectors/img/bottom-bg.png" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>
				<!-- bottom bg end-->
			</main>
			