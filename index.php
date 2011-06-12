<html>
  <head>
    <title>first try</title>
    <link rel="stylesheet" href='css/style.css' />
  </head>
  <body>
    <div class='first'>
      <?php for($i = 0;$i<10;$i++){ ?>
        <?php for($j = 0;$j<10;$j++){ ?>
            <div id='square_<?php echo $i . '_'.$j; ?>' href='#square_<?php echo $i . '_'.$j; ?>'>
        <?php } ?>
      <?php } ?>
      <div id='character'></div>
      <?php for($i = 0;$i<10;$i++){ ?>
        <?php for($j = 0;$j<10;$j++){ ?>
            </div>
        <?php } ?>
      <?php } ?>
    </div>
  </body>
</html>
