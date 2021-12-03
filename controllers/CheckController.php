<?php

namespace app\controllers;

use app\models\School;
use Yii;
use yii\helpers\Json;
use yii\rest\Controller;
use yii\web\BadRequestHttpException;
use yii\web\Response;

class CheckController extends Controller
{
    /**
     * @var mixed
     */
    private static $PASSWORD = 'zoozezeedie0AezooSheixainai9kaim1yeeLee6toh6dae0iz6Utu5Zaixach5aip3su7Foo4Ieg5poo5aeghahxaeTeengae5ahgahshahshaik1ohphiuZohfuchi';
    public $enableCsrfValidation = false;

    public function actionCheck()
    {
        $p = Json::decode(Yii::$app->request->rawBody);
        if (!is_array($p) || !isset($p['sch_code']) || !isset($p['password']) || $p['password'] != self::$PASSWORD) {
            throw new BadRequestHttpException();
        }

        Yii::$app->response->format = Response::FORMAT_JSON;
        $school = School::findOne(['sch_code' => $p['sch_code']]);
        return ['result' => $school != null, 'sch_name' => $school == null ? '': $school->sch_name, 'sch_category' => $school == null ? '': $school->sch_category, 'sch_type' => $school == null ? '': $school->sch_type];
    }
}