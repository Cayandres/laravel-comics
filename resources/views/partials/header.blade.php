@php
    $main_menu = config('menus.menus_header')
@endphp

<header class="container">
    <div>
      <img src="/src/img/dc-logo.png" alt="">
    </div>
    <div>
      <nav>
        <ul>
          @foreach($main_menu as $item)

          <li class="{{ Route::currentRouteName() === $item['name'] ? 'active' : '' }}">
          <a  href="{{ route($item['name']) }}">{{ $item['text'] }}</a>
          </li>

          @endforeach
        </ul>
      </nav>
    </div>
  </header>