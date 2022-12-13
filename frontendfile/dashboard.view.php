<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./views/assets/css/dashboard.css">

    <!----===== Boxicons CSS ===== -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

    <title>Dashboard Menu</title>
</head>
<body class="dark">
  <nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="./views/assets/img/" alt="userpic">
            </span>

            <div class="text logo-text">
                <span class="name"></span>
                <span class="profession"></span>
            </div>
        </div>

        <i class='bx bx-chevron-right toggle'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">

            <li class="search-box">
                <i class='bx bx-search icon'></i>
                <input type="text" placeholder="Search...">
            </li>

            <ul class="menu-links">
                <li class="nav-link">
                    <a href="./dashboard">
                        <i class='bx bx-home-alt icon' ></i>
                        <span class="text nav-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="./revenue">
                        <i class='bx bx-bar-chart-alt-2 icon' ></i>
                        <span class="text nav-text">Revenue</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="./projects">
                      <i class='bx bxs-briefcase-alt-2 icon'></i>
                        <span class="text nav-text">Projects</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="./notes">
                      <i class='bx bx-note icon' ></i>
                        <span class="text nav-text">Notes</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="./users">
                      <i class='bx bxs-user icon'></i>
                        <span class="text nav-text">Users</span>
                    </a>
                </li>

                <li class="nav-link">
                  <a href="./code">
                      <i class='bx bx-code-alt icon' ></i>
                      <span class="text nav-text">Snippets</span>
                  </a>
              </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <a href="./logout">
                    <i class='bx bx-log-out icon' ></i>
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
        </div>
    </div>

  </nav>

    <section class="home">
        <div class="text">Dashboard</div>
        <div class="container-fluid ps-5 pe-5">
        <div class="row">
            <div class="col-sm-4 grid-margin">
              <div class="card dark-cards">
                <a class="mylink22" href="./projects">
                  <div class="card-body">
                    <h5>Total Project</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">12 in progress</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class='bx bxs-briefcase-alt-2 dash-icon'></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card dark-cards">
                <a class="mylink22" href="./revenue">
                  <div class="card-body">
                    <h5>Revenue</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">more information</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class='bx bx-bar-chart-alt-2 dash-icon' ></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card dark-cards">
                <a href="./users" class="mylink22">
                  <div class="card-body">
                    <h5>Users</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">more information</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class='bx bxs-user dash-icon'></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card dark-cards">
                <a href="./code" class="mylink22">
                  <div class="card-body">
                    <h5>Code Snipets</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">more information</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class='bx bx-code-alt dash-icon' ></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-sm-4 grid-margin">
              <div class="card dark-cards">
                <a href="./notes" class="mylink22">
                  <div class="card-body">
                    <h5>Notes</h5>
                    <div class="row">
                      <div class="col-8 col-sm-12 col-xl-8 my-auto">
                        <div class="d-flex d-sm-block d-md-flex align-items-center">
                          <h2 class="mb-0"></h2>
                        </div>
                        <h6 class="text-muted font-weight-normal">more information</h6>
                      </div>
                      <div class="col-4 col-sm-12 col-xl-4 text-center text-xl-right">
                        <i class='bx bx-note dash-icon' ></i>
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            </div>
        </div>
        </div>
    </section>

    <script src="./views/assets/js/dashboard.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
<?php
    // mores code in a variable
    function decode_morse(string $code): string {
        // Replace with your code
        $code = trim($code);
        $code = explode('   ', $code);
        $text = '';
        foreach($code as $word){
          $word = explode(' ', $word);
          foreach($word as $letter){
            $text .= MORSE_CODE[$letter];
          }
          $text .= ' ';
        }
        $text = trim($text);
        return $text;
      }
zzzzzzl
?>
