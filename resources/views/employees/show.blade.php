@extends('layouts.header')

@section('content')
<h1> Employee Details<h1>


   <table> 
      <tr> <td> Username:</td> <td> {{$employee->username}}</td>   </tr>
      <tr> <td> Email:</td> <td> {{$employee->email}}</td> </tr>
     <tr> <td> Contact:</td> <td> {{$employee->contact}}</td>
      

  
   </table>

@endsection



