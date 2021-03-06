@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasklist->id }}のタスク編集ページ</h1>

<div class="row">
    <div class="col-lg-offset-3 col-lg-6 col-md-offset-2 col-md-8 col-xs-12">
        {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('status','ステータス:') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
        
            <div class="form-group">
                {!! Form::label('content','タスク:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
        
            {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
        {!! Form::close() !!}
    </div>
</div>
@endsection