<?php

namespace app\controllers;
use fw\core\App;
use fw\core\base\Controller;
use fw\widgets\language\Language;

class AppController extends Controller
{
  public $menu;
  public $meta = [];

  public function __construct($route)
  {
    parent::__construct($route);
    new \app\models\Main;
    App::$app->setProperty('langs', Language::getLanguages());
    App::$app->setProperty('lang', Language::getLanguage(App::$app->getProperty('langs')));
    // debug(App::$app->getProperties());
  }

  protected function setMeta($title = '', $desc = '', $keywords = '')
  {
    $this->meta['title'] = $title;
    $this->meta['desc'] = $desc;
    $this->meta['keywords'] = $keywords;
  }
}
