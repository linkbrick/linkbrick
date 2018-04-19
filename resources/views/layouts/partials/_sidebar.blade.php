<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{ asset('images/material/sidebar-1.jpg') }}">
    <!--
Tip 1: You can change the color of active element of the sidebar using: data-active-color="purple | blue | green | orange | red | rose"
Tip 2: you can also add an image using data-image tag
Tip 3: you can change the color of the sidebar with data-background-color="white | black"
-->
    <div class="logo text-center">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            <img class="image" src="{{ asset('images/logo.png') }}" />
        </a>

    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset('images/faces/avatar.jpg') }}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <span>
                                {{ auth()->user()->name }}
                                <b class="caret"></b>
                            </span>
                </a>
                <div class="clearfix"></div>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li>
                <a href="{{ route('home') }}">
                    <i class="material-icons">pie_chart</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li>
                <a href="{{ route('customers.index') }}">
                    <i class="material-icons">people</i>
                    <p> Customers </p>
                </a>
            </li>
            <li >
                <a data-toggle="collapse" href="#pagesExamples" aria-expanded="true">
                    <i class="material-icons">image</i>
                    <p> Maintenance
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse in" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="{{ route('projects.index') }}">
                                <span class="sidebar-mini"> P </span>
                                <span class="sidebar-normal"> Projects </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('agents.index') }}">
                                <span class="sidebar-mini"> A </span>
                                <span class="sidebar-normal"> Agents </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="sidebar-mini"> U </span>
                                <span class="sidebar-normal"> Users </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>