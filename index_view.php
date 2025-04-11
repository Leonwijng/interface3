<?php if (isset($errors)) { ?>
    <ul style="color:red;">
        <?php foreach ($errors as $error) { ?>
            <li><?= $error ?></li>
        <?php } ?>
    </ul>
<?php } ?>
