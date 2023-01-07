<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Case Study of Al Majazer Market</title>
    <meta name="description" content="Case study page of Project" />

    <link rel="stylesheet" href="./assets/css/proect.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <header class="header">
      <div class="header__content">
        <div class="header__logo-container">
          <div class="header__logo-img-cont">
            <img
              src="./assets/img/unknown.png"
              alt="Ram Maheshwari Logo Image"
              class="header__logo-img"
            />
          </div>
          <span class="header__logo-sub">Imrane Chaibi</span>
        </div>
        <div class="header__main">
          <ul class="header__links">
            <li class="header__link-wrapper">
              <a href="./index.php" class="header__link"> Home </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./index.php#about" class="header__link">About </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./index.php#projects" class="header__link">
                Projects
              </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./index.php#contact" class="header__link"> Contact </a>
            </li>
          </ul>
          <div class="header__main-ham-menu-cont">
            <img
              src="./assets/img/ham-menu.svg"
              alt="hamburger menu"
              class="header__main-ham-menu"
            />
            <img
              src="./assets/img/ham-menu-close.svg"
              alt="hamburger menu close"
              class="header__main-ham-menu-close d-none"
            />
          </div>
        </div>
      </div>
      <div class="header__sm-menu">
        <div class="header__sm-menu-content">
          <ul class="header__sm-menu-links">
            <li class="header__sm-menu-link">
              <a href="./index.php"> Home </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="./index.php#about"> About </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="./index.php#projects"> Projects </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="./index.php#contact"> Contact </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <section class="project-cs-hero">
      <div class="project-cs-hero__content">
        <h1 class="heading-primary">HERE IS A LIST OF ALL THE PROJECT I WORKED ON</h1>
        <div class="project-cs-hero__info">
          <p class="text-primary">
            Feel free to take a look and browse the code.
          </p>
        </div>
      </div>
    </section>
    <section id="projects" class="projects sec-pad">
        <div class="main-container">
          <h2 class="heading heading-sec heading-sec__mb-bg">
            <span class="heading-sec__main">Projects</span>
            <span class="heading-sec__sub">
              Here is a list of the project I've accomplished.
            </span>
          </h2>

          <div class="projects__content">
            <div class="projects__row">
              @foreach ($data['projects'] as $project)
              <div class="projects__row-img-cont">
                <img
                  src="./assets/img/{{ $project['image'] }}"
                  alt="Software Screenshot"
                  class="projects__row-img"
                  loading="lazy"
                />
              </div>
              @endforeach
              <div class="projects__row-content">
                <h3 class="projects__row-content-title">{{ $project['name'] }}</h3>
                <p class="projects__row-content-desc">
                    {{ $project['description'] }}
                </p>
                <div class="flex" style="gap:20px">
                    <a
                  href="{{ $project['link'] }}"
                  class="btn btn--med btn--theme dynamicBgClr"
                  >link</a
                >
                @if ($project['github'] != "n/a")
                <a
                  href="{{ $project['github'] }}"
                  class="btn btn--med btn--theme dynamicBgClr"
                  >github</a
                >
                @endif
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <footer class="main-footer">
      <div class="main-container">
        <div class="main-footer__upper">
          <div class="main-footer__row main-footer__row-1">
            <h2 class="heading heading-sm main-footer__heading-sm">
              <span>Social</span>
            </h2>
            <div class="main-footer__social-cont">
              <a target="_blank" rel="noreferrer" href="https://www.linkedin.com/in/imrane-chaibi-118a55204/">
                <img
                  class="main-footer__icon"
                  src="./assets/img/linkedin-ico.png"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://github.com/hollyufo">
                <img
                  class="main-footer__icon"
                  src="./assets/img/github-ico.png"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://twitter.com/ChaibiImrane">
                <img
                  class="main-footer__icon"
                  src="./assets/img/twitter-ico.png"
                  alt="icon"
                />
              </a>
              </a>
              <a target="_blank" rel="noreferrer" href="https://www.instagram.com/imran_chaibi/">
                <img
                  class="main-footer__icon main-footer__icon--mr-none"
                  src="./assets/img/insta-ico.png"
                  alt="icon"
                />
              </a>
            </div>
          </div>
          <div class="main-footer__row main-footer__row-2">
            <h4 class="heading heading-sm text-lt">Imrane Chaibi</h4>
            <p class="main-footer__short-desc">
              I'm a full stack web developer from rabat morocco. i create custom websites to help businesses do better online.
            </p>
          </div>
        </div>

        <div class="main-footer__lower">
          &copy; Copyright 2021. Made with love.
          >
        </div>
      </div>
    </footer>
    <script src="./assets/js/index.js"></script>
  </body>
</html>
