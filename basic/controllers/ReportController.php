<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ReportController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionReport()
    {
        return $this->render('reportconf');
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionSubmit()
    {
        Yii::trace(json_encode($_POST));
        return $this->render('reportconf');
    }
}
