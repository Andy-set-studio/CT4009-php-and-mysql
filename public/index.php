<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>NPM Uninstall Facebook</title>
  <link rel="stylesheet" href="/css/lib.css" />
  <link rel="stylesheet" href="/css/global.css" />
</head>
<body>
  <div class="wrapper">
    <main>
      <h1 class="heading">Comments</h1>
      <ol class="comments">
        <li>
          <article class="comment">
            <h2 class="comment__heading">Person's name goes here</h2>
            <p class="comment__content">Nullam id dolor id nibh ultricies vehicula ut id elit. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Aenean lacinia bibendum nulla sed consectetur. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Curabitur blandit tempus porttitor.</p>
          </article>
        </li>
      </ol>
      <hr />
      <form method="POST" action="/post-comment.php" class="comment-form boilerform">
        <div>
          <label class="c-label" for="name">Name</label>
          <input type="text" name="name" id="name" class="c-input-field" />
        </div>
        <div>
          <label class="c-label" for="comment">Add a comment</label>
          <textarea name="comment" id="comment" rows="5" class="c-input-field c-input-field--multiline"></textarea>
        </div>
        <div>
          <button type="submit" class="c-button">Submit comment</button>
        </div>
      </form>
    </main>
  </div>
</body> 
</html>
