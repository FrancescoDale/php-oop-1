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

        echo "<p>Film 1 </p>";


        echo "<p>Titolo : " . $divo->getMovieTitle() . "</p>";

        echo "<p>Lingua : " . $divo->getMovieLanguage() . "</p>";

        echo "<p>Anno : " . $divo->getMovieYear() . "</p>";


        $film = new Movie('Il Capitale Umano','italian','2013');

        echo "<p>Film 2 </p>";


        echo "<p>Titolo : " . $film->getMovieTitle() . "</p>";

        echo "<p>Lingua : " . $film->getMovieLanguage() . "</p>";

        echo "<p>Anno : " . $film->getMovieYear() . "</p>";


?>
