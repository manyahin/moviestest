<!DOCTYPE html>
<html>
<head>
  <title>Movies</title>
  <?= HTML::script('/public/js/jquery-2.1.0.min.js'); ?>
  <?= HTML::script('/public/js/jquery.dataTables.min.js'); ?>
  <?= HTML::style('/public/css/site.css'); ?>
  <?= HTML::style('/public/css/demo_table.css'); ?>
</head>
<body>
  <div id="wrapper">

    <h1>Movies</h1>
    
    <div class="table">
      <?=$movie_table;?>  
    </div>  
 
  </div>
  
  <script type="text/javascript">
    $(document).ready(function() {
      $('#movie_table').dataTable({
        "aaSorting": [[ 2, "desc" ]]
      });
    } );
  </script>
</body>
</html>