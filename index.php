<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="stylees.css">

  <script defer src="script.js"></script>

  <title>Colegio Mayor San Bartolomé</title>
</head>

<body>

    <header class="header">
        <div class="top-bar">
        <div class="top-bar__content">
            <section class="phone">
            <i class="fa-solid fa-phone icon"></i>
            <span>1-234-567-891</span>
            </section>
            <section class="email">
            <i class="fa-solid fa-envelope icon"></i>
            <span>coorsistemas@sanbartolome.com</span>
            </section>
        </div>
        </div>

        <div class="bottom-bar">
        <div class="bottom-bar__content">
            <a href="#" class="logo">
            <img class="logo__img" src="img/logo.png" alt="logo">
            <span class="logo__text">Colegio Mayor San Bartolomé</span>
            </a>
        
            <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item">
                <a class="nav__link" href="#">Admisiones</a>
                </li>
                <li class="nav__item">
                <a class="nav__link" href="#">Pastoral</a>
                </li>
                <li class="nav__link"><a class="" href="#">Estudiantes</a></li>
                <li class="nav__link"><a class="" href="#">Padres de familia</a></li>
                <li class="nav__link"><a class="" href="#">Profesores y administradores</a></li>
            </ul>
            </nav>
    
            <div class="hamburger">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
            </div>
        </div>
        </div>
    </header>

    <section>
        <div class="slider">
            <div class="load"></div>
        </div>
        <div class="content">
            <div class="principal">
                <h1>WEBSITE</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda dignissimos labore ducimus alias cumque ut harum vero dicta optio, </p>
            </div>
        </div>
    </section>













    <script>
        const navEl = document.querySelector('.nav');
        const hamburgerEl = document.querySelector('.hamburger');
        const navItemEls = document.querySelectorAll('.nav__item');

        hamburgerEl.addEventListener('click', () => {
        navEl.classList.toggle('nav--open');
        hamburgerEl.classList.toggle('hamburger--open');
        });

        navItemEls.forEach(navItemEl => {
        navItemEl.addEventListener('click', () => {
            navEl.classList.remove('nav--open');
            hamburgerEl.classList.remove('hamburger--open');
        });
        });
    </script>
</body>

</html>