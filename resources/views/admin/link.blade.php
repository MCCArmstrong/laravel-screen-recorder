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
										<i class="icon-tabs-outline"></i>
									</div>
									<div class="page-title">
										<h5>Invoice</h5>
										<h6 class="sub-heading">Welcome to Unify Admin Template</h6>
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
						<div class="row justify-content-md-center gutters">
							<div class="col-xl-9 col-lg-9 col-md-9 col-sm-12">
								<div class="card">
									<div class="card-body">
										<div class="invoice-container">
											<!-- Row start -->
											<div class="row gutters">
												<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
													<img src="img/unify.png" class="invoice-logo" alt="Unify" />
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<h3 class="text-right text-secondary">Invoice - 007</h3>
												</div>
											</div>
											<!-- Row end -->
											
											<div class="spacer30"></div>

											<!-- Row start -->
											<div class="row gutters">
												<div class="col-lg-6 col-md-6 col-sm-6">
													<p>Hello, Yuki Hayashi.</p>
													<p>Thank you for shopping from our store and for your order.</p>
												</div>
												<div class="col-lg-6 col-md-6 col-sm-6">
													<p class="text-right">ORDER <span class="text-primary">#10000048</span></p>
													<p class="text-right"><small>March 30th 2017</small></p>
												</div>
											</div>
											<!-- Row end -->

											<div class="spacer50"></div>

											<!-- Row start -->
											<div class="row gutters">
												<form action="{{route('youtube-link')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="text" class="form-control" placeholder="paste a youtube link" name="link">
                                                    <button class="btn btn-default" type="submit">Submit</button>
                                                </form>
											</div>
											<!-- Row end -->

											<!-- Row start -->
											<div class="row gutters">
												<div class="col-lg-6 col-md-6 col-sm-12">
													
												</div>
											</div>
											<!-- Row end -->	
											</div>
											<!-- Row end -->
										</div>
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