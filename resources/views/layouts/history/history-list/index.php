<?php

use app\Services\History\HistoryConverter;

$converter = new HistoryConverter($currencies);

foreach ($history as $row):
    ?>
    <p>Конвертация с <strong><?= $converter->getCurrencyName($row->from_currency_id); ?></strong></p>
    <p>Конвертация в <strong><?= $converter->getCurrencyName($row->to_currency_id); ?></strong></p>
    <span>Дата: <strong><?= $row->date ?></strong></span>
    <hr>
<?php endforeach; ?>