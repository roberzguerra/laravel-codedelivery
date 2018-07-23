@extends('app')

@section('content')

    <div class="container">
        <h3>Editando Categoria: {{ $category->name }}</h3>

        @include('errors._check')

        {!! Form::model($category, ['route' => ['admin.categories.update', $category->id], 'class' => 'form']) !!}

        @include('admin.categories._form')

        {!! Form::close() !!}

    </div>

@endsection