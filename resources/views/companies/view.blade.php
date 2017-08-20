@extends('layouts.app')

@section('content')
    <!-- Companies -->
    <div class='panel panel-default'>
        <div class='panel-heading'>
            <h3>{{ $company->name }} <small> <small>since {{ $company->created_at }}</small></small>
                <div class="pull-right">
                    <a href="{{ url('/companies/edit/'.$company->slug)}}" class="btn btn-warning">Edit</a>
                </div>
            </h3>
        </div>
        <div class='panel-body'>
            <p>{{ $company->description }}</p>
        </div>

    </div>

    <!-- List Departments -->
     <div class='panel panel-default'>
        <div class='panel-heading'>
            <h4>List Employees
                <div class="pull-right">
                    <button class='btn btn-primary'>Add Employee</button>
                </div>
            </h4>
        </div>

        <div class="panel-body">
            <p>No records found</p>
        </div>
    </div>


@endsection
  
@section('sidebar')
      <!-- List Departments -->
     <div class='panel panel-default'>
        <div class='panel-heading'>
            <h4>Departments
                <div class="pull-right">
                    <button class='btn btn-primary'>Add</button>
                </div>
            </h4>
        </div>

        <div class="panel-body">
            <p>No records found</p>
        </div>
    </div>
@endsection