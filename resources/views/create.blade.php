@extends('layouts.base')
@section('title', 'New Cat')
@section('main')
    <section class="container">

    <h1 class="col-12">Ajoutez un chat !</h1>
    {!! Form::open(['url' => '/newcat/insert']) !!}
        <div class="col-12 form-group">
            {{{ Form::label('Nom') }}}
            {{{ Form::text('name', 'Caca', ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Couleur') }}}
            {{{ Form::select('color[]', $colors, null, ['size' => count($colors), 'multiple' => true], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Sexe') }}}
            {{{ Form::select('gender', $genders, null, ['placeholder' => 'Choisissez un sexe'], ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Taille') }}}
            {{{ Form::number('size', null, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Age') }}}
            {{{ Form::number('age', null, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::label('Poids') }}}
            {{{ Form::number('weight', null, ['class' => 'form-control']) }}}
        </div>
        <div class="col-12 form-group">
            {{{ Form::submit('Enregistrer') }}}
        </div>
        {!! Form::close() !!}
    </section>

@endsection