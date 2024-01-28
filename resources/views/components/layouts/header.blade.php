<nav class="navbar navbar-expand-lg bg-danger mb-5" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/profile">{{ __('welcome_to')}} <b>Blog Artikel</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">{{__('home')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">{{__('about')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/">{{__('articles')}}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/content-form">Add Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/users">Users</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">{{__('language')}}</a>
            <ul class="dropdown-menu">
              <form action="">
              <li><a href="/localization/id" class="dropdown-item">Indonesia</a></li>
              <li><a href="/localization/en" class="dropdown-item">{{__('english')}}</a></li>
              </form>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>