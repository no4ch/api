<?php


namespace app\Controllers;


use RedBeanPHP\R;

class HistoryController extends AppController
{
    public function indexAction()
    {
        $this->setMeta('История', 'Описание');

        $history = R::findAll('history', 'ORDER BY date desc');
        $currencies = R::findAll('currency');

        $this->set(compact('currencies', 'history'));
    }

    public function __construct($route)
    {
        parent::__construct($route);
    }
}