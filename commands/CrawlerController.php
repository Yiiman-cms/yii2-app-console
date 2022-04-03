<?php
/**
 * @date_of_create: 4/4/2022 AD 00:48
 */

namespace app\commands;

use duzun\hQuery;

class CrawlerController extends \yii\console\Controller
{
    public function actionGithub(){
            $url='https://github.com/duzun/hQuery.php';
            $hQuery=hQuery::fromURL($url);

            echo 'Fork count is :'.$hQuery->find('#repo-network-counter')->text()."\n";
            echo 'Star count is :'.$hQuery->find('#repo-stars-counter-star')->text()."\n";
            echo 'Readme Header is :'.$hQuery->find('article h1')->text()."\n";

    }
}