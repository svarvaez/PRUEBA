<table>
  <tr>
    <th>Nombre del producto</th>
    <th>Cantidad</th>
    <th>Precio</th>
  </tr>
  <?php
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['nombre_producto'] . "</td>";
    echo "<td>" . $row['cantidad'] . "</td>";
    echo "<td>" . $row['precio'] . "</td>";
    echo "</tr>";
  }
  ?>
</table>
