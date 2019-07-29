<?php if (isset($_POST['site'])){header("Location: {$_POST['site']}");
   	// echo $_POST['site'].'</br>';
}?>

 <form action="index.php" method="post">
    <p><input name="site" type="radio" value="https://www.youtube.com/"> Youtube</p>
    <p><input name="site" type="radio" value="https://google.ua"> Google</p>
    <p><input name="site" type="radio" checked="checked" value="https://www.hltv.org/"> HLTV</p>
    <p><input type="submit" value="Go to the website"></p>
 </form> 