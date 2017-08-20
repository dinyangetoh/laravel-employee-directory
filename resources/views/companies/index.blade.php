@extends('layouts.app')

@section('content')


    <div class="content">
        
        <div class="well">
        <h3>New Companies</h3>
            {!! Form::open(['url' => 'companies','class'=>'form-horizontal']) !!}
                      
                    <div class="form-group">

                        <div class="col-md-10">
                            <input type="text" name='name' value="" class="form-control">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary form-control">Add</button>
                        </div>
                    </div>
                

            {!! Form::close() !!}
        </div>

        <!-- Companies -->

        <h3>Companies</h3>

        <table class="table table-striped">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Date</th>
                <th>Actions</th>
            </thead>

            <tbody>
            
            @foreach($companies as $index=>$company)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->slug }}</td>
                    <td>{{ $company->created_at }}</td>
                    <td>
                        <a href="{{ url('companies/view/'.$company->slug) }}" class="btn btn-info">View</a>
                        <a href="{{ url('companies/delete/'.$company->slug) }}" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        
        </table>


    </div>

   
@endsection

@section('sidebar')
<div class="panel panel-info">
    <div class="panel-body">
        <a href="companies" class="btn btn-primary form-control">New Company</a>
    </div>
</div>
@endsection