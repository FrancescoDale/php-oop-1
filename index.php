<?php
        // echo "test";
        // echo "<br>";

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

        $divo = new Movie('Il Divo','italian','2008');

        echo "Film 1";
        echo "<br>";

        echo "Titolo : " . $divo->getMovieTitle();
        echo "<br>";
        echo "Lingua : " . $divo->getMovieLanguage();
        echo "<br>";
        echo "Anno : " . $divo->getMovieYear();
        echo "<br>";

        $film = new Movie('Il Capitale Umano','italian','2014');

        echo "Film 2";
        echo "<br>";

        echo "Titolo : " . $film->getMovieTitle();
        echo "<br>";
        echo "Lingua : " . $film->getMovieLanguage();
        echo "<br>";
        echo "Anno : " . $film->getMovieYear();
        echo "<br>";

?>
