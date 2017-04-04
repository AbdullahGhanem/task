@extends('back.master')

@section('content')
	<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
	Edit Product 
	</h3>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="{{ route('admin.dashboard') }}">Dashboard</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="{{ route('admin.product.index')}}">Products</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">edit Product</a>
			</li>
		</ul>
	</div>
	<!-- END PAGE HEADER-->

	<div class="portlet light bg-inverse">
		<div class="portlet-title">
			<div class="caption">
				<i class="icon-equalizer font-red-sunglo"></i>
				<span class="caption-subject font-red-sunglo bold uppercase">Edit</span>
				<span class="caption-helper">{{ $product->name }}</span>
			</div>
			<div class="actions">
				<a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
				<i class="icon-trash"></i>
				</a>
			</div>
		</div>
		<div class="portlet-body form">
			<!-- BEGIN FORM-->
			{!! Form::model($product, ['method' => 'PATCH','action' => ['ProductController@update', $product->id ]]) !!}
				@include('back.product.form',['submiteText' => 'update'])
			{!! Form::close() !!}
			<!-- END FORM-->
		</div>
		@include('errors.list')
	</div>
@stop