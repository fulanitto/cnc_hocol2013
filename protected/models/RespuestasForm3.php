<?php

/**
 * This is the model class for table "respuestas_form3".
 *
 * The followings are the available columns in table 'respuestas_form3':
 * @property integer $id_con
 * @property string $nom_contacto
 * @property string $id_servicio
 * @property string $servicio
 * @property string $fecha_encuesta
 * @property string $pA01
 * @property string $pA02
 * @property string $pA03
 * @property string $PA04
 * @property string $pB01
 * @property string $pB02
 * @property string $pB03
 * @property string $pB04
 * @property string $pB05
 * @property string $pB06
 * @property string $p01
 * @property string $p02
 * @property string $p03
 * @property string $p04
 * @property string $p05
 * @property string $p06
 * @property string $p07
 * @property string $p08
 * @property string $p09
 * @property string $pC01
 * @property string $pD01
 * @property string $pD02
 * @property string $pD03
 */
class RespuestasForm3 extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RespuestasForm3 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'respuestas_form3';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//nuevos
			array('id_con', 'unique'),
			array('pA01, pA02, pA03, PA04, pB01, pB02, pB03, pB04, pB05, pB06, p01, p02, p03, p04, p05, p06, p07, p08, p09, pC01, pD01, pD02, pD03', 'default', 'value'=>'99', 'setOnEmpty'=>true),
			//fin nuevos
			array('id_con, nom_contacto', 'required'),
			array('id_con', 'numerical', 'integerOnly'=>true),
			array('nom_contacto, id_servicio, servicio', 'length', 'max'=>255),
			array('pA01, pA02, PA04, pB01, pB02, pB03, pB04, pB05, pB06, p01, p02, p03, p04, p05, p06, p07, p08, p09, pC01', 'length', 'max'=>45),
			array('pA03, pD01, pD02, pD03', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_con, nom_contacto, id_servicio, servicio, fecha_encuesta, pA01, pA02, pA03, PA04, pB01, pB02, pB03, pB04, pB05, pB06, p01, p02, p03, p04, p05, p06, p07, p08, p09, pC01, pD01, pD02, pD03', 'safe', 'on'=>'search'),
			);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
            'id_con' => 'Id Con',
            'nom_contacto' => 'Nom Contacto',
            'id_servicio' => 'Id Servicio',
            'servicio' => 'Servicio',
            'fecha_encuesta' => 'Fecha Encuesta',
            'pA01' => 'En general su relación con las personas de la <b>Gerencia Financiera</b> se hace a través de qué canal:',
            'pA02' => '¿Cómo califica el manejo dado a la relación por este canal?',
            'pA03' => '¿Hay algo que haga falta en relación a lo que hace la <b>Gerencia Financiera</b>?¿Qué no encuentra? ¿Qué mejoras debe hacer en sus procesos? Qué le hace falta tener en cuenta?',
            'PA04' => '¿Cómo califica usted su nivel de conocimiento sobre lo que hace la <b>Gerencia Financiera</b>?',
            'pB01' => 'Calidad general de la <b>Gerencia Financiera</b>',
            'pB02' => 'Amabilidad de las personas y sus comunicaciones',
            'pB03' => 'Conocimiento, experiencia  o competencia  de las personas que están en los procesos de esta gerencia',
            'pB04' => 'La claridad de la información que suministra',
            'pB05' => 'El cumplimiento de los acuerdos y tiempos',
            'pB06' => 'Tener y utilizar las mejores prácticas, marcos metodológicos y herramientas en sus diferentes procesos',
            'p01' => 'Cuenta conjunta',
            'p02' => 'Apoyo tributario',
            'p03' => 'Tesorería',
            'p04' => 'Planeación Financiera',
            'p05' => 'Gestión de Costos y Presupuesto',
            'p06' => '',
            'p07' => '',
            'p08' => '',
            'p09' => '',
            'pC01' => 'Usted diría que la <b>Gerencia Financiera</b>...',
            'pD01' => 'Para usted, ¿cuál es la característica más importante que debe tener en cuenta la <b>Gerencia Financiera</b>?',
            'pD02' => '¿Qué se está haciendo bien en la <b>Gerencia Financiera</b>?',
            'pD03' => '¿Qué se debe mejorar o qué hace falta hacer en la <b>Gerencia Financiera</b>?',
        );
}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_con',$this->id_con);
		$criteria->compare('nom_contacto',$this->nom_contacto,true);
		$criteria->compare('id_servicio',$this->id_servicio,true);
		$criteria->compare('servicio',$this->servicio,true);
		$criteria->compare('fecha_encuesta',$this->fecha_encuesta,true);
		$criteria->compare('pA01',$this->pA01,true);
		$criteria->compare('pA02',$this->pA02,true);
		$criteria->compare('pA03',$this->pA03,true);
		$criteria->compare('PA04',$this->PA04,true);
		$criteria->compare('pB01',$this->pB01,true);
		$criteria->compare('pB02',$this->pB02,true);
		$criteria->compare('pB03',$this->pB03,true);
		$criteria->compare('pB04',$this->pB04,true);
		$criteria->compare('pB05',$this->pB05,true);
		$criteria->compare('pB06',$this->pB06,true);
		$criteria->compare('p01',$this->p01,true);
		$criteria->compare('p02',$this->p02,true);
		$criteria->compare('p03',$this->p03,true);
		$criteria->compare('p04',$this->p04,true);
		$criteria->compare('p05',$this->p05,true);
		$criteria->compare('p06',$this->p06,true);
		$criteria->compare('p07',$this->p07,true);
		$criteria->compare('p08',$this->p08,true);
		$criteria->compare('p09',$this->p09,true);
		$criteria->compare('pC01',$this->pC01,true);
		$criteria->compare('pD01',$this->pD01,true);
		$criteria->compare('pD02',$this->pD02,true);
		$criteria->compare('pD03',$this->pD03,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
			));
	}
}