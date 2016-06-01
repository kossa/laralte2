

{{ Form::open($form_open) }}
    {{ Form::selectRange('roomid',0, 6, $roomid, ["class" => "form-control auto-submit"]) }}
{{ Form::close() }}