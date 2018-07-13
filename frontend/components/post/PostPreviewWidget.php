<?php
/**
 * Created by PhpStorm.
 * User: Lex
 * Date: 29.06.2018
 * Time: 10:56
 */

namespace frontend\components\post;

use yii\base\Widget;
use frontend\components\post\PostPreviewAsset;


class PostPreviewWidget extends Widget
{
    public $title;
    public $link;
    public $img;
    public $text;
    public $section;
    public $section_link;
    public $comments_count;

    public function init()
    {
        parent::init();

        if ($this->title === null || $this->link === null) {
            $this->title = '';
        }
        $this->registerAssets();
    }


    public function run()
    {
        $result = "<a href='{$this->link}'> <div class='post-preview-widget'><div class='post-preview-content-area'>";
        $result .= " <div class='post-preview-img'><img src='{$this->img}' class='post-preview-img'/></div>";
        $result .= "<div class='post-preview-text-area'>
                        <a href='{$this->section_link}' id='post-preview-section-link'><div >{$this->section} </div></a>
                        <div id='post-preview-title'><a href='{$this->link}'> {$this->title}</a></div>
                        <div class='post-preview-text'>{$this->text}</div>";
        if ($this->comments_count > 0) {
            if ($this->comments_count > 2000) {
                $this->comments_count =0.001* ($this->comments_count - $this->comments_count % 1000);
                $this->comments_count = '>' . $this->comments_count . 'k';
            }
            $result .= "<a href='{$this->link}/comments'> <div class='post-preview-comments-count'><div></div>{$this->comments_count}</div></a>";
        }
        $result .= "</div><div style='clear: both;'></div>";

        $result .= "</div></div></a>";
        return $result;
    }

    public function registerAssets()
    {
        $view = $this->getView();
        PostPreviewAsset::register($view);
    }
}