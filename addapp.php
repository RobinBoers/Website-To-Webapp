<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website-To-Webapp</title>
    <link rel="manifest" id="my-manifest-placeholder">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-status-bar" content="#db4938" />
    <meta name="theme-color" content="#db4938" />
    <style>
        html, body {
            background-color: royalblue;
            margin: 0;
            font-family: sans-serif;
            color: white;
        }
    </style>
  </head>
  <body>
    <?php
        $name = $_GET['name'];
        $uri = $_GET['uri'];
    ?>
    <main><center>

    <p><b>1. </b>Click on the bottom of the screen on &nbsp; <img style="height: 25px;" src="https://geheimesite.nl/app/IMG_3056.PNG"></p>

    <img src="https://geheimesite.nl/app/IMG_3054.PNG">
    <p><b>2. </b>Click on 'Add to homescreen'</p>

    <img src="https://geheimesite.nl/app/IMG_3055.PNG">
    <p><b>3. </b>Click on 'Add'</p>
    
    </center></main>
    <script>
        var name = "<?php echo $name; ?>";
        var uri = "<?php echo $uri; ?>";
        var desc = "<?php echo $name; ?> app generated with Website-To-Webapp";

        var myDynamicManifest = {
        "name": "<?php echo $name; ?>",
        "short_name": "<?php echo $name; ?>",
        "description": "<?php echo $name; ?> app generated with Website-To-Webapp",
        "start_url": "https://geheimesite.nl/library/projects/Website-To-Webapp/app.php?uri=<?php echo $uri; ?>",
        "background_color": "#000000",
        "display": "standalone",
        "theme_color": "#0f4a73",
        }
        const stringManifest = JSON.stringify(myDynamicManifest);
        const blob = new Blob([stringManifest], {type: 'application/json'});
        const manifestURL = URL.createObjectURL(blob);
        document.querySelector('#my-manifest-placeholder').setAttribute('href', manifestURL);
    </script>
  </body>
</html>