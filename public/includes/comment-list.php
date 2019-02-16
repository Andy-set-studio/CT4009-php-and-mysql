<?php 
  if(empty($comments)) {
    return null;
  }
 ?>

<ol class="comments">
  <li>
    <?php foreach($comments as $comment): ?>
      <article class="comment">
        <h2 class="comment__heading"><?php echo $comment['name']; ?></h2>
        <p class="comment__content"><?php echo $comment['comment']; ?></p>
      </article>
    <?php endforeach; ?>
  </li>
</ol>
<hr />
