<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>casa</title>
  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <!-- font awesome cdn link  -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylePregunta.css">
</head>

<body>
  <section class="header">
    <a href="home.php" class="logo"><img src="images/logoCancha.png" alt="" height="50px" width="50px">El PELOTERO</a>

    <nav class="navbar">
      <a href="home.php">casa</a>
      <a href="package.php">PLASE</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars">
    </div>
  </section>
  <section class="home">

    <div class="swiper home-slider">

      <div class="swiper-wrapper">

        <div class="swiper-slide slide" style="background:url(images/cancahEstadio.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>canchas luminosas y grandes</h3>
            <a href="book.php" class="btn">comezar ahora</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/canchaPolicias.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>mejores arvitros para tus partidos</h3>
            <a href="book.php" class="btn">comezar ahora</a>
          </div>
        </div>

        <div class="swiper-slide slide" style="background:url(images/canchasCrud.jpg) no-repeat">
          <div class="content">
            <span>explore, discover, travel</span>
            <h3>modernos y anplios cervicios</h3>
            <a href="book.php" class="btn">comezar ahora</a>
          </div>
        </div>

      </div>


      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

  </section>
  <section class="services">
    <h1 class="heading-title"> our services </h1>
    <div class="box-container">
      <div class="box">
        <img src="images/futbolIcono.png" alt="">
        <h3>cancha</h3>
        <h3>futbool</h3>
      </div>
      <div class="box">
        <img src="images/futsalICono.png" alt="">
        <h3>cancha</h3>
        <h3>futsala</h3>
      </div>

      <div class="box">
        <img src="images/voleyIcono.png" alt="">
        <h3>cancha</h3>
        <h3>voley</h3>
      </div>
      <div class="box">
        <img src="images/tenisIcono.png" alt="">
        <h3>cancha</h3>
        <h3>tenis</h3>
      </div>
      <div class="box">
        <img src="images/canchaAmerican.jpg" alt="">
        <h3>cancha</h3>
        <h3>American</h3>
      </div>
      <div class="box">
        <img src="images/golfIcono.png" alt="">
        <h3>cancha</h3>
        <h3>golf</h3>
      </div>
    </div>

  </section>
  <section class="home-packages">
    <h1 class="heading-title"> locales
    </h1>
    <div class="box-container">
      <div class="box">
        <div class="image">
          <img src="images/abancay_cancha.jpg" alt="">
        </div>
        <div class="content">
          <h3>Abancay</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
          <a href="package.php" class="btn">recervar</a>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img src="images/arequipa_cancha.jpg" alt="">
        </div>
        <div class="content">
          <h3>Arequipa</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
          <a href="packageArequipa.php" class="btn">recervar</a>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img src="images/lima_cancha.jpg" alt="">
        </div>
        <div class="content">
          <h3>Lima</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
          <a href="packageLima.php" class="btn">recervar</a>
        </div>
      </div>

    </div>

    <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
  </section>
  <div class="wrapper box-container">
    <div class="dropdown">
      <input type="checkbox" id="question-1">
      <label for="question-1">¿Qué datos necesito para registrarme?</label>
      <div class="text">
        <p>Para registrarte en AlquiláTuCancha, deberás iniciar sesión con una red social (Facebook o Google) o podrás
          ingresar con
          tu número de teléfono. Esto nos servirá para poder dejar los datos de la reserva al club.</p>
      </div>
    </div>
    <div class="dropdown">
      <input type="checkbox" id="question-2">
      <label for="question-2">¿Cómo reservar un turno para jugar?</label>
      <div class="text">
        <p>Para reservar una cancha, es tan sencillo como ingresar zona, deporte y fecha y así podrás ver la
          disponibilidad. Luego,
          dependiendo del club, deberás o no dejar una tarjeta como un deposito de seguridad. No se te cobrará nada a
          menos que no
          cumplas con las polticas de cancelación. Podrás encontrar canchas de fútbol, padel, tenis y todos los deportes
          que estén
          disponibles en la plataforma.</p>
      </div>
    </div>
    <div class="dropdown">
      <input type="checkbox" id="question-3">
      <label for="question-3">¿La reserva es instantánea o necesito una confirmación del club?</label>
      <div class="text">
        <p>Ni bien ingreses tu tarjeta como deposito en garantía, la reserva está confirmada. Los clubes utilizan
          nuestro software
          de gestión profesional para clubes en donde vuelcan su disponibilidad en tiempo real. De esta manera le
          garantizamos al
          usuario el 100% de efectividad en las reservas.</p>
      </div>
    </div>
    <div class="dropdown">
      <input type="checkbox" id="question-4">
      <label for="question-4">¿Cuánto tiempo tengo para cancelar una reserva ya confirmada?</label>
      <div class="text">
        <p>La cancelación siempre dependerá de las políticas del club. De todas maneras siempre las sabrás antes de
          reservar, ya
          que nosotros te las informaremos antes de procesar el pago. En caso de lluvia, podrás contactarte directamente
          con el
          club y así el mismo club gestionará la devolución de la seña en caso de que corresponda.</p>
      </div>
    </div>

    <div class="dropdown">
      <input type="checkbox" id="question-4">
      <label for="question-4">¿Qué pasa si no voy a jugar?</label>
      <div class="text">
        <p>En caso de que no te presentes, se debitará el monto de la seña de tu tarjeta ingresada. Es importante que
          canceles lo
          antes posible para poder permitirle a otros usuarios que practiquen deporte. </p>
      </div>
    </div>

    <div class="dropdown">
      <input type="checkbox" id="question-4">
      <label for="question-4">Quiero cancelar una reserva.</label>
      <div class="text">
        <p>A continuación te compartimos un vídeo instructivo de como cancelar una reserva:
          Cancelación de reservas - AlquiláTuCancha</p>
      </div>
    </div>

    <div class="dropdown">
      <input type="checkbox" id="question-4">
      <label for="question-4">Quiero festejar un cumpleaños en una cancha.</label>
      <div class="text">
        <p>Para obtener información sobre alquileres por cumpleaños te invitamos a comunicarte directamente con el
          complejo en
          donde quieres hacer la reserva. Nosotros no podemos ofrecerte una respuesta sobre el tema.</p>
      </div>
    </div>

  </div>
  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
        <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
        <h3>extra links</h3>
        <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
        <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
        <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
        <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
        <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
        <a href="#"> <i class="fas fa-envelope"></i> shaikhanas@gmail.com </a>
        <a href="#"> <i class="fas fa-map"></i> mumbai, india - 400104 </a>
      </div>

      <div class="box">
        <h3>follow us</h3>
        <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
        <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
        <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

    </div>

    <div class="credit"> created by <span>mr. web designer</span> | all rights reserved! </div>

  </section>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="js/script.js"></script>
  <script src="js/scriptPreguntas.js"></script>
</body>

</html>