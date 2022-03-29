<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="{{ route('main') }}">{{ config('app.name') }}</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item {{ \Request::route()->getName() == 'main' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('main') }}">{{ __('menu.navigation.main') }} <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item {{ \Request::route()->getName() == 'discography_histories' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('discography_histories') }}">{{ __('menu.navigation.discography_histories') }}</a>
          </li>
          <li class="nav-item {{ \Request::route()->getName() == 'news.index' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('news.index') }}">@lang('menu.navigation.news')</a>
          </li>
          <li class="nav-item {{ \Request::route()->getName() == 'about' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('about') }}">@lang('menu.navigation.about')</a>
          </li>
          @auth()

          <li>
          <div class="dropdown">
            <button class="dropbtn">{{ auth()->user()->username }}</button>
            <div class="dropdown-content">
              <a href="#">@lang('menu.navigation.personal_page')</a>
              <a href="#">@lang('menu.navigation.settings')</a>

              @if(auth()->user()->admin == true)
                <a href="{{ route('adminpanel.index') }}">@lang('menu.navigation.adminpanel')</a>
              @endif

              <a href="{{ route('exit') }}">@lang('menu.navigation.exit')</a>
            </div>
          </div>
          </li>
          @else
          <li class="nav-item {{ \Request::route()->getName() == 'authorization' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('authorization') }}">@lang('menu.navigation.authorization')</a>
          </li>
          <li class="nav-item {{ \Request::route()->getName() == 'registration' ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('registration') }}">@lang('menu.navigation.registration')</a>
          </li>
          @endauth
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
