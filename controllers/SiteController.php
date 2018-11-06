<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
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

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionCanchas()
    {
        return $this->render('canchas');
    }

    public function actionCancha($idCancha)
    {
        return $this->render('cancha',['idCancha'=>$idCancha]);
    }

    public function actionJugadores(){
        return $this->render('jugadores');
    }

    public function actionPartidos(){
        return $this->render('partidos');
    }

    public function actionPartido($j1,$j2,$fecha,$horaInicio,$horaFin,$resu, $instancia){
        return $this->render('partido',
            [
                'j1'=>$j1,
                'j2'=>$j2,
                'fecha'=>$fecha,
                'horaInicio'=> $horaInicio,
                'horaFin'=> $horaFin,
                'resu'=> $resu,
                'instancia'=> $instancia
            ]);
    }


    public function actionJugador($idJugador, $nombre, $ranking, $pais, $ciudad, $nroPre, $fechaNac){
        return $this->render('jugador',
            [
                'idJugador'=>$idJugador, 
                'nombre'=>$nombre, 
                'ranking'=>$ranking, 
                'pais'=>$pais,
                'ciudad'=>$ciudad,
                'fechaNac'=>$fechaNac,
                'nroPre'=>$nroPre
            ]);
    }

    public function actionBuscarPartidos(){
        return $this->render('buscarPartidos');
    }


}
