@include('templates.header', ['title' => 'Landing Page'])
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome To TechSearches</div>
                    <div class="panel-body">
                        <h2>Want to Delegate Finding a Computer to the Experts?</h2>
                        <p>You've come to the right place! Once you register, you'll be able to create a post that <strong style="color:blue;">TechFinders</strong> will respond to according to your needs.</p>
                        <br>
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                        <a href="" class="btn btn-info">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>