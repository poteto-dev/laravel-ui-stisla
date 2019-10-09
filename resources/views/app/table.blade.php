@extends('layouts.app')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Package Management</h1>
    </div>
    <div class="section-body">
      <h2 class="section-title">List of Packages Question</h2>
      <p class="section-lead">This page is for managing packages including questions and answers.</p>
      <div class="card">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped table-md">
              <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Level</th>
                <th></th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>1</td>
                <td>Lorem</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing.</td>
                <td>3</td>
                <td></td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
