<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylesheet7.css" />
    <!-- Font Familly -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap"
      rel="stylesheet"
    />
    <title>Login</title>
  </head>
  <body>
    <section class="login d-flex">
      <div class="login-right w-50 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-6">
            <div class="header">
              <h1>Selamat Datang</h1>
              <p>Masukan Username & dan password anda.</p>
              <form method="post" action="login.php">
                <div class="login-form">
                  <label for="nama">Username</label>
                  <input
                    type="nama"
                    class="form-control"
                    id="#"
                    name="username"
                    placeholder="Enter your Username"
                  />
                  <label for="password">Pasword</label>
                  <input
                    type="password"
                    class="form-control"
                    name="password"
                    id="pasword"
                    placeholder="Pasword"
                  />
                  <br />
                  <button class="signin" type="submit">Sign in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="login-left w-50 h-100">
        <div
          id="carouselExampleControls"
          class="carousel slide"
          data-ride="carousel"
        >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="img-fluid" src="akui.png" alt="First slide" />
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="akui1.jpg" alt="Second slide" />
            </div>
            <div class="carousel-item">
              <img class="img-fluid" src="akui2.jpg" alt="Third slide" />
            </div>
          </div>
          <a
            class="carousel-control-prev"
            href="#carouselExampleControls"
            role="button"
            data-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a
            class="carousel-control-next"
            href="#carouselExampleControls"
            role="button"
            data-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/8ced2dd8fd.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
