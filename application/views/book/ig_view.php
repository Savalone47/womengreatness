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
										<h1 class="promo-primary__title"><span></span> <span><?=$book[0]->bo_title?></span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- shop product start-->
				<section class="section shop-product background--brown" id="lolo">
					<div class="container">
						<div class="row">
							<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-0">
								<!-- dual slider start-->
								<div class="dual-slider">
									<div class="main-slider">
										<div class="main-slider__item">
											<div class="main-slider__img"><img class="img--contain" src="<?= base_url();?>/assets/images/books/<?=$book[0]->bo_picture?>" alt="item"/></div>
										</div>
									</div>
								</div>
								<!-- dual slider end-->
							</div>
							<div class="col-lg-6 col-xl-5 offset-xl-1">
								<div class="shop-product__top">
									<h3 class="shop-product__name"><?=$book[0]->bo_title?></h3><!--span class="shop-product__article">Article: 212 435</span>
									<ul class="rating-list">
										<li class="rating-list__item"><i class="fa fa-star" aria-hidden="true"></i>
										</li>
										<li class="rating-list__item"><i class="fa fa-star" aria-hidden="true"></i>
										</li>
										<li class="rating-list__item"><i class="fa fa-star" aria-hidden="true"></i>
										</li>
										<li class="rating-list__item"><i class="fa fa-star" aria-hidden="true"></i>
										</li>
										<li class="rating-list__item rating-list__item--disabled"><i class="fa fa-star" aria-hidden="true"></i>
										</li>
									</ul><span class="shop-product__reviews-count">(2 customer reviews)</span>
									<h4 class="shop-product__price"><?=$book[0]->bo_price?>$</h4-->
								</div>
								<div class="shop-product__description">
									<h6 class="shop-product__title">Description</h6>
									<p>
										<?=$book[0]->bo_description?>
									</p>
									<ul class="shop-product__list">
										<li><i> Author: <?= $book[0]->bo_author?></i></li>
										<li><i>Publishing House: <?= $book[0]->bo_pub_house?></i></li>
										<li><i>Type: <?= $book[0]->bo_access?></i></li>
									</ul>
									<div class="shop-product__tags">
										<div class="tags">
											<?php 
											if ($book[0]->bo_access =="Public") {
											?>
												<a class="tags__item" href="<?= base_url();?>/Book/ReadPDF/<?=$book[0]->bo_file?>">Read onLine</a>
											<?php
											}
											else{
												if ($this->session->status) {
											?>
												<a class="tags__item" href="<?= base_url();?>/Book/ReadPDF/<?=$book[0]->bo_file?>">Read onLine</a>
											<?php
												}

												else
											?>
												<a class="tags__item" href="<?=base_url()?>Book/login/<?=$book[0]->bo_file?>">Login to read </a>
											<?php
											}
											?>
										</div>
									</div>
									<form class="form product-form" action="javascript:void(0);" autocomplete="off">
	
										<!--div class="form__wrapper">
											<div class="form__count"><span class="form__minus"></span>
											
												<button class="form__submit" type="submit">
													<svg class="icon">
														<use xlink:href="#bag"></use>
													</svg> <span>Add to cart</span>
												</button>
											</div>
										</div-->
									</form>
								</div>
							</div>
						</div>
					</div>
					<br><br>
					<div class="container">
						<div class="row align-items-end margin-bottom">
							<div class="col-md-7 col-lg-8">
								<div class="heading heading--primary">
									<h2 class="heading__title no-margin-bottom"><span>Other</span> <span>Books</span></h2>
								</div>
							</div>
							<div class="col-md-5 col-lg-4 text-md-right">
								<!-- slider nav start-->
								<div class="slider__nav related-slider__nav">
									<div class="slider__arrows">
										<div class="slider__prev"><i class="fa fa-chevron-left" aria-hidden="true"></i>
										</div>
										<div class="slider__next"><i class="fa fa-chevron-right" aria-hidden="true"></i>
										</div>
									</div>
								</div>
								<!-- slider nav end-->
							</div>
						</div>
						<div class="row offset-margin">
							<div class="col-12">
								<div class="related-slider">

									<?php 
									foreach ($recent_books as $recent_book) {
									?>
									<div class="related-slider__item">
										<div class="shop-item">
											<div class="shop-item__img"><span class="shop-item__badge shop-item__badge--sale"></span><!--a class="shop-item__add" href="">
												<!--svg class="icon">
													<use xlink:href="#bag"></use>
												</svg-->
												<!--span>Book now</span--></a><img class="img--contain" src="<?= base_url();?>/assets/images/books/<?=$recent_book['bo_picture']?>" alt="img"/></div>
											<div class="shop-item__details">
												<h6 class="shop-item__name"><a href="<?=base_url()?>Book/view/<?=$recent_book['bo_id']?>"><?=$recent_book['bo_title']?></a></h6><span class="shop-item__price">By <?=$recent_book['bo_author']?></span>
											</div>
										</div>
									</div>
						
									<?php 
									}
								    ?>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
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
			<!-- footer start-->
			