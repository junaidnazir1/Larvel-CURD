@extends('layouts.header')

@section('content')
<h1>View All Employees<h1>

<table>
    <thead>
      <tr>
        <td> Name</td> 
        <td> Email</td>
        <td> Contact</td>  
        <td> Show</td>  
        <td> Edit</td>  
        <td> Delete</td>  
      </tr>
    <thead>
    
    <tbody>
    @forelse($employees as $employee)
       <tr> 
         <td> {{$employee->username}}</td>
         <td> {{$employee->email}}</td>
         <td> {{$employee->contact}}</td>
         <td> <a href="{{action('EmployeesController@show', $employee->id)}}">Show </a> </td>
         <td> <a href="{{action('EmployeesController@edit', $employee->id)}}">Edit </a> </td>
         <td> <form method="post" action="{{route('employees.destroy',$employee->id)}}" 
                         onsubmit="return confirm('Are you sure you want to delete it?') " >
                       <input type="hidden" name="_method" value="Delete">
                       {{ csrf_field()}}
                       <button> Delete</button>
              </form> 
           </td>
       </tr>
       @empty
       <tr>  <td col-span="3"> no record found </tr>
       @endforelse
    </tbody>
   
<table>



@endsection



<style>

table {
  border-collapse: collapse;
}
table {
  width: 100%;
}
table, th, td {
  border: 1px solid black;
}
th {
  height: 30px;
}
th,td{
    padding:10px;
}


</style>