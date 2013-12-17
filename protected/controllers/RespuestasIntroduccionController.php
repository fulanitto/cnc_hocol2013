<?php

class RespuestasIntroduccionController extends Controller
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
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
                        	'actions' => array('create','Router',),
                        	'expression' => 'Yii::app()->user->checkAccess("Cliente")',
                        	),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
                        	'actions' => array('Avance', 'AvanceExcel', "TableroControl", 'Pendientes', 'AvanceExcelPendientes'),
                        	'expression' => 'Yii::app()->user->checkAccess("Admin2")',
                        	),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
                        	'actions' => array('create', 'index', 'view', 'update', 'admin', 'delete','Router','Avance', 'TableroControl'),
                        	'expression' => 'Yii::app()->user->checkAccess("Admin1")',
                        	),
                        array('deny', // deny all users
                        	'users' => array('*'),
                        	),
                        );
}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
			));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new RespuestasIntroduccion;
		//obtener el model del usuario
		$user=User::model()->getUserActualModel();
		$model->id_con=$user->id;
		$model->nom_contacto=$user->nombres;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RespuestasIntroduccion']))
		{
			$model->attributes=$_POST['RespuestasIntroduccion'];
			if($model->save())
				$this->redirect(array('router'));
		}

		$this->render('create',array(
			'model'=>$model,
			)
		);
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['RespuestasIntroduccion']))
		{
			$model->attributes=$_POST['RespuestasIntroduccion'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_con));
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
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('RespuestasIntroduccion');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
			));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new RespuestasIntroduccion('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['RespuestasIntroduccion']))
			$model->attributes=$_GET['RespuestasIntroduccion'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return RespuestasIntroduccion the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=RespuestasIntroduccion::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param RespuestasIntroduccion $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='respuestas-introduccion-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

	/**
     * Router
    */
	public function actionRouter(){
        //obtener el model del usuario
		$user=User::model()->getUserActualModel();
        //cargar modelo Introduccion
		$intro=RespuestasIntroduccion::model()->load($user->id);
		if(empty($intro)){
			$this->redirect(array('create'));
		}else{
			$c=new CDbCriteria;
			$c->compare('id_con',$user->id);
			for ($i=1; $i <=6; $i++) {
				$form='p01_'.$i.'_'.$i;
				if($intro->$form){
					//obtener la encuesta
					switch ($i) {
						case '1':
						$encuesta=RespuestasForm1::model()->find($c);
						break;
						case '2':
						$encuesta=RespuestasForm2::model()->find($c);
						break;
						case '3':
						$encuesta=RespuestasForm3::model()->find($c);
						break;
						case '4':
						$encuesta=RespuestasForm4::model()->find($c);
						break;
						case '5':
						$encuesta=RespuestasForm5::model()->find($c);
						break;
						case '6':
						$encuesta=RespuestasForm6::model()->find($c);
						break;
					}
					if(empty($encuesta)){
						//redireccionar
						$url='RespuestasForm'.$i.'/create';
						$this->redirect(array($url));
					}
				}
			}
			$despedida=RespuestasDespedida::model()->find($c);
			if(empty($despedida)){
				//redireccionar
				$this->redirect(array('RespuestasDespedida/create'));
			}
		}
		$this->render('/respuestasDespedida/msgFinal');
	}

	/**
	 * Action para ver el avance de las encuestas
	*/
	public function actionAvance(){
		$model=new ViewRespuesta2('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ViewRespuesta2']))
			$model->attributes=$_GET['ViewRespuesta2'];

		$this->render('admin',array(
			'model'=>$model,
			));
	}

	/**
	 * Action para ver el avance de las encuestas
	*/
	public function actionPendientes(){
		$model=new ViewRespuesta2('search');
		$model->unsetAttributes();  // clear any default values
		$model->tsinterminar = '> 0';
		if(isset($_GET['ViewRespuesta2']))
			$model->attributes=$_GET['ViewRespuesta2'];



		$this->render('admin',array(
			'model'				=>	$model,
			'excel_pendientes' 	=> 	true
			));
	}

	/**
	 * Action para ver el avance de las encuestas
	*/
	public function actionAvanceExcel(){
		$model= ViewRespuesta2::model()->findAll();
		$fileName='Hocol - Avance de encuestas '.date('Y-m-d H:i:s').'.xls';
		Yii::app()->request->sendFile(
			$fileName,
			$this->renderPartial(
				'excelRealizadas',
				array(
					'model'=>$model,
					),
				true)
			);
	}

	/**
	 * Action para ver el avance de las encuestas pendientes
	*/
	public function actionAvanceExcelPendientes(){

		$c = new CDbCriteria;
		$c->compare('tsinterminar',' >0 ');

		$model= ViewRespuesta2::model()->findAll( $c );
		$fileName='Hocol - Encuestas pendientes '.date('Y-m-d H:i:s').'.xls';
		Yii::app()->request->sendFile(
			$fileName,
			$this->renderPartial(
				'excelRealizadas',
				array(
					'model'=>$model,
					),
				true)
			);
	}

	/**
	 * Action para ver el avance de las encuestas
	*/
	public function actionTableroControl(){
		$totales= ViewTotales::model()->find();
		$respuestas=ViewTableroControl::model()->findAll();
		$efectivas=ViewEfectivas::model()->find();
		$this->render('tableroIndicador',array(
			'totales'=>$totales,
			'respuestas'=>$respuestas,
			'efectivas'=>$efectivas,
			)
		);
	}
}
