<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>posts view page</title>
  </head>
  <body>
    <h1>create a new post</h1>
    <p><?php if(!empty($this->flash("success_message","custom_class"))) : $this->flash("success_message","custom_class") ; endif;?></p>
    <h3><a href="<?php echo BASE_URL ?>/postController/posts">Show Posts</a></h3>
    <div class="container">
      <form class="" action="<?php echo BASE_URL; ?>/postController/addPost" method="post">
         <table>
           <tr>
             <td>Post Title</td>
             <td><input type="text" name="title" value="<?php if(!empty($data['title'])) : echo $data['title'] ; endif;?>"><span style="color:red;font-size:14px"><?php if(!empty($data['title_error'])) : echo $data['title_error']; endif;?></span></td>
           </tr>
           <tr>
             <td>Post Content</td>
             <td><textarea name="content" cols="20" rows="6"><?php if(!empty($data['content'])) : echo $data['content'] ; endif;?></textarea><span style="color:red;font-size:14px"><?php if(!empty($data['content_error'])) : echo $data['content_error'] ; endif;?></span></td>
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
