@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
							<div class="table-responsive">
<h4>CREATE</h4>

{!! Form::open(['route'=>'home.store'])  !!}
    {!! Form::text('name', null, ['placeholder' => 'Masukkan Tahun']) !!}
    {!! Form::text('harga', null, ['placeholder' => 'Masukkan Data Angkot']) !!}
    {!! Form::submit('Simpan') !!}
{!! Form::close() !!}
@endsection
</div></div></div></div></div>