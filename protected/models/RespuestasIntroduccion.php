<?php

/**
 * This is the model class for table "respuestas_introduccion".
 *
 * The followings are the available columns in table 'respuestas_introduccion':
 * @property integer $id_con
 * @property string $nom_contacto
 * @property string $id_servicio
 * @property string $servicio
 * @property string $fecha_encuesta
 * @property string $p01_1_1
 * @property string $p01_2_2
 * @property string $p01_3_3
 * @property string $p01_4_4
 * @property string $p01_5_5
 * @property string $p01_6_6
 */
class RespuestasIntroduccion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RespuestasIntroduccion the static model class
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
		return 'respuestas_introduccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_con', 'unique', 'message'=>'Este contacto ya realizó la encuesta de introducción.'),
			array('id_con, nom_contacto', 'required'),
			array('id_con', 'numerical', 'integerOnly'=>true),
			array('nom_contacto, id_servicio, servicio', 'length', 'max'=>255),
			array('p01_1_1, p01_2_2, p01_3_3, p01_4_4, p01_5_5, p01_6_6', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_con, nom_contacto, id_servicio, servicio, fecha_encuesta, p01_1_1, p01_2_2, p01_3_3, p01_4_4, p01_5_5, p01_6_6', 'safe', 'on'=>'search'),
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
			'p01_1_1' => 'Estrategia y Crecimiento',
			'p01_2_2' => 'Administrativa',
			'p01_3_3' => 'Financiera',
			'p01_4_4' => 'Talento Humano',
			'p01_5_5' => 'Auditoría Interna',
			'p01_6_6' => 'Legal',
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
		$criteria->compare('p01_1_1',$this->p01_1_1,true);
		$criteria->compare('p01_2_2',$this->p01_2_2,true);
		$criteria->compare('p01_3_3',$this->p01_3_3,true);
		$criteria->compare('p01_4_4',$this->p01_4_4,true);
		$criteria->compare('p01_5_5',$this->p01_5_5,true);
		$criteria->compare('p01_6_6',$this->p01_6_6,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Carga y devuelve el modelo actual pasando como parámetro el id del contacto
	*/
	public function load($idcon){
		$c=new CDbCriteria;
		$c->compare('id_con',$idcon);
		return $this->model()->find($c);
	}

}