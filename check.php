<?php

session_start();
require __DIR__ . '/vendor/autoload.php';

use Google\Cloud\Vision\VisionClient;

$vision = new VisionClient(['keyFile'=> json_decode(file_get_contents("key.json"), true)]);

$familyPhotoResource = fopen($_FILES['image']['tmp_name'], 'r');

$image = $vision->image($familyPhotoResource,['FACE_DETECTION', 'WEB_DETECTION']);

$result = $vision->annotate($image);

if($result){
  
} else{
    header("location: ai");
    die();
}
$faces = $result->faces();
$web = $result->web();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Machine Learning Vision</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body,html{
            height: 100%;
        }
        .bg{
            background-image: url("");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>

</head>
       <a href="https://university-277504.ts.r.appspot.com/">Universities in Australia</a>
<body class="bg">
        <div class="container">
        <br><br><br>
            <div class= "row">
                <div class="col-md-6 offset-md-3" style="margin: auto; background: white; padding: 20px; box-shadow: 10px 10px 5px #888">
                    <div class= "panel-heading">
                        <h2>AI Vision</h2>
                        <p style="font-style: italic;">Hello, this is AI want to help you with your image</p>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-face" role="tabpanel" aria-labelledby="pills-labels-tab">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5>Entities</h5>
                                            <hr>
                                            <ol>
                                                <?php foreach ($web->entities() as $key => $entity): ?>
                                                    <li><h6><?php echo ucfirst($entity->info()['description']) ?></h6> Confidance: <strong><?php echo number_format($entity->info()['score'] * 100, 2) ?></strong></li>
                                                <?php endforeach ?>
                                            </ol>
                                            <br><br><br>
                                            <h5>Pages</h5>
                                            <hr>
                                            <ol>
                                                <?php foreach($web->pages() as $key => $page): ?>
                                                    <li><a href="<?php echo $page->info()['url'] ?>"><?php echo $page->info()['url']; ?></a></li>
                                                <?php endforeach ?>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>