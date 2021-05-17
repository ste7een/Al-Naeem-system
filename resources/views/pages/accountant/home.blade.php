@extends('layouts.master')
@section('title', 'Home')
@section('content')

<!-- Doctor Appointments -->
<div class="row w-100">
	<div class="card card-fluid border-0 rounded-2 p-5">
		<!-- main page component start  -->
		<div class="row align-items-center mb-4 text-right">
			<div class="col">
				<!-- Title -->
				<h1 class="h4 mb-0">
					مرحبا {{auth()->user()->name}} 😊
				</h1>
			</div>
		</div>
		<!-- Stats -->
		<div class="row">
			@for ($i = 0; $i < 4; $i++)
				<div class="col-lg-3 col-sm-6 px-2">
					<div class="card">
						<div class="card-body text-center">
							<div class="mb-3">
								<div class="icon icon-shape icon-md bg-primary shadow-primary text-white">
									<i class="fas fa-wallet"></i>
								</div>
							</div>
							<!-- Title -->
							<h5 class="h3 font-weight-bolder mb-1">$25,370.00</h5>
							<!-- Subtitle -->
							<span class="d-block text-sm text-muted font-weight-bold">
								Global Budget
								<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up text-success"><polyline points="18 15 12 9 6 15"></polyline></svg>
							</span>
						</div>
					</div>
				</div>
			@endfor
		</div>
		<!-- Chart + Stats -->
		<div class="row">
			<div class="col-lg-8">
				<div class="card card-fluid">
					<div class="card-header">
						<div class="row align-items-center">
							<div class="col">
								<span class="h6">Orders</span>
							</div>
							<div class="col-auto">
								<div class="custom-control custom-radio">
									<input type="checkbox" class="custom-control-input" id="checkChartLegendRefunds" onchange="ApexOrdersChart.toggleSeries(this)" value="Rejected" checked="">
									<label class="custom-control-label h6 text-sm lh-200 text-muted" for="checkChartLegendRefunds">Show refunds</label>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body pt-2 pb-0 px-2" style="position: relative;">
						<!-- Chart -->
						<div class="resize-triggers"><div class="expand-trigger"><div style="width: 729px; height: 232px;"></div></div><div class="contract-trigger"></div></div>
					</div>
					<div class="card-body pt-0">
						<!-- Stats -->
						<div class="row mx-md-n2">
							<div class="col-md-4 px-md-2">
								<div class="card bg-secondary border-0 shadow-none mb-md-0">
									<div class="p-2 d-flex align-items-center">
										<div>
											<div class="icon icon-shape bg-white text-primary shadow">
												<i class="fas fa-cash-register"></i>
											</div>
										</div>
										<div class="pl-3">
											<h6 class="text-muted text-xs font-weight-light mb-0">Spendings</h6>
											<span class="h6 font-weight-bolder mb-0">$7.500</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 px-md-2">
								<div class="card bg-secondary border-0 shadow-none mb-md-0">
									<div class="p-2 d-flex align-items-center">
										<div>
											<div class="icon icon-shape bg-white text-primary shadow">
												<i class="fas fa-cash-register"></i>
											</div>
										</div>
										<div class="pl-3">
											<h6 class="text-muted text-xs font-weight-light mb-0">Spendings</h6>
											<span class="h6 font-weight-bolder mb-0">$7.500</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 px-md-2">
								<div class="card bg-secondary border-0 shadow-none mb-md-0">
									<div class="p-2 d-flex align-items-center">
										<div>
											<div class="icon icon-shape bg-white text-primary shadow">
												<i class="fas fa-cash-register"></i>
											</div>
										</div>
										<div class="pl-3">
											<h6 class="text-muted text-xs font-weight-light mb-0">Spendings</h6>
											<span class="h6 font-weight-bolder mb-0">$7.500</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<!-- Stats -->
				<div class="card ">
					<div class="card-header">
						<div class="row align-items-center">
							<div class="col">
								<span class="h6">Performance</span>
							</div>
							<div class="col-auto ml-auto text-right">
								<span class="h6 text-sm text-muted">3,567.00</span>
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="">
							dfdd
						</div>
						<hr class="my-4">
						<!-- Trend -->
						<div class="d-flex align-items-center mb-2">
							<div>
								<span class="icon icon-shape icon-sm bg-soft-success text-success">
									<i class="fas fa-caret-up"></i>
								</span>
							</div>
							<div class="pl-2">
								<span class="text-success text-sm font-weight-bold">+23%</span>
							</div>
						</div>
						<!-- Text -->
						<p class="mb-0 text-sm text-muted">
							You have a 23% growth in comparison with last month.
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- End of main page component -->
	</div>
</div>

@stop
