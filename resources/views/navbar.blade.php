<nav class="navbar navbar-expand-lg py-3">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="{{ asset('assets/image/logo.png') }}" height="55" width="55" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/profil">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('guru.publicIndex') }}">Guru</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/kurikulum">Kurikulum</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/ekstrakulikuler">Ekstra</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('fasilitas.publicIndex') }}">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{ route('mading.publicIndex') }}">Mading</a>
        </li>
        @auth
          @if (auth()->user()->role == 'admin')
            <li class="nav-item">
              <a class="nav-link active" href="/aduan">Aduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{ route('daftar.publicIndex') }}">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/dashboard_admin">Dashboard</a>
            </li>
          @elseif (auth()->user()->role == 'user')
            <li class="nav-item">
              <a class="nav-link active" href="/aduan">Aduan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/daftar">Daftar</a>
            </li>
          @endif
        @endauth
      </ul>
      <div class="d-flex">
        @auth
          <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-dark">Log out</button>
          </form>
        @else
          <a class="btn btn-success" href="/login">Login</a>
        @endauth
      </div>
    </div>
  </div>
</nav>
