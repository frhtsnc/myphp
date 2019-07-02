<!DOCTYPE html>
<!--[if IE 9]><html class="ie9"><![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->
  <head>
    <title>Ferhat Sanuc Tez Calismasi</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <h1>Welcome to an OpenShift Application!</h1>
          <p>The purpose of this application is to discovere Openshift features. We hope you enjoy it!</p>
          <p>configured by Ferhat Sanuc</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h2>Application Information</h2>
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Env Var</th>
                <th>Value</th>
              <tr>
            </thead>
            <tbody>
              <tr>
                <td>Pod IP</td>
                <td><?php echo $_SERVER['SERVER_ADDR'] ?></td>
              </tr>
              <tr>
                <td>Pod Port</td>
                <td><?php echo $_SERVER['SERVER_PORT'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col-md-6 col-md-offset-3">
          <h2>Application Example</h2>
          <p>
            <img src="bluerose.jpeg">
          </p>
        </div>
      </div>
        </div><!-- /col -->
      </div><!-- /row -->
    </div><!-- /container -->
    <script>
      // Initialize Datatables
      $(document).ready( function() {
        $('.datatable').dataTable();
      });
    </script>
  </body>
</html>
