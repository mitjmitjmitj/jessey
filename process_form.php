<?php

if (!isset($_POST['submit'])) { header("Location: index.html");}

$file = file_get_contents('projects.json');
$project = json_decode($file);
echo 'Project voor verwerking formulier:<br>';
print_r($project);
echo '<br><br>';

$devtype = $_POST['devtype'];
$technique = $_POST['technique'];
$name = $_POST['name'];

$description = $_POST['description'];
$gitlink = $_POST['gitlink'];
$description = $_POST['description'];
$productlink = $_POST['productlink'];

// GIF
$templocation = $_FILES['gif']['tmp_name'];
$giflocation = 'gifs/' . time() . $_FILES['gif']['name'];
$result = move_uploaded_file($templocation, $giflocation);
if ($result) {
    // HIER KOMT DE QUERY WAARMEE HET NIEUWE ADRES VAN DE GIF DE DATABASE IN GAAT
    echo 'GIF succesvol verwerkt.<br><br>';
}

// IMAGE
$templocation = $_FILES['image']['tmp_name'];
$imagelocation = 'images/' . time() . $_FILES['image']['name'];
$result = move_uploaded_file($templocation, $imagelocation);
if ($result) {
    // HIER KOMT DE QUERY WAARMEE HET NIEUWE ADRES VAN DE IMAGE DE DATABASE IN GAAT
    echo 'IMAGE succesvol verwerkt.<br><br>';
}

$project->$devtype->$technique->$name->description = $description;
$project->$devtype->$technique->$name->gitlink = $gitlink;
$project->$devtype->$technique->$name->description = $description;
$project->$devtype->$technique->$name->productlink = $productlink;
$project->$devtype->$technique->$name->gif = $giflocation;
$project->$devtype->$technique->$name->image = $imagelocation;

$json = json_encode($project);
file_put_contents('projects.json', $json);

$file = file_get_contents('projects.json');
$project = json_decode($file);
echo 'Project na verwerking formulier:<br>';
print_r($project);
echo '<br><br>';



