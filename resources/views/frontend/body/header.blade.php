@php 
    $SiteIdentity = App\Models\SiteIdentity::first();
    $data = App\Models\HeaderContact::first();
@endphp
<header>
        <div class="topBar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="topLeft">
                            <p class="date">@php echo "Today " . date("M d, Y"); @endphp</p>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="topMiddle">
                            <div class="topMenuBar">
                                <ul class="top_menu">
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="topRight">
                            <div class="topSearch">
                                <form class="example" action="action_page.php">
                                    <input type="text" placeholder="Search.." name="search">
                                    <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                  </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header_logo_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-3">
                        <div class="header_logo">
                            <a href="#">
                                <img src="{{asset($SiteIdentity->site_logo)}}" alt="{{$SiteIdentity->site_name}}">
                            </a>
                        </div>
                    </div>
                    
                    <div class="col-sm-12 col-md-8 offset-md-1">
                        <div class="header_contact">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="icon_box">
                                        <span><i class="fa-solid fa-phone-volume"></i></span>
                                    </div>
                                    <div class="phone">
                                        <p class="p_one">{{$data->top_mobile_text}}</p>
                                        <p class="ptext">{{$data->top_mobile_no}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="icon_box">
                                        <span><i class="fa-regular fa-envelope"></i></span>
                                    </div>
                                    <div class="email">
                                        <p class="p_one">{{$data->top_email_text}}</p>
                                        <p class="ptext">{{$data->top_email}}</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="icon_box">
                                        <span><i class="fa-solid fa-location-dot"></i></span>
                                    </div>
                                    <div class="office_time">
                                        <p class="p_one">{{$data->top_open_text}}</p>
                                        <p class="ptext">{{$data->top_open_time}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--test menu start-->
        <div class="bottom_header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg">
                        <div class="container-fluid">
                            
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <a href="" class="mobile_logo text-white">arab builders</a>
                                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                            <a class="nav-link" aria-current="page" href="{{url('/')}}"><i class="fas fa-home"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/about-us')}}">{{__('About Us')}}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{url('/contact-us')}}">{{__('Contact Us')}}</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="{{url('/services')}}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                               {{__(' Our Services')}}
                                            </a>
                                            <ul class="dropdown-menu">
                                               
                                                <li><a class="dropdown-item" href="{{url('/housing-management')}}">{{__('Housing Management')}}</a></li>
                                                <li><a class="dropdown-item" href="{{url('/construction-planning')}}">{{__('Construction Planning')}}</a></li>
                                                <li><a class="dropdown-item" href="{{url('/architecture-design')}}">{{__('Architecture Design')}}</a></li>
                                                <li><a class="dropdown-item" href="{{url('/interior-planning')}}">{{__('Interior Planning')}}</a></li>
                                            </ul>
                                        </li>
                                    </ul> 
                                      
                                </div>  
                            </div>
                        </nav>
                        
                        
                    </div>
                </div>
            </div>
            
        </div>
        

        <!--mobile menu end-->
    </header>
