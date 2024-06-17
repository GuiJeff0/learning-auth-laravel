@extends('layout')
@section('content')

<body>
    <main class="form-signin w-100 m-auto">
        <h1>Sign Up User</h1>

        <form action= "{{ route('signup') }}" method="post">
            {!! csrf_field() !!}   
           <label>First Name</label>
           <input type="text" name="name" id="name" class ="form-control"> </br>
     
           <label>Email</label>
           <input type="email" name="email" id="email" class ="form-control"> </br>
           <label>Password</label>
           <input type="password" name="password" id="password" class ="form-control"> </br>
           <input type="submit" value="Save" class="btn btn-success"> 
           </form>

    </main>
</body>

</html>
@stop
