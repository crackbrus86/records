<?php
    require "../models/Region.php";

    class RegionService
    {
        private $regions;

        public function __construct()
        {
            $this->regions = array(
                new Region(1, "Вінницька", "Він."), new Region(2, "Волинська", "Вол."), new Region(3, "Дніпропетровська", "Дніпр."), new Region(4, "Донецька", "Дон."),
                new Region(5, "Житомирська", "Жит."), new Region(6, "Закарпатська", "Зак."), new Region(7, "Запорізька", "Зап."), new Region(8, "Івано-Франківська", "Ів.-Франк."),
                new Region(9, "Київ", "м. Київ"), new Region(10, "Київська", "Київськ."), new Region(11, "Кіровоградська", "Кіровогр."), new Region(12, "Луганська", "Луг."),
                new Region(13, "Львівська", "Льв."), new Region(14, "Миколаївська", "Мик."), new Region(15, "Одеська", "Од."), new Region(16, "Полтавська", "Полт."),
                new Region(17, "АР Крим", "АР Крим"), new Region(18, "Рівненська", "Рівн."), new Region(19, "Севастополь", "м. Севаст."), new Region(20, "Сумська", "Сум."),
                new Region(21, "Тернопільська", "Терн."), new Region(22, "Харківська", "Харк."), new Region(23, "Херсонська", "Херс."), new Region(24, "Хмельницька", "Хмельн."),
                new Region(25, "Черкаська", "Черк."), new Region(26, "Чернівецька", "Чернів."), new Region(27, "Чернігівська", "Черніг.")
            );
        }

        public function getAll()
        {
            return $this->regions;
        }
    }