<!-- Header section -->
<header class="header-section">
    <div class="logo">
    <img src="{{asset('img/small-'.$banner[0]->src)}}" alt=""><!-- Logo -->
    </div>
    <!-- Navigation -->
    <div class="responsive"><i class="fa fa-bars"></i></div>
    <nav>
        <ul class="menu-list">
            <li><a href="/service">{{$datas[0]->liens1}}</a></li>

            <li><a href="/blog">{{$datas[0]->liens2}}</a></li>

            <li class="active"><a href="/contact">{{$datas[0]->liens3}}</a></li>
            
            <li><a href="/elements">{{$datas[0]->liens4}}</a></li>

        </ul>
    </nav>
</header>

<!-- Header section end -->
