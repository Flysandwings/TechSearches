@include('templates.header', ['title' => 'Login'])
<body>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login To TechSearches</div>
                    <div class="panel-body">
                        @if(isset(Auth::user()->email))
                            <script>window.location="/login/successlogin";</script>
                        @endif

                        @if ($message = Session::get('error'))
                        <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{ $message }}</strong>
                        </div>
                        @endif


                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="post" action="{{ route('checkLogin') }}">
                            @csrf
                            <div class="form-group">
                                <label>Enter email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Enter Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login" class="btn btn-primary" value="Login">
                                <a href="" class="btn btn-danger">Forgot Password</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>