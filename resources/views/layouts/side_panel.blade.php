@section('side_panel')


<div class="sidenav">
<ul class="list-unstyled ps-0">
    <br><br>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="true">
          Новини
        </button>
        <div class="collapse" id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="{{ route('news.create') }}" class="link-dark rounded">@lang('menu.navigation.add_news')</a></li>
            <li><a href="{{ route('news.show') }}" class="link-dark rounded">Список всіх новин</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Дискографія
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Добавити альбом</a></li>
            <li><a href="#" class="link-dark rounded">Список всіх альбомів</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Заказы
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Новый</a></li>
            <li><a href="#" class="link-dark rounded">Обработанный</a></li>
            <li><a href="#" class="link-dark rounded">Отправленный</a></li>
            <li><a href="#" class="link-dark rounded">Возвращенный</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Новый...</a></li>
            <li><a href="#" class="link-dark rounded">Профиль</a></li>
            <li><a href="#" class="link-dark rounded">Настройка</a></li>
            <li><a href="#" class="link-dark rounded">Выйти</a></li>
          </ul>
        </div>
      </li>
    </ul>
</div>

<!-- Page content -->

    @endsection
