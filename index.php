<html>
  <head>
    <title>first try</title>
    <link rel="stylesheet" href='css/style.css' />
  </head>
  <body>
    <div class='first'>
      <?php for($i = 0;$i<20;$i++){ ?>
        <?php for($j = 0;$j<20;$j++){ ?>
            <div id='square_<?php echo $i . '_'.$j; ?>' class='row_<?php echo $i;?> col_<?php echo $j?>' href='#square_<?php echo $i . '_'.$j; ?>'>
        <?php } ?>
      <?php } ?>
      <?php for($i = 1;$i<9;$i++){ ?>
        <span id='character_<?php echo $i;?>' class='char'></span>
      <?php } ?>
      <?php for($i = 0;$i<20;$i++){ ?>
        <?php for($j = 0;$j<20;$j++){ ?>
            </div>
        <?php } ?>
      <?php } ?>
    </div>
  </body>
</html>
