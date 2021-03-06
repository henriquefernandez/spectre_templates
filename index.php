<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="spectre/dist/spectre.min.css"/>
    <link rel="stylesheet" href="spectre/dist/spectre-exp.min.css"/>
    <link rel="stylesheet" href="spectre/dist/spectre-icons.min.css"/>
    <style>
body { margin-top: 67px; }
.navbar {
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 201;
}
.off-canvas-toggle { margin-right: 8px; }
.off-canvas-toggle i.icon { margin-top: 4px; }
@media (max-width: 960px) { .navbar { z-index: 50; } }
    </style>
  </head>
  <body>
    <header class="p-2 navbar bg-dark">
      <section class="navbar-section">
        <a class="show-lg off-canvas-toggle btn btn-primary btn-action" href="#sidebar-id">
          <i class="icon icon-menu"></i>
        </a>
        <a href="..." class="navbar-brand mr-2 text-light">Spectre.css</a>
        <a href="..." class="btn btn-link text-light">Docs</a>
        <a href="..." class="btn btn-link text-light">GitHub</a>
      </section>
      <section class="navbar-section">
        <div class="input-group input-inline">
          <input class="form-input" type="text" placeholder="search">
          <button class="btn btn-primary input-group-btn"><i class="icon icon-search"></i></button>
        </div>
      </section>
    </header>

    <div class="off-canvas off-canvas-sidebar-show">

      <div id="sidebar-id" class="p-2 off-canvas-sidebar">
        <img src="https://pbs.twimg.com/profile_images/916505702247555072/snfAGDyh.jpg" width="182" class="img-fit-contain img-responsive" alt="...">
        <ul class="nav">
          <div class="divider" data-content="General"></div>
          <li class="nav-item">
            <a href="#">Elements</a>
          </li>
          <li class="nav-item active">
            <a href="#">Layout</a>
            <ul class="nav">
              <li class="nav-item badge" data-badge="8">
                <a href="#">Flexbox grid</a>
              </li>
              <li class="nav-item">
                <a href="#">Responsive</a>
              </li>
              <li class="nav-item">
                <a href="#">Navbar</a>
              </li>
              <li class="nav-item">
                <a href="#">Empty states</a>
              </li>
            </ul>
          </li>
          <div class="divider" data-content="Administration"></div>
          <li class="nav-item">
            <a href="#">Components</a>
          </li>
          <li class="nav-item">
            <a href="#">Utilities</a>
          </li>
        </ul>
      </div>

      <a class="off-canvas-overlay" href="#close"></a>

      <div class="p-2 off-canvas-content">
        <ul class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Home</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Settings</a>
          </li>
          <li class="breadcrumb-item">
            <a href="#">Change avatar</a>
          </li>
        </ul>

        <h2>Something <small>(new)</small></h2>

        <table class="table table-striped table-hover">
          <thead>
            <tr>
              <th>name</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>The Shawshank Redemption</td>
              <td>
                <button class="btn"><i class="icon icon-link"></i></button>
                <button class="btn"><i class="icon icon-edit"></i></button>
                <button class="btn"><i class="icon icon-delete"></i></button>
              </td>
            </tr>
            <tr>
              <td>The Shawshank Redemption</td>
              <td>
                <button class="btn"><i class="icon icon-link"></i></button>
                <button class="btn"><i class="icon icon-edit"></i></button>
                <button class="btn"><i class="icon icon-delete"></i></button>
              </td>
            </tr>
            <tr>
              <td>The Shawshank Redemption</td>
              <td>
                <button class="btn"><i class="icon icon-link"></i></button>
                <button class="btn"><i class="icon icon-edit"></i></button>
                <button class="btn"><i class="icon icon-delete"></i></button>
              </td>
            </tr>
          </tbody>
        </table>


        <form>
          <div class="toast toast-success my-2">
            <button class="btn btn-clear float-right"></button>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </div>
          <fieldset class="p-2 container bg-gray">
            <div class="row">
              <div class="form-group col-6 col-sm-12">
                <label class="form-label" for="input-example-1">Name</label>
                <input class="form-input" type="text" id="input-example-1" placeholder="Name">
              </div>
              <div class="form-group col-6 col-sm-12">
                <label class="form-label" for="input-example-1">Name</label>
                <input class="form-input" type="text" id="input-example-1" placeholder="Name">
              </div>
              <div class="form-group col-6 col-sm-12">
                <label class="form-label" for="input-example-1">Name</label>
                <input class="form-input" type="text" id="input-example-1" placeholder="Name">
              </div>
            </div>

            <div class="row">
              <div class="col-6 col-sm-12">
                <button class="my-2 btn btn-primary float-right">success button</button>
              </div>
            </div>
          </fieldset>
        </form>
        <br>

        <div class="hero hero-sm bg-primary">
          <div class="hero-body">
            <h1>Hello, admin</h1>
            <p>This is a hero example</p>
          </div>
        </div>

        <div class="mt-2 container">
          <div class="columns">
            <div class="column col-3 col-sm-6">
              <div class="panel">
                <div class="panel-header">
                  <div class="panel-title">Comments</div>
                </div>
              </div>
            </div>
            <div class="column col-3 col-sm-6">
              <div class="panel">
                <div class="panel-header">
                  <div class="panel-title">Comments</div>
                </div>
              </div>
            </div>
            <div class="column col-3 col-sm-6">
              <div class="panel">
                <div class="panel-header">
                  <div class="panel-title">Comments</div>
                </div>
              </div>
            </div>
            <div class="column col-3 col-sm-6">
              <div class="panel">
                <div class="panel-header">
                  <div class="panel-title">Comments</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="loading loading-lg"></div>

      </div>

    </div>
  </body>
</html>
