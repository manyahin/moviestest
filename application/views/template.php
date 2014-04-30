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

    <div id="comment_form">
      <?=$comment_form;?>
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
          // We know id of first loading movie
          // In furute we are use it for prevent double upload and upload comments

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

      var submit_comment = $('#comment_submit'),
          comment = $('#comment');

      // Set event for change in textarea
      comment.on('input propertychange', function(e) {
        submit_comment.attr('disabled','disabled');
        var val = $(this).val();
        if(val.length > 0)
        {
          submit_comment.removeAttr('disabled');
        }
      });

      submit_comment.on('click', function(e) {
        var val = $('#comment').val(); // it's bad, i know. It's copy of code above.
        if(val.length < 1) return false; // Protect from hackers, who edit html code!
        $.ajax({
          type: 'POST',
          url: '/comments/set/',
          data: {movie_id: last_query_id, text: val} // Our last_query_id
        }).done(function(result) {
          comments.html(result);
        })

      });

    } );
  </script>
</body>
</html>