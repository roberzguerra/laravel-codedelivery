<div class="form-group">
    {!! Form::label('category_id', 'Categoria') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name', 'Nome') !!}
    {!! Form::text('name', null , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Descrição') !!}
    {!! Form::textarea('description', null , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('price', 'Preço') !!}
    {!! Form::text('price', null , ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Salvar produto', ['class' => 'btn btn-primary']) !!}
</div>