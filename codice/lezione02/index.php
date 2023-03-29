<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lezione 02</title>
</head>
<body>
    <?php

// $nani = array('pisolo', 'eolo', "cucciolo", 'mammolo','gongolo','brontolo','dotto');
$nani = ['pisolo', 'eolo', "cucciolo", 'mammolo','gongolo','brontolo','dotto'];
if ( isset($_GET['ottavo']) ){
	$nani[] = $_GET['ottavo'];
}


for ($i=0; $i < count($nani); $i++) {
	echo "<h2>$nani[$i]</h2>";
}

?>
</body>
</html>