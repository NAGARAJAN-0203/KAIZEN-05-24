<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>yidas/jquery-freeze-table Demo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" class="js-site-favicon" href="https://github.githubassets.com/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/lib/freezetable/narrow-jumbotron.css" rel="stylesheet">
    <!-- Custom style for Freeze Table -->
    <style>
    table {
        font-size: 10pt;
    }
    /* table th,
    .table-fill tr {
      background-color: rgb(255,255,255,1) !important;
    } */
    .clone-head-table-wrap { width: 706px; }
    </style>
</head>
<body>

<div class="container">
  <div class="header clearfix">
    <nav>
      <ul class="nav nav-pills float-right">
        <li class="nav-item">
          <a class="nav-link active" href="#">Demo <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://github.com/yidas/jquery-freeze-table">GitHub</a>
        </li>
      </ul>
    </nav>
    <h3 class="text-muted">jQuery Freeze Table</h3>
  </div>

  <div class="table-basic">
    <table cellspacing="0" id="table-basic" class="table table-sm table-bordered table-striped" style="min-width: 1200px;">
      <thead>
        <tr>
          <th>Company</th>
          <th>Last Trade</th>
          <th>Trade Time</th>
          <th>Change</th>
          <th>Prev Close</th>
          <th>Open</th>
          <th>Bid</th>
          <th>Ask</th>
          <th>1y Target Est</th>
          <th>Lorem</th>
        </tr>
      </thead>
      <tbody>

        <?php for($i=1;$i<300;$i++) { ?>
        <tr>
          <th>GOOG <span class="co-name">Google Inc.</span></th>
          <td>597.74</td>
          <td>12:12PM</td>
          <td>14.81 (2.54%)</td>
          <td>582.93</td>
          <td>597.95</td>
          <td>597.73 x 100</td>
          <td>597.91 x 300</td>
          <td>731.10</td>
          <td>Spanning cell</td>
        </tr>
      <?php } ?>

      </tbody>
    </table>
  </div>





</div> <!-- /container -->

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/lib/freezetable/freeze-table.js"></script>
<script>
$(document).ready(function() {

  $(".table-basic").freezeTable();

  $(".table-scrollable").freezeTable({
    'scrollable': true,
  });

  $('#table-modal').one('shown.bs.modal', function (e) {

    $(this).find(".table-modal").freezeTable({
      'container': '#table-modal.modal',
    });
  });

  $(".table-columns-only").freezeTable({
    'freezeHead': false,
  });

  $(".table-head-only").freezeTable({
    'freezeColumn': false,
  });

  // 2 Columns to be fixed
  $(".table-multi-columns").freezeTable({
    'columnNum' : 2,
  });

  // Shadow enabled
  $(".table-shadow").freezeTable({
    'shadow' : true,
  });

  // Customized styles
  $(".table-wrap-styles").freezeTable({
    'headWrapStyles': {'box-shadow': '0px 9px 10px -5px rgba(159, 159, 160, 0.8)'},
  });

  $(".table-with-scrollbar").freezeTable({
    'scrollBar': true,
  });

  // Freeze Column(s) Keep
  $(".table-column-keep").freezeTable({
    'columnNum' : 2,
    'columnKeep' : true,
  });
});
</script>
</body>
</html>
