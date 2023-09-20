@extends('company.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD/ Company</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('companies.create') }}"> Create New company</a>
                <a  type="button" class="btn btn-warning" href="{{ url('/') }}">Main Page</a>
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
            <th>Имя</th>
            <th class="col-xs-6 col-sm-6 col-md-6">Описание</th>
            <th>Логотип</th>
        </tr>
        @foreach ($companies as $company)
            <tr>
                <td>{{ $company->id }}</td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->description }}</td>
                <td>{{ $company->photo }}</td>
                <td>
                    <form action="{{ route('companies.destroy',$company->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('companies.show',$company->id) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('companies.edit',$company->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
