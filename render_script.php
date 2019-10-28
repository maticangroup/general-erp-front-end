<?php

if (isset($scripts)) {
    foreach ($scripts as $script) { ?>
        <script src="<?= $script ?>"></script>
    <?php }
}

