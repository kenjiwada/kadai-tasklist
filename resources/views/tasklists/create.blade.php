@extends('layouts.app')

@section('content')

    <h1>タスク追加ページ</h1>

<div class="row">
    <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-xs-12"> 
    
     {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
     
        <div class="form-group">
            {!! Form::label('status','ステータス:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('content','タスク:') !!}
            {!! Form::text('content', null,['class' => 'form-control']) !!}
         </div>
         
        {!! Form::submit('作成',['class' => 'btn btn-primary']) !!}
         
    {!! Form::close() !!}
    </div>
</div>
@endsection