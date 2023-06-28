<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="ja">
        <title>Aikido App</title>
    </head>
    <body>
        <p>
            <?php 
            class Dojo {
                // プロパティを定義する
                private $name;

                // メソッドを定義する
                public function set_name(string $name) {
                    $this->name = $name;
                }

                public function show_name() {
                    echo $this->name . '<br>';
                }
            }

            // インスタンス化する
            $kenshukai = new Dojo();

            $kenshukai->set_name('合気道研修会道場');
            $kenshukai->show_name();
            ?>
        </p>
        <p>
            <?php 
            class User {
                // プロパティを定義する
                private $name;
                private $age;
                private $gender;
                private $rank;
                
                // コンストラクタを定義する
                public function __construct(string $name, int $age, string $gender, string $rank) {
                    $this->name = $name;
                    $this->age = $age;
                    $this->gender = $gender;
                    $this->rank = $rank;
                }
            } 

            // インスタンス化する
            $tanaka = new User('田中', 25, '男性', '五級');
            $sato = new User('佐藤', 40, '女性', '弐段');

            print_r($tanaka);
            echo '<br>';
            print_r($sato);
            ?>
        </p>
    </body>
</html>