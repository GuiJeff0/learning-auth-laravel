@extends('layout')
@section('content')

    <body>
        <main class="form-signin w-100 m-auto">
            <h1>Login User</h1>

            <form action= "{{ route('check') }}" method="post">
                {!! csrf_field() !!}   

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
