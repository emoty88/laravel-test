{{ Form::open(array('url'=> 'api/add_post' )) }}
	{{ Form::label('Başlık') }}
	{{ Form::text('title') }}
	<br />
	{{ Form::label('İçerik') }}
	{{ Form::textarea('content') }}
	<br />
	{{ Form::label('Kategori') }}
	{{ Form::select('category', $categories) }}
	<br />
	{{ Form::submit('Kaydet') }}
{{ Form::close() }}
