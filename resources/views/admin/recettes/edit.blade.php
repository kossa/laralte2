@extends('admin.default')

@section('page-header')
  Categorie <small>modification</small>
@stop

@section('content')

    {!! Form::model($item, [
            'action' => ['RecettesController@update', $item->id],
            'method' => 'put', 
            'files' => true
        ])
    !!}

    @include('admin.recettes.form')

  	<div class="box-footer">
  	  <button type="submit" class="btn btn-info">Modifier</button>
  	</div>
    
  {!! Form::close() !!}

@stop

