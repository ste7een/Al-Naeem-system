@extends('layouts.master')

{{-- Title --}}
@section('title', 'Home')

{{-- CONTENT --}}
@section('content')
	<!-- Doctor Appointments -->
	<div class="row w-100">
		<div class="border-0 rounded-2 p-5">
			<!-- main page component start  -->
			<!-- Stats -->
			<div class="row">
				@for ($i = 0; $i < 2; $i++)
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
									الميزانية لهذا الشهر
									<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up text-success"><polyline points="18 15 12 9 6 15"></polyline></svg>
								</span>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 px-2">
						<div class="card">
							<div class="card-body text-center">
								<div class="mb-3">
									<div class="icon icon-shape icon-md bg-danger shadow-danger text-white">
										<i class="fas fa-wallet"></i>
									</div>
								</div>
								<!-- Title -->
								<h5 class="h3 font-weight-bolder mb-1">$22,550.00</h5>
								<!-- Subtitle -->
								<span class="d-block text-sm text-muted font-weight-bold">
									الميزانية للشهر السابق
									<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-up text-success"><polyline points="18 15 12 9 6 15"></polyline></svg>
								</span>
							</div>
						</div>
					</div>
				@endfor
			</div>
		</div>
	</div>
	<!-- Doctor Appointments -->
	<div class="row w-100">
		<div class="card card-fluid border-0 rounded-2 p-5">
			<!-- main page component start  -->
			@livewire('financial.spendings.spending-add')	
			@livewire('financial.spendings.spendings-table')
		</div>
	</div>
@stop
