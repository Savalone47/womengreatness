<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="<?=base_url()?>vectors/img/blog.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo base_url()?>vectors/img/blog_1.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Women Greatness</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
										<h1 class="promo-primary__title"><span></span> <span><?=$impact['impact_titlte']?></span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- blog post start-->
				<section class="section blog-post">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-lg-9">
								<div class="blog-post__top">
									<div class="blog-post__img"><img class="img--bg" src="<?= base_url($impact['impact_picture'])?>" alt="image"/></div>
									<div class="blog-post__description">
										<div class="row">
											<div class="col-6"><span class="blog-post__name">Admin</span></div>
											<div class="col-6 text-right"><span class="blog-post__date"><?php echo $impact['create_at']?></span></div>
										</div>
									</div>
								</div>
								<h5 class="blog-post__title"><?php echo $impact['impact_titlte']?></h5>
								<p><?php echo $impact['impact_content']?></p>
							</div>
							<div class="col-md-4 col-lg-3">
								
								<?php if($items_recents):?>
								<h6 class="blog-post__title">Recent Posts</h6>
								<div class="recent-posts">
									<?php foreach($items_recents as $recent):?>
									<div class="container">
										<div class="recent-posts__item">
											<div class="recent-posts__item-img"><img class="img--bg" src="<?php echo base_url($recent->impact_picture)?>" alt="img"/></div>
											<div class="recent-posts__item-description"><a class="recent-posts__item-link" href="<?php echo site_url('impact/get_detail_impact/').$recent->impact_id?>"><?php echo $recent->impact_titlte?></a><span class="recent-posts__item-value"><?php echo $recent->create_at?></span></div>
										</div>
									</div>
									<br>

									<?php endforeach?>
								</div>
								<?php endif ?>
								
							</div>
						</div>
					</div>
				</section>
                
				<section class="bottom-background background--brown">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<div class="bottom-background__img"><img src="<?php echo base_url('vectors/img/bottom-bg.png')?>" alt="img"/></div>
							</div>
						</div>
					</div>
				</section>
				<!-- bottom bg end-->
			</main>
