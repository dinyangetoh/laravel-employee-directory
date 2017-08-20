@extends('layouts.app')

@section('content')
    <!-- Companies -->
    <div class='panel panel-default'>
        <div class='panel-heading'>
            <h3>Edit {{ $company->name}}
            </h3>
        </div>
        <div class='panel-body'>
             {!! Form::open(['url' => 'companies/save/'.$company->slug,'class'=>'form-horizontal']) !!}
                      
                    <div class="form-group">
                        <label class="col-md-3">Name</label>
                        <div class="col-md-9">
                            <input type="text" name='name' value="{{$company->name}}" class="form-control">
                        </div>
                        
                    </div>
                    <div class="form-group">
                    <label class="col-md-3">Description</label>
                        <div class="col-md-9">
                            
                            <textarea name='description' class="form-control" placeholder="Company Description">{{ $company->description}}</textarea>
                        </div>
                        
                    </div>
                    <div class="form-group">

                        <div class="col-md-offset-3 col-md-9">
                             <div class="col-md-2">
                                <button type="submit" class="btn btn-success form-control">Save</button>
                            </div>
                        </div>
                        
                    </div>

                               

            {!! Form::close() !!}
        </div>

    </div>


@endsection
  