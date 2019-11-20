<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
          crossorigin="anonymous">

</head>
<html>
<body>

<form action=" upload.php" method="post" enctype="multipart/form-data">
    Choisissez votre fichier<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
                                  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
                                  crossorigin="anonymous">
    <input type="file" name="fileToUpload"  id="fileToUpload">
    <input type="submit" value="Envoyez le fichier" name="submit">
</form>

 <?php
 if(isset($_POST['delete'])){
       unlink("upload/images/".$_POST['image']);

     header('location: index.php');
 }

 $dir = 'upload/images';
 $files_scan = scandir($dir);
 $files = array_diff($files_scan, array('.', '..'));
if (isset($files)) {
          if(is_array($files)){
              foreach ($files as $file){
                  echo '<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                  	<div class="thumbnail">
                  		<img src=upload/images/'.$file.' >
                  		<div class="caption">
                  			<h3>'.$file.'</h3>
                  			<form action="" method="post" role="form">
                  					<input type="hidden"  name="image" value='.$file.' >
                  					<input type="submit" class="btn-danger" name="delete" value="delete">
                  			</form>
                  		</div>
                  	</div>
                  </div>';
              }
          }
      }


?>
</body>
</html>
