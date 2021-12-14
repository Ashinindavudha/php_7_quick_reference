<?php
$arr = json_decode('[{"var1":"9","var2":"16","var3":"16"},{"var1":"8","var2":"15","var3":"15"}]');
echo gettype($arr);
echo "<br>";
foreach ($arr as $key => $value) {
    echo $value->var1 . '<br>';
    echo $value->var2 . '<br>';
    echo $value->var3 . '<br>';
}
?>
<table>
    <tr>
    <th>Var1</th>
    <th>Var2</th>
    <th>Var3</th>
    <th>Var1</th>
    <th>Var2</th>
    <th>Var3</th>
    </tr>
    <tr>
    <?php foreach ($arr as $key => $value) { ?>
        <td><?php echo $value->var1; ?></td>
        <td><?php echo $value->var2; ?></td>
        <td><?php echo $value->var3; ?></td>
    <?php } ?>
    </tr>
</table>
