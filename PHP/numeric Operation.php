<!DOCTYPE html>
<html>
<body>

<table align="left" border="1" cellpadding="3" cellspacing="2">
  <tr>
    <td>Function_Name</td>
    <td>Answer</td>
  </tr>

  <?php
  $a = 10;
  $b = 20;

  function table($functionName, $result)
  {
    echo "<tr>";
    echo "<td>$functionName</td>";
    echo "<td>$result</td>";
    echo "</tr>";
  }

  echo "<br>";

  table("min", min($a, $b));

  table("max", max($a, $b));

  function sum($a, $b)
  {
    $result = $a + $b;
    table("sum", $result);
  }

  sum($a, $b);


  function sub($a, $b)
  {
    $result = $a - $b;
    table("sub", $result);
  }

  sub($a, $b);

  function mul($a, $b)
  {
    $result = $a * $b;
    table("mul", $result);
  }

  mul($a, $b);

  function div($a, $b)
  {
    $result = $a / $b;
    table("div", $result);
  }

  div($a, $b);

  function mod($a, $b)
  {
    $result = $a % $b;
    table("mod", $result);
  }

  mod($a, $b);

  function avg($a, $b)
  {
    $result = ($a + $b) / 2;
    table("avg", $result);
  }

  avg($a, $b);
  ?>

</table>

</body>
</html>
