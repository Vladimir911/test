@extends('category.index')

@section('title', 'Создать пост')

@section('page_content')

    {!! Form::model($category, array('route' => array('category.update', $category), 'method' => 'PUT')) !!}

    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', null, ['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{ Form::label('slag', 'Slag')}}
        {{Form::text('slag', null, ['class' => 'form-control'])}}
    </div>
{{Form::submit('Редактировать категорию', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

@endsection