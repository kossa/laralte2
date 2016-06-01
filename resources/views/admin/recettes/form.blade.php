<?php $title = isset($item) ? $item->name: "Créer une recette" ?>

<div class="row">
  <div class="col-sm-8">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">{!! $title !!}</h3>
      </div>
      <div class="box-body">

        {!! Form::myInput('text', 'name', 'Titre', ['required']) !!}

        {!! Form::myTextArea('ingredients', 'Ingrédients') !!}

        {!! Form::myTextArea('body', 'Préparation') !!}

        {!! Form::myFile('image', 'Image') !!}

        <div class="form-group">
          <label for="">Durée</label>
          <div class="row">
            <div class="col-xs-6">
              {!! Form::number('duration_minute', null, ['class'=>'form-control', 'placeholder' => 'Nombre de minutes']) !!}
            </div>
            <div class="col-xs-6">
              {!! Form::number('duration_second', null, ['class'=>'form-control', 'placeholder' => 'Nombre de secondes']) !!}
            </div>
          </div>
        </div>

        {!! Form::myInput('text','url_video', 'Url de la video') !!}

        {!! Form::mySelect('category_id', 'Categorie', ['' => ''] + App\Category::lists('name', 'id')->toArray(), null, ['class'=>'chosen', 'required']) !!}

        {!! Form::mySelect('language_id', 'Langue', ['' => ''] + Config::get('variables.langues'), null, ['class'=>'form-control', 'required']) !!}

      </div>
    </div>

  </div>

  @if (isset($item) && $item->image)
    <div class="col-sm-4">
      <div class="box box-info">
        <div class="box-header with-border">
          <h3 class="box-title">Image de la recette</h3>
        </div>
        <div class="box-body">
          <img src="{{ $item->image }}" alt="">
        </div>
      </div>
    </div>
  @endif
</div>