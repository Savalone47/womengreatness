<main class="main">
		<section class="promo-primary">
			<picture>
				<source srcset="<?=base_url()?>vectors/img/stories.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?=base_url()?>vectors/img/stories.jpg" alt="img"/>
			</picture>
			<div class="promo-primary__description"> <span>Women Greatness</span></div>
			<div class="container">
				<div class="row">
					<div class="col-auto">
						<div class="align-container">
							<div class="align-container__item"><span class="promo-primary__pre-title"></span>
								<h1 class="promo-primary__title"><span></span> <span>Issues</span></h1>
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

				<?php 
					$i=1;
					foreach ($issues as $issue) {
						if ($i%2 == 0) {
				?>

					<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
						<div class="stories-item">
							<div class="row align-items-center">
								<div class="col-lg-6 col-xl-5">
									<div class="img-box"><img class="img--layout" src="<?=base_url()?>vectors/img/storie_1-layout.png" alt="img"/>
										<div class="img-box__img"><img class="img--bg" src="<?=base_url()?>assets/images/issues/<?=$issue['is_picture']?>" alt="img"/></div>
									</div>
								</div>
								<div class="col-lg-6 col-xl-6 offset-xl-1">
									<div class="heading heading--primary"><span class="heading__pre-title"><?=$i?></span>
										<h2 class="heading__title"><span></span> <span><?= $issue['is_title']?></span></h2>
									</div>
									<p><?= word_limiter($issue['is_description'], 80)?></p><a class="button stories-item__button button--primary" href="<?= base_url()?>issues/view/<?= $issue['is_id']?>">Read More</a>
								</div>
							</div>
						</div>
					</div>

				<?php
						}
						else{
				?>
					<div class="col-md-10 offset-md-1 col-lg-12 offset-lg-0">
						<div class="stories-item">
							<div class="row align-items-center flex-column-reverse flex-lg-row">
								<div class="col-lg-6 col-xl-6">
									<div class="heading heading--primary"><span class="heading__pre-title"><?= $i?></span>
										<h2 class="heading__title"><span></span> <span><?= $issue['is_title']?></span></h2>
									</div>
									<p><?= word_limiter($issue['is_description'], 80) ?></p><a class="button stories-item__button button--primary" href="<?= base_url()?>issues/view/<?= $issue['is_id']?>">Read More</a>
								</div>
								<div class="col-lg-6 col-xl-5 offset-xl-1">
									<div class="img-box"><img class="img--layout" src="<?=base_url()?>vectors/img/storie_2-layout.png" alt="img"/>
										<div class="img-box__img"><img class="img--bg" src="<?=base_url()?>assets/images/issues/<?=$issue['is_picture']?>" alt="img"/></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php
						}

						$i++;
					}
				?>

				</div>
			</div>
		</section>
		<!-- stories end-->
	</main>
