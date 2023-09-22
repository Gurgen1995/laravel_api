@extends('comment.layout')

@section('content')

    @php
        $users = \App\Models\User::all();
        $comments = \App\Models\Comment::all();
        $companies = \App\Models\Company::all();
    @endphp
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Post</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('comments.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('comments.update',$comment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <form action="{{ route('comments.store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div type="button">
                        <strong>ID пользователя:</strong>
                        <select name="user_id" class="form-select">
                            <option>{{$comment->user_id}}</option>
                            @foreach($comments as $comment)
                                <option value="{{$comment->user_id}}">{{$comment->user_id}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group" >
                        <strong>ID компании:</strong>
                        <select type="button" name="company_id" class="form-select">
                            <option>{{ $comment->company_id }}</option>
                            @foreach($comments as $comment)
                                <option value="{{$comment->company_id}}">{{$comment->company_id}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Content:</strong>
                        <input type="text" name="content" value="{{ $comment->content }}" class="form-control" placeholder="Content">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Grades:</strong>
                        <input type="number" name="grades" value="{{ $comment->grades }}" class="form-control" placeholder="Grades">
                    </div>
                </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
