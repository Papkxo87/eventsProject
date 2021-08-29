<?php
//print_r($this->data);
?>
<body class="bg-warning">
<div class="block_events_edit">
    <form enctype="multipart/form-data" action="<?= $this->data['action'] ?>" method="post">
        <?php
        unset($this->data["comments"]['picture']);
        foreach ($this->data["comments"] as $field => $value) {
            echo $value . "<br>";
            if ($field == "text") {
                echo "<textarea class='events_text' name='$field'>" . ($this->data['row'][$field] ?? "") . "</textarea><br>";
            } else {
                echo "<input name='$field' value='" . ($this->data['row'][$field] ?? "") . "'><br>";
            }
        }
        ?>
        Прикрепить файл с картинкой<br>
        <input type="file" name="picture"><br><br>
        <input type="submit" value="ok" class="btn btn-primary">
    </form>
</div>
</body>