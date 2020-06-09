<?php
        $uri = $_GET['uri'];
        header("Location: ".$uri);
?>
If you aren't redirected, click this link: <a href="<?php echo $uri; ?>">Open app</a>