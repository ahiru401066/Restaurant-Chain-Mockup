<?php
// コードベースのファイルのオートロード
spl_autoload_extensions(".php");
spl_autoload_register(function($class) {
    $file = dirname(__DIR__) . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) include($file);
});
// composerの依存関係のオートロード
require_once  '../vendor/autoload.php';

use Helpers\RandomGenerator;

// ユーザーの生成
$users = RandomGenerator::users();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User Profiles</title>
        <style>
            /* ユーザーカードのスタイル */
        </style>
    </head>
    <body>
        <h1>User Profiles</h1>

        <?php foreach ($users as $user): ?>
        <div>
            <?php echo $user->toHTML(); ?>
        </div>
        <?php endforeach; ?>

    </body>
</html>