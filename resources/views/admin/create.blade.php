@extends('layout')
@section('content')

<body>
    <main class="form-signin w-100 m-auto">
        <h1>Admin Sign Up </h1>

        <form action="{{ route('admin.signup') }}" method="POST">
            {!! csrf_field() !!} 
            <div class="root">
                <div class="mb-3">
                    <label for="inputName" class="form-label">Full Name</label>
                    <input type="email" class="form-control" id="name" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="inputPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </main>
</body>

</html>
@stop
