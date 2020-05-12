<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>All Post</title>
  </head>
  <body>
      <div class="container">
        <h1>All Posts</h1>
        <h3><a href="<?php echo BASE_URL; ?>/postController">Add new post</a>

          <?php foreach($data as $d) : ?>

          <div class="single_post">
            <h1><?php echo $d->title; ?></h1>
            <p><?php echo $d->content; ?></p>
            <p><a style="color:red;font-size:14px;" href="<?php echo BASE_URL; ?>/postController/edit/<?php echo $d->id;?>">Edit</a> | <a style="color:red;font-size:14px;" href="<?php echo BASE_URL; ?>/postController/delete/<?php echo $d->id;?>">Delete</a></p>
          </div>

        <?php endforeach; ?>

      </div>
  </body>
</html>
