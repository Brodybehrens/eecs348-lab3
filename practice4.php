<?php
  // practice4.php
  // Generates a multiplication table 1..N with row/column headers

  function safeInt($key, $default = null) {
    if (!isset($_GET[$key])) return $default;
    $v = intval($_GET[$key]);
    return $v > 0 ? $v : $default;
  }

  $n = safeInt('n', null);
  if ($n !== null && $n > 100) { $n = 100; } // cap at 100 for safety
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Practice 4 – PHP Multiplication Table</title>
  <style>
    body { font-family: system-ui, Arial, sans-serif; margin: 2rem; }
    form { margin-bottom: 20px; }
    table { border-collapse: collapse; }
    th, td { border: 1px solid #ccc; padding: 6px 10px; text-align: right; }
    th { background: #f5f5f5; }
    .corner { background: #fafafa; }
  </style>
</head>
<body>
  <h1>Practice 4 – PHP Multiplication Table</h1>

  <form method="get" action="practice4.php">
    <label>Enter a positive integer (N):
      <input type="number" name="n" min="1" max="100" required value="<?php echo $n ?? 10; ?>">
    </label>
    <button type="submit">Generate</button>
  </form>

<?php if ($n !== null): ?>
  <table>
    <tr>
      <th class="corner"></th>
      <?php for ($c = 1; $c <= $n; $c++): ?>
        <th><?php echo $c; ?></th>
      <?php endfor; ?>
    </tr>
    <?php for ($r = 1; $r <= $n; $r++): ?>
      <tr>
        <th><?php echo $r; ?></th>
        <?php for ($c = 1; $c <= $n; $c++): ?>
          <td><?php echo $r * $c; ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
<?php endif; ?>
</body>
</html>
