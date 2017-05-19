<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP Basic 課題</title>
  </head>
  <body>

    <?php
    print ("<h1>PHPの課題</h1>");
    print ("<h2>計算</h2>");
    $x = 10;
    $y = 20;

    $wa = $x + $y;
    $sa = $x - $y;
    $seki = $x * $y;
    $syou = $x / $y;
    ?>

    <table>
      <tr><td>和</td><td><?php echo $wa; ?></td></tr>
      <tr><td>差</td><td><?php echo $sa; ?></td></tr>
      <tr><td>積</td><td><?php echo $seki; ?></td></tr>
      <tr><td>商</td><td><?php echo $syou; ?></td></tr>
    </table>


    <?php
    print ("<h2>文字列</h2>");
    $base = '21411';
    $personal = '052';

    $ID = $base . $personal;
     ?>
     <p><?php echo $ID; ?></p>

    <?php
    print ("<h2>変数定義のチェック</h2>");
    $X = isset($x);
    $Y = isset($y);
    $Z = isset($z);

     ?>
     <table>
       <tr><td>x</td><td><?php echo $X; ?></td></tr>
       <tr><td>y</td><td><?php echo $Y; ?></td></tr>
       <tr><td>z</td><td><?php echo $Z; ?></td></tr>
     </table>

  </body>
</html>
