@extends('layout')
  
@section('content')

<div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Fetch Data from API-1</h2>
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
                    <th>Employee Name</th>
                    <th>Employee Email</th>
                    <th>Employee No</th>
                    <th>Employee Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data1['data'] as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['Emp_name'] }}</td>
                        <td>{{ $item['Emp_email'] }}</td>
                        <td>{{ $item['Emp_no'] }}</td>
                        <td>{{ $item['Emp_phone'] }}</td>
                        
                    </tr>
                    @endforeach
            </tbody>
        </table>

@endsection