<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Website-To-Webapp</title>
    <link rel="manifest" id="my-manifest-placeholder">
  </head>
  <body>
    <?php
        $name = $_GET['name'];
        $uri = $_GET['uri'];
    ?>
    <script>
        var name = "<?php echo $name; ?>"";
        var uri = "<?php echo $name; ?>"";
        var desc = "<?php echo $name; ?> app generated with Website-To-Webapp";

        var myDynamicManifest = {
        "name": "<?php echo $name; ?>",
        "short_name": "<?php echo $name; ?>",
        "description": "<?php echo $name; ?> app generated with Website-To-Webapp",
        "start_url": "<?php echo $uri; ?>",
        "scope": "<?php echo $name; ?>",
        "background_color": "#000000",
        "theme_color": "#0f4a73",
        }
        const stringManifest = JSON.stringify(myDynamicManifest);
        const blob = new Blob([stringManifest], {type: 'application/json'});
        const manifestURL = URL.createObjectURL(blob);
        document.querySelector('#my-manifest-placeholder').setAttribute('href', manifestURL);
    </script>
  </body>
</html>