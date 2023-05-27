
@extends('layouts.layout')
@section('content')

<div class="container mx-0 px-0 ">
  <div class="row ">
    <div class="col-md-2">

<div class="flex-shrink-0 p-3 text-bg-dark my-3" style="width: 180px; height: 1000px">
    <a  class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom text-light">
      <div class="container">
      <div class="row py-2">
      <img class="rounded-circle" alt="avatar1" src="https://mdbcdn.b-cdn.net/img/new/avatars/9.webp"  width="40" />
      </div>

      <div class="row align-items-center"><span class="fs-5 fw-semibold">  Hello Admin  !</span></div></div>
    </a>
    <ul class="list-unstyled ps-0">
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light"  data-bs-theme="dark" data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
         Users
        </button>
        <div class="collapse " id="home-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Overview</a></li>
            <li><a href="{{route('adminapprenants.profil')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Apprenants</a></li>
            <li><a href="{{route('formateurs.profil')}}" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Formateurs</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light" data-bs-theme="dark" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
          Dashboard
        </button>
        <div class="collapse" id="dashboard-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Overview</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Weekly</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Monthly</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Annually</a></li>
          </ul>
        </div>
      </li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light" data-bs-theme="dark" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          Orders
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">New</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Processed</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Shipped</a></li>
            <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light bg-dark">Returned</a></li>
          </ul>
        </div>
      </li>
      <li class="border-top my-3"></li>
      <li class="mb-1">
        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light" data-bs-theme="dark" data-bs-toggle="collapse" data-bs-target="#account-collapse" aria-expanded="false">
          Account
        </button>
        <div class="collapse" id="account-collapse" data-bs-theme="dark">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded text-light bg-dark">New...</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded text-light bg-dark">Profile</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded text-light bg-dark">Settings</a></li>
            <li><a href="#" class="link-dark d-inline-flex text-decoration-none rounded text-light bg-dark">Sign out</a></li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
  </div>
  @yield('cont')
</div>

</div>
  <script type="text/javascript"> (() => {
  'use strict'
  const tooltipTriggerList = Array.from(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  tooltipTriggerList.forEach(tooltipTriggerEl => {
    new bootstrap.Tooltip(tooltipTriggerEl)
  })
})()</script>


@endsection