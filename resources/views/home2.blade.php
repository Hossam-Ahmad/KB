@extends('layouts.master')

@section('content')
	<div class="home-con">
        <div class="header-bg">
       
            <div>
                <div style="padding: 109px 0px;" class="text-center">
                    <div style="margin-bottom: 45px;">
                    @if(isset($logo))
                        <img style="width: 100px;" src="/img/avatars/{{$logo}}" alt="">
                    @else
                        <img style="width: 100px;" src="/img/white-logo.png" alt="">
                    @endif
                    </div>
                    <h1 style="line-height: 52px;font-size: 38px; font-weight: 700; width: 610px; margin: auto auto 24px;color: white;font-weight: 100;">{{$name}} Knowledge Base lets you work more collaboratively and get more done.</h1>
                    <form action="/web/KBsearch" method="POST">
					<input type="text" placeholder="Search here" name="query" style="
						width: 60%;
						margin-top: 2em;
						margin-bottom: 2em;
						border-radius: 25px !important;
						text-align: center;
					">
					<input type="submit" value="search" style="width: 15%;height: 35px;border-radius: 25px !important;background-color: #303232;border: 1px solid white;color: #fff;">
					</form>

                </div>
            </div>
        </div>
        <div style="padding-top: 95px; padding-bottom: 75px;" id="features">
			<div class="row no-container">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<h1 style="font-weight: 100; font-size: 38px; margin-bottom: 15px;">Elegant UI and so much more.</h1>
					<p style="color: rgba(0,0,0,0.55); font-size: 17px; line-height: 24px; font-weight: 400; margin: 0 0 70px; ">Check out all you can do in {{$name}} Knowledge Base.</p>
				</div>
			</div>
			<div class="row no-container" style="width: 1130px; margin: auto;">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Elegant UI</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
								We have thought carefully about design so you don’t have to. You need only focus on your content, we make it look amazing
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Touch-Optimized</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
							{{$name}} Knowledge Base looks stunning on desktop, tablet or phone. Our fully responsive design adjusts perfectly to fit all your devices.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Fast</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
								Careful optimization of the user experience and fast performance means a low barrier for content creation and editing.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Notifications</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
								Instantly received notification when some one mention you in comment. {{$name}} Knowledge Base has first-class notifications out of the box.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Tags</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
								Tags gives you freedom to define your own structure. You can assign tags to wiki and pages.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Instant Replies</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
								Mention users and reply to pages to make the discussion flow. Linear discussion just got an added dimension.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Powerful Permissions</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
								Take control of your wikis with fine-grained permissions. Assign permissions to role for extra flexibility.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 45px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Real-Time Activity</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
								Every activity of a user in team is stored so you can check what a person did, where and when. 
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 38px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Moderation Tools</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
								Make shortcuts of important pages in wiki. Insert pages in read list and also start watching a wiki.
							</p>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style="margin-bottom: 38px;">
					<div class="media">
						<div class="pull-left" style="padding-right: 20px;">
							
						</div>
						<div class="media-body">
							<h4 class="media-heading" style="margin-bottom: 10px; font-size: 16px; font-weight: 600; line-height: 26px; color: #444444;">Powerful Formatting</h4>
							<p style="font-size: 14px; color: #444444; line-height: 22px; font-weight: 300;">
								Manipulate the layout of a page directly, write html and Emoji are supported out of the box, with a live preview.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="footer" style="background: #f9f9f9; clear: both; font-size: 12px; padding-bottom: 16px; padding-top: 16px; border-top: 1px solid #cfcfcf;">
            <div style="width: 1130px; margin: auto;">
                <div class="row no-container">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
                        Copyright © {{ date("Y") }} <a href="#" style="text-decoration: none;">{{$name}}</a>
                        <br>
                        <span style="font-size: .8em;color: #000;font-weight: 700;"> Powered by HUBB UCS </span>
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection