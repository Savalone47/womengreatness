
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
									<div class="align-container__item"><!--span class="promo-primary__pre-title">Helpo</span-->
										<h1 class="promo-primary__title"><span></span> <span><?= $events[0]->ev_title?></span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- shop product start-->
				<section class="section shop-product background--brown">
					<div class="container">
						<div class="row">
							<?php foreach ($events as $event):?>
							<div class="col-md-8 offset-md-2 col-lg-6 offset-lg-0">
								<!-- dual slider start-->
								<div class="dual-slider">
									<div class="main-slider">
										<div class="main-slider__item">
											<div class="main-slider__img"><img class="img--contain" src="<?=base_url();?>/assets/images/events/<?=$event->ev_picture?>" alt="item"/></div>
										</div>
									</div>
								</div>
								<!-- dual slider end-->
							</div>
							<div class="col-lg-6 col-xl-5 offset-xl-1">
								<!--div class="shop-product__top">
									<h3 class="shop-product__name"><?= $event->ev_title?></h3><span class="shop-product__article">Article: 212 435</span>
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
									<h4 class="shop-product__price"><?= $event->ev_price?>$</h4>
								</div-->
								<div class="shop-product__description">
									<h6 class="shop-product__title">Description</h6>
									<p style="text-align: justify">
										<?= $event->ev_description?>
									</p>
									<ul class="shop-product__list">
										<li>Place : <?= $event->ev_place?></li>
										<li>City: <?= $event->ev_city?></li>
										<li>Country: <?= $event->ev_country?></li>
									</ul>
									<div class="shop-product__tags">
										<div class="tags"><a class="tags__item" href="#schedule">Schedule and Facilitors</a></div>
									</div>
									<form class="form product-form" action="javascript:void(0);" autocomplete="off">
										<div class="form__wrapper">
											<div class="form__count"><span class="form__minus"></span>
												<button class="form__submit" type="submit">
													<!--svg class="icon">
														<use xlink:href="#bag"></use>
													</svg--> 
													<span>Book now</span>
												</button>
											</div>
										</div>
									</form>
								</div>
							</div>
							<?php endforeach;?>
						</div>
					</div>
				</section>
				<!-- shop product end-->
				<!-- section start-->
				<section class="section" id="schedule">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-xl-9">
								<!-- shop product tabs start-->
								<div class="tabs horizontal-tabs shop-product-tabs">
									<ul class="horizontal-tabs__header">
										<li><a href="#horizontal-tabs__item-1"><span>Schedule</span></a></li>
										<li><a href="#horizontal-tabs__item-2"><span>Facilitator</span></a></li>
									</ul>
									<div class="horizontal-tabs__content">
										<div class="horizontal-tabs__item" id="horizontal-tabs__item-1">
											<div class="table">
												<div class="table__body">
													<div class="table__row">
														<div class="table__cell">HEADER</div>
														<div class="table__cell">TITLE</div>
														<div class="table__cell">DATE</div>
														<div class="table__cell">START TIME</div>
														<div class="table__cell">END TIME</div>
														<div class="table__cell">FACILITATOR</div>
													</div>
													<?php 
													foreach ($schedules as $schedule) {
													?>
														<div class="table__row">
															<div class="table__cell"><?=$schedule['sche_header']?></div>
															<div class="table__cell"><?=$schedule['sche_title']?></div>
															<div class="table__cell"><?php echo date("F d, Y", strtotime($schedule['sche_date']))?></div>
															<div class="table__cell"><?=$schedule['sche_start_time']?></div>
															<div class="table__cell"><?=$schedule['sche_end_time']?></div>
															<div class="table__cell"><?=$schedule['faci_id']?></div>
														</div>
													<?php
													}
													?>
												</div>
											</div>
										</div>
										<div class="horizontal-tabs__item" id="horizontal-tabs__item-2">
											<div class="comments">
												<div class="comments__item">
													<div class="comments__item-img"><img class="img--bg" src="<?=base_url()?>/vectors/img/comment_1.jpg" alt="img"/></div>
													<div class="comments__item-description">
														<div class="row align-items-center">
															<div class="col-6 col-sm-8 col-md-7 d-flex flex-wrap align-items-baseline"><span class="comments__item-name">Ann Miller</span><span class="comments__item-date">23 Jan'19 02:15PM</span></div>
															<div class="col-6 col-sm-4 col-md-5 text-right">
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
																</ul>
															</div>
															<div class="col-12">
																<div class="comments__item-text">
																	<p>Asian carps sailback scorpionfish; dragon goby lemon sole triplefin blenny hog sucker. Smelt sleeper shovelnose sturgeon merluccid hake cow shark herring smelt trout-perch</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="comments__item">
													<div class="comments__item-img"><img class="img--bg" src="<?=base_url()?>/vectors/img/comment_2.jpg" alt="img"/></div>
													<div class="comments__item-description">
														<div class="row align-items-center">
															<div class="col-6 col-sm-8 col-md-7 d-flex flex-wrap align-items-baseline"><span class="comments__item-name">John Walker</span><span class="comments__item-date">23 Jan'19 02:15PM</span></div>
															<div class="col-6 col-sm-4 col-md-5 text-right">
																<ul class="rating-list">
																	<li class="rating-list__item"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																	<li class="rating-list__item"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																	<li class="rating-list__item"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																	<li class="rating-list__item rating-list__item--disabled"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																	<li class="rating-list__item rating-list__item--disabled"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																</ul>
															</div>
															<div class="col-12">
																<div class="comments__item-text">
																	<p>Dragon goby lemon sole triplefin blenny hog sucker. Smelt sleeper shovelnose sturgeon merluccid hake cow shark herring smelt trout-perch</p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<div class="comments__item">
													<div class="comments__item-img"><img class="img--bg" src="<?=base_url()?>/vectors/img/comment_3.jpg" alt="img"/></div>
													<div class="comments__item-description">
														<div class="row align-items-center">
															<div class="col-6 col-sm-8 col-md-7 d-flex flex-wrap align-items-baseline"><span class="comments__item-name">Helen Dollens</span><span class="comments__item-date">23 Jan'19 02:15PM</span></div>
															<div class="col-6 col-sm-4 col-md-5 text-right">
																<ul class="rating-list">
																	<li class="rating-list__item"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																	<li class="rating-list__item"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																	<li class="rating-list__item rating-list__item--disabled"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																	<li class="rating-list__item rating-list__item--disabled"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																	<li class="rating-list__item rating-list__item--disabled"><i class="fa fa-star" aria-hidden="true"></i>
																	</li>
																</ul>
															</div>
															<div class="col-12">
																<div class="comments__item-text">
																	<p>Cow shark herring smelt trout-perch Asian carps sailback scorpionfish; dragon goby lemon sole triplefin blenny hog sucker. Smelt sleeper shovelnose sturgeon merluccid hake </p>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- shop product tabs end-->
											</div>
											<!-- comments form start-->
											<form class="form comments-form" action="javascript:void(0);" autocomplete="off">
												<h6 class="form__title">Live Comment</h6>
												<div class="row">
													<div class="col-xl-5">
														<input class="form__field" type="text" name="first-name" placeholder="Firs Name"/>
													</div>
													<div class="col-xl-5">
														<input class="form__field" type="email" name="email" placeholder="Email"/>
													</div>
													<div class="col-12">
														<textarea class="form__field form__message" name="message" placeholder="Message"></textarea>
													</div>
													<div class="col-12">
														<div class="form__rating"><strong>Your rating:</strong>
															<input class="form__rating-input" id="rate_0" type="radio" name="rating" value="0" disabled="disabled"/>
															<label class="form__rating-label" for="rate_1"><i class="fa fa-star" aria-hidden="true"></i>
															</label>
															<input class="form__rating-input" id="rate_1" type="radio" name="rating" value="1"/>
															<label class="form__rating-label" for="rate_2"><i class="fa fa-star" aria-hidden="true"></i>
															</label>
															<input class="form__rating-input" id="rate_2" type="radio" name="rating" value="2"/>
															<label class="form__rating-label" for="rate_3"><i class="fa fa-star" aria-hidden="true"></i>
															</label>
															<input class="form__rating-input" id="rate_3" type="radio" name="rating" value="3" checked="checked"/>
															<label class="form__rating-label" for="rate_4"><i class="fa fa-star" aria-hidden="true"></i>
															</label>
															<input class="form__rating-input" id="rate_4" type="radio" name="rating" value="4"/>
															<label class="form__rating-label" for="rate_5"><i class="fa fa-star" aria-hidden="true"></i>
															</label>
															<input class="form__rating-input" id="rate_5" type="radio" name="rating" value="5"/>
														</div><span class="form__text">Your email address will not be published. Required fields are marked *</span>
													</div>
													<div class="col-12">
														<button class="form__submit" type="submit">Send Comment</button>
													</div>
												</div>
											</form>
											<!-- comments form end-->
										</div>
									</div>
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
