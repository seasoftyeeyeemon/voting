@extends('layouts.app')
@section('content')
    <div class="row">
    <div class="col-md-8">
        <h1>Competitior Detail</h1>
        @php
        @endphp
        {{ Form::open(array('route' => 'competitions.store','files'=>true)) }}
        <div class="form-group row">
            {!! Form::label('event_id','Event-ID', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('event_id',$eventid, [
                'class'=>$errors->has('name') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Name....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Competitior Name','Name', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
               
                {!! Form::text('name',isset(session('competition')['name']) ? session('competition')['name'] : '', [
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
                {!! Form::text('age',isset(session('competition')['age']) ? session('competition')['age'] : '', [
                'class'=>$errors->has('age') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Age....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Competitior Education','education', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('education',isset(session('competition')['education']) ? session('competition')['education'] : '', [
                'class'=>$errors->has('education') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Education....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Address','address', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('address',isset(session('competition')['address']) ? session('competition')['address'] : '', [
                'class'=>$errors->has('address') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Address....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Activity','Activity', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('activity',isset(session('competition')['activity']) ? session('competition')['activity'] : '', [
                'class'=>$errors->has('activity') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Activity....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row">
            {!! Form::label('Phone','Phone', [ 'class'=>'col-md-4 col-form-label text-md-right']) !!}
            <div class="col-md-6">
                {!! Form::text('phone',isset(session('competition')['phone']) ? session('competition')['phone'] : '', [
                'class'=>$errors->has('phone') ? 'form-control is-invalid' : 'form-control',
                'placeholder' =>"Your Phone....",'autofocus'
                ]) !!}
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                                
                <button type="submit" class="btn btn-primary">
                    {{ __('Preview Your Detail') }}
                </button>
            </div>
        </div>
        {{ Form::close() }}

    </div>
    </div>
   
@endsection

