<?
$username = 'shonen.a';
if( !empty($_GET['username']) ) {
    $username = $_GET['username'];
}

header("Content-Type: text/javascript");
echo file_get_contents("http://j.ubeat.info/copious/$username/vs/+AVERAGE/score?fmt=json");
?>
