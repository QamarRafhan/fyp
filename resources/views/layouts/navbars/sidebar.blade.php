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
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#users" aria-expanded="{{ ($activePage == 'profile' || $activePage == 'user-management') ? 'true' : 'false' }}">
          <i class="material-icons">people_outline</i>
          <p>{{ __('Users') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse  {{ ($activePage == 'profile' || $activePage == 'user-management')? ' show' : '' }} " id="users">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('profile.edit') }}">
                <span class="sidebar-mini"> UP </span>
                <span class="sidebar-normal">{{ __('User profile') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'user-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('user.index') }}">
                <span class="sidebar-mini"> UM </span>
                <span class="sidebar-normal"> {{ __('User Management') }} </span>
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

        {{-- <li class="nav-item {{ ($activePage == 'vendor-management' || $activePage == 'vendor.create') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-vendors" aria-expanded="{{ ($activePage == 'vendor-management' || $activePage == 'vendor.create') ? 'true' : 'false' }}">
          <i class="material-icons">donut_small</i>
          <p>{{ __('Vendors') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'vendor-management' || $activePage == 'vendor.create')? ' show' : '' }} " id="sidebar-vendors">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'vendor-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('vendor.index') }}">
                <span class="sidebar-mini"> AV </span>
                <span class="sidebar-normal"> {{ __('ALL Vendors') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'vendor.create' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('vendor.create') }}">
                <span class="sidebar-mini"> AV </span>
                <span class="sidebar-normal"> {{ __('Add Vendor') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item {{ ($activePage == 'banks-management' || $activePage == 'banks.create') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-banks" aria-expanded="{{ ($activePage == 'banks-management' || $activePage == 'banks.create') ? 'true' : 'false' }}">
          <i class="material-icons">account_balance</i>
          <p>{{ __('Bankings') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'banks-management' || $activePage == 'banks.create')? ' show' : '' }} " id="sidebar-banks">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'banks-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('banks.index') }}">
                <span class="sidebar-mini"> AB </span>
                <span class="sidebar-normal"> {{ __('ALL Bankings') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'banks.create' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('banks.create') }}">
                <span class="sidebar-mini"> AB </span>
                <span class="sidebar-normal"> {{ __('Add Banking') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>


      <li class="nav-item {{ ($activePage == 'saleman-management' || $activePage == 'saleman.create') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-saleman" aria-expanded="{{ ($activePage == 'saleman-management' || $activePage == 'saleman.create') ? 'true' : 'false' }}">
          <i class="material-icons">social_distance</i>
          <p>{{ __('Salesman') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'saleman-management' || $activePage == 'saleman.create')? ' show' : '' }} " id="sidebar-saleman">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'saleman-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('saleman.index') }}">
                <span class="sidebar-mini"> AM </span>
                <span class="sidebar-normal"> {{ __('ALL Salesman') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'saleman.create' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('saleman.create') }}">
                <span class="sidebar-mini"> AM </span>
                <span class="sidebar-normal"> {{ __('Add Saleman') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'product-management' || $activePage == 'product.create') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-product" aria-expanded="{{ ($activePage == 'product-management' || $activePage == 'product.create') ? 'true' : 'false' }}">
          <i class="material-icons">add_shopping_cart</i>
          <p>{{ __('Product') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'product-management' || $activePage == 'product.create')? ' show' : '' }} " id="sidebar-product">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'product-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('product.index') }}">
                <span class="sidebar-mini"> AM </span>
                <span class="sidebar-normal"> {{ __('ALL Products') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'product.create' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('product.create') }}">
                <span class="sidebar-mini"> AM </span>
                <span class="sidebar-normal"> {{ __('Add Product') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item {{ ($activePage == 'invoice-management' || $activePage == 'invoice.create') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-invoice" aria-expanded="{{ ($activePage == 'invoice-management' || $activePage == 'invoice.create') ? 'true' : 'false' }}">
          <i class="material-icons">speaker_notes</i>
          <p>{{ __('Invoice') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'invoice-management' || $activePage == 'invoice.create')? ' show' : '' }} " id="sidebar-invoice">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'invoice-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('invoice.index') }}">
                <span class="sidebar-mini"> AM </span>
                <span class="sidebar-normal"> {{ __('ALL Invoices') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'invoice.create' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('invoice.create') }}">
                <span class="sidebar-mini"> AM </span>
                <span class="sidebar-normal"> {{ __('Add Invoice') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item {{ ($activePage == 'invoice-management' || $activePage == 'stock.create') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#sidebar-stock" aria-expanded="{{ ($activePage == 'stock-management' || $activePage == 'stock.create') ? 'true' : 'false' }}">
          <i class="material-icons">speaker_notes</i>
          <p>{{ __('Stock') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse {{ ($activePage == 'stock-management' || $activePage == 'stock.create')? ' show' : '' }} " id="sidebar-stock">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'stock-management' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('stock.index') }}">
                <span class="sidebar-mini"> AM </span>
                <span class="sidebar-normal"> {{ __('ALL Stocks') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'stock.create' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('stock.create') }}">
                <span class="sidebar-mini"> AM </span>
                <span class="sidebar-normal"> {{ __('Add Stock') }} </span>
              </a>
            </li>
          </ul>
        </div>
      </li> --}}

    </ul>
  </div>
</div>