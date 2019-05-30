<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav mr-auto">
        
        <li class="nav-item">
            <a class="{{ Request::is('/') ? 'active' : '' }} nav-link" href="{{ url('/') }}">Головна</a>
        </li>
        
        <li class="nav-item">
            <a class="{{ Request::is('about') ? 'active' : '' }} nav-link" href="{{ url('/about') }}">Про мене</a>
        </li>

        <li class="nav-item">
            <a class="{{ Request::is('history') ? 'active' : '' }} nav-link" href="{{ url('/history') }}">Історія школи</a>
        </li>
        
        <li class="nav-item">
            <a class="{{ Request::is('law') ? 'active' : '' }} nav-link" href="{{ url('/law') }}">Новели законодавства</a>
        </li>
        
        <li class="nav-item">
            <a class="{{ Request::is('calendar') ? 'active' : '' }} nav-link" href="{{ url('/calendar') }}">Календар знаменних дат</a>
        </li>
        
        <li class="nav-item">
            <a class="{{ Request::is('concurs') ? 'active' : '' }} nav-link" href="{{ url('/concurs') }}">Професійні конкурси</a>
        </li>
        
        <li class="nav-item dropdown">
            <a class="{{ Request::is('teacher/*') ? 'active' : '' }} nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Вчителям</a>
            <div class="dropdown-menu" >
                <a class="dropdown-item" href="{{ url('/teacher/plan') }}">Календарні планування</a>
                <a class="dropdown-item" href="{{ url('/teacher/lesson') }}">Розробки уроків</a>
                <a class="dropdown-item" href="{{ url('/teacher/event') }}">Позакласні заходи</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="{{ Request::is('pupil/*') ? 'active' : '' }} nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Учням</a>
            <div class="dropdown-menu" >
                <a class="dropdown-item" href="{{ url('/pupil/zno') }}">Підготовка до ЗНО/ДПА</a>
                <a class="dropdown-item" href="{{ url('/pupil/olympist') }}">Підготовка до олімпіади з історії</a>
                <a class="dropdown-item" href="{{ url('/pupil/olympprav') }}">Підготовка до олімпіади з правознавства</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="{{ Request::is('parent/*') ? 'active' : '' }} nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Батькам</a>
            <div class="dropdown-menu" >
                <a class="dropdown-item" href="{{ url('/parent/mark') }}">Критерії оцінювання</a>
                <a class="dropdown-item" href="{{ url('/parent/advice') }}">Поради психолога</a>
                <a class="dropdown-item" href="{{ url('/parent/right') }}">Права та обов'язки батьків</a>
            </div>
        </li>

        <li class="nav-item dropdown">
            <a class="{{ Request::is('weekdays/*') ? 'active' : '' }} nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Шкільні будні</a>
            <div class="dropdown-menu" >
                <a class="dropdown-item" href="{{ url('/weekdays/life') }}">Наше життя</a>
                <a class="dropdown-item" href="{{ url('/weekdays/mission') }}">Доручення</a>
                <a class="dropdown-item" href="{{ url('/weekdays/deal') }}">Справи</a>
                <a class="dropdown-item" href="{{ url('/weekdays/trip') }}">Подорожі</a>
            </div>
        </li>

        <li class="nav-item">
            <a class="{{ Request::is('quest') ? 'active' : '' }} nav-link" href="{{ url('/quest') }}">Веб-квести</a>
        </li>


    </ul>
    <ul class="navbar-nav ml-auto">

    <!-- Authentication Links -->
    @guest
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Увійти') }}</a>
        </li>
        
    @else
        <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Вийти') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    @endguest
</ul>
    
</div>
