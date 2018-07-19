<?php

class SiteController extends Controller
{

    public $layout='//layouts/column2';

    public function accessRules()
    {
        return array(
            array('allow',
                'actions'=>array('index','view','create','update','admin','delete'),
                'users'=>array('*'),
            )
        );
    }

    /**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
        $model=new Team('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Team']))
            $model->attributes=$_GET['Team'];

        $this->render('index',array(
            'model'=>$model,
        ));

		//$this->render('index',['model'=>Team::model()]);
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
            'model'=>Team::model()->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model=new Team;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Team']))
        {
            $model->attributes=$_POST['Team'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->team_id));
        }

        $this->render('create',array(
            'model'=>$model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model=Team::model()->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if(isset($_POST['Team']))
        {
            $model->attributes=$_POST['Team'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->team_id));
        }

        $this->render('update',array(
            'model'=>$model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        Team::model()->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }
    public function loadModel($id)
    {
        $model=Team::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Team $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='team-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}