@extends('layout')
  
@section('content')

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Fetch Data from API-2</h2>
                </div>
                <div class="pull-left">
                    <a class="btn btn-secondary" href="dashboard">Back</a>
                </div>
                
            </div>
        </div>
      
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Employee No</th>
                    <th>Employee Name</th>
                    <th>Employee Division</th>
                    <th>Employee Designation</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data2['data'] as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['employee_no'] }}</td>
                        <td>{{ $item['employee_name'] }}</td>
                        <td>{{ $item['division_name'] }}</td>
                        <td>{{ $item['designation_name'] }}</td>
                        
                    </tr>
                    @endforeach
                    
            </tbody>
        </table>
    


@endsection