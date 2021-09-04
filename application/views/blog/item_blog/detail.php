<main class="main">
				<section class="promo-primary">
					<picture>
						<source srcset="<?=base_url()?>vectors/img/blog.jpg" media="(min-width: 992px)"/><img class="img--bg" src="<?php echo base_url()?>vectors/img/blog_1.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Compassion</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Helpo</span>
										<h1 class="promo-primary__title"><span>Blog</span> <span>Post</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- blog post start-->
                <?php foreach($item_blogs as $item):?>
				<section class="section blog-post">
					<div class="container">
						<div class="row">
							<div class="col-md-8 col-lg-9">
								<div class="blog-post__top">
									<div class="blog-post__img"><img class="img--bg" src="<?= base_url($item->item_picture)?>" alt="<?= base_url($item->item_picture)?>"/></div>
									<div class="blog-post__description">
										<div class="row">
											<div class="col-6"><span class="blog-post__name">Admin</span></div>
											<div class="col-6 text-right"><span class="blog-post__date"><?php echo $item->create_at?></span><span>
												<svg class="icon">
													<use xlink:href="#comment"></use>
												</svg> <?php echo $comment_count?></span></div>
										</div>
									</div>
								</div>
								<h5 class="blog-post__title"><?php echo $item->item_title?></h5>
								<p><?php echo $item->item_content?></p>
								
								<div class="blog-post__details">
									<div class="row align-items-center">
										<div class="col-lg-3 text-center text-lg-left"><span class="blog-post__name">Admin</span></div>
										<div class="col-lg-6 text-center">
											<div class="tags"><a class="blog-post__tag" href="#">#Donate</a><a class="blog-post__tag" href="#">#Homelesspeople</a><a class="blog-post__tag" href="#">#Poor</a><a class="blog-post__tag" href="#">#Child</a></div>
										</div>
										<div class="col-lg-3">
											<ul class="blog-post__socials">
												<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											</ul>
										</div>
									</div>
								</div>
								<h6 class="blog-post__title">Comments</h6>
								<div class="comments">
									<?php foreach($comments as $comment):?>
									<div class="comments__item">
										<div class="comments__item-img"><img class="img--bg" src="<?php echo base_url()?>vectors/img/comment_1.jpg" alt="img"/></div>
										<div class="comments__item-description">
											<div class="row align-items-center">
												<div class="col-9 d-flex flex-wrap align-items-baseline"><span class="comments__item-name"><?php echo $comment->comment_name_user?></span><span class="comments__item-date"><?php echo $comment->created_at?></span></div>
												<div class="col-3 text-right"><span class="comments__item-action">
													<svg class="icon">
														<use xlink:href="#previous"></use>
													</svg></span></div>
												<div class="col-12">
													<div class="comments__item-text">
														<p><?php echo $comment->comment_content?></p>
													</div>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach?>
								</div>
								<h6 class="blog-post__title">Comment</h6>
								<form class="form comments-form" action="<?php echo site_url('comment_admin/add')?>" method="POST">
									<div class="row">
										<div class="col-md-12">
											<input class="form__field" type="text" name="comment_name_user" id="comment_name_user" placeholder="First Name"/>
											<span class="text-danger"><?php echo form_error('comment_name_user');?></span>
										</div>
									
										<div class="col-12">
											<textarea class="form__field form__message" name="comment_content" id="comment_content" placeholder="Message"></textarea>
											<span class="text-danger"><?php echo form_error('comment_content');?></span>
										</div>
										<input type="hidden" name="comment_item_id" value="<?php echo $item->item_id?>">
										<div class="col-12">
											<button class="form__submit button button--primary" type="submit">commented</button>
										</div>
									</div>
								</form>
							</div>
							<div class="col-md-4 col-lg-3">
								<div class="blog-post__category-holder">
									<h6 class="blog-post__title">Category</h6>
									<ul class="blog-post__category">
										<?php foreach($item_categories as $category):?>
											<li><a href="<?php echo site_url('item_blog/get_item_category/').$category->category_id?>"><?php echo $category->category_name?></a></li>
										<?php endforeach?>
									</ul>
								</div>
								<?php if($items_recents):?>
								<h6 class="blog-post__title">Recent Posts</h6>
								<div class="recent-posts">
									<?php foreach($items_recents as $recent):?>
									<div class="container">
										<div class="recent-posts__item">
											<div class="recent-posts__item-img"><img class="img--bg" src="<?php echo base_url($recent->item_picture)?>" alt="img"/></div>
											<div class="recent-posts__item-description"><a class="recent-posts__item-link" href="<?php echo site_url('item_blog_detail/').$recent->item_id?>"><?php echo $recent->item_title?></a><span class="recent-posts__item-value"><?php echo $recent->create_at?></span></div>
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
                <?php endforeach?>
				
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
