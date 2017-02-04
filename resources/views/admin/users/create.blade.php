@extends('admin.default')

@section('page-header')
  User <small>new</small>
@stop

@section('content')

    {!! Form::open([
            'action' => ['UsersController@store'],
            'files' => true
        ])
    !!}

    @include('admin.users.form')

  	<div class="box-footer">
  	  <button type="submit" class="btn btn-info">Save</button>
  	</div>

  {!! Form::close() !!}

@stop