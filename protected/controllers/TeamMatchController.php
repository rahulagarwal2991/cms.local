<?php

class TeamMatchController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex($id)
	{
		$dataProvider=new CActiveDataProvider('TeamMatch',['criteria'=> ['condition'=> 'one_team_id ='.$id .' or '.'two_team_id ='.$id   ]]);

        $this->render('index',array('dataProvider'=>$dataProvider,));
	}


	public function loadModel($id)
	{
		$model=TeamPlayer::model()->findByPk($id);
		return $model;
	}

}
