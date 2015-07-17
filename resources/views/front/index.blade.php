@extends('front.template')

@section('main')

<!--start info service-->
<section class="info_service">
	<div class="container">
						<div class="row sub_content">
								<div class="col-sm-4 col-md-4 col-lg-4">
										<div class="serviceBox_2">
												<i class="fa fa-bell"></i>
												<h3>Web Design</h3>
												<p>Integer ultrices scelerisque nulla fringilla. Praesent leo massa, ullamcorper venenatis tempor.</p>
										</div>
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4">
										<div class="serviceBox_2">
												<i class="fa fa-briefcase"></i>
												<h3>Web Design</h3>
												<p>Integer ultrices scelerisque nulla fringilla. Praesent leo massa, ullamcorper venenatis tempor.</p>
										</div>
								</div>
								<div class="col-sm-4 col-md-4 col-lg-4">
										<div class="serviceBox_2">
												<i class="fa fa-rocket"></i>
												<h3>Web Design</h3>
												<p>Integer ultrices scelerisque nulla fringilla. Praesent leo massa, ullamcorper venenatis tempor.</p>
										</div>
								</div>
						</div>
	</div>
</section>
<!--end info service-->

<section class="fetaure_bottom">
	<div class="container">
		<div class="row sub_content">
			<div class="col-lg-8 col-md-8 col-sm-8">
				<div class="dividerHeading">
					<h4><span>Why Choose Us?</span></h4>
				</div>
				<div class="row">
					<div class="col-lg-6  rec_blog">
						<div class="blogPic">
							<div class="news-thumb">
								<div class="swipe" id="slider" style="visibility: visible;">
									<ul class="swipe-wrap" style="width: 904px;">
										<li><img alt="" src="images/blog/blog_1.png"></li>
										<li><img alt="" src="images/blog/blog_2.png"></li>
										<li><img alt="" src="images/blog/blog_3.png"></li>
										<li><img alt="" src="images/blog/blog_4.png"></li>
									</ul>
									<div class="swipe-navi">
										<div onclick="mySwipe.prev()" class="swipe-left"><i class="fa fa-chevron-left"></i></div>
										<div onclick="mySwipe.next()" class="swipe-right"><i class="fa fa-chevron-right"></i></div>
									</div>
								</div>
							</div>

						</div>
						<div class="blogDetail">
							<div class="blogTitle">
								<a href="#">
									<h2>This title in post blogs</h2>
								</a>
								<span>
									<i class="fa fa-calendar"></i>
									30 June, 20:43 PM
								</span>
							</div>
							<div class="blogContent">
								<p>Etu eros omnes theophratus mei, cumit usulan dicit omnium eripuit. Qui tever iluma facete gubergren. </p>
							</div>
							<div class="blogMeta">
								<a href="#">
									<i class="fa fa-user"></i>
									Here Author Name
								</a>
								<a href="#">
									<i class="fa fa-comment"></i>
									1980
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-6  rec_blog">
						<div class="blogPic">
							<img alt="" src="images/blog/blog_6.png">
							<div class="blog-hover">
								<a href="#">
									<span class="icon">
										<i class="fa fa-link"></i>
									</span>
								</a>
							</div>
						</div>
						<div class="blogDetail">
							<div class="blogTitle">
								<a href="#">
									<h2>This title in post blogs</h2>
								</a>
								<span>
									<i class="fa fa-calendar"></i>
									30 June, 20:43 PM
								</span>
							</div>
							<div class="blogContent">
								<p>Etu eros omnes theophratus mei, cumit usulan dicit omnium eripuit. Qui tever iluma facete gubergren. </p>
							</div>
							<div class="blogMeta">
								<a href="#">
									<i class="fa fa-user"></i>
									Here Author Name
								</a>
								<a href="#">
									<i class="fa fa-comment"></i>
									1980
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- TESTIMONIALS -->
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="dividerHeading">
					<h4><span>What Client's Say</span></h4>
				</div>
				<div id="testimonial-carousel" class="testimonial carousel slide">
					<div class="carousel-inner">
						<div class="active item">
							<div class="testimonial-item">
								<div class="icon"><i class="fa fa-quote-right"></i></div>
								<blockquote>
									<p>Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor dictum phasellus ac libero. </p>
								</blockquote>
								<div class="icon-tr"></div>
								<div class="testimonial-review">
									<img src="images/testimonials/1.png" alt="testimoni">
									<h1>Jonathan Dower,<small>Company Inc.</small></h1>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-item">
								<div class="icon"><i class="fa fa-quote-right"></i></div>
								<blockquote>
									<p>Metus aliquet tincidunt metus, sit amet mattis lectus sodales ac. Suspendisse rhoncus dictum eros, ut egestas eros luctus eget. Nam nibh sem, mattis et feugiat ut, porttitor nec risus.</p>
								</blockquote>
								<div class="icon-tr"></div>
								<div class="testimonial-review">
									<img src="images/testimonials/2.png" alt="testimoni">
									<h1>Jonathan Dower<small>Leopard</small></h1>
								</div>
							</div>
						</div>

						<div class="item">
							<div class="testimonial-item">
								<div class="icon"><i class="fa fa-quote-right"></i></div>
								<blockquote>
									<p>Donec convallis, metus nec tempus aliquet, nunc metus adipiscing leo, a lobortis nisi dui ut odio. Nullam ultrices, eros accumsan vulputate faucibus, turpis tortor dictum. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commo, magnase quis lacinia ornare, quam ante aliqua nisi, eu iaculis. </p>
								</blockquote>
								<div class="icon-tr"></div>
								<div class="testimonial-review">
									<img src="images/testimonials/3.png" alt="testimoni">
									<h1>Jonathan Dower<small>Leopard</small></h1>
								</div>
							</div>
						</div>
					</div>
					<div class="testimonial-buttons"><a href="#testimonial-carousel" data-slide="prev"><i class="fa fa-chevron-left"></i></a>&#32;
					<a href="#testimonial-carousel" data-slide="next"><i class="fa fa-chevron-right"></i></a></div>
				</div>
			</div><!-- TESTIMONIALS END -->
		</div>
	</div>
</section>
@stop
