@extends('admin.default')

@section('page-header')
  Recettes <small>nouvel</small>
@stop

@section('content')

    {!! Form::open([
            'action' => ['RecettesController@store'],
            'files' => true
        ])
    !!}

    @include('admin.recettes.form')

  	<div class="box-footer">
  	  <button type="submit" class="btn btn-info">Enregistrer</button>
  	</div>

  {!! Form::close() !!}

@stop