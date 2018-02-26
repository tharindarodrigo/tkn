<header id="js-header" class="u-header u-header--static">
    <div class="u-header__section u-header__section--light g-bg-white g-transition-0_3 g-py-10">
        <nav class="js-mega-menu navbar navbar-expand-lg hs-menu-initialized hs-menu-horizontal">
            <div class="container">
                {{-- Responsive Toggle Button --}}
                <button class="navbar-toggler navbar-toggler-right btn g-line-height-1 g-brd-none g-pa-0 g-pos-abs g-top-3 g-right-0"
                        type="button" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
                        <span class="hamburger hamburger--slider">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </span>
                </button>
                {{-- End Responsive Toggle Button --}}

                {{-- Logo --}}
                <a href="{!! url('/') !!}" class="navbar-brand">
                    <img src="{!! asset('assets/img/logo/logo-1.png') !!}" alt="Unify Logo">
                </a>
                {{-- End Logo --}}

                {{-- Navigation --}}
                <div class="collapse navbar-collapse align-items-center flex-sm-row g-pt-10 g-pt-5--lg g-mr-40--lg"
                     id="navBar">
                    <ul class="navbar-nav text-uppercase g-pos-rel g-font-weight-600 ml-auto">
                        {{-- Intro --}}
                        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                            <a href="../../index.html" class="nav-link g-py-7 g-px-0">Intro</a>
                        </li>
                        {{-- End Intro --}}


                        {{-- Shortcodes --}}
                        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                            <a href="../../unify-main/shortcodes/index.html" class="nav-link g-py-7 g-px-0">Shortcodes</a>
                        </li>
                        {{-- End Shortcodes --}}

                        {{-- About --}}
                        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                            <a href="{!! url('services') !!}"
                               class="nav-link g-py-7 g-px-0">Services</a>
                        </li>
                        {{-- End About --}}


                        {{-- About --}}
                        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                            <a href="{!! url('about') !!}"
                               class="nav-link g-py-7 g-px-0">About</a>
                        </li>
                        {{-- End About --}}

                        {{-- Contact --}}
                        <li class="nav-item  g-mx-10--lg g-mx-15--xl">
                            <a href="{!! url('contact') !!}"
                               class="nav-link g-py-7 g-px-0">Contact</a>
                        </li>
                        {{-- End Contact --}}


                    </ul>
                </div>
                {{-- End Navigation --}}

                <div class="d-inline-block g-hidden-xs-down g-pos-rel g-valign-middle g-pl-30 g-pl-0--lg">
                    <a class="btn u-btn-outline-primary g-font-size-13 text-uppercase g-py-10 g-px-15"
                       href="https://wrapbootstrap.com/theme/unify-responsive-website-template-WB0412697?ref=htmlstream"
                       target="_blank">Purchase now</a>
                </div>
            </div>
        </nav>
    </div>
</header>