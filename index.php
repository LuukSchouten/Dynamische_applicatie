<?php 
    include 'charconnection.php';
    $maxid = readMaxId();
    $character = readCharacter();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle <?php echo $maxid[0];  ?> characters uit de database</h1>

</header>
<div id="container">
<?php foreach($character as $char){ ?>
    <a class="item" href="<?= "character.php?id=" . $char["id"]; ?>">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $char["avatar"];?>">
        </div>
        <div class="right">
            <h2><?php echo $char["name"];?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $char["health"];?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $char["attack"];?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $char["defense"];?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <?php } ?>
</div>


<footer>&copy; Luuk Schouten 2021</footer>
</body>
</html>