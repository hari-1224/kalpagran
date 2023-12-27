@extends('admin.admin_layouts')

@section('admin_content')

   <!-- BEGIN: Content-->
   <div class="app-content content ">
	<div class="content-overlay"></div>
	<div class="header-navbar-shadow"></div>
	<div class="content-wrapper">
		<div class="content-header row">
		</div>
		<div class="content-body">
			<!-- Dashboard Ecommerce Starts -->
			<section id="dashboard-ecommerce">
				<div class="row match-height">
					<!-- Medal Card -->
					<div class="col-xl-4 col-md-6 col-12">
						<div class="card card-congratulation-medal">
							<div class="card-body">
								<h5>Congratulations 🎉 Yatishudesh!</h5>
								<p class="card-text font-small-3">You have won gold medal</p>
								<h3 class="mb-75 mt-2 pt-50">
									<a href="javascript:void(0);">100000 sqft</a>
								</h3>
								<button type="button" class="btn btn-primary">View Production</button>
								<img src="{'backend/app-assets/images/illustration/badge.svg'}"  class="congratulation-medal" alt="Medal Pic" />
							</div>
						</div>
					</div>
					<!--/ Medal Card -->

					<!-- Statistics Card -->
					<div class="col-xl-8 col-md-6 col-12">
						<div class="card card-statistics">
							<div class="card-header">
								<h4 class="card-title">Statistics</h4>
								<div class="d-flex align-items-center">
									<p class="card-text font-small-2 mr-25 mb-0">Updated 1 month ago</p>
								</div>
							</div>
							<div class="card-body statistics-body">
								<div class="row">
									<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
										<div class="media">
											<div class="avatar bg-light-primary mr-2">
												<div class="avatar-content">
													<i data-feather="trending-up" class="avatar-icon"></i>
												</div>
											</div>
											<div class="media-body my-auto">
												<h4 class="font-weight-bolder mb-0">300k</h4>
												<p class="card-text font-small-3 mb-0">Sales</p>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
										<div class="media">
											<div class="avatar bg-light-info mr-2">
												<div class="avatar-content">
													<i data-feather="user" class="avatar-icon"></i>
												</div>
											</div>
											<div class="media-body my-auto">
												<h4 class="font-weight-bolder mb-0">100k</h4>
												<p class="card-text font-small-3 mb-0">Orders</p>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
										<div class="media">
											<div class="avatar bg-light-danger mr-2">
												<div class="avatar-content">
													<i data-feather="box" class="avatar-icon"></i>
												</div>
											</div>
											<div class="media-body my-auto">
												<h4 class="font-weight-bolder mb-0">1.423k</h4>
												<p class="card-text font-small-3 mb-0">Products</p>
											</div>
										</div>
									</div>
									<div class="col-xl-3 col-sm-6 col-12">
										<div class="media">
											<div class="avatar bg-light-success mr-2">
												<div class="avatar-content">
													<i data-feather="dollar-sign" class="avatar-icon"></i>
												</div>
											</div>
											<div class="media-body my-auto">
												<h4 class="font-weight-bolder mb-0">₹978045</h4>
												<p class="card-text font-small-3 mb-0">Revenue</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ Statistics Card -->
				</div>

				<div class="row match-height">
					<div class="col-lg-4 col-12">
						<div class="row match-height">
							<!-- Bar Chart - Orders -->
							<div class="col-lg-6 col-md-3 col-6">
								<div class="card">
									<div class="card-body pb-50">
										<h6>Orders</h6>
										<h2 class="font-weight-bolder mb-1">2,76k</h2>
										<div id="statistics-order-chart"></div>
									</div>
								</div>
							</div>
							<!--/ Bar Chart - Orders -->

							<!-- Line Chart - Profit -->
							<div class="col-lg-6 col-md-3 col-6">
								<div class="card card-tiny-line-stats">
									<div class="card-body pb-50">
										<h6>Profit</h6>
										<h2 class="font-weight-bolder mb-1">6,24k</h2>
										<div id="statistics-profit-chart"></div>
									</div>
								</div>
							</div>
							<!--/ Line Chart - Profit -->

							<!-- Earnings Card -->
							<div class="col-lg-12 col-md-6 col-12">
								<div class="card earnings-card">
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<h4 class="card-title mb-1">Production</h4>
												<div class="font-small-2">This Month</div>
												<h5 class="mb-1">405556 Sqft</h5>
												<p class="card-text text-muted font-small-2">
													<span class="font-weight-bolder">53.2%</span><span> more production than last month.</span>
												</p>
											</div>
											<div class="col-6">
												<div id="earnings-chart"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--/ Earnings Card -->
						</div>
					</div>

					<!-- Revenue Report Card -->
					<div class="col-lg-8 col-12">
						<div class="card card-revenue-budget">
							<div class="row mx-0">
								<div class="col-md-8 col-12 revenue-report-wrapper">
									<div class="d-sm-flex justify-content-between align-items-center mb-3">
										<h4 class="card-title mb-50 mb-sm-0">Revenue Report</h4>
										<div class="d-flex align-items-center">
											<div class="d-flex align-items-center mr-2">
												<span class="bullet bullet-primary font-small-3 mr-50 cursor-pointer"></span>
												<span>Earning</span>
											</div>
											<div class="d-flex align-items-center ml-75">
												<span class="bullet bullet-warning font-small-3 mr-50 cursor-pointer"></span>
												<span>Expense</span>
											</div>
										</div>
									</div>
									<div id="revenue-report-chart"></div>
								</div>
								<div class="col-md-4 col-12 budget-wrapper">
									<div class="btn-group">
										<button type="button" class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											2022
										</button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="javascript:void(0);">2021</a>
											<a class="dropdown-item" href="javascript:void(0);">2020</a>
											<a class="dropdown-item" href="javascript:void(0);">2019</a>
										</div>
									</div>
									<h2 class="mb-25">₹5285852</h2>
									<div class="d-flex justify-content-center">
										<span class="font-weight-bolder mr-25">Budget:</span>
										<span>1556800</span>
									</div>
									<div id="budget-chart"></div>
									<button type="button" class="btn btn-primary">Increase Budget</button>
								</div>
							</div>
						</div>
					</div>
					<!--/ Revenue Report Card -->
				</div>

				<div class="row match-height">
					<!-- Company Table Card -->
					<div class="col-lg-8 col-12">
						<div class="card card-company-table">
							<div class="card-body p-0">
								<div class="table-responsive">
									<table class="table">
										<thead>
											<tr>
												<th>Company</th>
												<th>Category</th>
												<th>Quantity</th>
												<th>Revenue</th>
												<th>Sales</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar rounded">
															<div class="avatar-content">
																<img src="{'backend/app-assets/images/icons/rocket.svg'}"  alt="Rocket svg" />
															</div>
														</div>
														<div>
															<div class="font-weight-bolder">Customer</div>
															<div class="font-small-2 text-muted">meguc@ruj.io</div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar bg-light-primary mr-1">
															<div class="avatar-content">
																<i data-feather="watch" class="font-medium-3"></i>
															</div>
														</div>
														<span>Granite Tile</span>
													</div>
												</td>
												<td class="text-nowrap">
													<div class="d-flex flex-column">
														<span class="font-weight-bolder mb-25">234K sqft</span>
														<span class="font-small-2 text-muted">in 24 hours</span>
													</div>
												</td>
												<td>₹891.2K</td>
												<td>
													<div class="d-flex align-items-center">
														<span class="font-weight-bolder mr-1">68%</span>
														<i data-feather="trending-down" class="text-danger font-medium-1"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar rounded">
															<div class="avatar-content">
																<img src="{'backend/app-assets/images/icons/rocket.svg'}"  alt="Rocket svg" />
															</div>
														</div>
														<div>
															<div class="font-weight-bolder">Customer</div>
															<div class="font-small-2 text-muted">vecav@hodzi.co.uk</div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar bg-light-success mr-1">
															<div class="avatar-content">
																<i data-feather="watch" class="font-medium-3"></i>
															</div>
														</div>
														<span>Granite Tile</span>
													</div>
												</td>
												<td class="text-nowrap">
													<div class="d-flex flex-column">
														<span class="font-weight-bolder mb-25">78K sqft</span>
														<span class="font-small-2 text-muted">in 2 days</span>
													</div>
												</td>
												<td>₹668.51K</td>
												<td>
													<div class="d-flex align-items-center">
														<span class="font-weight-bolder mr-1">97%</span>
														<i data-feather="trending-up" class="text-success font-medium-1"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar rounded">
															<div class="avatar-content">
																<img src="{'backend/app-assets/images/icons/rocket.svg'}"  alt="Rocket svg" />
															</div>
														</div>
														<div>
															<div class="font-weight-bolder">Customer</div>
															<div class="font-small-2 text-muted">davcilse@is.gov</div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar bg-light-warning mr-1">
															<div class="avatar-content">
																<i data-feather="watch" class="font-medium-3"></i>
															</div>
														</div>
														<span>Glass Tile</span>
													</div>
												</td>
												<td class="text-nowrap">
													<div class="d-flex flex-column">
														<span class="font-weight-bolder mb-25">162K sqft</span>
														<span class="font-small-2 text-muted">in 5 days</span>
													</div>
												</td>
												<td>₹522.29K</td>
												<td>
													<div class="d-flex align-items-center">
														<span class="font-weight-bolder mr-1">62%</span>
														<i data-feather="trending-up" class="text-success font-medium-1"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar rounded">
															<div class="avatar-content">
																<img src="{'backend/app-assets/images/icons/rocket.svg'}"  alt="Rocket svg" />
															</div>
														</div>
														<div>
															<div class="font-weight-bolder">Owning</div>
															<div class="font-small-2 text-muted">us@cuhil.gov</div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar bg-light-primary mr-1">
															<div class="avatar-content">
																<i data-feather="watch" class="font-medium-3"></i>
															</div>
														</div>
														<span>Glass Tile</span>
													</div>
												</td>
												<td class="text-nowrap">
													<div class="d-flex flex-column">
														<span class="font-weight-bolder mb-25">214K sqft</span>
														<span class="font-small-2 text-muted">in 24 hours</span>
													</div>
												</td>
												<td>₹291.01K</td>
												<td>
													<div class="d-flex align-items-center">
														<span class="font-weight-bolder mr-1">88%</span>
														<i data-feather="trending-up" class="text-success font-medium-1"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar rounded">
															<div class="avatar-content">
																<img src="{'backend/app-assets/images/icons/rocket.svg'}"  alt="Rocket svg" />
															</div>
														</div>
														<div>
															<div class="font-weight-bolder">Customer</div>
															<div class="font-small-2 text-muted">pudais@jife.com</div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar bg-light-success mr-1">
															<div class="avatar-content">
																<i data-feather="watch" class="font-medium-3"></i>
															</div>
														</div>
														<span>Marble Tile</span>
													</div>
												</td>
												<td class="text-nowrap">
													<div class="d-flex flex-column">
														<span class="font-weight-bolder mb-25">208K sqft</span>
														<span class="font-small-2 text-muted">in 1 week</span>
													</div>
												</td>
												<td>₹783.93K</td>
												<td>
													<div class="d-flex align-items-center">
														<span class="font-weight-bolder mr-1">16%</span>
														<i data-feather="trending-down" class="text-danger font-medium-1"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar rounded">
															<div class="avatar-content">
																<img src="{'backend/app-assets/images/icons/rocket.svg'}"  alt="Rocket svg" />
															</div>
														</div>
														<div>
															<div class="font-weight-bolder">Customer</div>
															<div class="font-small-2 text-muted">bipri@cawiw.com</div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar bg-light-warning mr-1">
															<div class="avatar-content">
																<i data-feather="watch" class="font-medium-3"></i>
															</div>
														</div>
														<span>Marble Tile</span>
													</div>
												</td>
												<td class="text-nowrap">
													<div class="d-flex flex-column">
														<span class="font-weight-bolder mb-25">990sqft</span>
														<span class="font-small-2 text-muted">in 1 month</span>
													</div>
												</td>
												<td>₹780.05K</td>
												<td>
													<div class="d-flex align-items-center">
														<span class="font-weight-bolder mr-1">78%</span>
														<i data-feather="trending-up" class="text-success font-medium-1"></i>
													</div>
												</td>
											</tr>
											<tr>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar rounded">
															<div class="avatar-content">
																<img src="{'backend/app-assets/images/icons/rocket.svg'}"  alt="Rocket svg" />
															</div>
														</div>
														<div>
															<div class="font-weight-bolder">Customer</div>
															<div class="font-small-2 text-muted">luk@izug.io</div>
														</div>
													</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="avatar bg-light-warning mr-1">
															<div class="avatar-content">
																<i data-feather="watch" class="font-medium-3"></i>
															</div>
														</div>
														<span>Granite Tile</span>
													</div>
												</td>
												<td class="text-nowrap">
													<div class="d-flex flex-column">
														<span class="font-weight-bolder mb-25">12.9k sqft</span>
														<span class="font-small-2 text-muted">in 12 hours</span>
													</div>
												</td>
												<td>₹531.49K</td>
												<td>
													<div class="d-flex align-items-center">
														<span class="font-weight-bolder mr-1">42%</span>
														<i data-feather="trending-up" class="text-success font-medium-1"></i>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/ Company Table Card -->

					<!-- Developer Meetup Card -->
					<div class="col-lg-4 col-md-6 col-12">
						<div class="card card-developer-meetup">
							<div class="meetup-img-wrapper rounded-top text-center">
								<img src="{'backend/app-assets/images/illustration/email.svg'}"  alt="Meeting Pic" height="170" />
							</div>
							<div class="card-body">
								<div class="meetup-header d-flex align-items-center">
									<div class="meetup-day">
										<h6 class="mb-0">THU</h6>
										<h3 class="mb-0">24</h3>
									</div>
									<div class="my-auto">
										<h4 class="card-title mb-25">Customer Meetup</h4>
										<p class="card-text mb-0">Meet customers</p>
									</div>
								</div>
								<div class="media">
									<div class="avatar bg-light-primary rounded mr-1">
										<div class="avatar-content">
											<i data-feather="calendar" class="avatar-icon font-medium-3"></i>
										</div>
									</div>
									<div class="media-body">
										<h6 class="mb-0">Sat, Jan 25, 2022</h6>
										<small>10:AM to 6:PM</small>
									</div>
								</div>
								<div class="media mt-2">
									<div class="avatar bg-light-primary rounded mr-1">
										<div class="avatar-content">
											<i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
										</div>
									</div>
									<div class="media-body">
										<h6 class="mb-0">Hosur</h6>
										<small>Krishnagiri, Tamilnadu</small>
									</div>
								</div>
								<div class="avatar-group">
									<div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Billy Hopkins" class="avatar pull-up">
										<img src="{'backend/app-assets/images/portrait/small/avatar-s-9.jpg'}" alt="Avatar" width="33" height="33" />
									</div>
									<div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Amy Carson" class="avatar pull-up">
										<img src="{'backend/app-assets/images/portrait/small/avatar-s-6.jpg'}" alt="Avatar" width="33" height="33" />
									</div>
									<div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Brandon Miles" class="avatar pull-up">
										<img src="{'backend/app-assets/images/portrait/small/avatar-s-8.jpg'}" alt="Avatar" width="33" height="33" />
									</div>
									<div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Daisy Weber" class="avatar pull-up">
										<img src="{'backend/app-assets/images/portrait/small/avatar-s-20.jpg'}" alt="Avatar" width="33" height="33" />
									</div>
									<div data-toggle="tooltip" data-popup="tooltip-custom" data-placement="bottom" data-original-title="Jenny Looper" class="avatar pull-up">
										<img src="{'backend/app-assets/images/portrait/small/avatar-s-20.jpg'}" alt="Avatar" width="33" height="33" />
									</div>
									<h6 class="align-self-center cursor-pointer ml-50 mb-0">+42</h6>
								</div>
							</div>
						</div>
					</div>
					<!--/ Developer Meetup Card -->

					<!-- Browser States Card -->
					
					<!--/ Browser States Card -->

					<!-- Goal Overview Card -->
					<div class="col-lg-6 col-md-6 col-12">
						<div class="card">
							<div class="card-header d-flex justify-content-between align-items-center">
								<h4 class="card-title">Goal Overview</h4>
								<i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
							</div>
							<div class="card-body p-0">
								<div id="goal-overview-radial-bar-chart" class="my-2"></div>
								<div class="row border-top text-center mx-0">
									<div class="col-6 border-right py-1">
										<p class="card-text text-muted mb-0">Completed</p>
										<h3 class="font-weight-bolder mb-0">786,617</h3>
									</div>
									<div class="col-6 py-1">
										<p class="card-text text-muted mb-0">In Progress</p>
										<h3 class="font-weight-bolder mb-0">13,561</h3>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ Goal Overview Card -->

					<!-- Transaction Card -->
					<div class="col-lg-6 col-md-6 col-12">
						<div class="card card-transaction">
							<div class="card-header">
								<h4 class="card-title">Exports</h4>
								<div class="dropdown chart-dropdown">
									<i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-toggle="dropdown"></i>
									<div class="dropdown-menu dropdown-menu-right">
										<a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
										<a class="dropdown-item" href="javascript:void(0);">Last Month</a>
										<a class="dropdown-item" href="javascript:void(0);">Last Year</a>
									</div>
								</div>
							</div>
							<div class="card-body">
								
								<div class="transaction-item">
									<div class="media">
										<div class="avatar bg-light-success rounded">
											<div class="avatar-content">
												<i data-feather="check" class="avatar-icon font-medium-3"></i>
											</div>
										</div>
										<div class="media-body">
											<h6 class="transaction-title">Granite Tile</h6>
											<small>Germeny</small>
										</div>
									</div>
									<div class="font-weight-bolder text-success">+ 48000 Sqft</div>
								</div>
								
								<div class="transaction-item">
									<div class="media">
										<div class="avatar bg-light-success rounded">
											<div class="avatar-content">
												<i data-feather="check" class="avatar-icon font-medium-3"></i>
											</div>
										</div>
										<div class="media-body">
											<h6 class="transaction-title">Marble Tile</h6>
											<small>Japan</small>
										</div>
									</div>
									<div class="font-weight-bolder text-success">+ 346985 Sqft</div>
								</div>
								<div class="transaction-item">
									<div class="media">
										<div class="avatar bg-light-success rounded">
											<div class="avatar-content">
												<i data-feather="check" class="avatar-icon font-medium-3"></i>
											</div>
										</div>
										<div class="media-body">
											<h6 class="transaction-title">Granite Tile</h6>
											<small>Singapore</small>
										</div>
									</div>
									<div class="font-weight-bolder text-success">+ 86420 Sqft</div>
								</div>
								<div class="transaction-item">
									<div class="media">
										<div class="avatar bg-light-success rounded">
											<div class="avatar-content">
												<i data-feather="check" class="avatar-icon font-medium-3"></i>
											</div>
										</div>
										<div class="media-body">
											<h6 class="transaction-title">Natural Stone</h6>
											<small>Malsiya</small>
										</div>
									</div>
									<div class="font-weight-bolder text-success">+ 80000 Sqft</div>
								</div>
								
								<div class="transaction-item">
									<div class="media">
										<div class="avatar bg-light-success rounded">
											<div class="avatar-content">
												<i data-feather="check" class="avatar-icon font-medium-3"></i>
											</div>
										</div>
										<div class="media-body">
											<h6 class="transaction-title">Granite Tile</h6>
											<small>Tailand</small>
										</div>
									</div>
									<div class="font-weight-bolder text-success">+ 759462 Sqft</div>
								</div>
							</div>
						</div>
					</div>
					<!--/ Transaction Card -->
				</div>
			</section>
			<!-- Dashboard Ecommerce ends -->

		</div>
	</div>
</div>
<!-- END: Content-->

@endsection
