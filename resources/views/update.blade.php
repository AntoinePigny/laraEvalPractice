@extends('layouts.base')
@section('title', 'New Cat')
@section('main')
    <section class="container">

        <h1 class="col-12">Modifiez un chat</h1>
        {!! Form::open(['url' => '/newcat/update']) !!}
           {{{ Form::hidden('id', $cat->id) }}}
        <div class="col-12 form-group">
            {{{ Form::label('Nom') }}}
            {{{ Form::text('name', $cat->name, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Couleur') }}}
            {{{ Form::select('colors[]', $colors, $cat->colors, ['size' => count($colors), 'multiple' => true], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Sexe') }}}
            {{{ Form::select('gender', $genders, $cat->gender->id, [], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Taille') }}}
            {{{ Form::number('size', $cat->size, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Age') }}}
            {{{ Form::number('age', $cat->age, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Poids') }}}
            {{{ Form::number('weight', $cat->weight, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::submit('Enregistrer') }}}
        </div>
        {!! Form::close() !!}
    </section>

@endsection