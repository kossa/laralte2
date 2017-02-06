<?php $title = isset($item) ? $item->name: "add new user" ?>

<div class="row">
  <div class="col-sm-8">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">{{ $title }}</h3>
      </div>
      <div class="box-body">

        {!! Form::myInput('text', 'name', 'Username') !!}

        {!! Form::myInput('email', 'email', 'Email') !!}

        {!! Form::myInput('password', 'password', 'Password') !!}

        {!! Form::myInput('password', 'password_confirmation', 'Password again') !!}

        {!! Form::mySelect('role', 'Role', config('variables.role')) !!}

        {!! Form::myFile('avatar', 'Avatar') !!}

        @include('admin.commun.ckeditor')
        {!! Form::myTextArea('bio', 'Bio', ['class'=>'ckeditor']) !!}


      </div>
    </div>

  </div>

</div>