<!DOCTYPE HTML>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <title>IOT Smart Home</title>
  </head>
  <body>
    <section class="hero is-warning is-fullheight">
      <!-- Hero head: will stick at the top -->
      <div class="hero-head">
        <nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
          <div class="container">
            <div class="navbar-brand">
              <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarMenuHeroA" onclick="getElementById('navbarMenuHeroA').classList.toggle('is-active');">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
              </a>
            </div>
            <div class="navbar-menu" id="navbarMenuHeroA">
              <div class="navbar-end">
                <a class="navbar-item" onmouseover="this.classList.toggle('has-text-dark')" onmouseout="this.classList.toggle('has-text-dark')" href="/"><strong>Main Page</strong></a>
                <a class="navbar-item" onmouseover="this.classList.toggle('has-text-dark')" onmouseout="this.classList.toggle('has-text-dark')" href="/login"><strong>Login</strong></a>
                <a class="navbar-item" onmouseover="this.classList.toggle('has-text-dark')" onmouseout="this.classList.toggle('has-text-dark')" href="/register"><strong>Register</strong></a>
              </div>
            </div>
          </div>
        </nav>
      </div>
      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container has-text-centered">
          @yield('page')
        </div>
      </div>
      <!-- Hero footer: will stick at the bottom -->
      <footer class="hero-foot">
        <div class="container">
          <div class="content has-text-centered">
            <p>&copy; 2021 IOT Smart Home by dodo Tüm Saklıları Haklıdır</p>
            <p></p>
          </div>
        </div>
      </footer>
    </section>
  </body>
</html>
