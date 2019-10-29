@extends('layouts.master')

@section('content')
<div class="home-con">
	<div class="header-bg">
		<!-- @include('partials.home-nav') -->
		<nav class="navbar navbar-transparent">
			<div class="container">
				<div class="navbar-right">
					<div class="brand-buttons text-center">
						<a href="https://hubbucs.com/site/?pageid=login&act=1" class="btn btn-default home-head-btn">Create Company</a>
						<a href="https://hubbucs.com/site/?pageid=login&act=1" class="btn btn-default home-head-btn">Login Company</a>
					</div>
				</div>
			</div><!-- /.container-fluid -->
		</nav>
		<div class="container">
			<div style="padding: 65px 0px;" class="text-center">
				<div>
					<img src="/img/white-logo.png" alt="">
				</div>
				<h1 style="line-height: 52px;font-size: 38px; font-weight: 700; width: 610px; margin: auto auto 24px;color: white;font-weight: 100;">HUBB UCS Knowledge Base lets you work more collaboratively and get more done.</h1>
			</div>
		</div>
	</div>
	<div id="counters" class="counter-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<a href="javascript:void(0)" class="counter-item">
						<i class="icon fa fa-lightbulb-o color1"></i>
						<div class="data">
							<h3>Knowledge Base</h3>
							<p class="text-muted">34 Articles / 13 Categories</p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="javascript:void(0)" class="counter-item">
						<i class="icon fa fa-comment-o color2"></i>
						<div class="data">
							<h3>Forums</h3>
							<p class="text-muted">2 topics / 0 Posts</p>
						</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="javascript:void(0)" class="counter-item">
						<i class="icon fa fa-bullhorn color3"></i>
						<div class="data">
							<h3>News</h3>
							<p class="text-muted">3 posts / 1 Categories</p>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="features-section" id="features">
		<div class="container">
			<div class="row no-container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h1 class="title-bold">Elegant UI and so much more.</h1>
					<p style="color: rgba(0,0,0,0.55); font-size: 17px; line-height: 24px; font-weight: 400; margin: 0 0 70px; ">Check out all you can do in HUBB UCS Knowledge Base.</p>
				</div>
			</div>
			<div class="row no-container">
				<div class="col-md-4 col-lg-3">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
						</div>
						<div class="media-body">
							<h4 class="media-heading">Elegant UI</h4>
							<p>
								We have thought carefully about design so you don’t have to. You need only focus on your content, we make it look amazing
							</p>
						</div>
					</div>
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">

						</div>
						<div class="media-body">
							<h4 class="media-heading">Touch-Optimized</h4>
							<p>
								HUBB UCS Knowledge Base looks stunning on desktop, tablet or phone. Our fully responsive design adjusts perfectly to fit all your devices.
							</p>
						</div>
					</div>
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">

						</div>
						<div class="media-body">
							<h4 class="media-heading">Fast</h4>
							<p>
								Careful optimization of the user experience and fast performance means a low barrier for content creation and editing.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">

						</div>
						<div class="media-body">
							<h4 class="media-heading">Notifications</h4>
							<p>
								Instantly received notification when some one mention you in comment. HUBB UCS Knowledge Base has first-class notifications out of the box.
							</p>
						</div>
					</div>
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">

						</div>
						<div class="media-body">
							<h4 class="media-heading">Tags</h4>
							<p>
								Tags gives you freedom to define your own structure. You can assign tags to wiki and pages.
							</p>
						</div>
					</div>
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">

						</div>
						<div class="media-body">
							<h4 class="media-heading">Instant Replies</h4>
							<p>
								Mention users and reply to pages to make the discussion flow. Linear discussion just got an added dimension.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">

						</div>
						<div class="media-body">
							<h4 class="media-heading">Powerful Permissions</h4>
							<p>
								Take control of your wikis with fine-grained permissions. Assign permissions to role for extra flexibility.
							</p>
						</div>
					</div>
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">

						</div>
						<div class="media-body">
							<h4 class="media-heading">Real-Time Activity</h4>
							<p>
								Every activity of a user in team is stored so you can check what a person did, where and when.
							</p>
						</div>
					</div>
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">

						</div>
						<div class="media-body">
							<h4 class="media-heading">Moderation Tools</h4>
							<p>
								Make shortcuts of important pages in wiki. Insert pages in read list and also start watching a wiki.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-lg-3">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">

						</div>
						<div class="media-body">
							<h4 class="media-heading">Powerful Formatting</h4>
							<p>
								Manipulate the layout of a page directly, write html and Emoji are supported out of the box, with a live preview.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<h4>About HUBB UCS</h4>
						<p>HUBB UCS Platform is the best management software to run a company. Millions of happy users work better with our integrated Apps.</p>
					</div>
					<div class="col-md-4">
						<h4>Latest Articles</h4>
						<ul class="list-group">
							<li class="list-group-item">
								<p>
									<a href="javascript:void(0)">Planning to stay Alive in Business You Need Technolgy</a>
								</p>
							</li>
							<li class="list-group-item">
								<p>
									<a href="javascript:void(0)">Technology and the effects in Business.</a>
								</p>
							</li>
							<li class="list-group-item">
								<p>
									<a href="javascript:void(0)">Why is HUBB CRM important to your business?</a>
								</p>
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<h4>Follow us</h4>
						<div class="social-links">
							<a href="#">
								<i class="fa fa-facebook-f"></i>
							</a>
							<a href="#">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#">
								<i class="fa fa-instagram"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="row no-container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
					Copyright © {{ date("Y") }} <a href="#" style="text-decoration: none;">HUBB UCS</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection