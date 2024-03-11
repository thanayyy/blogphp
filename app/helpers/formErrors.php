<?php
if(count($errors) > 0): ?>
    <div style="color: red; text-decoration-line: underline; ">
        <?php foreach ($errors as $error): ?>
            <li> <?php echo $error; ?></li>
            <?php endforeach; ?>
    </div>
    <?php endif; ?>