<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://loghi-famosi.com/wp-content/uploads/2020/08/DC-Comics-Logo.png" alt="" width="70" height="40" class="d-inline-block align-text-center">
                DC Comics
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.index') }}">Comics List</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('comics.create') }}">Create</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>