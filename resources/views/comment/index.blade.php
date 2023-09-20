@extends('comment.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD/ Comment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('comments.create') }}"> Create comment</a>
                <a type="button" class="btn btn-warning" href="{{ url('/') }}">Main Page</a>
            </div>
        </div>
    </div>
    <br>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>№</th>
            <th>ID пользователя</th>
            <th>ID компании</th>
            <th>Содержание</th>
            <th>Оценка</th>
        </tr>
            @foreach ($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->user_id }}</td>
                    <td>{{ $comment->company_id }}</td>
                    <td>{{ $comment->content }}</td>
                    <td>{{ $comment->grades }}</td>
                    <td>
                        <form action="{{ route('comments.destroy',$comment->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('comments.show',$comment->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('comments.edit',$comment->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
    </table>
@endsection
