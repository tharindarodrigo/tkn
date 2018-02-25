@extends('layout.app')

@push('styles')

@endpush

@section('content')
    {{-- Promo Block --}}
    <section class="u-bg-overlay g-bg-size-cover g-bg-pos-center g-bg-black-opacity-0_3--after"
             style="background-image: url(../../assets/img-temp/1920x800/img4.jpg);">

        <div class="container g-color-white text-center g-pos-rel g-z-index-1 g-py-150">
            <h1 class="h2 g-font-weight-300">It is good to meet you</h1>
            <h2 class="display-2 g-font-weight-600 text-uppercase g-letter-spacing-1">Contact us</h2>
        </div>
    </section>
    {{-- End Promo Block --}}

    {{-- Contacts --}}
    <section class="container g-py-100">
        <div class="row no-gutters">
            <div class="col-lg-7">
                {{-- Google Map --}}
                <div id="GMapCustomized-light"
                     class="js-g-map embed-responsive embed-responsive-21by9 h-100 g-min-height-400" data-type="custom"
                     data-lat="40.674" data-lng="-73.946" data-zoom="12" data-title="Agency"
                     data-styles='[["", "", [{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]], ["", "labels", [{"visibility":"on"}]], ["water", "", [{"color":"#bac6cb"}]] ]'
                     data-pin="true" data-pin-icon="{!! asset('assets/img/icons/pin/green.png') !!}">
                </div>
                {{-- End Google Map --}}
            </div>

            <div class="col-lg-5 g-bg-gray-dark-v1">
                <div class="g-pa-50 g-pa-70--md">
                    <h2 class="h2 g-color-white">Our office</h2>

                    {{-- Contact Details --}}
                    <ul class="list-unstyled g-color-white-opacity-0_7 g-font-weight-300 g-font-size-13 g-line-height-1_8 mb-0">
                        <li class="g-my-30">
                            <div class="media">
                                <i class="d-flex g-color-primary g-font-size-20 mt-1 mr-4 icon-hotel-restaurant-235 u-line-icon-pro"></i>
                                <div class="media-body">
                                    New York,
                                    <br>Unit 25 Suite 3, 925 Prospect PI
                                </div>
                            </div>
                        </li>
                        <li class="g-my-30">
                            <div class="media">
                                <i class="d-flex g-color-primary g-font-size-20 mt-1 mr-4 icon-communication-062 u-line-icon-pro"></i>
                                <div class="media-body">
                                    info@gmail.com
                                </div>
                            </div>
                        </li>
                        <li class="g-my-30">
                            <div class="media">
                                <i class="d-flex g-color-primary g-font-size-20 mt-1 mr-4 icon-communication-033 u-line-icon-pro"></i>
                                <div class="media-body">
                                    +32 333 444 555
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="media">
                                <i class="d-flex g-color-primary g-font-size-20 mt-1 mr-4 icon-education-097 u-line-icon-pro"></i>
                                <div class="media-body">
                                    <h2 class="g-color-white-opacity-0_9 g-font-size-default g-font-weight-600 text-uppercase mb-3">
                                        Office hours:</h2>
                                    <div class="mb-3">
                                        <span class="d-block g-color-white">Monday - Firday</span>
                                        09:00 AM - 06:00 PM
                                    </div>
                                    <div class="mb-3">
                                        <span class="d-block g-color-white">Saturday</span>
                                        12:00 AM - 03:00 PM
                                    </div>
                                    <span class="d-block g-color-white">Sunday &amp; Holidays</span>
                                    Closed
                                </div>
                            </div>
                        </li>
                    </ul>
                    {{-- End Contact Details --}}
                </div>
            </div>
        </div>
    </section>
    {{-- End Contacts --}}

    <hr class="g-brd-gray-light-v4 my-0">

    {{-- Clients --}}
    @include('layout.clients')
    {{-- End Clients --}}

@endsection

@push('scripts')
    <script src="{!! asset('assets/js/components/gmap/hs.map.js') !!}"></script>
    <script src="{!! asset('assets/js/components/hs.carousel.js') !!}"></script>
    <script src="{!! asset('assets/js/components/hs.go-to.js') !!}"></script>

    <script>
        // initialization of google map
        function initMap() {
            $.HSCore.components.HSGMap.init('.js-g-map');
        }

        $(document).on('ready', function () {
            // initialization of carousel
            $.HSCore.components.HSCarousel.init('.js-carousel');

            // initialization of tabs
            $.HSCore.components.HSTabs.init('[role="tablist"]');

            // initialization of go to
            $.HSCore.components.HSGoTo.init('.js-go-to');
        });

        $(window).on('load', function () {
            // initialization of header
            $.HSCore.components.HSHeader.init($('#js-header'));
            $.HSCore.helpers.HSHamburgers.init('.hamburger');

            // initialization of HSMegaMenu component
            $('.js-mega-menu').HSMegaMenu({
                event: 'hover',
                pageContainer: $('.container'),
                breakpoint: 991
            });
        });

        $(window).on('resize', function () {
            setTimeout(function () {
                $.HSCore.components.HSTabs.init('[role="tablist"]');
            }, 200);
        });
    </script>

    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyAtt1z99GtrHZt_IcnK-wryNsQ30A112J0&callback=initMap" async
            defer></script>
@endpush