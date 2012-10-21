<!DOCTYPE html>
<html>
    <head>
        <title><?=$title?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=<?=$charset?>">
    </head>
    <body>
        <p>This document's title is "<?= $title ?>".</p>
        <p>The current key count is <?=$key_count?>.</p>
        <p>This is what happens when a value does not exist: <?=$invalid?></p>
        <p>If you use the "@" on it then you get this: "<?=@$invalid?>".</p>
    </body>
</html>
