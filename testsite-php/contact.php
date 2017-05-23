<?php
  $title = "Contact";

  include_once 'header.php';
?>

<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Contact me!</h1>
            <p>This is an example to show the potential of an offcanvas layout pattern in Bootstrap. Try some responsive-range viewport sizes to see it in action.</p>

            <div class="input-group input-group-lg">
              <span class="input-group-addon" id="sizing-addon1">@</span>
              <input type="text" class="form-control" placeholder="Nome" aria-describedby="sizing-addon1">
              <input type="text" class="form-control" placeholder="Email" aria-describedby="sizing-addon1">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" value="privacy"> Accetto la privacy policy
              </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Invia</button>

          </div>
          <div class="row">


          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="#" class="list-group-item active">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
            <a href="#" class="list-group-item">Link</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->


<?php
  include_once 'footer.php';
?>
