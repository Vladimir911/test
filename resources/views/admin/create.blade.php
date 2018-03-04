@extends('admin.index')

@section('title', 'Создать пост')

@section('page_content')

{!! Form::open(['route' => 'admin.store']) !!}

<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('content', 'Content')}}
    {{Form::text('content', null, ['class' => 'form-control'])}}
</div>

{{Form::submit('Создать пост', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

@endsection