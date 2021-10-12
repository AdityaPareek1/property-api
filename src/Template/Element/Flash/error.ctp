<?php
    if (!isset($params['escape']) || $params['escape'] !== false) {
        $message = h($message);
    }
?>
<div class="alert alert-danger alert-dismissible" >
<?= $message ?>
</div>

