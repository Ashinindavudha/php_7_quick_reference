<?php
$array = json_decode('[
  {
    "color": "red",
    "value": "#f00"
  },
  {
    "color": "green",
    "value": "#0f0"
  },
  {
    "color": "blue",
    "value": "#00f"
  },
  {
    "color": "cyan",
    "value": "#0ff"
  },
  {
    "color": "magenta",
    "value": "#f0f"
  },
  {
    "color": "yellow",
    "value": "#ff0"
  },
  {
    "color": "black",
    "value": "#000"
  }
]
');
?>
<table>
    <tr>
        <th>ID</th>
        <th>Color</th>
        <th>Value</th>
    </tr>
    <tr>
        <?php foreach ($array as $key => $value): ?>
            <td><?= $key ?></td>
            <td><?= $value->color ?></td>
            <td><?= $value->value ?></td>
    </tr>
    <?php endforeach; ?>
</table>
