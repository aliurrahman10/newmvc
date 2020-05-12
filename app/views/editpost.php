<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Posts</title>
  </head>
  <body>
    <h1>Update Post</h1>
    <h3><a href="<?php echo BASE_URL; ?>/postController">Add new post</a>
    <div class="container">
      <form class="" action="<?php echo BASE_URL; ?>/postController/updatePost/<?php echo $data[0]->id; ?>" method="post">
         <table>
           <tr>
             <td>Post Title</td>
             <td><input type="text" name="title" value="<?php echo $data[0]->title; ?>"><span style="color:red;font-size:14px"><?php if(!empty($data['title_error'])) : echo $data['title_error'] ; endif;?></span></td>
           </tr>
           <tr>
             <td>Post Content</td>
             <td><textarea name="content" cols="20" rows="6"><?php echo $data[0]->content; ?></textarea><span style="color:red;font-size:14px"><?php if(!empty($data['content_error'])) : echo $data['content_error'] ; endif;?></span></td>
           </tr>
           <tr>
             <td></td>
             <td><input type="submit" value="post"></td>
           </tr>
         </table>
      </form>
    </div>

  </body>
</html>
