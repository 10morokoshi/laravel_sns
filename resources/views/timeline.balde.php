@extends('layouts.app')

@section('content')
    <div class="container mt-3">
        {!! Form::open(['route' => 'timeline', 'method' => 'POST']) !!}
            {{ csrf_field() }}
            <div class="row mb-4">
                {{ Form::text('tweet', null, ['class' => 'form-control col-9 mr-auto']) }}
                {{ Form::submit('ツイート', ['class' => 'btn btn-primary col-2']) }}
            </div>
        {!! Form::close() !!}
    </div>
@endsection