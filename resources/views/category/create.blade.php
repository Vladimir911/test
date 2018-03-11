@extends('category.index')

@section('title', 'Создать категорию')

@section('page_content')
    @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}}</li>
                @endforeach
            </ul>
        </div>
    @endif


{!! Form::open(['route' => 'category.store']) !!}

<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', null, ['class' => 'form-control'])}}
</div>
<div class="form-group">
    {{Form::label('content', 'Content')}}
    {{Form::text('content', null, ['class' => 'form-control'])}}
</div>
    <div class="form-group">
        {{Form::label('category', 'category')}}
        {{Form::text('category_id',$catrgories,['class'=>'form-control']}}
    </div>

{{Form::submit('Создать пост', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}

@endsection