
<nav class="navbar navbar-expand-lg fixed-top navbar-{{$navTheme}} nav-down" color-on-scroll="500">
    <div class="container">
        <div class="navbar-translate">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{ url('/') }}">PropTech</a>
            </div>
            <button class="navbar-toggler navbar-burger" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
                <span class="navbar-toggler-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown">Projects</a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                        <a class="dropdown-item" href="{{ url('/project/scarletz') }}"> Scarletz</a>
                        <a class="dropdown-item" href="{{ url('/project/millerz') }}"> Millerz</a>
                        <a class="dropdown-item" href="{{ url('/project/parc-3') }}">Parc 3</a>
                        <a class="dropdown-item" href="{{ url('/project/southlink') }}">Southlink</a>
                        <a class="dropdown-item" href="{{ url('/project/atwater') }}">Atwater</a>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link" href="{{ url('team/all') }}" >A Team</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle"  data-toggle="dropdown" href="javascript:void(0)">More</a>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-danger">
                        <a class="dropdown-item" href="about-us.html"><i class="nc-icon nc-bank"></i>&nbsp; About Us</a>
                        <a class="dropdown-item" href="add-product.html"><i class="nc-icon nc-basket"></i>&nbsp; Add Product</a>
                        <a class="dropdown-item" href="blog-post.html"><i class="nc-icon nc-badge"></i>&nbsp; Blog Post</a>
                        <a class="dropdown-item" href="blog-posts.html"><i class="nc-icon nc-bullet-list-67"></i>&nbsp; Blog Posts</a>
                        <a class="dropdown-item" href="contact-us.html"><i class="nc-icon nc-mobile"></i>&nbsp; Contact Us</a>
                        <a class="dropdown-item" href="discover.html"><i class="nc-icon nc-world-2"></i>&nbsp; Discover</a>
                        <a class="dropdown-item" href="ecommerce.html"><i class="nc-icon nc-send"></i>&nbsp; Ecommerce</a>
                        <a class="dropdown-item" href="landing.html"><i class="nc-icon nc-spaceship"></i>&nbsp; Landing</a>
                        <a class="dropdown-item" href="login.html"><i class="nc-icon nc-lock-circle-open"></i>&nbsp; Login</a>
                        <a class="dropdown-item" href="product-page.html"><i class="nc-icon nc-album-2"></i>&nbsp; Product Page</a>
                        <a class="dropdown-item" href="profile.html"><i class="nc-icon nc-single-02"></i>&nbsp; Profile</a>
                        <a class="dropdown-item" href="register.html"><i class="nc-icon nc-bookmark-2"></i>&nbsp; Register</a>
                        <a class="dropdown-item" href="search-with-sidebar.html"><i class="nc-icon nc-zoom-split"></i>&nbsp; Search</a>
                        <a class="dropdown-item" href="settings.html"><i class="nc-icon nc-settings-gear-65"></i>&nbsp; Settings</a>
                        <a class="dropdown-item" href="twitter-redesign.html"><i class="nc-icon nc-tie-bow"></i>&nbsp; Twitter</a>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="btn btn-round btn-danger" href="{{ route('login') }}">
                        <i class="fa fa-user-plus"></i> Admin Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>