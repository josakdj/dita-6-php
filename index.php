<?php

// echo "test";

$dogs = array(
    array("chihuahua","mexico",20),
    array("husky","siberia",15),
    array("Bulldog","england",10),
    array("sharri","tiron",20)
);

// echo $dogs[0][0] . ": Origin: " . $dogs[0][1] . ", Lifespan: " . $dogs[0][2] . "<br>";
// echo $dogs[1][0] . ": Origin: " . $dogs[1][1] . ", Lifespan: " . $dogs[1][2] . "<br>";
// echo $dogs[2][0] . ": Origin: " . $dogs[2][1] . ", Lifespan: " . $dogs[2][2] . "<br>";
// echo $dogs[3][0] . ": Origin: " . $dogs[3][1] . ", Lifespan: " . $dogs[3][2] . "<br>";

for ($row = 0; $row < count($dogs); $row++){
    echo "<p>Row Number $row</p>";

    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
        echo "<li>" . $dogs[$row][$col] . "</li>";
        // echo $col;
    }
    echo "</ul>";
}

echo "<br>";


$telbrand = array(
    array("iphone",20,10),
    array("samsung",50,40),
    array("hawaei",30,20),
    array("nokia",10,5),
);

for ($row = 0; $row < 4; $row++){

    echo "<ul>";
    for ($col = 0; $col < 3; $col++){
      echo "<table>
      <tr>
        <th>Phone</th>
        <th>In Stock</th>
        <th>Sold</th>
      </tr>
      <tr>
        "<td>" . $telbrand[$row][$col] . "</td>"
        "<td>" . $telbrand[$row][$col] . "</td>"
        "<td>" . $telbrand[$row][$col] . "</td>"
      </tr>
      <tr>
        <td>Centro comercial Moctezuma</td>
        <td>Francisco Chang</td>
        <td>Mexico</td>
      </tr>
    </table>"

    }
    echo "</ul>";
};























