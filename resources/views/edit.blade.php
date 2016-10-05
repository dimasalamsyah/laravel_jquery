@extends('layouts.app')
@section('content')
   
    <div class="container">
        <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">

<h4>EDIT</h4>
{!! Form::model($barangs, ['route'=>['home.update', $barangs->id], 'method'=> 'PATCH'])  !!}
	{!! Form::text('name', null) !!}
	{!! Form::text('harga', null) !!}
	{!! Form::submit('Ubah') !!} 
{!! Form::close() !!}
@endsection
      </div>
    </div></div></div></div>