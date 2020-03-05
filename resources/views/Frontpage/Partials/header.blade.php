<div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar pt-3" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">

          <div class="col-6 col-xl-6 logo">
            <h1 class="mb-0"><a href="index.html" class="text-black h2 mb-0">Hikers</a></h1>
          </div>
          
          <div class="col-6 mr-auto py-3 text-right" style="position: relative; top: 3px;">
            <div class="social-icons d-inline">
              <a href="#"><span class="icon-facebook"></span></a>
              <a href="#"><span class="icon-twitter"></span></a>
              <a href="#"><span class="icon-instagram"></span></a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-xl-none"><span class="icon-menu h3"></span></a></div>
          </div>
          
          <div class="col-12 d-none d-xl-block border-top">
            <nav class="si  te-navigation text-center " role="navigation">

              <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block mb-0">
                <li class="active"><a href="index.html">Homepage</a></li>
                {{-- <li><a href="category.html">Lifestyle</a></li> --}}
                <li class="has-children">
                  <a href="category.html">Catégories</a>
                  <ul class="dropdown">
                    @foreach($categorie as $categories)
                      
                  <li><a href="category.html">{{$categories->name}}</a></li>
                    @endforeach
                    
                  </ul>
                </li>
                <li><a href="category.html">Contacter</a></li>
                
              </ul>
            </nav>
          </div>
        </div>

      </div>
    </header>