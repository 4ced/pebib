<?php

namespace app\controllers;

use Yii;
use app\models\Profile;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

use yii\web\UploadedFile;

/**
 * UserController implements the CRUD actions for User model.
 */
class ProfileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionView($id)
    {
        $profileModel = Profile::find()->where('user_id = :id', ['id' => $id])->one();
        if (isset($profileModel)) {
            $model = $profileModel;
            return $this->render('view', [
                'model' => $model,
            ]);
        } else {
            $model = new Profile();
            if ($model->load(Yii::$app->request->post())) {
            // if ($model->load(Yii::$app->request->post()) && $model->save()) {
                $image = UploadedFile::getInstance($model, 'image');
                if (!is_null($image)) {
                  $model->profile_picture_src_filename = $image->name;
                  $ext = pathinfo($image, PATHINFO_EXTENSION);
                  $model->profile_picture_web_filename = Yii::$app->security->generateRandomString() . ".{$ext}";
                  // Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/status/';
                  // $path = Yii::$app->params['uploadPath'] . $model->profile_picture_web_filename;
                  $path = realpath(dirname(__FILE__) . "/../uploads/profile_pictures/") . "/" . $model->profile_picture_web_filename;
                  $image->saveAs($path);
                }
                if ($model->save()) {
                    return $this->redirect(['view', 'id' => $model->user_id]);
                }
                return $this->redirect(['view', 'id' => $model->user_id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        }
    }

    public function actionUpdate($id)
   {
       $model = $this->findModel($id);
       if ($model->load(Yii::$app->request->post())) {
       // if ($model->load(Yii::$app->request->post()) && $model->save()) {
           $image = UploadedFile::getInstance($model, 'image');
           if (!is_null($image)) {
             $model->profile_picture_src_filename = $image->name;
             $ext = pathinfo($image, PATHINFO_EXTENSION);
             // Yii::$app->params['uploadPath'] = Yii::$app->basePath . '/web/uploads/status/';
             // $path = Yii::$app->params['uploadPath'] . $model->profile_picture_web_filename;
             $path = realpath(dirname(__FILE__) . "/../uploads/profile_pictures/") . "/" . $model->profile_picture_web_filename;
             $image->saveAs($path);
           }
           if ($model->save()) {
               return $this->redirect(['view', 'id' => $model->user_id]);
           }
       }
       return $this->render('update', [
           'model' => $model,
       ]);

   }

    /**
     * Finds the Settings model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Settings the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Profile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
