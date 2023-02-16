@include('templates.header', ['title' => 'Welcome Finder'])
<body>
    <br>
    <div class="container box">
        <h3 align="center">Welcome to TechFinder</h3>
        <br>
        @if(isset(Auth::user()->email))
            <div class="alert alert-success success-block">
                <strong>Login successful for {{ Auth::user()->email }}</strong>
            </div>
            <strong>Welcome {{ Auth::user()->name }}</strong>
            <br>
            <strong>You are a Tech {{ session('role') }}</strong>
            <br>
            <a href="{{ route('posts.index') }}" class="btn btn-info">View and Respond to Jobs</a>
            <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            <div style="display:block; margin-top:1vw;">
                @include('templates.headerBox', ['title' => 'Learn About How to Make A High Quality Response'])
                <div class="panel-body">
                    <h2>Ensure You Respond Respectfully At All Times</h2>
                    <p>The biggest draw for <strong style="color:blue;">TechFinders</strong> is your customer service. People are coming here for unbaised information about where to buy computers in their price range. It is entirely possible that our customers are woefully uninformed about how computers work. Please ensure you take your time to respond to inquiries respecfully. If at any time you do not wish to proceed with a client, drop the job and it will go back into the job pool for other <strong style="color:blue;">Techfinders</strong>.</p>
                    <h3>Provide A List of the best 3-5 Computers Matching Requirements Inside of Price Range</h3>
                    <p>Sample description: Need a laptop for my child for school. He will use powerpoint, excel, word. He also likes to play video games so minecraft is a nice to have. Price range: $0-$400 USD</p>
                    <ul>
                        <li>Chromebook : $54 USD, is able to handle all schoolwork, does not run minecraft, but does run browser based games. [ Link ]</li>
                        <li>Dell Inspiron : $299, is able to play minecraft and handle all schoolwork. [ Link ]</li>
                        <li>Used HP Intel PC : $127, is able to game and do schoolwork. Cons : not transportable to school. [ Link ]</li>
                    </ul>
                    <h3>If Matching Based On the Description is Impossible, Expand the Scope</h3>
                    <ul>
                        <li>Used EBAY HP Desktop : $250, able to run minecraft at 60 frames. [ Link ] -- Normally we avoid ebay</li>
                        <li>Dell HP Envy : $800, meets all requirements except for price range. -- Normally we try to get in the price range</li>
                    </ul>
                    <h2>Include Important Considerations in the Response</h2>
                    <p>Make sure you include any important information in relation to pros and cons of each of your provided computers. Assume an untechnical customer unless proven otherwise, so please explain things in laymans terms.</p>
                    <h2>Include Any Other Relevant Information also in the Response</h2>
                    <p>Lifestyle and use cases for the computer are important consideratitons for <strong style="color:blue;">TechFinders</strong> to take into account. Does this computer need to be taken to class? Then perhaps a laptop or chromebook is a better fit than a desktop PC. Does your child frequently drop things? Perhaps an iPad with a bullet proof case could be of assistance. Do you need a custom built PC with capadabilities for Intel Processors and the RTX 4080 and are looking for RAM reccomendations? Then consider two 32 sticks from NewEgg that fits that use case.</p>
                    <h3>That's it! You're Ready to Get Finding. Hope You Help People Get What You're Looking For!</h3>
                </div>
                
                @include('templates.footer');
        @else
            <script>window.location = "/";</script>
        @endif
    </div>
</body>
</html>