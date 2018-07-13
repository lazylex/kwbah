<?php

use \frontend\components\table\TableFiveWidget;
use \frontend\components\post\PostPreviewWidget;
$this->title = 'Кинопоиск с блэкджеком и шлюхами';
?>
<div>

    <div style="width: 575px; float: left; display: block; ">
        <div class="main_block_line">Главное</div>

        <?=PostPreviewWidget::widget([
                    'title'=>'Ким Ки Дук и Ко: Что смотреть у корейских классиков и их учеников',
                    'link'=>'#',
                    'img'=>'https://avatars.mds.yandex.net/get-kinopoisk-post-thumb/986012/7e3a2f0a2e8d79825dce1a897781d108/140x105',
                    'text'=>'Секс-терроризм, философские попойки и эмо-реализм. Рассказываем о фильмах главных режиссеров корейского кино и их последователей.',
                    'section'=>'Статьи',
                    'section_link'=>'#sect',
                    'comments_count'=>109,

        ]);?>

        <?=PostPreviewWidget::widget([
            'title'=>'Режиссер «Рэмпейджа» экранизирует фантастический комикс «В небо»',
            'link'=>'#',
            'img'=>'https://avatars.mds.yandex.net/get-kinopoisk-post-thumb/1348084/45785cc014a992b8c606a863600065bc/140x105',
            'text'=>'Шоураннер <a href="#">«Люцифера»</a> напишет сценарий адаптации.',
            'section'=>'Новости',
            'section_link'=>'#sect',

        ]);?>

        <?=PostPreviewWidget::widget([
            'title'=>'Мир Стивена Кинга и Эми Адамс против маньяка: Сериалы июля',
            'link'=>'#',
            'img'=>'https://avatars.mds.yandex.net/get-kinopoisk-post-thumb/879158/8b3e01abd027ba08845da0a678ecc0ed/140x105',
            'text'=>'Хотя середина лета скупа на телевизионные премьеры, среди них есть несколько настоящих хитов.',
            'section'=>'Новости',
            'section_link'=>'#sect',
            'comments_count'=>19,

        ]);?>

        <?=PostPreviewWidget::widget([
            'title'=>'Квентин Тарантино разрыдался после просмотра ремейка «Суспирии»',
            'link'=>'#',
            'img'=>'https://avatars.mds.yandex.net/get-kinopoisk-post-thumb/1348084/6f8cfe2c9a2ed1805c08a26e3b1c80b4/140x105',
            'text'=>'Знаменитый постановщик очень тепло принял современную версию классического фильма ужасов.',
            'section'=>'Новости',
            'section_link'=>'#sect',
            'comments_count'=>5,

        ]);?>

        <?=PostPreviewWidget::widget([
            'title'=>'Скарлетт Йоханссон вновь поработает с режиссером «Призрака в доспехах»',
            'link'=>'#',
            'img'=>'https://avatars.mds.yandex.net/get-kinopoisk-post-thumb/986012/5d444497689448c548d26fd2a845ca78/140x105',
            'text'=>'Руперт Сандерс поставит картину о женщине, добившейся небывалого успеха в криминальном мире Питтсбурга.',
            'section'=>'Новости',
            'section_link'=>'#sect',
            'comments_count'=>3,

        ]);?>

         <div class="main_block_line">Популярные трейлеры</div>

    </div>
    <div style="width: 240px; float: right; display: block; ">

        <?= TableFiveWidget::widget([
            'title' => 'Лучшие фильмы - Тор 250',
            'link' => '#',
            'bottom_link_text' => 'лучшие фильмы',
            'items' => [
                ['link' => '#', 'number' => 45, 'text' => 'Хатико: Самый верный друг', 'text-en' => 'Hachi: A Dog\'s Tale', 'value' => '8.439'],
                ['link' => '#', 'number' => 46, 'text' => 'Эта замечательная жизнь', 'text-en' => 'It\'s a Wonderful Life', 'value' => '8.433'],
                ['link' => '#', 'number' => 47, 'text' => 'Огни большого города', 'text-en' => 'City Lights', 'value' => '8.431'],
                ['link' => '#', 'number' => 48, 'text' => 'Хороший, плохой, злой', 'text-en' => 'Il buono, il brutto, il cattivo', 'value' => '8.427'],
                ['link' => '#', 'number' => 49, 'text' => 'Унесённые призраками', 'text-en' => 'Sen to Chihiro no kamikakushi', 'value' => '8.425'],
            ],
        ]); ?>

        <?= TableFiveWidget::widget([
            'title' => 'Ожидаемые фильмы',
            'link' => '#',
            'items' => [
                ['link' => '#', 'number' => 19, 'text' => 'Капитан Марвел', 'text-en' => 'Captain Marvel', 'value' => '87.74%'],
                ['link' => '#', 'number' => 20, 'text' => 'Аватар 3', 'text-en' => 'Avatar 3', 'value' => '87.72%'],
                ['link' => '#', 'number' => 21, 'text' => 'Звездные войны: Эпизод 9', 'text-en' => 'Star Wars: Episode IX', 'value' => '87.69%'],
                ['link' => '#', 'number' => 22, 'text' => 'Лига справедливости: Часть 2', 'text-en' => 'Justice League Part Two', 'value' => '86.21%'],
                ['link' => '#', 'number' => 23, 'text' => 'Аватар 4', 'text-en' => 'Avatar 4', 'value' => '86.04%'],
            ],
        ]); ?>

        <?= TableFiveWidget::widget([
            'img' => 'speaker',
            'title' => 'Новые рецензии',
            'little_title' => 'всего',
            'link' => '#',
            'bottom_link_text' => 'все рецензии',
            'items' => [
                ['link' => '#', 'text' => 'Миссия «Серенити»', 'text-en' => 'Serenity', 'value' => '118'],
                ['link' => '#', 'text' => 'Данвичский ужас', 'text-en' => 'The Dunwich Horror', 'value' => '10'],
                ['link' => '#', 'text' => 'Хлебоутки', 'text-en' => 'Breadwinners', 'value' => '8'],
                ['link' => '#', 'text' => 'Слуги сатаны', 'text-en' => 'Pengabdi Setan', 'value' => '1'],
                ['link' => '#', 'text' => 'Тихое место', 'text-en' => 'A Quiet Place', 'value' => '107'],
            ],
        ]); ?>

        <?= TableFiveWidget::widget([
            'img' => 'corn',
            'title' => 'Сегодня в кино',
            'little_title' => 'рейтинг',
            'link' => '#',
            'bottom_link_text' => 'афиша',
            'items' => [
                ['link' => '#', 'text' => '8 подруг Оушена', 'text-en' => 'Ocean\'s Eight', 'value' => '6.686'],
                ['link' => '#', 'text' => 'Суперсемейка 2', 'text-en' => 'Incredibles 2', 'value' => '7.584'],
                ['link' => '#', 'text' => 'Во власти стихии', 'text-en' => 'Adrift', 'value' => '7.068'],
                ['link' => '#', 'text' => 'Ты водишь!', 'text-en' => 'Tag', 'value' => '6.838'],
                ['link' => '#', 'text' => 'Распрекрасный принц', 'text-en' => 'Charming', 'value' => '6.000'],
            ],
        ]); ?>

        <?= TableFiveWidget::widget([
            'img' => 'corn',
            'title' => 'Скоро в кино',
            'little_title' => 'премьера',
            'link' => '#',
            'bottom_link_text' => 'премьеры',
            'items' => [
                ['link' => '#', 'text' => 'Человек-муравей и Оса', 'text-en' => 'Ant-Man and the Wasp', 'value' => '05.07'],
                ['link' => '#', 'text' => 'Монстры на каникулах 3: Море зовёт', 'text-en' => 'Hotel Transylvania 3: Summer Vacation', 'value' => '12.07'],
                ['link' => '#', 'text' => 'Клуб миллиардеров', 'text-en' => 'Billionaire Boys Club', 'value' => '19.07'],
                ['link' => '#', 'text' => 'Миссия невыполнима: Последствия', 'text-en' => 'Mission: Impossible - Fallout', 'value' => '26.07'],
                ['link' => '#', 'text' => 'Опасная игра Слоун', 'text-en' => 'Miss Sloane', 'value' => '02.08'],
            ],
        ]); ?>

        <?= TableFiveWidget::widget([
            'title' => 'Популярные фильмы',
            'link' => '#',
            'bottom_link_text' => 'еще фильмы',
            'items' => [
                ['link' => '#', 'number' => 1, 'text' => 'Ты водишь!', 'text-en' => 'Tag',],
                ['link' => '#', 'number' => 2, 'text' => 'Убийца 2. Против всех', 'text-en' => 'Sicario 2: Soldado', 'value' => ' + 2'],
                ['link' => '#', 'number' => 3, 'text' => '8 подруг Оушена', 'text-en' => 'Ocean\'s Eight', 'value' => ' - 1'],
                ['link' => '#', 'number' => 4, 'text' => 'Во власти стихии', 'text-en' => 'Adrift', 'value' => ' - 1'],
                ['link' => '#', 'number' => 5, 'text' => 'Суперсемейка 2', 'text-en' => 'Incredibles 2', ],
            ],
        ]); ?>

        <?= TableFiveWidget::widget([
            'title' => 'Популярные имена',
            'link' => '#',
            'bottom_link_text' => 'еще имена',
            'items' => [
                ['link' => '#', 'number' => 1, 'text' => 'Шейлин Вудли', 'text-en' => 'Shailene Woodley', ],
                ['link' => '#', 'number' => 2, 'text' => 'Марго Робби', 'text-en' => 'Margot Robbie', 'value' => ' + 34'],
                ['link' => '#', 'number' => 3, 'text' => 'Изабела Монер', 'text-en' => 'Isabela Moner', 'value' => ' + 8'],
                ['link' => '#', 'number' => 4, 'text' => 'Сэм Клафлин', 'text-en' => 'Sam Claflin', 'value' => ' + 3'],
                ['link' => '#', 'number' => 5, 'text' => 'Дуэйн Джонсон', 'text-en' => 'Dwayne Johnson', 'value' => ' + 55'],
            ],
        ]); ?>

    </div>
    <div style="clear: both;"></div>

</div>