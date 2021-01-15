<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>PHP OOP 1</title>
    </head>
    <body>

        <?php
        class Movie {

            // dichiarazione variabili

            public $title;
            public $language;
            public $year;


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

        ?>

    </body>
</html>
