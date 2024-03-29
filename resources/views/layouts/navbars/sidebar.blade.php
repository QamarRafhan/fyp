<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="{{ route('home') }}" class="simple-text logo-normal">
      {{ __('Dashboard') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
          <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      @if(@auth()->user()->role=="admin")
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="{{ ($activePage == 'profile' || $activePage == 'user-management') ? 'true' : 'false' }}">
          <i class="material-icons">people_outline</i>
          <p>{{ __('Users') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse  {{ ($activePage == 'profile' || str_contains($activePage, 'user-management'))? ' show' : '' }} " id="users">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management-admin' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index' , ['role'=> 'admin']) }}">
                <span class="sidebar-mini"> AU </span>
                <span class="sidebar-normal"> {{ __('Admin User') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'user-management-donor' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index', ['role'=> 'donor']) }}">
                <span class="sidebar-mini"> DO </span>
                <span class="sidebar-normal"> {{ __('Donors') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'user-management-receptor' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index', ['role'=> 'receptor']) }}">
                <span class="sidebar-mini"> RE   </span>
                <span class="sidebar-normal"> {{ __('Receptors') }} </span>
              </a>
            </li>

          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'hospital-management' || $activePage == 'hospital.create') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-prodcuts" aria-expanded="{{ ($activePage == 'hospital-management' || $activePage == 'hospital.create') ? 'true' : 'false' }}">
          <i class="material-icons">local_hospital</i>
          <p>{{ __('Hospital') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'hospital-management' || $activePage == 'hospital.create')? ' show' : '' }} " id="sidebar-prodcuts">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'hospital-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('hospital.index') }}">
                <span class="sidebar-mini"> AC </span>
                <span class="sidebar-normal"> {{ __('ALL Hospital') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'hospital.create' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('hospital.create') }}">
                <span class="sidebar-mini"> AC </span>
                <span class="sidebar-normal"> {{ __('Add Hospital') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>





      <li class="nav-item {{ ($activePage == 'blood-management' || $activePage == 'blood.create') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-blood" aria-expanded="{{ ($activePage == 'blood-management' || $activePage == 'blood.create') ? 'true' : 'false' }}">
          <i class="material-icons">bloodtype</i>
          <p>{{ __('Blood') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'blood-management' || $activePage == 'blood.create')? ' show' : '' }} " id="sidebar-blood">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'blood-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('blood.index') }}">
                <span class="sidebar-mini"> AC </span>
                <span class="sidebar-normal"> {{ __('ALL Blood') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'blood.create' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('blood.create') }}">
                <span class="sidebar-mini"> AC </span>
                <span class="sidebar-normal"> {{ __('Add Blood') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
 


      @endif

      <li class="nav-item {{ ($activePage == 'donation-management' ) ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-donation" aria-expanded="{{ ($activePage == 'donation-management' || $activePage == 'donation.create') ? 'true' : 'false' }}">
          <i class="material-icons">receipt</i>
          <p>{{ __('Donation') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'donation-management' )? ' show' : '' }} " id="sidebar-donation">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'donation-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('donation.index') }}">
                <span class="sidebar-mini"> AC </span>
                <span class="sidebar-normal"> {{ __('ALL Donation') }} </span>
              </a>
            </li>
          
          </ul>
        </div>
      </li>

    </ul>
  </div>
</div>