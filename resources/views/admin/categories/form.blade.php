<?php $title = isset($item) ? $item->name: "add new category" ?>

<div class="row">
  <div class="col-sm-8">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">{{ $title }}</h3>
      </div>
      <div class="box-body">

        {!! Form::myInput('text', 'name', 'Title', ['required']) !!}

        {!! Form::mySelect('parent_id', 'Parent category', [0 => 'root'] + App\Category::pluck('name', 'id')->toArray(), null, ['class'=>'chosen']) !!}

        {{-- @include('admin.commun.ckeditor')
        {!! Form::myTextArea('text', 'text', ['class'=>'ckeditor']) !!} --}}

      </div>
    </div>

  </div>
</div>