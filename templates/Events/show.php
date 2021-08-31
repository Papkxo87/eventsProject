<?php

use W1020\HTML\Pagination;
use W1020\HTML\Table;

echo "<body class='bg-dark'>";
echo "<div class='mx-auto text-center text-white' style='width: 700px;'>";
echo "<table'>";

foreach ($this->data["table"] as $row) {
    echo "<tr><td><a class='display-3 text-white' href='?type={$this->data['controllerName']}&action=showNews&id=$row[id]'><b>$row[caption]</b><br>";
    echo "<tr><td><img class='event_image' src='public/images/event/$row[id]_$row[picture]'></td></tr>";
    echo "<tr>";
    echo "<td>" . mb_substr($row['text'], 0, 40) . "...</td><br>";
    echo "<tr><td><a href='?type={$this->data['controllerName']}&action=del&id=$row[id]'>❌(delete)</a></td><br>";
    echo "<td><a href='?type={$this->data['controllerName']}&action=showedit&id=$row[id]'>✏(edit)</a></td></tr><br><br><br>";
    echo "</tr>";

}
echo "</table>";
echo "<div class='pagination justify-content-center'>";
echo (new Pagination())
    ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
    ->setPageCount($this->data["pageCount"])
    ->setActivePage($this->data["activePage"])
    ->html();
echo "</div>";
?>

    <a href="?type=<?= $this->data['controllerName'] ?>&action=showadd" class="btn btn-primary">Добавить</a>

<?php
echo "</div>";
echo "</body>";
?>