<!DOCTYPE html>
<html>
    <head>
        <title>Modus One Page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/wp-content/themes/modus/app.css?v=<?php echo time(); ?>" rel="stylesheet">
    </head>
    <body>
        <header class="container-fluid">
            <div class="container">
              <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                      <img alt="Modus" src="/wp-content/themes/modus/images/MODUS.png">
                    </a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Link</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
            </div>
        </header>
        <section class="container-fluid" id="slider">
            <div class="carousel slide" id="carousel-example-generic" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img alt="First slide [900x500]"  src="/wp-content/themes/modus/images/1.jpg">
                        <div class="carousel-caption">
                            <h3>VESTIBULUM</h3>
                            <p class="hidden-xs">Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="Second slide [900x500]" src="/wp-content/themes/modus/images/2.jpg">
                        <div class="carousel-caption">
                            <h3>Titre 2</h3>
                            <p class="hidden-xs">Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="Third slide [900x500]" src="/wp-content/themes/modus/images/3.jpg">
                        <div class="carousel-caption">
                            <h3>Titre 3</h3>
                            <p class="hidden-xs">Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.</p>
                        </div>
                    </div>
                </div>
                <a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev">
                    <span rel="cadre" class="fa fa-angle-double-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a href="#carousel-example-generic" class="right carousel-control" role="button" data-slide="next">
                    <span rel="cadre" class="fa fa-angle-double-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>
        <section id="services" class="container-fluid">
            <div class="container">
                <header class="col-md-12">
                    <div class="col-md-9">
                        <h1>Some of our top services</h1>
                        <h2>Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.</h2>
                    </div>
                    <div class="col-md-3 viewmore">
                        <p class="btn btn-default">View More</p>
                    </div>
                </header>
                <main class="col-md-12">
                    <article id="un" class="col-md-3">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        <h2>SUSPENDISSE</h2>
                        <p>Quisque id tellus quis risus vehicula vehicula ut turpis. In eros nulla, placerat vitae at, vehicula ut nunc.</p>
                        <a class="btn btn-default" href="#">read more</a>
                    </article>
                    <article id="deux" class="col-md-3">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        <h2>MAECENAS</h2>
                        <p>Ut eleifend libero sed neque rhoncus consequat. Maecenas tincidunt, augue et rutrum condimentum, libero lectus mattis orci, ut commodo.</p>
                        <a class="btn btn-default" href="#">read more</a>
                    </article>
                    <article id="trois" class="col-md-3">
                        <i class="fa fa-flag" aria-hidden="true"></i>
                        <h2>ALIQUAM</h2>
                        <p>Vivamus eget ante bibendum arcu vehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor non.</p>
                        <a class="btn btn-default" href="#">read more</a>
                    </article>
                    <article id="quatre" class="col-md-3">
                        <i class="fa fa-flask" aria-hidden="true"></i>
                        <h2>HABITASSE</h2>
                        <p>Astehicula ultricies. Integer venenatis mattis nisl, vitae pulvinar dui tempor non.</p>
                        <a class="btn btn-default" href="#">read more</a>
                    </article>
                </main>
            </div>
        </section>
        <footer class="container-fluid">
            <div class="container">
                <div id="widget1" class="col-md-4">
                    <figure>
                        <img alt="Modus" src="/wp-content/themes/modus/images/MODUS.png">
                    </figure>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec .</p>
                    <p>phone 182 2569 5896</p>
                    <p>e-mail info@modu.versus</p>
                </div>
                <div id="widget1" class="col-md-3">
                    <h3>Company</h3>
                    <ul>
                        <li>Menu wordpress</li>
                    </ul>
                </div>
                <div id="widget1" class="col-md-3">
                    <h3>Community</h3>
                    <ul>
                        <li>Menu wordpress</li>
                    </ul>
                </div>
                <div id="widget1" class="col-md-2">
                    <h3>from the BLOG</h3>
                    <ul>
                        <li>Articles wordpress</li>
                    </ul>
                </div>
            </div>
            <div id="socialmedia" class="container-fluid">
                <div class="container">
                    <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                      2013  ModusVersus
                    </a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#">Link</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li role="separator" class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
              </nav>
                </div>
            </div>
        </footer>
        <script src="/wp-content/themes/modus/bundle.js"></script>
    </body>
</html>