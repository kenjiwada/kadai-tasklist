@extends('layouts.app')

@section('content')

    <h1>タスク追加ページ</h1>

     {!! Form::model($tasklist, ['route' => 'tasklists.sotre']) !!}
         
         {!! Form::label('content','タスク:') !!}
         {!! Form::text('content') !!}
         
         {!! Form::submit('作成') !!}
         
    {{ '<p style="color: red;">htmlentities 関数に通した場合</p>' }}
    {!! '<p style="color: red;">htmlentities 関数に通さなかった場合</p>' !!}
         
    {!! Form::close() !!}
    
@endsection