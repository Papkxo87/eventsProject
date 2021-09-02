<?php

use W1020\HTML\Pagination;
use W1020\HTML\Table;

echo "<body class='bg-dark'>";
echo "<div class='mx-auto text-center text-white' style='width: 700px;'>";

echo "<table>";
foreach ($this->data["table"] as $row) {
    echo "<tr><td><br><a class='display-3 text-white' href='?type={$this->data['controllerName']}&action=showNews&id=$row[id]'><br><b>$row[caption]</b>";
    echo "<img class='event_image' src='public/images/event/$row[id]_$row[picture]'><br>";
    echo mb_substr($row['text'], 0, 50) . "...</a></td>";
    echo "</tr>";
}
echo "</table><br><br>";

echo "<div class='pagination justify-content-center'>";
echo (new Pagination())
    ->setUrlPrefix("?type={$this->data['controllerName']}&action=show&page=")
    ->setPageCount($this->data["pageCount"])
    ->setActivePage($this->data["activePage"])
    ->html();
echo "</div>";
echo "</div>";
echo "</body>";

