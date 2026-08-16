<?php

require __DIR__ . '/vendor/autoload.php';

$config = require __DIR__ . '/config/db.php';
$db = new yii\db\Connection($config);

try {
    $db->open();
    echo "✅ Подключение к БД успешно!\n";
} catch (\Exception $e) {
    echo "❌ Ошибка: " . $e->getMessage() . "\n";
}
