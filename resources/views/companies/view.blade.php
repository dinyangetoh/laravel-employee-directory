@extends('layouts.app')

@section('content')


    <div class="content">
        
        
        <!-- Companies -->

        <h3>View: {{ $company->name }} | <small>{{ $company->slug }} | <small>{{ $company->created_at }}</small></small></h3>
        <hr>
      <p>This is company view</p>

    </div>

@endsection
