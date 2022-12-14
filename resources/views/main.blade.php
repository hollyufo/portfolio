<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Imran Chaibi</title>
    <meta name="description" content="Hey! It's Imrane Chaibi and I'm a Full Stack Web Developer located in Rabat morocco. I've done remote projects for agencies, and collaborated with talented people to create digital products for both business and consumer use...." />
    <meta property="og:title" content="Imrane Chaibi" />
    <meta property="og:url" content="https://imranechaibi.com/" />
    <meta property="og:image" content="https://imranechaibi.com/website.PNG" />
    <meta property="og:description" content="Hey! It's Imrane Chaibi and I'm a Full Stack Web Developer located in Rabat morocco. I've done remote projects for agencies, and collaborated with talented people to create digital products for both business and consumer use...." />

    <link rel="stylesheet" href="{{url('assets/css/portfolio.css')}}" />

    <link rel="apple-touch-icon" sizes="180x180" href="{{url('assets/img/apple-touch-icon.png)')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('assets/img/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('assets/img/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('assets/img/site.webmanifest')}}">

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
              src="{{url('assets/img/unknown.png')}}"
              alt="imrnae Logo Image"
              class="header__logo-img"
            />
          </div>
          <span class="header__logo-sub">Imrane Chaibi</span>
        </div>
        <div class="header__main">
          <ul class="header__links">
            <li class="header__link-wrapper">
              <a href="/" class="header__link"> Home </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./#about" class="header__link">About </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./#projects" class="header__link">
                Projects
              </a>
            </li>
            <li class="header__link-wrapper">
              <a href="./#contact" class="header__link"> Contact </a>
            </li>
          </ul>
          <div class="header__main-ham-menu-cont">
            <img
              src="{{url('assets/img/ham-menu.svg')}}}}"
              alt="hamburger menu"
              class="header__main-ham-menu"
            />
            <img
              src="{{url('assets/img/ham-menu-close.svg')}}}}"
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
              <a href="./"> Home </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="./#about"> About </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="./#projects"> Projects </a>
            </li>

            <li class="header__sm-menu-link">
              <a href="./#contact"> Contact </a>
            </li>
          </ul>
        </div>
      </div>
    </header>
    <section class="home-hero">
      <div class="home-hero__content">
        <h1 class="heading-primary">Hey, My name is Imrane Chaibi</h1>
        <div class="home-hero__info">
          <p class="text-primary">I'm a full stack web developer from rabat morocco. i create custom websites to help businesses do better online </p>
        </div>
        <div class="home-hero__cta">
          <a href="./#projects" class="btn btn--bg">Projects</a>
        </div>
      </div>
      <div class="home-hero__socials">
        <div class="home-hero__social">
          <a href="https://www.linkedin.com/in/imrane-chaibi-118a55204/" class="home-hero__social-icon-link">
            <img
              src="{{url('assets/img/linkedin-ico.png')}}"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a href="#" class="home-hero__social-icon-link">
            <img
              src="{{url('assets/img/github-ico.png')}}"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a href="https://twitter.com/ChaibiImrane" class="home-hero__social-icon-link">
            <img
              src="{{url('assets/img/twitter-ico.png')}}"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
        <div class="home-hero__social">
          <a
            href="https://www.instagram.com/imran_chaibi/"
            class="home-hero__social-icon-link home-hero__social-icon-link--bd-none"
          >
            <img
              src="{{url('assets/img/instagram-ico.png')}}"
              alt="icon"
              class="home-hero__social-icon"
            />
          </a>
        </div>
      </div>
      <div class="home-hero__mouse-scroll-cont">
        <div class="mouse"></div>
      </div>
    </section>
    <section id="about" class="about sec-pad">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main">About Me</span>
          <span class="heading-sec__sub">
            I'm a full stack web developer from rabat morocco. i create custom websites to help businesses do better online nte
          </span>
        </h2>
        <div class="about__content">
          <div class="about__content-main">
            <h3 class="about__content-title">Get to know me!</h3>
            <div class="about__content-details">
              <p class="about__content-details-para">
                Hey! It's
                <strong>Imrane Chaibi</strong>
                and I'm a <strong> Full Stack Web Developer </strong> located in
                Rabat morocco. I've done
                <strong> remote </strong>
                projects for agencies and collaborated
                with talented people to create
                <strong>digital products </strong>
                for both business and consumer use.
              </p>
              <p class="about__content-details-para">
                I'm a bit of a digital product junky. Over the years, I've used
                hundreds of web and mobile apps in different industries and
                verticals. Feel free to
                <strong>contact</strong> me here.
              </p>
            </div>
            <a href="./#contact" class="btn btn--med btn--theme dynamicBgClr"
              >Contact</a
            >
          </div>
          <div class="about__content-skills">
            <h3 class="about__content-title">My Skills</h3>
            <div class="skills">
                <div class="skills__skill">HTML</div>
                <div class="skills__skill">CSS</div>
                <div class="skills__skill">PHP</div>
                <div class="skills__skill">JavaScript</div>
                <div class="skills__skill">SASS</div>
                <div class="skills__skill">GIT</div>
                <div class="skills__skill">Wordpress</div>
                <div class="skills__skill">Google ADS</div>
                <div class="skills__skill">Facebook Ads</div>
                <div class="skills__skill">Laravel</div>
                <div class="skills__skill">Adobe Xd</div>
                <div class="skills__skill">Spring boot</div>
                <div class="skills__skill">Java EE</div>
                <div class="skills__skill">Angular</div>
                <div class="skills__skill">Bootstrap</div>
                <div class="skills__skill">Tailwind</div>
                <div class="skills__skill">Sql</div>
                <div class="skills__skill">Mysql</div>
                <div class="skills__skill">Postgresql</div>
                <div class="skills__skill">Docker</div>
                <div class="skills__skill">Linux</div>
                <div class="skills__skill">Ionic</div>
                <div class="skills__skill">C</div>
            </div>
          </div>
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
            <div class="projects__row-img-cont">
              <img
                src="{{url('assets/img/almajazer.png')}}"
                alt="Software Screenshot"
                class="projects__row-img"
                loading="lazy"
              />
            </div>
            <div class="projects__row-content">
              <h3 class="projects__row-content-title">Al Majazer Market</h3>
              <p class="projects__row-content-desc">
                al majazer market  needed a website to present itself as a new modern way, and also help promote its products to attract more customers and businesses.
              </p>
              <a
                href="./almajazer"
                class="btn btn--med btn--theme dynamicBgClr"
                >Case Study</a
              >
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="contact" class="contact sec-pad dynamicBg">
      <div class="main-container">
        <h2 class="heading heading-sec heading-sec__mb-med">
          <span class="heading-sec__main heading-sec__main--lt">Contact</span>
          <span class="heading-sec__sub heading-sec__sub--lt">
            if u need consulting or a custom website don't hesitate to reach out to me
          </span>
        </h2>
        <div class="contact__form-container">
          <form action="./mailer.php" method="post" class="contact__form">
            <div class="contact__form-field">

              <label class="contact__form-label" for="name">Name</label>
              <input
                required
                placeholder="Enter Your Name"
                type="text"
                class="contact__form-input"
                name="name"
                id="name"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="email">Email</label>
              <input
                required
                placeholder="Enter Your Email"
                type="text"
                class="contact__form-input"
                name="email"
                id="email"
              />
            </div>
            <div class="contact__form-field">
              <label class="contact__form-label" for="message">Message</label>
              <textarea
                required
                cols="30"
                rows="10"
                class="contact__form-input"
                placeholder="Enter Your Message"
                name="message"
                id="message"
              ></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn--theme contact__btn">
              Submit
            </button>
          </form>
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
                  src="{{url('/assets/img/linkedin-ico.png')}}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://github.com/hollyufo">
                <img
                  class="main-footer__icon"
                  src="{{url('/assets/img/github-ico.png')}}"
                  alt="icon"
                />
              </a>
              <a target="_blank" rel="noreferrer" href="https://twitter.com/ChaibiImrane">
                <img
                  class="main-footer__icon"
                  src="{{url('/assets/img/twitter-ico.png')}}"
                  alt="icon"
                />
              </a>
              </a>
              <a target="_blank" rel="noreferrer" href="https://www.instagram.com/imran_chaibi/">
                <img
                  class="main-footer__icon main-footer__icon--mr-none"
                  src="{{url('/assets/img/insta-ico.png')}}"
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
        </div>
      </div>
    </footer>

    <script src="./assets/js/index.js"></script>
  </body>
</html>
