<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>PHP基礎編課題</title>
    </head>
    <body>
        <p>
            <?php
            class Food {
                private $name;
                private $price;

                public function show_price() {
                    echo $this->price . '<br>';
                }

                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }
            }

            class Animal {
                private $name;
                private $height;
                private $weight;

                public function show_height() {
                    echo $this->height . '<br>';
                }

                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }
            }

            $ramen = new Food('ラーメン', 1000);
            $shimaenaga = new Animal('シマエナガ', 14, 8);

            print_r($ramen);
            echo '<br>';
            print_r($shimaenaga);
            echo '<br>';

            $ramen->show_price();
            $shimaenaga->show_height();
            ?>
        </p>
    </body>
</html>