<?php

/**
 * This is the model class for table "view_respuesta2".
 *
 * The followings are the available columns in table 'view_respuesta2':
 * @property integer $id_con
 * @property string $nom_contacto
 * @property string $f1
 * @property string $f2
 * @property string $f3
 * @property string $f4
 * @property string $f5
 * @property string $f6
 * @property double $paraHacer
 * @property integer $tsinterminar
 * @property integer $tterminados
 */
class ViewRespuesta2 extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewRespuesta2 the static model class
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
		return 'view_respuesta2';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_con, nom_contacto', 'required'),
			array('id_con, tsinterminar, tterminados', 'numerical', 'integerOnly'=>true),
			array('paraHacer', 'numerical'),
			array('nom_contacto', 'length', 'max'=>255),
			array('f1, f2, f3, f4, f5, f6', 'length', 'max'=>15),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_con, nom_contacto, email, f1, f2, f3, f4, f5, f6, paraHacer, tsinterminar, tterminados', 'safe', 'on'=>'search'),
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
			'id_con' => 'Contacto',
			'nom_contacto' => 'Nombre Contacto',
			'email' => 'Email',
			'f1' => 'Gerencia de estratégia',
			'f2' => 'Gerencia administrativa',
			'f3' => 'Gerencia financiera',
			'f4' => 'Gerencia de talento humano',
			'f5' => 'Gerencia de auditoria interna',
			'f6' => 'Gerencia legal',
			'paraHacer' => 'Total',
			'tsinterminar' => 'Sin terminar',
			'tterminados' => 'Terminado',
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
		$criteria->compare('email',$this->email,true);
		$criteria->compare('f1',$this->f1,true);
		$criteria->compare('f2',$this->f2,true);
		$criteria->compare('f3',$this->f3,true);
		$criteria->compare('f4',$this->f4,true);
		$criteria->compare('f5',$this->f5,true);
		$criteria->compare('f6',$this->f6,true);
		$criteria->compare('paraHacer',$this->paraHacer);
		$criteria->compare('tsinterminar',$this->tsinterminar);
		$criteria->compare('tterminados',$this->tterminados);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}