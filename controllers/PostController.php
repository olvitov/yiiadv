<?php
/**
 * Created by PhpStorm.
 * User: olvit
 * Date: 22.08.2016
 * Time: 13:38
 */

namespace app\controllers;

use yii\web\Controller;
use app\models\Post;


class PostController extends Controller
{
    public function actionIndex()
    {
      $model = Post::find()->all();
        return $this->render('index',['model' => $model]);
    }

}
