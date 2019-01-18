<div class="site-wrap">


    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="index.html">Cross<strong>fits</strong></a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="has-children">
                        <a href={{route("program")}}>Program</a>
                        <ul class="dropdown arrow-top">
                          <li><a href={{route("program")}}>Body Building</a></li>
                          <li><a href={{route("program")}}>Morning Energy</a></li>
                          <li><a href={{route("program")}}>Stretching</a></li>
                          <li class="has-children">
                            <a href={{route("program")}}>Sub Menus</a>
                            <ul class="dropdown">
                              <li><a href={{route("program")}}>Swimming</a></li>
                              <li><a href={{route("program")}}>Boxing</a></li>
                              <li><a href={{route("program")}}>Running</a></li>
                              <li><a href={{route("program")}}>Jogging</a></li>
                              
                            </ul>
                          </li>

                        </ul>
                      </li>
                      <li><a href={{route("trainers")}}>Our Trainers</a></li>
                      <li><a href={{route("events")}}>News</a></li>
                      <li><a href={{route("about")}}>About</a></li>
                      <li><a href={{route("contact")}}>Contact</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>