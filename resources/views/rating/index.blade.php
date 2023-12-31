@extends('rating.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ratings</h2>
            </div>
            <div class="pull-right">
                <input type="button" class="btn btn-primary" onclick="history.back()" value="Back">
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
            <th>Топ 10</th>
            <th>Название компании</th>
            <th>Средняя оценка компании</th>
        </tr>
        @foreach ($ratings as $rating)
            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $rating->name }}
                <td>{{ $rating->grades }}</td>
            </tr>
        @endforeach

    </table>

    <table class="table table-bordered">
        <tr>
            <th>ID компании</th>
            <th>Комментарии компании</th>
        </tr>
        @foreach ($comments as $comment)
            <tr>
                <td>{{ $comment->company_id }}</td>
                <td>{{ $comment->content }}</td>
            </tr>
        @endforeach

    </table>
@endsection
