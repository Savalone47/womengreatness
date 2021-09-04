
			<main class="main">
				<section class="promo-primary promo-primary--elements">
					<picture>
						<source srcset="<?=base_url()?>vectors/img/blog.jpg"/><img class="img--bg" src="<?=base_url()?>vectors/img/blog.jpg" alt="img"/>
					</picture>
					<div class="promo-primary__description"> <span>Women Greatness</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title"></span>
											<h1 class="promo-primary__title"><span></span> <span>Advocacy</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="section elements">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<p>Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch. Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet grouper darter wels catfish mud catfish.</p>
								
							</div>
							<div class="col-md-6">
								<p>Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch. Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet grouper darter wels catfish mud catfish.</p>
								
							</div>
						</div>
					</div>
					<!-- pricing style-1 start-->
					<section class="section pricing pricing-style--1">
						<div class="container">
							<div class="row offset-margin">
								<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
									<div class="pricing-item pricing-item--primary">
										<h6 class="pricing-item__plan">Ground Advocates</h6>
										<div class="pricing-item__price"></div>
										<ul class="pricing-item__list">
											<li>Canthigaster rostrata. </li>
											<li>Midshipman dartfish </li>
											<li class="item--disabled">Modoc sucker yellowtail </li>
											<li class="item--disabled">Kingfish basslet.</li>
										</ul><a class="pricing-item__button button button--primary" href="#join">Join us</a>
									</div>
								</div>

								<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
									<div class="pricing-item pricing-item--primary">
										<h6 class="pricing-item__plan">Online Advocates</h6>
										<div class="pricing-item__price"></div>
										<ul class="pricing-item__list">
											<li>Canthigaster rostrata. </li>
											<li>Midshipman dartfish </li>
											<li class="item--disabled">Modoc sucker yellowtail </li>
											<li class="item--disabled">Kingfish basslet.</li>
										</ul><a class="pricing-item__button button button--primary" href="#join">Join us</a>
									</div>
								</div>
								<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
									<div class="pricing-item pricing-item--primary">
										<h6 class="pricing-item__plan">Group Advocates</h6>
										<div class="pricing-item__price"><span></span></div>
										<ul class="pricing-item__list">
											<li>Canthigaster rostrata. </li>
											<li>Midshipman dartfish </li>
											<li>Modoc sucker yellowtail </li>
											<li>Kingfish basslet.</li>
										</ul><a class="pricing-item__button button button--primary" href="#join">Join us</a>
									</div>
								</div>
								<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-lg-4">
									<div class="pricing-item pricing-item--primary">
										<h6 class="pricing-item__plan">Corporates</h6>
										<div class="pricing-item__price"><span></span></div>
										<ul class="pricing-item__list">
											<li>Canthigaster rostrata. </li>
											<li>Midshipman dartfish </li>
											<li>Modoc sucker yellowtail </li>
											<li>Kingfish basslet.</li>
										</ul><a class="pricing-item__button button button--primary" href="#join">Join us</a>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- pricing style-1 end-->
				</section>
				<section class="section elements no-padding-top" id="join">
					
					<!-- pricing style-2 start-->
					<section class="section pricing pricing-style--2 no-padding-top no-padding-bottom">
						
						<div class="container">
							<div class="row offset-margin">
							<p>Minnow snoek icefish velvet-belly shark, California halibut round stingray northern sea robin. Southern grayling trout-perch. Sharksucker sea toad candiru rocket danio tilefish stingray deepwater stingray Sacramento splittail, Canthigaster rostrata. Midshipman dartfish Modoc sucker, yellowtail kingfish basslet. Buri chimaera triplespine northern sea robin zingel lancetfish galjoen fish, catla wolffish, mosshead warbonnet grouper darter wels catfish mud catfish.</p>
								<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-xl-4">
									
								</div>
								<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-xl-4">
									<div class="container">
										<div class="row">
											<div class="col-auto">
												<br><br><br>
												<h4 class="elements__title">Join Us here</h4>
											</div>
										</div>
									</div>
									<?php if($this->session->flashdata("messagePr")){?>
									<div class="alert alert-info">
										<?php echo $this->session->flashdata("messagePr")?>
									</div>
									<?php } ?>
									<form action="<?php echo base_url().'user/registration'; ?>" method="post">

										<div class="form-group has-feedback">
											<input type="text" name="name" class="form-control" data-validation="required" placeholder="Name">
											<span class="glyphicon glyphicon-user form-control-feedback"></span>
										</div>

										<div class="form-group has-feedback">
											<input type="text" name="email" class="form-control" data-validation="required" placeholder="Email">
											<span class="glyphicon glyphicon-user form-control-feedback"></span>
										</div>

										<div class="form-group has-feedback">
											<input type="password" class="form-control" name="password_confirmation" placeholder="Password" data-validation="required">
											<span class="glyphicon glyphicon-lock form-control-feedback"></span>
										</div>
										<div class="form-group has-feedback">
											<input type="password" name="password" class="form-control" placeholder="Retype password" data-validation="confirmation">
											<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
										</div>
										<div class="form-group has-feedback">
											<select name="user_type" id="" class="form-control" require>
												<?php foreach($roles as $role):?>
													<?php if(strtolower($role->user_role_name)=='admin'):?>
													<?php else:?>
														<option value="<?php echo $role->user_role_id?>"><?php echo $role->user_role_name?></option>
													<?php endif?>
													<?php endforeach ?>>
											</select>
											<!-- <input type="" name="password" class="form-control" placeholder="Retype password" data-validation="confirmation"> -->
											<span class="glyphicon glyphicon-random form-control-feedback"></span>
										</div><br><br>
										<div class="row">
											<div class="col-xs-12">
												<!--  <input type="hidden" name="user_type" value="<?php //echo setting_all('user_type');?>"> -->
												<input type="hidden" name="call_from" value="reg_page">
												<button type="submit" name="submit" class="btn btn-primary btn-block btn-flat btn-color">Register</button>
											</div>
										</div>
									</form>
									<br>
									<a href="<?php echo base_url('user/login');?>" class="text-center">I already have a membership</a>
								</div>
								<div class="col-sm-8 offset-sm-2 col-md-6 offset-md-0 col-xl-4"></div>
								
							</div>
						</div>
					</section>
					<!-- pricing style-2 end-->
				</section>
			
			</main>
			<!-- footer start-->
