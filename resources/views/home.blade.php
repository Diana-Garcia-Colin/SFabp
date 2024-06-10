<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sinfonia de Fragancias</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom border-body">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Sinfonia de Fragancias</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Servicios</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="personas">Personas</a></li>
                  <li><a class="dropdown-item" href="productos">Productos</a></li>
                  <li><a class="dropdown-item" href="lotes">Lotes</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
              <a href="{{ route('login') }}" class="btn btn-primary">Register</a>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <section class="carrusel my-5">
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="per1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Encuentra tu esencia perfecta, una fragancia a la vez</h5>
              <p>Sinfonía de Fragancias</p>
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="per12.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Explora el mundo de los perfumes: ¡tu aroma ideal te espera!</h5>
              <p>Sinfonía de Fragancias</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="per11.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Crea memorias inolvidables con cada fragancia que elijas</h5>
              <p>Sinfonía de Fragancias</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section class="nosotros my-5">
      <div class="container">
        <h2 class="text-center my-5">¿Quiénes somos?</h2>
        <div class="row">
          <div class="col-md-6">
            <p>En Sinfonía de Fragancias, creemos que cada aroma cuenta una historia única. Desde nuestro modesto comienzo, nos hemos dedicado a curar una colección excepcional de perfumes que cautivan los sentidos y despiertan emociones.</p>
            <p>Nos enorgullece ofrecer una experiencia de compra incomparable, donde la calidad, la autenticidad y la pasión se fusionan para crear un vínculo duradero entre nuestros clientes y sus fragancias favoritas.</p>
            <p>Nuestro equipo está conformado por amantes apasionados de los perfumes, expertos en la industria y buscadores incansables de las últimas tendencias olfativas. Nos esforzamos por brindar un servicio personalizado, asesoramiento experto y una selección cuidadosamente curada que refleje la diversidad de gustos y estilos de vida de nuestros clientes.</p>
            <p>En Sinfonía de Fragancias, no solo vendemos perfumes; ofrecemos la oportunidad de descubrir nuevos horizontes olfativos, de crear recuerdos perdurables y de expresar la individualidad a través del arte de la perfumería.</p>
            <p>Únete a nosotros en este viaje aromático, donde cada fragancia es una nota en la sinfonía de tu vida.</p>
            <p>¡Bienvenido a Sinfonía de Fragancias!</p>
          </div>
          <div class="col-md-6">
            <img src="per4.jpg" class="img-fluid" alt="Nosotros">
          </div>
        </div>
      </div>
    </section>

    <section class="categorias my-5">
      <div class="container">
        <h2 class="text-center my-5">Nuestras Categorias</h2>
        <div class="row">
          <div class="col-sm-4">
            <div class="card">
              <img src="per8.jpg" class="card-img-top" alt="Damas">
              <div class="card-body text-center">
                <h5 class="card-title">Damas</h5>
                <a href="productos" class="btn btn-primary">Ver</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <img src="per9.jpg" class="card-img-top" alt="Caballeros">
              <div class="card-body text-center">
                <h5 class="card-title">Caballeros</h5>
                <a href="crud_caballeros.html" class="btn btn-primary">Ver</a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="card">
              <img src="per10.jpg" class="card-img-top" alt="Ofertas">
              <div class="card-body text-center">
                <h5 class="card-title">Ofertas</h5>
                <a href="crud_ofertas.html" class="btn btn-primary">Ver</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



    <footer class="bg-dark text-white py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h5>Contacto</h5>
            <p>Teléfono: 123-456-789</p>
            <p>Email: sinfonia_fragancia.com</p>
          </div>
          <div class="col-md-4">
            <h5>Enlaces Útiles</h5>
            <ul class="list-unstyled">
              <li><a href="terminos_condiciones.html" class="text-white">Términos de Servicio</a></li>
              <li><a href="poli_priva.html" class="text-white">Política de Privacidad</a></li>
            </ul>
          </div>
          <div class="col-md-4 text-center">
            <p>2024 Todos los derechos reservados.</p>
          </div>
        </div>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="busqueda.js"></script>
    <script src="main.js"></script>
  </body>
</html>
