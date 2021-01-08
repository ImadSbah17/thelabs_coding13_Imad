<!-- Header section -->
<header class="header-section">
    <div class="logo">
    <img src="{{asset('img/small-'.$banner[0]->src)}}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li><a href="home.html">Home</a></li>
            <li><a href="services.html">Services</a></li>
            <li class="active"><a href="blog.html">Blog</a></li>
        <li><a href="contact.html">{{$datas[0]->liens1}}</a></li>
            <li><a href="elements.html">Elements</a></li>
        </ul>
    </nav>
</header>

<!-- Header section end -->
