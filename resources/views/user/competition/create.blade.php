@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-md-8">
        <h1>Competitior Detail</h1>
        {{ Form::open(array('route' => 'competitions.store','files'=>true)) }}
        <div class="form-group row">
            {!! Form::label('Competitior Name','Name', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('name',old('name'), [
                'class'=>$errors->has('name') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Name....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('featured_image','Upload Featured Image',[ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::file('featured_image') !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Competitior Age','Age', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('age',old('age'), [
                'class'=>$errors->has('age') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Age....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Competitior Education','education', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('education',old('education'), [
                'class'=>$errors->has('education') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Education....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Address','address', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('address',old('address'), [
                'class'=>$errors->has('address') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Address....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Competitior Activity','Activity', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('activity',old('activity'), [
                'class'=>$errors->has('activity') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Activity....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Competitior Phone','Phone', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('phone',old('phone'), [
                'class'=>$errors->has('phone') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Phone....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                                
                <button type="submit" class="btn btn-primary">
                    {{ __('Create') }}
                </button>
            </div>
        </div>
            {{ Form::close() }}

    </div>
    </div>
   
@endsection

