@extends('layouts.app')

@section('content')

    <h1>メッセージ新規作成ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::labe('content','タスク:') !!}
        {!! Form::text('content') !!}
        {!! Form::submit('投稿') !!}
        
    {!! Form::close() !!}

@endsection