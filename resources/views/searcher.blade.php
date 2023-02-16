@include('templates.header', ['title' => 'Welcome Searcher'])
<body>
<br>
    <div class="container box">
        <h3 align="center">Welcome to TechSearches</h3>
        <br>
        @if(isset(Auth::user()->email))
            <div class="alert alert-success success-block">
                <strong>Login successful for {{ Auth::user()->email }}</strong>
            </div>
            <strong>Welcome {{ Auth::user()->name }}.</strong>
            <br>
            <strong>You are a Tech {{ session('role') }}</strong>
            <br>
            <a href="{{ route('posts.create') }}" class="btn btn-primary">Create a posting</a>
            <a href="{{ route('posts.index') }}" class="btn btn-info">View or edit your postings</a>
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            <div style="display:block; margin-top:1vw;">
                @include('templates.headerBox', ['title' => 'Learn About How to Make A High Quality Post'])
                <div class="panel-body">
                    <h2>Make Sure You Have a Relevant Title</h2>
                    <p>The most eye-catching part for <strong style="color:blue;">TechFinders</strong> is your title. Ensure that the title is quick and concise. Below is a list of good examples of titles, and bad examples of titles.</p>
                    <h3>Good Titles</h3>
                    <ul>
                        <li>Need A Laptop for School and Occasional Gaming</li>
                        <li>Need A Custom Built PC</li>
                        <li>Looking For Any Laptop Under $300</li>
                        <li>Where Do I Start When Buying A Computer?</li>
                    </ul>
                    <h3>Bad Titles</h3>
                    <ul>
                        <li>Buy me a cheap computer n3rds!</li>
                        <li>I has No idea what is COMPUTER!</li>
                        <li>Super Nintendo, SEGA Genesis for Sale!</li>
                        <li>Need a free computer for MY BIRTHDAY!</li>
                    </ul>
                    <h2>Include Price and Other Constraints in the Description</h2>
                    <p>Price impact is paramount when determining the right computer that fits your needs. Please include a range of prices you'd be willing to purchase a computer for. An example of a price range is: $100USD - $200USD or 200CAD/250CAD. </p>
                    <h2>Include Any Other Relevant Information also in the Description</h2>
                    <p>Lifestyle and use cases for the computer are important consideratitons for <strong style="color:blue;">TechFinders</strong> to take into account. Does this computer need to be taken to class? Then perhaps a laptop or chromebook is a better fit than a desktop PC. Does your child frequently drop things? Perhaps an iPad with a bullet proof case could be of assistance. Do you need a custom built PC with capadabilities for Intel Processors and the RTX 4080 and are looking for RAM reccomendations? Then consider two 32 sticks from NewEgg that fits that use case.</p>
                    <h3>That's it! You're Ready to Get Searching. Hope You Get What You're Looking For!</h3>
                </div>
                
                @include('templates.footer');
            </div>
            
        @else
            <script>window.location = "/";</script>
        @endif
    </div>
</body>
</html>