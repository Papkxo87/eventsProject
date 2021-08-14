<?php

use W1020\HTML\Pagination;
use W1020\HTML\Table;

echo "<table>";
foreach ($this->data["table"] as $row) {
    echo "<tr><td><b>$row[caption]</b></td></tr>";
    echo "<tr><td><img class='event_image' src='public/images/event/$row[id]_$row[picture]'></td></tr>";
    echo "<tr>";
    echo "<td>" . mb_substr($row['text'], 0, 10) . "...</td>";
    echo "<tr><td><a href='?type={$this->data['controllerName']}&action=del&id=$row[id]'>❌</a></td>";
    echo "<td><a href='?type={$this->data['controllerName']}&action=showedit&id=$row[id]'>✏</a></td></tr>";
    echo "</tr>";

}
echo "</table>";

echo (new Pagination())
    ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
    ->setPageCount($this->data["pageCount"])
    ->setActivePage($this->data["activePage"])
    ->html();
?>

<a href="?type=<?= $this->data['controllerName'] ?>&action=showadd" class="btn btn-primary">Добавить</a>
