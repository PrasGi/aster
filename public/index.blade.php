<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Aster</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

    <!-- Bootsrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />

    <!-- CSS Style -->
    <link rel="stylesheet" href="style1.css" />
  </head>
  <body id="Home">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-warning navbar-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#Home">Link Grupe TI 21 Semester 4</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            @foreach ($data as $row)
                <li class="nav-item">
                <a class="nav-link" href="#{{ $row[0]['id'] }}">{{ $row[0]['mata_kuliah'] }}</a>
                </li>
            @endforeach
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <!-- Basis Data -->
      @foreach ($data as $values)
      <div id="{{ $values[0]['id'] }}" class="mb-5"></div>
        <section class="basisData pt-5">
          <div id="TitleBasisData" class="dream mt-5">
            <h2><i class="bi bi-activity"></i> {{ $values[0]['mata_kuliah'] }}</h2>
          </div>
          <div class="row">
              @foreach ($values as $value)
              <div class="col-md-3 mb-3">
                  <div class="card bg-warning">
                      <div class="card-body text-center">
                        <h5 class="card-title mb-3">{{ $value['kelas'] }}</h5>
                        <p class="card-text">{{ $value['mata_kuliah'] }}</p>
                        <p>Nama Dosen : {{ $value['dosen'] }}</p>
                        <a href="{{ $value['link_grupe'] }}" class="btn btn-dark">Join Class</a>
                        <a href="" class="btn btn-dark">Contact PJ</a>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
        </section>

      @endforeach
      <!-- end Basis Data -->
    </div>

    <!-- Futter -->

    <footer class="text-white text-center pb-3 bg-warning">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="rgb(247, 250, 166)"
          fill-opacity="1"
          d="M0,192L48,181.3C96,171,192,149,288,138.7C384,128,480,128,576,160C672,192,768,256,864,272C960,288,1056,256,1152,224C1248,192,1344,160,1392,144L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
        ></path>
      </svg>
      <p id="pras" class="fw-bold pt-3">Create with <i class="bi bi-activity"></i> by <a class="text-white" href="https://github.com/PrasGi">Aster</a></p>
    </footer>

    <!-- end Futter -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>
