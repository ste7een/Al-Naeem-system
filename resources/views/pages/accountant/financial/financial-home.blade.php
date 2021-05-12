@extends('layouts.master')

{{-- Title --}}
@section('title', 'Home')

{{-- TOOLS --}}
@section('tools')
	<ul class="nav nav-pills" id="pills-tab" role="tablist">
		<li class="nav-item mx-1" role="presentation">
			<button class="nav-link border py-3 active btn-icon" id="financial-home-tab" data-toggle="pill" data-target="#financial-home" type="button" role="tab" aria-controls="financial-home" aria-selected="false">
				<span class="btn-inner--icon ml-2">
					<i class="fas fa-long-arrow-alt-right"></i>
				</span>
				<span class="btn-inner--text">
					<b>الإدارة المالية</b>
				</span>
			</button>
		</li>
		<li class="nav-item mx-1" role="presentation">
			<button class="nav-link border py-3 btn-icon"  id="spendings-home-tab" data-toggle="pill" data-target="#spendings-home" type="button" role="tab" aria-controls="spendings-home" aria-selected="false">
				<span class="btn-inner--icon ml-2">
					<i class="fas fa-file-medical-alt"></i>
				</span>
				<span class="btn-inner--text">
					<b>الصرفيات</b>
				</span>
			</button>
		</li>
	</ul>
@endsection

{{-- CONTENT --}}
@section('content')

<div class="tab-pane fade show active" id="financial-home" role="tabpanel" aria-labelledby="financial-home-tab">
	<div class="row w-100" id="showDoctor">
		<div class="card card-fluid border-0 rounded-2 p-5">
			@livewire('financial.spendings.spending-add')
		</div>
	</div>
</div>

{{-- Add Patient Tab --}}
<div class="tab-pane fade" id="spendings-home" role="tabpanel" aria-labelledby="spendings-home-tab">
	<div class="row w-100" id="showDoctor">
		<div class="card card-fluid border-0 rounded-2 p-5">
			<h4 class="text-right mr-2">
				إدارة الصرفيات
			</h4>
			<hr class="bg-light my-3" />
			@livewire('financial.spendings.spending-add')
		</div>
	</div>
</div>

@stop
