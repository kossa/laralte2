@extends('admin.default')

@section('page-header')
  Categorie <small>nouveau</small>
@stop

@section('content')

    {!! Form::open([
            'action' => ['CategoriesController@store'],
            'files' => true
        ])
    !!}

    @include('admin.categories.form')

  	<div class="box-footer">
  	  <button type="submit" class="btn btn-info">Enregistrer</button>
  	</div>

  {!! Form::close() !!}

@stop