<div class='site-mobile-menu site-navbar-target'>
  <div class='site-mobile-menu-header'>
    <div class='site-mobile-menu-close'>
      <span class='icofont-close js-menu-toggle'></span>
    </div>
  </div>
  <div class='site-mobile-menu-body'></div>
</div>
<nav class='site-nav'>
  <div class='container-fluid m-0 p-0'>
    <div class='menu-bg-wrap'>
      <div class='site-navigation'>
        <a href="{{ url('/') }}" class='logo m-0 float-start'><img src="{{ asset('scss/images/logo.png') }}" alt='Ekansh Realty' class='img-fluid' /></a>
        <ul class='js-clone-nav d-none d-lg-inline-block text-start site-menu float-end'>
          <li class='active'><a href="{{ url('/')}}">Home</a></li>
          <li class='has-children'>
            <a href="{{ url('/about')}}">About</a>
            <ul class='dropdown'>
              <li><a href="{{ url('/about')}}">About</a></li>
              <li><a href="{{ url('/about/company-director')}}">Company Director</a></li>
             <li><a href="{{ url('/about/our-team')}}">Our team</a></li>
            </ul>
          </li>
          <li class='has-children'>
            <a href="{{ url('/properties/residential-property') }}">Properties</a>
            <ul class='dropdown'>
              <li><a href="{{ url('/properties/residential-property') }}">Residential Property</a></li>
              <li><a href="{{ url('/properties/commercial') }}">Commercial</a></li>
              <li><a href="{{ url('/properties/plots-villa') }}">Plots & Villa</a></li>
            </ul>
          </li>
          <li class='has-children'>
            <a>Services</a>
            <ul class='dropdown'>
              <li><a href="{{ url('/services/advisory-investment') }}">Advisory Investment</a></li>
              <li><a href="{{ url('/services/leasing-corporate') }}">Leasing Corporate</a></li>
              <li><a href="{{ url('/services/acquisition-land') }}">Acquisition Land</a></li>
              <li><a href="{{ url('/services/valuation-research') }}">Valuation And Research</a></li>
              <li><a href="{{ url('/services/leasing-retail') }}">Leasing Retail</a></li>
              <li><a href="{{ url('/services/assistance-loan') }}">Assistance Loan</a></li>
            </ul>
          </li>
          <li class='has-children'>
            <a>Recent Property</a>
            <ul class='dropdown'>
              <li><a href="{{ url('/properties/residential-property')}}">Residetial</a></li>
              <li><a href="{{ url('/properties/commercial')}}">Commercial</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/blog')}}">Blog</a></li>
          <li><a href="{{ url('/contact')}}">Contact Us</a></li>
        </ul>
        <a href='#' class='burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none' data-toggle='collapse' data-target='#main-navbar'>
          <span></span>
        </a>
      </div>
    </div>
  </div>
</nav>