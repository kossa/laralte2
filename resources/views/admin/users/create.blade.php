@extends('admin.default')

@section('page-header')
  User <small>nouveau</small>
@stop

@section('content')

    {!! Form::open([
            'action' => ['UsersController@store'],
            'files' => true
        ])
    !!}

    @include('admin.users.form')

  	<div class="box-footer">
  	  <button type="submit" class="btn btn-info">Enregistrer</button>
  	</div>

  {!! Form::close() !!}

@stop