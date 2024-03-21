@extends('dashboard.master')

@section('nav')
<div class="sidebar-wrapper">
    <ul class="nav">
      <li class="{{ (Request::is('home') ? 'active' : '') ? 'active' : '' }}">
        <a href="/home">
          <i class="nc-icon nc-bank"></i>
          <p>Dashboard</p>
        </a>
      </li>
      <li class="{{ (Request::is('users*') ? 'active' : '') }}">
        <a href="{{ route('users.index') }}">
          <i class="nc-icon nc-single-02"></i>
          <p>Users</p>
        </a>
      </li>
      <li>
        <a href="{{ route('customer.index') }}">
          <i class="nc-icon nc-pin-3"></i>
          <p>Customers</p>
        </a>
      </li>
      <li>
        <a href="/orders">
          <i class="nc-icon nc-bell-55"></i>
          <p>Orders</p>
        </a>
      </li>
      <li>
        <a href="/discounts">
          <i class="nc-icon nc-single-02"></i>
          <p>Discoutns</p>
        </a>
      </li>
      <li>
        <a href="/payments">
          <i class="nc-icon nc-tile-56"></i>
          <p>Payments</p>
        </a>
      </li>
      <li>
        <a href="/paymentsd">
          <i class="nc-icon nc-tile-56"></i>
          <p>Payments Detail</p>
        </a>
      </li>
      <li>
        <a href="/products">
          <i class="nc-icon nc-caps-small"></i>
          <p>Products</p>
        </a>
      </li>
      <li>
        <a href="/inventory">
          <i class="nc-icon nc-caps-small"></i>
          <p>Inventory</p>
        </a>
      </li>
      {{-- <li class="active-pro">
        <a href="./upgrade.html">
          <i class="nc-icon nc-spaceship"></i>
          <p>Upgrade to PRO</p>
        </a>
      </li> --}}
    </ul>
  </div>
</div>
@endsection