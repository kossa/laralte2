@extends('admin.default')

@section('page-header')
  User <small>update</small>
@stop

@section('content')

    {!! Form::model($item, [
            'action' => ['UsersController@update', $item->id],
            'method' => 'put', 
            'files' => true
        ])
    !!}

    @include('admin.users.form')

  	<div class="box-footer">
  	  <button type="submit" class="btn btn-info">{{ trans('app.edit_button') }}</button>
  	</div>
    
  {!! Form::close() !!}

@stop

