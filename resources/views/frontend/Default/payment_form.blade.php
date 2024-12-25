@extends('frontend.Default.layouts.app')
@section('page-title', 'Payment form')
@section('add-main-class', 'main-redirect')
@section('add-header-class', 'main-redirect')
@php
    $currency = auth()->user()->present()->shop ? auth()->user()->present()->shop->currency : '';
@endphp



@section('content')

    @include('frontend.Default.partials.header')

	<div class="redirect" style="background-image: url('/frontend/Default/img/_src/redirected-bg.png')">
		<h1 class="redirect__title">
			You will be rediracted to
			<span class="redirect__time">paymant page in 5-7 second!</span>

		</h1>

		@if( is_array($data) )
		<form action="{{ $data['action'] }}" method="{{ $data['method'] }}" id="payment_form">
			{!! Form::token() !!}
			@foreach($data['fields'] AS $field=>$value)
				<input type="hidden" name="{{ $field }}" value="{{ $value }}">
			@endforeach
			<button type="submit" class="btn btn--redirect" >OK</button>
		</form>
		@else
			{!! $data !!}
		@endif
	</div>

@endsection

@section('footer')
	@include('frontend.Default.partials.footer')
@endsection

@section('scripts')
	@include('frontend.Default.partials.scripts')
@endsection
