@include('layouts.header')

<div id="wrapper">
    <!-- content-->
    <div class="content">
        <!--  section  -->
        @include('layouts.sub_header')

        <!--  section  end-->
        <!--  section  -->
        <section class="gray-bg main-dashboard-sec" id="sec1">
            <div class="container">
                <!--  dashboard-menu-->
                <div class="col-md-3">
                    <div class="mob-nav-content-btn color2-bg init-dsmen fl-wrap"><i class="fal fa-bars"></i> Dashboard
                        menu
                    </div>
                    <div class="clearfix"></div>
                    <div class="fixed-bar fl-wrap" id="dash_menu">
                        <div class="user-profile-menu-wrap fl-wrap block_box">
                            <!-- user-profile-menu-->
                            <div class="user-profile-menu">
                                <h3>
                                    {{$customer['name']}}
                                </h3>
                                <ul class="no-list-style">
                                    <li><a href="{{route('show.my_logos',$customer['id'])}}"><i class="fal fa-chart-line"></i>Mis Logos</a></li>

                                    <li><a href="{{ route('show.my_planners', $customer['id']) }}"><i
                                                class="fal fa-rss"></i>Mis Planners <span>7</span></a>
                                    </li>
                                </ul>
                            </div>
<a href="{{ route('logout') }}" class="logout_btn color2-bg"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Cerrar sesión
                            </a>                        </div>
                    </div>
                    <a class="back-tofilters color2-bg custom-scroll-link fl-wrap" href="{{route('customers.index')}}">Regresar al menú<i class="fas fa-caret-up"></i></a>

                    <div class="clearfix"></div>
                </div>
                <!-- dashboard-menu  end-->
                <!-- dashboard content-->
                <div class="col-md-9">
                    <div class="dashboard-list-box  fl-wrap">
                        <div class="dashboard-title fl-wrap">
                            <h3>Mis Planners </h3>
                            <input id="id_customer" type="text" value="{{$customer['id']}}" >
                            <div class="log-separator fl-wrap"><span></span></div>

                            <div class="box-widget-item fl-wrap">
                                <div class="banner-wdget fl-wrap">
                                    <div class="overlay"></div>
                                    <div class="banner-wdget-content fl-wrap">
                                        <h4>Still need help in filling out the form  ? Visit our help page. </h4>
                                        <a href="{{ route('show.my.planners.posts', $customer['id']) }}" class="color-bg"> Ver posts</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
    
    
                            @foreach ($planners as $planner)
                            <div class="dashboard-list fl-wrap">
                                <div class="dashboard-message">
                                    <div class="booking-list-contr">
                                        <a href="" class="color-bg tolt aaaa-open-planner" data-microtip-position="left"
                                            data-tooltip="Visualizar" data-tittle="{{$planner['planner_id']}}"><i class="fal fa-expand-arrows-alt"></i></a>
                                        <a href="/download_planners/{{ $planner['path'] }}" class="color-bg tolt"
                                            data-microtip-position="left" data-tooltip="Descargar"><i
                                                class="fal fa-download"></i></a>
                                                <a href="{{ route('edit.planner', $planner['planner_id']) }}" class="color-bg tolt"
                                                data-microtip-position="left" data-tooltip="Editar"><i
                                                    class="fal fa-edit"></i></a>
                                            <a href="{{ route('delete.planner', $planner['planner_id']) }}" class="red-bg tolt" data-microtip-position="left"
                                                data-tooltip="Eliminar"><i class="fal fa-trash"></i></a>
                                    </div>
                                    <div class="dashboard-message-text">
                                        <div class="single-slider fl-wrap">
                                            <div class="swiper-container-horizontal swiper-container-autoheight">
                                                <div class="swiper-wrapper lightgallery">
                                                    <div class="swiper-slide hov_zoom swiper-slide-active"
                                                        data-swiper-slide-index="0">
                                                        <h4><a href="listing-single.html">{{ $planner['name'] }}</a></h4>
                                                        <div class="geodir-category-location clearfix"><a href="#">
                                                                {{ $planner['description'] }}<br>{{ $planner['created_at'] }}</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span class="swiper-notification" aria-live="assertive"
                                                    aria-atomic="true"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="faq-section fl-wrap" id="fq1">
                            <!-- accordion-->
                            <div class="accordion">
                                <a class="toggle act-accordion" href="#">Calendario<span></span></a>
                                <div class="accordion-inner visible" style="display: none;">
                                    <div class="single-slider fl-wrap">

                                    <img  width="100%" height="50px" src="{{ asset('/storage/administrator/uploads/avatars/' . auth()->user()->avatar) }}"
                                    alt="">
                                </div>
                                <span class="section-separator"></span>

                                    <div id="calendar"></div>
                                </div>
                            </div>
                            <!-- accordion end -->                                               
                        </div>
                        


    
                        </div>
                </div>
            </div>
        </section>
    </div>
    <!--content end-->
</div>
<!-- Modals -->
<div class="main-register-wrap modal_view_planner">
    <div class="reg-overlay"></div>
    <div class="main-register-holder tabs-act">
        <div class="main-register2 fl-wrap  modal_view_planner_main">
            <div id="date_event" class="main-register_title">Planner <span><strong></strong></span></div>
            <div class="close-reg"><i class="fal fa-times"></i></div>
            <div class="tabs-container">
                    {{-- <div class="img_logo fl-wrap"><span></span></div> --}}
                    {{-- <div id="calendar"></div> --}}

            </div>
        </div>
    </div>
</div>
<script>



</script>
@include('layouts.footer')
