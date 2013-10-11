{{ Form::open(array('url' => 'api/add_category')) }}
    {{ Form::label('İsim') }}
    {{ Form::text('name') }}
    <br />
    {{ Form::label('Açıklama') }}
    {{ Form::textarea('description') }}
    <br />
    {{ Form::submit('Kaydet') }}
{{ Form::close() }}