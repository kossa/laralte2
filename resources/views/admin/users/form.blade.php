<?php $title = isset($item) ? $item->username: "Creer un utilisateur" ?>

<div class="row">
  <div class="col-sm-8">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">{{ $title }}</h3>
      </div>
      <div class="box-body">

        {!! Form::myInput('text', 'name', 'Nom complet') !!}

        {!! Form::myInput('email', 'email', 'Email') !!}

        {!! Form::myInput('password', 'password', 'Mot de passe') !!}

        {!! Form::myInput('password', 'password_confirmation', 'Confirmation mot de passe') !!}

      </div>
    </div>

  </div>

</div>