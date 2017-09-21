<html>
  <head>
    <title>Aplicação Super Legal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar">
      <h1>Trabalhando com a Blade</h1>
    </nav>
    <div class="container-fluid">
      <nav class="sidebar">
        @section('sidebar')
        <p>Conteudo da lateral</p>
        @show
      </nav>
      <main class="col-sm-9 ml-sm-auto col-md-10 pt-3">
        <div class="container">
          
          @yield('content')
        </div>     
      </main>
    </div>
  </body>
</html>