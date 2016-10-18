<?php

namespace app\controllers;

class HelloController extends \yii\web\Controller {

    public function actionFirst() {
        $title = 'Anamai Test';
        $a = 3;
        $b = 5;
        $c = $a * $b;
        return $this->render('first', ['title'=>$title,'c'=>$c]);
    }

}
