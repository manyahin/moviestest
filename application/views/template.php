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
    
    <div id="table">
      <?=$movie_table;?>  
    </div>  

    <div id="comments">
      <?=$comments_block;?>
    </div>
 
  </div>
  
  <script type="text/javascript">
    $(document).ready(function() {
      
      // Initialize Datatable with sort
      $('#movie_table').dataTable({
        "aaSorting": [[ 2, "desc" ]]
      });

      var comments = $('#comments'),
          last_query_id = $('#movie_table').find('.movie').first().data('id');

      // Set events to names of movies for load comments
      $('#table').on('click', '.movie', function(e) {
        var movie_id = $(this).data('id');

        if(movie_id.length < 1) return false;
        if(last_query_id == movie_id) return false; // Don't do double query

        $.ajax({
          type: 'GET',
          url: '/comments/get/' + movie_id,
        }).done(function(result) {
          comments.html(result);
          last_query_id = movie_id;
        })
      })

    } );
  </script>
</body>
</html>