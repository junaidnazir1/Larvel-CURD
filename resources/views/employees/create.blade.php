@extends('layouts.header')

@section('content')
<div>
    <h1>Add Employee</h1>
    <form action="/employees" method="post" >
    {{ csrf_field() }}
        <input type="text" name="username" placeholder="username" class="all_inputs"><br>
        <input type="email" name="email" placeholder="email" class="all_inputs"><br>
        <input type="text" name="contact" placeholder="Contact" class="all_inputs"><br>
        <input type="password" name="password" placeholder="password" class="all_inputs"><br>
        <input type="submit" value="Add" class="btn">
    </form>

</div>
@endsection

<style>
    h1{
        text-align: center;
        font-variant: small-caps;
    }
  
    .all_inputs{
        width: 300px;
        height: 35px;
        margin-top: 50px;
        text-indent: 20px;
        margin-left: 40%;
        text-transform: capitalize;
    }
    .btn{
        color: white;
        padding: 5px;
        background-color: brown;
        width: 200px;
        border: none;
        margin-top: 50px;
        cursor: pointer;
        margin-left: 45%;
    }
</style>





