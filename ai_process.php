<?php

// get correct file path
$fileName = $_GET['name'];
$filePath = 'uploads/'.$fileName;


$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://10.2.4.2:63786/DR_AMD_GUC_detection/iMdJXfWHM$f5ecb72d85737bc76ff021a519c934a84841dac838dd1db0ab813beb06afb962',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('file'=> new CURLFile($filePath)),
));

$response = curl_exec($curl);

curl_close($curl);

$img = imagecreatefromstring($response);
    imagejpeg($img,'tempcover.jpg', 100);
?>

<!--HTML-->

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  /* The image used */
  background-image: url("tempcover.jpg");

  /* Full height */
  height: 100%; 

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
</head>
<body>

<div class="bg"></div>

<p>The File will not the saved.</p>

</body>
</html>
