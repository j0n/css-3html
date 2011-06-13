<html>
  <head>
    <title>first try</title>
    <link rel="stylesheet" href='css/style.css' />
  </head>
  <body>
    <div class='first'>
      <div id='drop_1'>
        <div id='status'> </div>
      </div>
      <?php for($j = 0;$j<20;$j++){ ?>
        <div id='col_<?php echo $j; ?>'>
      <?php } ?>
        <?php for($i = 0;$i<5;$i++){ ?>
          <span id='character_<?php echo $i; ?>' class='char'></span>
        <?php } ?>
      <?php for($j = 0;$j<20;$j++){ ?>
        </div>
      <?php } ?>
    </div>
  </body>
</html>
