<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Violeta Boutique</title>
  <script src="app.js" defer></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i|McLaren|Syncopate:400,700&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet'
    href='https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css'>
  <link rel="stylesheet" href="css.css" type="text/css" id="css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="topnav">
    <div>
      <i onclick="openNav()" class="fas fa-id-card searchbtn"></i>
      <img class="butterfly" src="img/logoicon.png" alt="Logo">
      <a href="#home">Violeta Boutique</a>
      <i class="fa fa-circle-user navbtn" onclick="document.getElementById('account').style.display='block'"></i>
      <i class="fa fa-shopping-cart navbtn"></i>
      <i onclick="toogle(this),changeMode()" class="fa fa-toggle-off navbtn"></i>
    </div>
  </div>
  <div>
  <div id="carrito" class="modal">
      <div id="front">
        <form class="modal-content animate bg-img" method="post">
          <div class="accountcontainer">
            <h2>Lista de compras</h2>
          </div>
        </form>
      </div>  
  </div>
  <div id="account" class="modal">
    <div id="front">
    <form class="modal-content animate bg-img" method="post">
        <div class="accountcontainer">
          <h2>Crea una cuenta <i class="fas fa-sign-in"></i></h2>
          <label for="email">Correo</label>
            <input class="signin" type="text" placeholder="Enter Email" name="email_registro" required>
          <label for="psw"><b>Contraseña</b></label>
            <input class="signin" type="password" placeholder="Enter Password" name="psw1_registro" required>
          <label for="psw"><b>Validar contraseña</b></label>
            <input class="signin" type="password" placeholder="Enter Password" name="psw2_registro" required>
            <input type="submit" class="btn" name="submit_registro">
          <a class="question" onclick="create()" src="#none">¿Ya tienes cuenta?</a>
          <?php
          include("registro cuentas.php");
          ?>
        </div>
      </form>
    </div>
    <div id="back">
    <form class="modal-content animate bg-img" method="post">
        <div class="accountcontainer">
          <h2>Inicia tu cuenta <i class="fas fa-face-smile-beam"></i></h2>
          <br><br>
          <label for="email"><b>Correo</b></label>
          <input class="signin" name="email_sesion" type="text" placeholder="Enter Email1"  required>
          <br><br>
          <label for="psw"><b>Contraseña</b></label>
          <input class="signin" type="password" placeholder="Enter Password1" name="psw_sesion" required>
          <br><br>
          <input type="submit" class="btn" name="submit_sesion">
          <a class="question" onclick="login()" src="#none">¿Aún no tienes cuenta?</a>
        </div>
        <?php
        include("iniciar cuenta.php");
        ?>
      </form>
    </div>
  </div>
  <div class="sidenav" id="mySidebar">
    <a href="#closeside" class="closebtn" onclick="closeNav()">×</a>
    <div class="buscar">
      <input type="text" class="sideinput" id="mySearch" onkeyup="searching()" placeholder="¿Qué buscas?" name="search">
      <ul id="admin">
        <li><i class="fa fa-plus addbtn add" onclick="document.getElementById('id01').style.display='block'"></i><a href="#" onclick="document.getElementById('id01').style.display='block'">Agregar Moño</a></li>
        <li><i class="fa fa-trash-alt addbtn trash" onclick="deleteShow()"></i><a href="#" onclick="deleteShow()">Eliminar Moño</a></li>
      </ul>
    </div>
    <div id="id01" class="modal">
      <form id="add-bow" class="modal-content animate">
        <div class="add-top">
          <a href="javascript:void(0)" class="close" onclick="closeForm()">×</a>
        </div>
        <form id="contact" class="formadd">
          <div class="addcontainer">
            <h2>Agreagr modelo</h2>
            <hr>
            <label>Nombre:</label>
            <input id="input-nombre" name="Nombre_articulo" class="addinput" placeholder=" Nombre" type="text">
            <label>Precio:</label>
            <input id="input-precio" name="Precio_articulo" class="addinput" placeholder=" Precio" type="text">
            <!-- <label>Unidades disponibles:</label>
            <input class="addinput" placeholder=" Cantidad" type="number" tabindex="3" required> -->
            <label>Fotos:</label>
            <input id="input-img" class="addinput imginput" name="image1" id="image" type="text" placeholder=" Cargar archivos">
            <label>Categoría del artículo:</label>
            <select id="input-categoria" class="addinput" name="select">
              <option value="ninguno">Categoría Principal...</option>
              <option value="Mujer">Mujer</option>
              <option value="Hombre">Hombre</option>
              <option value="Infantiles">Infantiles</option>
              <option value="Eventos">Eventos</option>
              <option value="Vestidos">Vestidos</option>
              <option value="Mascotas">Mascotas</option>
            </select>
            <button type="button" name="submit_registro1" class="btn" id="contact-submit" onclick="closeForm()">Añadir moño</button>
            <?php
            include("accesorios.php");
            ?>
          </div>
        </form>
      </form>
    </div>
    </ul>
  </div>
  </div>
  <div class="main">
    <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="img/slider1.jpg" class="slider_img">
        <div class="slider_text"></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext">2 / 3</div>
        <img src="img/slider2.jpg" class="slider_img">
      </div>

      <div class="mySlides fade">
        <div class="numbertext">3 / 3</div>
        <img src="img/slider3.jpg" class="slider_img">
      </div>

      <a class="prev" onclick="plusSlides(-1)">❮</a>
      <a class="next" onclick="plusSlides(1)">❯</a>

    </div>
    <br>
    <div style="text-align:center">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
  </div>
    <center>ACCESORIOS PARA <span id="filterTag" class="bg-accent">TODOS</span> </center>
    <!--span class="notfound">No se encontraron resultados</span>-->
    <ul class = "myCategoryList">
      <li><a class="btn_ctg" data-filter="" href="#todos">Todos</a></li>
      <!-- <li><a class="btn_ctg" data-filter="" href="#masvendidos">Más vendidos</a></li> -->
      <li><a class="btn_ctg" href="#infantil">Infantiles</a></li>
      <li><a class="btn_ctg" href="#mujer">Mujer</a></li>
      <li><a class="btn_ctg" href="#hombre">Hombre</a></li>
      <li><a class="btn_ctg" href="#eventos">Eventos</a></li>
      <li><a class="btn_ctg" href="#vestidos">Vestidos</a></li>
      <li><a class="btn_ctg" href="#vestidos">Mascotas</a></li>
      <li><i class="fa fa-scissors"></i></li>
    </ul>
    <!-- MOÑOS -->
    <div id="container" class="row">
      
    <!-- Los moños se agregan en la función componentBow() ubicada en el archivo app.js -->
    </div>
    <dialog id="moño" class="modalBow visual animate">
    </dialog>
    <!-- END MAIN -->
  <footer class="footer">
    <h2>By Rocky Barrios, Diego Aguilar, Álvaro Paredes, Jonathan Tejada</h2>
    <br>
    <p class="xd">100% libre de WordPress</p>
  </footer>
</body>
<script>
  function myFavs(x) {
    x.classList.toggle("fa-heart-circle-check");
  }

  function searching() {
    // Declare variables
    var input, filter, ul, li, a, i;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("admin");
    li = ul.getElementsByTagName("li");
    // Loop through all list items, and hide those who don't match the search query
    for (i = 0; i < li.length; i++) {
      a = li[i].getElementsByTagName("a")[0];
      if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
      } else {
        li[i].style.display = "none";
      }
    }
  }

  function create(){
    document.getElementById("front").style.display = "none";
    document.getElementById("back").style.display = "block";
  }
  function login(){
    document.getElementById("back").style.display = "none";
    document.getElementById("front").style.display = "block";
  }

  function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }

  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("searchbtn").style.opacity = "0";
  }

  filterSelection("all")
  function filterSelection(c) {
    var x, i;
    x = document.getElementsByClassName("column");
    if (c == "all") c = "";
    for (i = 0; i < x.length; i++) {
      w3RemoveClass(x[i], "show");
      if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    }
  }


  let slideIndex = 1;
  showSlides(slideIndex);

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function currentSlide(n) {
    showSlides(slideIndex = n);
  }

  function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activedot", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " activedot";
  }
  function w3AddClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      if (arr1.indexOf(arr2[i]) == -1) { element.className += " " + arr2[i]; }
    }
  }

  function w3RemoveClass(element, name) {
    var i, arr1, arr2;
    arr1 = element.className.split(" ");
    arr2 = name.split(" ");
    for (i = 0; i < arr2.length; i++) {
      while (arr1.indexOf(arr2[i]) > -1) {
        arr1.splice(arr1.indexOf(arr2[i]), 1);
      }
    }
    element.className = arr1.join(" ");
  }


  // Add active class to the current button (highlight it)
  var btnContainer = document.getElementById("admin");
  var btns = btnContainer.getElementsByClassName("btn");
  for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function () {
      var current = document.getElementsByClassName("active");
      current[0].className = current[0].className.replace(" active", "");
      this.className += " active";
    });
  }

  var modal = document.getElementById('id01');
  var modal2 = document.getElementById('id02');
  var account = document.getElementById('account');
  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
    if (event.target == modal2) {
      modal2.style.display = "none";
    }
    if (event.target == account) {
      account.style.display = "none";
    }
  }

  function changeMode() {
    document.body.classList.toggle('darkmode');
    menu = document.getElementById("butterfly");
    menu.classList.toggle("night");
  }

  function closeForm() {
    modal.style.display = "none";
  }

  function toogle(x) {
    x.classList.toggle("fa-toggle-on");
  }

  function deleteShow() {
    var show = document.getElementsByClassName('badge');
    for(var i = 0; i< show.length; i++){
      if(show[i].style.display == "block"){
        show[i].style.display = "none";
      }
      else {
        show[i].style.display = "block";
      }
    }
  }


</script>

</html>