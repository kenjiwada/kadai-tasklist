@extends('layouts.app')

@section('content')

    <h1>タスク追加ページ</h1>

<div class="row">
    <div class="col-xs-6">
     {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
        <div class="form-group">
            {!! Form::label('status','ステータス:') !!}
            {!! Form::text('status') !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('content','タスク:') !!}
            {!! Form::text('content') !!}
         </div>
         
        {!! Form::submit('作成',['class' => 'btn btn-primary']) !!}
         
    {!! Form::close() !!}
    </div>
</div>
@endsection