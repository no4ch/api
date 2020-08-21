<?php


namespace app\Services\History;


class HistoryConverter
{
    public $currencies;

    public function getCurrencyName(int $currency_id)
    {
        foreach ($this->currencies as $currency) {
            if ($currency->id == $currency_id){
                return $currency->name;
            }
        }
        return "Не определено";
    }

    public function __construct($currencies)
    {
        $this->currencies = $currencies;
    }
}