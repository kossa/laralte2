<?php $title = isset($item) ? $item->name: "Creer une categorie" ?>

<div class="row">
  <div class="col-sm-8">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">{{ $title }}</h3>
      </div>
      <div class="box-body">

        {!! Form::myInput('text', 'name', 'Titre', ['required']) !!}

        {!! Form::mySelect('parent_id', 'Parent category', ['' => ''] + App\Category::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}

        {{-- @include('admin._partials.ckeditor')
        {!! Form::myTextArea('text', 'text', ['class'=>'ckeditor']) !!} --}}

      </div>
    </div>

  </div>
</div>