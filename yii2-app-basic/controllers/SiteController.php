<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use app\models\RestoranForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }
      public function actionWorkInfo(){
            return $this->render('workInfo');
        }
    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
       //Lab
       public function actionSay($message = '????????????')
       {
           return $this->render('say', ['message' => $message]);
       }
       //Lab
       public function actionEntry()
       {
           $model = new EntryForm();
   
           if ($model->load(Yii::$app->request->post()) && $model->validate()) {
               // ???????????? ?? $model ???????????? ??????????????????
               // ???????????? ??????-???? ???????????????? ?? $model ...
                return $this->render('entry-confirm', ['model' => $model]);
           } else {
               // ???????? ???????????????? ???????????????????????? ???????????? ??????, ???????? ???????? ???????????? ?? ????????????
               return $this->render('entry', ['model' => $model]);
           }
       }
       // Part 1
       public function actionInfo()
       {
        return $this->render('info');
       }


       public function actionLab1()
       {
            $model = new RestoranForm();
   
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // ???????????? ?? $model ???????????? ??????????????????
            // ???????????? ??????-???? ???????????????? ?? $model ...
             return $this->render('lab1-confirm', ['model' => $model]);
            } else {
            // ???????? ???????????????? ???????????????????????? ???????????? ??????, ???????? ???????? ???????????? ?? ????????????
            return $this->render('lab1', ['model' => $model]);
            }
       }

       public function actionLab2()
       {
        return $this->render('lab2');
       }

       public function actionLab3()
       {
        return $this->render('lab3');
       }
}

