
<!-- header end-->
	<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="<?=base_url()?>/vectors/img/events.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=base_url()?>/vectors/img/events_inner-bg.png" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Women Greatness</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
										<h1 class="promo-primary__title"><span></span> <span>Events</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- events inner start-->
				<section class="section events-inner"><img class="events-inner__bg" src="<?=base_url()?>/vectors/img/events_inner-bg.png" alt="img"/>
					<div class="container">
						<div class="row offset-30">
							<?php
								foreach ($events as $event) {
							?>

							<div class="col-xl-10 offset-xl-1">
								<div class="upcoming-item">
									<div class="upcoming-item__date"><span>30</span><span><?=date("M, d", strtotime($event['ev_date']))?></span></div>
									<div class="upcoming-item__body">
										<div class="row align-items-center">
											<div class="col-lg-5 col-xl-4">
												<div class="upcoming-item__img"><img class="img--bg" src="<?=base_url()?>/assets/images/events/<?=$event['ev_picture']?>" alt="img"/></div>
											</div>
											<div class="col-lg-7 col-xl-8">
												<div class="upcoming-item__description">
													<h6 class="upcoming-item__title"><a href="event-details.html"><?=$event['ev_title']?></a></h6>
													<p><?=character_limiter($event['ev_description'], 100)?></p>
													<div class="upcoming-item__details">
														<p>
															<svg class="icon">
																<use xlink:href="#clock"></use>
															</svg> <strong><?php echo date("F d, Y", strtotime($event['ev_date']))?></strong>
														</p>
														<p>
															<svg class="icon">
																<use xlink:href="#placeholder"></use>
															</svg> <strong><?=$event['ev_place']?>,</strong> 
																<?=$event['ev_city']?>
																, <?=$event['ev_country']?>
														</p>
														<p>
															 <strong><a class="tags__item" href="<?=base_url()?>Event/view/<?=$event['ev_id']?>">View More</a>
															</strong>									
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<?php
								}
							?>
						</div>
						<div class="row">
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
								</ul-->
								<!-- pagination end-->
							</div>
						</div>
					</div>
				</section>
				<!-- events inner end-->
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
