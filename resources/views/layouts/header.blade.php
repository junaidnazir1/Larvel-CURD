<html>
  <head> </head>

  <body>
  <ul>
        <li> <a href="{{action('EmployeesController@index')}}"> Home</a> </li>
        <li> <a href="{{action('EmployeesController@create')}}"> Add</a> </li>
   </ul>
   <div id="main">
      @yield('content')
    </div>  
  </body>
</html>


<style>
body {
    margin:0;
}
ul{
    background-color:black;
    color:white;
    margin:0;
    padding:20px;
    position:fixed;
    top:0;
    left:0;
    right:0;
}
ul > li{
    display:inline;
    margin-left:30px;
    text-transform:capitalize;
   
}
ul>li>a{
    color:white;
    text-decoration:none;
    font-size:20px;
}
#main{
     margin-top:40px;
     padding:60px;
}

</style>
