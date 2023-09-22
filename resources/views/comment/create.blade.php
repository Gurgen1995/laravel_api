@extends('comment.layout')

@section('content')

    @php
        $users = \App\Models\User::all();
        $companies = \App\Models\Company::all();
    @endphp
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New comment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('comments.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <br>
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

    <form action="{{ route('comments.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div type="button" >
                    <strong>ID пользователя:</strong>
                    <select name="user_id" class="form-select">
                        <option>Choose ID</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->id}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div type="button">
                    <strong>ID компании:</strong>
                    <select name="company_id" class="form-select">
                        <option>Choose ID</option>
                        @foreach($companies as $company)
                            <option value="{{$company->id}}">{{$company->id}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Content:</strong>
                    <textarea type="text" name="content" class="form-control" placeholder="Content"></textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Grades:</strong>
                    <input type="number" name="grades" class="form-control" placeholder="Grades">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <input type="reset" class="btn btn-danger">
            </div>
        </div>

    </form>
@endsection
