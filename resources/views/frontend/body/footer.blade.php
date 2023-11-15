@php 
    $footers = App\Models\Footer::first();
    $SiteIdentity = App\Models\SiteIdentity::first();
    
@endphp
    <footer>
        <div class="topFooter">
            <div class="topFooterBg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="footerWidgets">
                                <div class="footerLogo">
                                    <h2 class="footerTitle">{{$footers->footer_widget_one_title}}</h2>
                                    <span class="footerTitleBorder"></span>
                                    <a href="{{url('/')}}">
                                        <img class="img-fluid" src="{{asset($footers->footer_logo)}}" alt="logo">
                                    </a>
                                    <p class="footerAbout">
                                        {{$footers->footer_about_desc}}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footerWidgets">
                                <div class="footerLinks">
                                    <h2 class="footerTitle">{{$footers->footer_widget_two_title}}</h2>
                                    <span class="footerTitleBorder"></span>
                                    <ul>
                                        <li><a href="{{$footers->footer_important_link1}}"><span><i class="fa-solid fa-circle-right"></i></span>{{$footers->footer_important_link1_text}}</a></li>
                                        <li><a href="{{$footers->footer_important_link2}}"><span><i class="fa-solid fa-circle-right"></i></span>{{$footers->footer_important_link2_text}}</a></li>
                                        <li><a href="{{$footers->footer_important_link3}}"><span><i class="fa-solid fa-circle-right"></i></span>{{$footers->footer_important_link3_text}}</a></li>
                                        <li><a href="{{$footers->footer_important_link4}}"><span><i class="fa-solid fa-circle-right"></i></span>{{$footers->footer_important_link4_text}}</a></li>
                                        <li><a href="{{$footers->footer_important_link5}}"><span><i class="fa-solid fa-circle-right"></i></span>{{$footers->footer_important_link5_text}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="footerWidgets">
                                <div class="footerAddressText">
                                    <h2 class="footerTitle">{{$footers->footer_widget_three_title}}</h2>
                                    <span class="footerTitleBorder"></span>
                                    <p class="footer_address mb-2"><span><i class="fa-solid fa-location-dot"></i></span>{{$footers->footer_address}}</p>
                                    <p class="footer_phone mb-2"><span><i class="fa-solid fa-phone-volume"></i></span>{{$footers->footer_phone}}</p>
                                    <p class="footer_email"><span><i class="fa-solid fa-envelope"></i></span>{{$footers->footer_email}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomFooter">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="siteWoner">
                            <p>{{__('Copyright ©')}} @php echo date("Y,"); @endphp {{$SiteIdentity->site_name}} {{__('All Rights Reserved')}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="developerCredit">
                            <p>{{__('Website Developed by')}} <a href="#">{{__('MicrWeb Technology')}}</a> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
