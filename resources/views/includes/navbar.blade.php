    <nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="/images/TA-Logo.svg" alt="" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarResponsive"
          aria-controls="navbarResponsive"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ (request()->is('/*')) ? 'active' : '' }} ">
              <a class="nav-link"  href="{{ route('home') }}">Home </a>
            </li>
            <li class="nav-item {{ (request()->is('categories*')) ? 'active' : '' }} ">
              <a class="nav-link" href="{{ route('categories') }}">Kategori</a>
            </li>
            <li class="nav-item {{ (request()->is('book*')) ? 'active' : '' }} ">
              <a class="nav-link" href="{{ route('book') }}">Buku</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="contact-us.html">Contact</a>
            </li> -->
            <li class="nav-item {{ (request()->is('about-us*')) ? 'active' : '' }} ">
              <a class="nav-link" href="{{ route('aboutus') }}">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a
                class="btn btn-primary nav-link px-4 text-white"
                href="{{ route('contactus') }}"
                >Contact</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>