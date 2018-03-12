@extends('layouts.dash')
@section("content")
  <div class="app-title">
    <div>
      <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="tile">
      <h3 class="">Quick Links</h3>
        <hr>
        <a href="{{ route("dash.settings") }}" class="btn btn-info"><i class="fa fa-user"></i> Profile Settings</a>
        <a class="btn btn-secondary" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
          <I class="fa fa-sign-out"></I> Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Features</h3>
        <ul>
          <li>Built with Bootstrap 4, SASS and PUG.js</li>
          <li>Fully responsive and modular code</li>
          <li>Seven pages including login, user profile and print friendly invoice page</li>
          <li>Smart integration of forgot password on login page</li>
          <li>Chart.js integration to display responsive charts</li>
          <li>Widgets to effectively display statistics</li>
          <li>Data tables with sort, search and paginate functionality</li>
          <li>Custom form elements like toggle buttons, auto-complete, tags and date-picker</li>
          <li>A inbuilt toast library for providing meaningful response messages to user's actions</li>
        </ul>
        <p>Vali is a free and responsive admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.</p>
        <p>Vali is is light-weight, expendable and good looking theme. The theme has all the features required in a dashboard theme but this features are built like plug and play module. Take a look at the <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> about customizing the theme colors and functionality.</p>
        <p class="mt-4 mb-4">
        <a class="btn btn-danger mr-2 mb-2" href="http://youtube.com" target="_blank"><i class="fa fa-youtube"></i>Tutorial On Youtube</a>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tile">
        <h3 class="tile-title">Compatibility with frameworks</h3>
        <p>This theme is not built for a specific framework or technology like Angular or React etc. But due to it's modular nature it's very easy to incorporate it into any front-end or back-end framework like Angular, React or Laravel.</p>
        <p>Go to <a href="http://pratikborsadiya.in/blog/vali-admin" target="_blank">documentation</a> for more details about integrating this theme with various frameworks.</p>
        <p>The source code is available on GitHub. If anything is missing or weird please report it as an issue on <a href="https://github.com/pratikborsadiya/vali-admin" target="_blank">GitHub</a>. If you want to contribute to this theme pull requests are always welcome.</p>
      </div>
    </div>
  </div>
  @endsection