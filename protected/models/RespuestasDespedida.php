<?php

/**
 * This is the model class for table "respuestas_despedida".
 *
 * The followings are the available columns in table 'respuestas_despedida':
 * @property integer $id_con
 * @property string $nom_contacto
 * @property string $id_servicio
 * @property string $servicio
 * @property string $fecha_encuesta
 * @property string $p01
 * @property string $p02
 */
class RespuestasDespedida extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RespuestasDespedida the static model class
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
		return 'respuestas_despedida';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_con', 'unique'),
			array('id_con, nom_contacto, p01', 'required'),
			array('id_con', 'numerical', 'integerOnly'=>true),
			array('nom_contacto, id_servicio, servicio', 'length', 'max'=>255),
			array('p01', 'length', 'max'=>45),
			array('p02', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_con, nom_contacto, id_servicio, servicio, fecha_encuesta, p01, p02', 'safe', 'on'=>'search'),
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
			'p01' => 'Nos autoriza compartir sus datos personales al entregar los resultados?',
			'p02' => 'Para terminar por favor dígame hay algo adicional que desee comunicar o  sobre este formulario?',
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
		$criteria->compare('p01',$this->p01,true);
		$criteria->compare('p02',$this->p02,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}