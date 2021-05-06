@extends('layouts.master')

{{-- Layout Style --}}
@section('layout', 'two-sides')

{{-- Title --}}
@section('title', 'Home')


{{-- CONTENT --}}
@section('content')
	{{-- Right Content --}}
	@section('right')
		<div class="row w-100">
			<div class="card card-fluid border-0 rounded-2 p-5">
                hhhhh
			</div>
		</div>
	@endsection

	{{-- Left Content --}}
	@section('left')
		<div class="row w-100">
			<div class="card card-fluid border-0 rounded-2 p-5">
				gggg
			</div>
		</div>
	@endsection
@stop