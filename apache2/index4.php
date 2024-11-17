<!-- pengulangan membuat table -->
<!doctype html>
<html>
  <head>
    <title>for table</title>
  </head>
  <body>
    <table border="1" cellspacing="0" cellpadding="10">
      <?php for($i = 1; $i <= 3; $i++) : ?>
        <tr>
          <?php for($j = 1; $j <= 5; $j++) : ?>
            <td><?= "$i,$j"; ?></td>
          <?php endfor; ?>
        </tr>
      <?php endfor; ?>
    </table>
  </body>
</html>