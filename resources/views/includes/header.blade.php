<header>
<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top navbar-with-border">
    <div class="container-fluid">
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUsuario" aria-controls="navbarNavDropdown" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand mx-auto" href="/">
            <img src="images/logo.png" width="120" alt="{{config('app.name')}}">
        </a>


    <div class="collapse navbar-collapse mx-5 text-dark" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item me-3">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="#">Produtos</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="#">Clientes</a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Acessórios
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Outros</a></li>
                  <li><a class="dropdown-item" href="#">Outros</a></li>
                  <li><a class="dropdown-item" href="#">Outros</a></li>
                </ul>
              </li>  
        </ul>
        
    </div>

    <div class="d-flex">
      <span class="me-3"><i id="openSearch" class="bi bi-2x bi-search navbar-custom-icon cursor-pointer" data-bs-toggle="collapse" data-bs-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch"></i></span>
      <span class="me-3"><i class="bi bi-person navbar-custom-icon cursor-pointer" data-bs-toggle="offcanvas" data-bs-target="#offcanvasUsuario" aria-controls="offcanvas"></i></span>
      
  </div>
    </div>
</nav>
</header>

<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/banner/1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/banner/2.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>