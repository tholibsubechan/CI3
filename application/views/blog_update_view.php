
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tholib subechan</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	 <nav class="navbar navbar-expand-md navbar-dark bg-success mb-4">
      <a class="navbar-brand" href="#">Top navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="container"> 
    <div class="row"> 
      <div class="col"> 
        <?php echo  $error ?> 
        <?php echo  validation_errors() ?>
        <?php echo form_open_multipart('Blog/update_view/'.$records[0]['id']);?> 
        <div class="form-group"> 
          <label for="id">Id</label> 
          <input type="text" class="form-control" id="id" name="id" value="<?php echo $records[0]['id'] ?>"> 
          <input type="hidden" name="old_id" value="<?php echo $records[0]['id']?>">
        </div> 
        <div class="form-group"> 
          <label for="author">Author</label> 
          <input type="text" class="form-control" id="author" name="author" value="<?php echo $records[0]['author'] ?>"> 
        </div> 
        <div class="form-group"> 
          <label for="date">Date</label> 
          <input type="date" class="form-control" id="date" name="date" value="<?php echo $records[0]['date'] ?>"> 
        </div> 
        <div class="form-group"> 
          <label for="title">Title</label> 
          <input type="text" class="form-control" id="title" name="title" value="<?php echo $records[0]['title'] ?>"> 
        </div> 
        <div class="form-group"> 
          <label for="content">Content</label> 
          <input type="text" class="form-control" id="content" name="content" value="<?php echo $records[0]['content'] ?>"> 
        </div>
        <img src="<?php echo base_url(); ?>/uploads/<?php echo $records[0]['image_file'] ?>" alt="File Tidak Ada" height="100px" width="100px">
        <div class="form-group"> 
          <label for="image_file">Image</label> 
          <input type = "file" name = "image_file" size = "20" />  
        </div> 
        <input type="submit" name="update" value="Update" class="btn btn-success"> 
      </form> 
    </div> 
  </div> 
</main>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>