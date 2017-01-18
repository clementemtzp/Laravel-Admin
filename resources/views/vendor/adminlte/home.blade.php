@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="alert alert-dismissible alert-info">
			  	<button type="button" class="close" data-dismiss="alert">&times;</button>
			  	<strong>{{ trans('adminlte_lang::message.logged') }}</strong>
			</div>
			<h1 class="text-center">Panel de Inicio Rápido</h1>
		</div>
	</div>
@endsection
