<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "testing_kim";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
// if ($conn) {
//     echo "<script>alert('connected');</script>";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testing PHP</title>
</head>

<body>
    <?php
    $name = 'kim';

    function writeMsg(int $num1,int $num2)
    {
        return $num1 + $num2;
        // return $p;
    }

    for ($i=0;$i<14;$i++) {
        echo '{'.$i.'}';
    }
    ?>
    <h1>Testing Kimmy and my name is <?php echo ($i == 10) ? 'Ten' : 'Not ten'; ?></h1>
    <p>sldlskdlskd</p>
</body>

</html>