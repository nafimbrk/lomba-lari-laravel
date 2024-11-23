<style>
    .navbar-nav .nav-item {
      margin-right: 15px;
    }
    .navbar-brand, .nav-link {
      padding-left: 15px; 
      padding-right: 15px;
    }
    .text-white {
      margin-left: 15px;
    }
  </style>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <span class="text-white">Lomba Lari</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ url('peserta') }}">Peserta</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ url('jarak') }}">Jarak</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="{{ url('pendaftaran') }}">Pendaftaran</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>


