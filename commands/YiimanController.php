<?php
/**
 * @date_of_create: 4/2/2022 AD 16:33
 */

namespace app\commands;

use yii\helpers\Console;

class YiimanController extends \yii\console\Controller
{
    /**
     * This is my first action
     *
     * @param  string  $message
     */
    public function actionHello($message='I am Amin'){
        echo $message."\n";
        sleep(2);
        $names=
            [
                'sara',
                'amin',
                'arezoo',
                'zahra',
                'ahmad'
            ];
        $colors=
            [
              Console::FG_YELLOW,
              Console::FG_BLACK,
              Console::FG_BLUE,
              Console::FG_GREEN,
              Console::FG_PURPLE
            ];
        for ($i=0;$i<100;$i++){
            $name=$this->ansiFormat($names[rand(0,4)],$colors[rand(0,4)]);
            echo 'Now, i am '.$name."\n";
        }
        return 0;
    }
}