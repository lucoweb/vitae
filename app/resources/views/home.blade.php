<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
  <!-- Open Grapht Meta Tags -->
  <meta property="og:locale" content="en_US">
  <meta property="og:url" content="http://reesilva.com">
  <meta property="og:title" content="ReeSilva - Developer.">
  <meta property="og:site_name" content="ReeSilva">
  <meta property="og:description" content="Meet the work of the developer that can make the software you need.">
  <meta property="og:image" content="reesilva.com/img/share-photo.jpg">
  <meta property="og:image:type" content="image/jpeg">
  <meta property="og:image:width" content="336">
  <meta property="og:image:height" content="336">

  <title>ReeSilva - Developer</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <div class="navbar-fixed">
    <nav class="white" role="navigation">
      <div class="nav-wrapper container">
        <a id="logo-container" href="#" class="brand-logo">RSLV</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="#profile-container">ReeSilva</a></li>
          <li><a href="#professional-experience">Professional Experience</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="http://techdev.reesilva.com" target="_blank">Blog (TechDev)</a></li>
          <!-- <li><a href="#">Formação</a></li> -->
          <!-- <li><a href="#">Trabalhos Desenvolvidos</a></li> -->
          <!-- <li><a href="#">Projetos Pessoais</a></li> -->
        </ul>

        <ul id="nav-mobile" class="side-nav">
          <li><a href="#profile-container">ReeSilva</a></li>
          <li><a href="#professional-experience">Professional Experience</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="http://techdev.reesilva.com" target="_blank">Blog (TechDev)</a></li>
          <!-- <li><a href="#">Formação</a></li> -->
          <!-- <li><a href="#">Trabalhos Desenvolvidos</a></li> -->
          <!-- <li><a href="#">Projetos Pessoais</a></li> -->
        </ul>
        <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
      </div>
    </nav>
  </div>

  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container title-container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Renato Silva</h1>
        <div class="row center">
          <h5 class="header col s12 light">A backend developer that works with whatever language you need.</h5>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="img/cover.jpg" alt="Profile Picture"></div>
  </div>


  <div id="profile-container" class="container scrollspy">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">I can develop your entire app...</h5>

            <p class="light">Be from scratch, middle or just maintenance, I sure can make your app awesome, or even more amazing than it already is.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">star</i></h2>
            <h5 class="center">...with quality...</h5>

            <p class="light">Using tools like unit test, behavior test, continuous integration and always make every new functionality acessible for you, I can ensure that I will deliver the best app, with minimum amount of bugs and the most legible code as possible.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">cloud_upload</i></h2>
            <h5 class="center">...and I can also deploy it for u!</h5>

            <p class="light">Yeah, you did not misread it. After starting and developing the most awesome app you've ever had, I can deploy it for you and also create a system to automatize your deploys, making every change instantaneously online.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container title-container">
        <h1 class="header center teal-text text-lighten-2">Professional Experience</h1>
        <div class="row center">
          <h5 class="header col s12 light">What did I already learn?</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/cover-professional.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div id="professional-experience" class="container scrollspy">
    <div class="section">

      <div class="row">

        <div class="col s12 m4">
          <div class="icon-block">
            <a class="logo just-logo" href="http://www.justdigital.com.br" title="Just Digital"></a>

            <p class="light">At the beginning working with PHP and Drupal, I helped in the development of the site of the <a href="http://www4.tce.sp.gov.br">"Tribunal de Contas do Estado de São Paulo"</a>. After that, I became DevOps. Working on Infrastructure of company with Linux, I'm also responsible for some automations like provisioning with Ansible and Puppet, Continuous Integration with Jenkins and develop environments using Docker or Vagrant.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <a class="logo pleimo-logo" href="http://www.pleimo.com" title="Pleimo"></a>

            <p class="light">I worked with PHP, using the CodeIgniter framework, to develop an streaming single-page application. When I got a part of the app was already developed, but I was part of some important stuffs like register, fav artist discount, favorite rhythms and etc. With Python I developed an application to make backup of some files to Amazon Glacier. Also, I helped on the management of AWS servers and the internal FTP server.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <a class="logo betalabs-logo" href="http://www.betalabs.com.br" title="Betalabs"></a>

            <p class="light">I was part of the "GestãoJá" ERP team, developed on PHP with own framework. Using Smarty to manage the templates and Doctrine as ORM, the GestãoJá ERP was elected one of the best online ERP, and I was responsible for some features of it like financial reporting and corrections in customer product listing.</p>
          </div>
        </div>

      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container title-container">
        <div class="row center">
          <h5 class="header col s12 light">Contact me. Surely I can transform your needs in the most amazing software you could want.</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="img/contact-us.jpg" alt="Unsplashed background img 3"></div>
  </div>

  <footer class="page-footer teal">
    <div id="contact" class="container scrollspy">
      <div class="row">
        <div class="col l5 s12">
          <h5 class="white-text">Bio</h5>
          <p class="grey-text text-lighten-4">I develop for love and this is something that helps a lot to ensure the quality of my work. This philosophy helps me to work with every project and language that u need. There is nothing I can't do, except for those things I don't know how to do yet! Imma quick learner, btw.</p>


        </div>
        <div class="col l4 s12">
          <h5 class="white-text"><i class="material-icons white-text">contacts</i>Contact</h5>
          <ul>
            <li class="white-text"><i class="material-icons white-text">call</i>+5511985627011</li>
            <li class="white-text"><i class="material-icons white-text">call</i>+551143285921</li>
            <li><a class="white-text" href="mailto:me@reesilva.com"><i class="material-icons white-text">email</i>me@reesilva.com</a></li>
            <li><a class="white-text" href="mailto:renato.biancalana.silva@gmail.com"><i class="material-icons white-text">email</i>renato.biancalana.silva@gmail.com</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text"><i class="material-icons white-text">people</i>Social</h5>
          <ul>
            <li><a class="white-text" href="https://br.linkedin.com/in/reesilva">LinkedIn</a></li>
            <li><a class="white-text" href="https://facebook.com/reesilva">Facebook</a></li>
            <li><a class="white-text" href="https://twitter.com/reesilva_spfc">Twitter</a></li>
            <li><a class="white-text" href="https://plus.google.com/+RenatoBiancalanadaSilva">Google+</a></li>
            <li class="white-text">Skype: ReeSilva_SPFC</li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://github.com/reesilva">ReeSilva</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="{{ asset('js/bin/materialize.js') }}"></script>
  <script src="{{ asset('js/bin/init.js') }}"></script>

  </body>
</html>
