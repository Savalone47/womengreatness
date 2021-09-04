<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="<?=base_url()?>vectors/img/blog.jpg" media="(min-width: 992px)"/><img class="blog__bg" src="<?= base_url()?>vectors/img/blog_7.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Women Greatness</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
										<h1 class="promo-primary__title"><span></span> <span>Blog</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- blog start-->
				<section class="section blog background--brown"><img class="blog__bg" src="<?= base_url()?>vectors/img/events_inner-bg.png" alt="img"/>
					<div class="container">
						<div class="row offset-margin">
							<?php foreach($item_blogs as $item_blog):?>
							<div class="col-md-6 col-lg-4">
								<div class="blog-item blog-item--style-1">
									<div class="blog-item__img"><img class="img--bg" src="<?php echo base_url($item_blog->item_picture )?>" alt="img"/>
										<span class="blog-item__badge" style="background-color: #49C2DF;"><?php echo $item_blog->category_name?></span></div>
									<div class="blog-item__content">
										<h6 class="blog-item__title"><a href="<?php echo site_url('item_blog_detail/').$item_blog->item_id?>"><?php echo $item_blog->item_title; ?></a></h6>
										<p with="100%"><?= character_limiter($item_blog->item_content, 40)?></p>
										<div class="blog-item__details"><span class="blog-item__date"><?php echo $item_blog->create_at; ?></span></div>
									</div>
								</div>
							</div>
							<?php endforeach;?>
						</div>
						
					</div>
				</section>
				<!-- blog end-->
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
