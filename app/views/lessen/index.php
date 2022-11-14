<?php
//include(APPROOT . "/views/includes/head.php" );
echo $data["title"];
?>
<table>
  <thead>
    <th>Id</th>
    <th>Naam</th>
    <th>Nettowaarde</th>
    <th>Leeftijd</th>
    <th>Bedrijf</th>
  </thead>
  <tbody>
    <?= $data['lessen'] ?>
  </tbody>
</table>
<a href="<?= URLROOT; ?>/homepages/index">terug</a>