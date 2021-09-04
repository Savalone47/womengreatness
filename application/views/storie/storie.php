<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="<?php echo site_url('vectors/img/stories.jpg')?>" media="(min-width: 992px)"/><img class="img--bg" src="img/stories.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Women Greatness</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
										<h1 class="promo-primary__title"><span></span> <span>Inspiring Stories</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- stories start-->
				<section class="section stories">
					<div class="container">
						<div class="row offset-70">
                        <?php foreach($stories as $s){ ?>
                            <div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
								<div class="stories-item">
									<div class="row align-items-center">
										<div class="col-lg-6 col-xl-5">
											<div class="img-box"><img class="img--layout" src="<?php echo site_url( $s['storie_picture']); ?>" alt="img" width='100%'/>
												<div class="img-box__img"><img class="img--bg" src="<?php echo site_url( $s['storie_picture']); ?>" alt="img" width='100%'/></div>
											</div>
										</div>
										<div class="col-lg-6 col-xl-6 offset-xl-1">
											<div class="heading heading--primary"><span class="heading__pre-title">01</span>
												<h2 class="heading__title"><span><a href="<?php echo site_url('storie/get_detail_storie/').$s['storie_id']?>"><?php echo $s['storie_title']; ?></a></span></h2>
											</div>
											<p><?php echo character_limiter($s['storie_content'], 200)?></p><a class="button stories-item__button button--primary" href="<?php echo site_url('storie/get_detail_storie/').$s['storie_id']?>">Read Story</a>
										</div>
									</div>
								</div>
							</div>
                    <?php } ?>
							
						</div>
					</div>
				</section>
				<!-- stories end-->
			</main>