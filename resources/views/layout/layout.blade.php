
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>{{ App\Setting::appName() }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- css -->
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! HTML::style('css/spareparts.css') !!}
    
  </head>

  <body>
    
  <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#">Project name</a> -->
                  <a class="navbar-brand" href="{{ route('spareparts.index') }}" id="nav_systemname_label">{{ App\Setting::appName() }}</a>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>
              {!! Html::linkRoute('spareparts.index', 'Parts Search', array(), array()) !!}
            </li>
            <li>
              {!! Html::linkRoute('monitoring.index', 'Machine Monitoring', array(), array()) !!}
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li>{!! Html::linkRoute('settings.index', 'Settings', array(), array()) !!}</li>
                <li>{!! Html::linkRoute('devices.index', 'Device Maintenance ', array(), array()) !!}</li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>


  <div class="container">
    <div class="content_container">
    @yield('content') 
    </div>
  </div>

  </div>
    <br/>

    <!-- script -->
    {!! Html::script('js/jquery-1.11.3.min.js') !!}
    {!! Html::script('js/bootstrap.js') !!}


    <script type="text/javascript">
    $(document).ready(function() {
      @section('page-script')

      @show
    });
  </script>
  
  </body>

  
</html>
