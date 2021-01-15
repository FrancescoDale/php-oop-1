<?php
        echo "test";
        echo "<br>";

        class Movie {

            // dichiarazione variabili

            public $title;
            public $language;
            public $year;

            //costruttore

            function __construct($_title, $_language, $_year) {
                $this->title = $_title;
                $this->language = $_language;
                $this->year = $_year;
            }


            // metodi

            public function getMovieTitle() {
                return $this->title;
            }

            public function getMovieLanguage() {
                return $this->language;
            }

            public function getMovieYear() {
                return $this->year;
            }
        }

        //istanze


?>
