<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 29.06.2018
 * Time: 10:56
 */

namespace frontend\components\table;

use yii\base\Widget;

class TableFiveWidget extends Widget
{
    private $result;
    private $offset = ['rate' => 494, 'dvd' => 152, 'speaker' => 456, 'corn' => 418];
    public $title;
    public $little_title;
    public $items = [];
    public $bottom_link_text;
    public $link;
    public $img;

    public function init()
    {
        parent::init();


        if ($this->img === null || !isset($this->offset[$this->img])) {
            $this->offset = $this->offset['rate'];
        } else
            $this->offset = $this->offset[$this->img];

        if ($this->title === null) {
            $this->title = '';
        }

        if ($this->bottom_link_text === null) {
            $this->bottom_link_text = $this->title;
        }

        if ($this->little_title === null) {
            $this->little_title = '';
        }
        foreach ($this->items as &$item) {
            if (!isset($item['number']) || $item['number'] === null || strlen($item['number']) < 1)
                $item['number'] = '&nbsp&nbsp<strong>▪</strong>';
            else
                $item['number'] .= '.';
            if (!isset($item['value']))
                $item['value'] = '';

            if (strpos($item['value'], ' + ') !== false)
                $item['value'] = '<span style="color: green !important;">' . $item['value'] . '</span>';
            if (strpos($item['value'], ' - ') !== false)
                $item['value'] = '<span style="color: red !important;">' . $item['value'] . '</span>';

            if (strlen($item['text']) > 50)
                $item['text'] = str_replace(':', ':<br>', $item['text']);
            if (strlen($item['text-en']) > 50)
                $item['text'] = str_replace(':', ':<br>', $item['text-en']);
        }
        $this->registerAssets();
    }


    public function run()
    {

        if ($this->items === null)
            return '';
        $this->result .= '<div class="table-five-widget">';
        $this->result .= "<div class='table-five-title-row' style='background-position: 0px {$this->offset}px;'><div class='table-five-title-text'>{$this->title}<div class='table-five-title-little-text'>{$this->little_title}</div></div></div>";
        foreach ($this->items as $item) {
            $this->result .=
                '<a href="' . $item['link'] . '"><div class="table-five-row">'
                . '<div class="col col-xs-1 table-five-numeric-text block block-left">' . $item['number'] . '</div>'
                . '<div class="col col-xs-9 block">'
                . '<div class="table-five-link-text">' . $item['text'] . '</div>'
                . '<div class="table-five-aux-text">' . $item['text-en'] . '</div>'
                . '</div>'
                . '<div  class="col col-xs-1 table-five-numeric-text block-right block " >' . $item['value'] . '</div><div style="clear: both;">'
                . '</div></a></div>';
        }
        $this->result .= "<div class='table-five-bottom-link-text'><a href='{$this->link}'>{$this->bottom_link_text}</a> »</div></div>";
        return $this->result;
    }

    public function registerAssets()
    {
        $view = $this->getView();
        TableFiveAsset::register($view);
    }
}