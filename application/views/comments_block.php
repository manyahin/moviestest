<h2>Comments: <?=$movie->title;?></h2>

<?php if(count($comments) < 1): ?>
  <p>No comments yet, be the first to comment</p>
<?php else: ?>
  <?php 
  foreach ($comments as $key => $comment):
  ?>
  <div>
    <ul>
      <li><strong>Submitted on:</strong> <?=date('d-m-Y',strtotime($comment->created));?></li>
      <li><strong>Author:</strong> <?=HTML::chars($comment->author);?></li>
      <li><strong>Comment:</strong> <?=HTML::chars($comment->text);?></li>
    </ul>
  </div>
  <?php
  endforeach;
  ?>
<?php endif; ?>