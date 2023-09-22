@extends('rating.layout')
<?php
/*dd($rating);*/
?>
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
            <th>ID компании</th>
            <th>Комментарии компании</th>
            <th>Общая оценка</th>
        </tr>
             @foreach ($ratings as $rating)
                 <tr>
                     <td>{{ $rating->top }}</td>
                     <td>{{ $rating->name }}</td>
                     <td>{{ $rating->company_id }}</td>
                     <td>{{ $rating->content }}</td>
                     <td>{{ $rating->grades }}</td>
                 </tr>
             @endforeach

    </table>
@endsection
