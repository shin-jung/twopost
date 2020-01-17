@extends('layouts.app')

@section('title', 'Create article')

@section('content')


	@if ($errors->any())
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	@endif

	<form action="/article/store" method="post">
	@csrf
		<span>Title: </span></br></br>

		<input type="text" name="title" autocomplete="off"></br></br>

		<span>content: </span></br></br>

		<input type="text" name="content" autocomplete="off"></br></br>


		<button type="submit" class="btn btn-md btn-danger">
		<span>新增</span>
		</button>
	</form>
@endsection