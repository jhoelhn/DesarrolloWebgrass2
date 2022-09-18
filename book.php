<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>book</title>

  <!-- swiper css link  -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- custom css file link  -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="stylecalendario.css">

</head>

<body>
  <section class="header">

    <a href="home.php" class="logo"><img src="images/logoCancha.png" alt="" height="50px" width="50px">El PELOTERO</a>

    <nav class="navbar">
      <a href="home.php">home</a>
      <!-- <a href="about.php">about</a> -->
      <a href="package.php">PLASE</a>
      <a href="book.php">book</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

  </section>
  <div class="heading" style="background:url(images/CANCHA_GRANDE.jpg) no-repeat">
    <h1>suscrivete ahora</h1>
  </div>

  <!-- booking section starts  -->

  <section class="booking">

    <h1 class="heading-title">book your trip!</h1>

    <form method="post" class="book-form">

      <div class="flex">
        <div class="inputBox">
          <span>name :</span>
          <input type="text" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
          <span>email :</span>
          <input type="email" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
          <span>phone :</span>
          <input type="number" placeholder="enter your number" name="phone">
        </div>
        <div class="inputBox ga">
          <label for="" class="residencia_cliente">donde esta usd
            <span class="obligatorio">*</span>
          </label>
          <br>
          <h3>local :</h3>
          <select name="menu" class="menuPlase" name="address">
            <option value="0" name="address">.....</option>
            <option value="arequipa" name="address">arequipa</option>
            <option value="lima" name="address">lima</option>
            <option value="Abancay" selected name="address">Abancay</option>
          </select>
        </div>
        <div class="inputBox">
          <span>dia :</span>
          <h1>mino :<?php $fcha = date("Y-m-d");
                    echo $fcha . ""; ?></h1>
          <input type="date" name="fecha" max="2023-01-01" min="<?php echo $fcha . ""; ?>" />
        </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">
    </form>
    <form action="">
      <?php
      include('conexion.php');
      $con = conectar();
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $fecha = $_POST['fecha'];
      $sql = "INSERT INTO datos VALUES('$name','$email','$phone','$address','$fecha');";
      $query = mysqli_query($con, $sql);
      if ($query) {
      ?>
        <!-- header("Location:indexcalendario.html"); -->
        <table class="cal">
          <!-- <caption>curso 2018-2019</caption> -->
          <thead>
            <tr>
              <th></th>
              <th>Lun</th>
              <th>Mar</th>
              <th>Mié</th>
              <th>Jue</th>
              <th>Vie</th>

            </tr>

          </thead>

          <tbody>
            <tr>
              <td class="horas">8:30 a 9:25 </td>
              <td class="Lengua"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span> </td>
              <td class="Edfisica">MATR<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Gimnasio</span> </td>
            </tr>

            <tr>
              <td class="horas">9:25 a 10:20 </td>
              <td class="Ingles">Ing<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Musica">Musi<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA musica</span></td>
              <td class="Ingles">Ing<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Lengua">....LIBRE...<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
            </tr>
            <tr>
              <td class="horas">10:20 a 11:10 </td>
              <td class="Lengua"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Lengua"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span>$10 X HORA</span></td>
              <td class="Ingles">Ingl<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>

            </tr>
            <tr>
              <td class="horas">11:10 a 11:35 </td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>

            <tr>
              <td class="horas">11:35 a 12:30 </td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Musica">Músi<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA música</span></td>
              <td class="Lengua">....LIBRE...<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Tecno"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info2</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
            </tr>

            <tr>
              <td class="horas">12:30 a 13:25 </td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Tecno"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info2</span></td>
              <td class="Lengua">....LIBRE...<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Tecno"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info2</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
            </tr>
            <tr>
              <td class="horas">13:25 a 14:15</td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Tecno"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info2</span></td>
              <td class="Lengua">....LIBRE...<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Lengua"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info 2</span></td>

            </tr>

            <tr>
              <td class="horas">14:15 a 15:25 </td>
              <td class="Lengua"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span> </td>
              <td class="Edfisica">MATR<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Gimnasio</span> </td>
            </tr>

            <tr>
              <td class="horas">15:25 a 16:20 </td>
              <td class="Ingles">Ing<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Musica">Musi<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA musica</span></td>
              <td class="Ingles">Ing<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Lengua">....LIBRE...<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
            </tr>
            <tr>
              <td class="horas">16:20 a 17:10 </td>
              <td class="Lengua"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Lengua"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span>$10 X HORA</span></td>
              <td class="Ingles">Ingl<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>

            </tr>
            <tr>
              <td class="horas">17:10 a 18:35 </td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>
              <td class="recreo"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Patio</span></td>

            <tr>
              <td class="horas">18:35 a 19:30 </td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Musica">Músi<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA música</span></td>
              <td class="Lengua">....LIBRE...<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Tecno"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info2</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
            </tr>

            <tr>
              <td class="horas">19:30 a 20:25 </td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Tecno"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info2</span></td>
              <td class="Lengua">....LIBRE...<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Tecno"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info2</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
            </tr>
            <tr>
              <td class="horas">20:25 a 21:15</td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Tecno"> <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info2</span></td>
              <td class="Lengua">....LIBRE...<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA</span></td>
              <td class="Mates"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> $10 X HORA </span></td>
              <td class="Lengua"><input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><span> Info 2</span></td>

            </tr>
          </tbody>
        </table>

      <?php
      } else {
        echo "no se pudo conectar";
      }
      ?>

      <!-- <input type="submit" value="submit" class="btn" name="send" src="image.png"> -->
    </form>
    <a href="htmlPaiment1.html" class="btn">recervar</a>

  </section>

  <!-- booking section ends -->

















  <!-- footer section starts  -->

  <section class="footer">

    <div class="box-container">

      <div class="box">
        <h3>quick links</h3>
        <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
        <!-- <a href="about.php"> <i class="fas fa-angle-right"></i> about</a> -->
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

  </section>

  <!-- footer section ends -->









  <!-- swiper js link  -->
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <!-- custom js file link  -->
  <script src="js/script.js"></script>

</body>

</html>