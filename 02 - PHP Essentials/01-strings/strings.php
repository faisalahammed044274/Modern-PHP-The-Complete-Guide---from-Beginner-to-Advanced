<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title><?= $pageTitle; ?></title>
</head>
<body>
    <?php $pageTitle = "String 1"; ?>
    <pre>
        <?php $greet =  'I\'m a PHP Block'; 
        echo $greet . "!!!"; 
        
        echo "<br>";
        $name = "Faisal";
        $subject = "PHP";

        echo 'Hello! I\'m '. $name . ' and I\'m studying ' . $subject;
        
        
        ?>
    </pre>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>