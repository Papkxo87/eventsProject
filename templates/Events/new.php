<h1><?= $this->data['new']['caption'] ?></h1>
<img src="public/images/event/<?= $this->data['new']['id'] . '_' . $this->data['new']['picture'] ?>">
<div><?= $this->data['new']['text'] ?></div>
<a href="?type=showevents&action=addlike&event_id=<?= $this->data['new']['id'] ?>"">👍</a>
<?= $this->data['countLike'] ?>
<hr>
<?php
foreach ($this->data['comments'] as $row) {
    echo "<i>$row[text]</i><b>$row[name]</b><br>";
}
?>
<hr>
<?php
if (isset($_SESSION["user"]["code"]) and $_SESSION["user"]["code"] == "user" || "admin") {
    ?>
    <form action="?type=showevents&action=addcomment" method="post">
        <input type="hidden" name="events_id" value="<?= $this->data['new']['id'] ?>">
        <textarea name="text" class="form-control" placeholder="Leave your comment"></textarea>
        <input type="submit" value="ok" class="btn btn-primary">
    </form>
    <?php
}
