<table cellpadding="0" cellspacing="0" border="0" id="movie_table" width="100%">
  <thead>
    <tr>
      <th>Title</th>
      <th>Director</th>
      <th>Year</th>
      <th>Keywords</th>
      <th>Rating</th>
    </tr> 
  </thead>
  <tbody>
  <?php
    foreach ($movies as $key => $movie) 
    {  
      $movie_data = [$movie->title, $movie->director, $movie->year, $movie->keywords, $movie->getRating()]; 
      // I don't shure if call model from view it's normal.

      echo '<tr><td class="movie" data-id="' . $movie->id . '">' . implode('</td><td>', $movie_data) . '</td></tr>';
    }
  ?>
  </tbody>
</table>

