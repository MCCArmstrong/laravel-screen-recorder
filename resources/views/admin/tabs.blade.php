@extends('admin.base')
	<body>

		<!-- BEGIN .app-wrap -->
		<div class="app-wrap">
			<!-- BEGIN .app-heading -->
			@include('admin.header')
			<!-- END: .app-heading -->
			<!-- BEGIN .app-container -->
			<div class="app-container">
				<!-- BEGIN .app-side -->
                    @include('admin.aside')
				<!-- END: .app-side -->

				<!-- BEGIN .app-main -->
				<div class="app-main">
					<!-- BEGIN .main-heading -->
					<header class="main-heading">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
									<div class="page-icon">
										<i class="icon-beaker"></i>
									</div>
									<div class="page-title">
										<h5>Media</h5>
										<h6 class="sub-heading">FaceDrips</h6>
									</div>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
									<div class="right-actions">
										<a href="#" class="btn btn-primary float-right" data-toggle="tooltip" data-placement="left" title="Download Reports">
											<i class="icon-download4"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
					</header>
					<!-- END: .main-heading -->
					<!-- BEGIN .main-content -->
					<div class="main-content">
						

						<!-- Row start -->
						<div class="row gutters">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
								<div class="card">
									<div class="card-header">Tabs</div>
									<div class="card-body">
										<ul class="nav nav-tabs nav-justified" id="myTab2" role="tablist">
										  <li class="nav-item">
										    <a class="nav-link active" id="home-tab1" data-toggle="tab" href="#home1" role="tab" aria-controls="home1" aria-selected="true">Record Screen</a>
										  </li>
										  <li class="nav-item">
										    <a class="nav-link" id="profile-tab1" data-toggle="tab" href="{{ URL::route('urls_link')}}" role="tab" aria-controls="profile1" aria-selected="false">Add youtube link</a>
										  </li>
										  {{-- <li class="nav-item">
										    <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact1" role="tab" aria-controls="contact1" aria-selected="false">Contact</a>
										  </li> --}}
										</ul>
										<div class="tab-content" id="myTabContent1">
										  <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab1">

											  <div id="record">
												@csrf
												<p class="text-primary">Screen record your activity and save in the cloud</p>
												
												<button id="start" class="btn btn-outline-success btn-sm" style="border-radius:10%;:"><i class="icon-mic3"></i></button>
												<button id="stop" class="btn btn-default btn-sm" >Stop </button>
												<button id="download" class="btn-md btn-success" onclick="getUrl();"><i class="icon-download4"></i>Download</button>
												<video autoplay / width=" 20px" height="20px" controls></video>
												{{-- <button name="record-screen" class="btn ntn-primary btn-md">Save</button> --}}
												
											  </div>
										  </div>
										  


										  {{-- <div class="tab-pane fade" id="profile1" role="tabpanel" aria-labelledby="profile-tab1">
											<form action="{{route('youtube-link')}}" method="post" enctype="multipart/form-data">
												@csrf
												<input type="text" class="form-control" placeholder="youtube link" name="link">
												<button class="btn btn-default" type="submit">Submit</button>
											</form>
										  </div> --}}
									
									</div>
								</div>
							</div>
						</div>
						<!-- Row end -->
                    </div>
					<!-- END: .main-content -->
				</div>
				<!-- END: .app-main -->
			</div>
			<!-- END: .app-container -->
			<!-- BEGIN .main-footer -->
			<footer class="main-footer fixed-btm">
				Copyright Unify Admin 2017.
			</footer>
			<!-- END: .main-footer -->
		</div>
		<!-- END: .app-wrap -->

		<!-- jQuery first, then Tether, then other JS. -->
        @include('admin.script')
	</body>
</html>