<div class="form-group">
    {!! Form::label('name', 'Nome') !!}
    {!! Form::text('name', $category->name , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Salvar categoria', ['class' => 'btn btn-primary']) !!}
</div>