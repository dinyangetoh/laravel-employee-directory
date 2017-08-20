@extends('layouts.app')

@section('content')


    <div class="content">
        
        
        <!-- Companies -->

        <h3>View: {{ $company->name }} | <small>{{ $company->slug }} | <small>{{ $company->created_at }}</small></small></h3>
        <hr>
      <p>This is company view</p>

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