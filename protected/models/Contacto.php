<?php

/**
 * This is the model class for table "contacto".
 *
 * The followings are the available columns in table 'contacto':
 * @property integer $id_corto
 * @property integer $cod_empleado
 * @property string $cedula
 * @property string $VP
 * @property string $id_vp
 * @property string $nom_contacto
 * @property string $unidad
 * @property string $id_unidad
 * @property string $nom_servicio
 * @property string $id_servicio
 * @property string $Nivel
 * @property string $id_Nivel
 * @property string $canal_de_ingreso
 * @property string $negocio
 * @property string $mes
 * @property string $grupo_de_inter
 * @property string $telefono
 * @property string $celular
 * @property string $ext
 * @property string $email
 * @property string $fec_ini
 * @property string $fec_fin
 * @property string $División_de_personal
 * @property string $id_División_de_personal
 * @property string $ciudad
 * @property string $variable1
 * @property string $variable2
 * @property string $variable3
 * @property string $nom_empresa
 */
class Contacto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Contacto the static model class
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
		return 'contacto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cod_empleado', 'required'),
			array('id_corto, cod_empleado', 'numerical', 'integerOnly'=>true),
			array('cedula, VP, id_vp', 'length', 'max'=>50),
			array('nom_contacto', 'length', 'max'=>200),
			array('unidad, id_unidad, nom_servicio, id_servicio, Nivel, canal_de_ingreso, negocio, mes, grupo_de_inter, telefono, celular, ext, fec_ini, fec_fin, División_de_personal, nom_empresa', 'length', 'max'=>100),
			array('id_Nivel, id_División_de_personal, ciudad, variable1, variable2, variable3', 'length', 'max'=>20),
			array('email', 'length', 'max'=>400),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_corto, cod_empleado, cedula, VP, id_vp, nom_contacto, unidad, id_unidad, nom_servicio, id_servicio, Nivel, id_Nivel, canal_de_ingreso, negocio, mes, grupo_de_inter, telefono, celular, ext, email, fec_ini, fec_fin, División_de_personal, id_División_de_personal, ciudad, variable1, variable2, variable3, nom_empresa', 'safe', 'on'=>'search'),
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
			'id_corto' => 'Id Corto',
			'cod_empleado' => 'Cod Empleado',
			'cedula' => 'Cedula',
			'VP' => 'Vp',
			'id_vp' => 'Id Vp',
			'nom_contacto' => 'Nom Contacto',
			'unidad' => 'Unidad',
			'id_unidad' => 'Id Unidad',
			'nom_servicio' => 'Nom Servicio',
			'id_servicio' => 'Id Servicio',
			'Nivel' => 'Nivel',
			'id_Nivel' => 'Id Nivel',
			'canal_de_ingreso' => 'Canal De Ingreso',
			'negocio' => 'Negocio',
			'mes' => 'Mes',
			'grupo_de_inter' => 'Grupo De Inter',
			'telefono' => 'Telefono',
			'celular' => 'Celular',
			'ext' => 'Ext',
			'email' => 'Email',
			'fec_ini' => 'Fec Ini',
			'fec_fin' => 'Fec Fin',
			'División_de_personal' => 'División De Personal',
			'id_División_de_personal' => 'Id División De Personal',
			'ciudad' => 'Ciudad',
			'variable1' => 'Variable1',
			'variable2' => 'Variable2',
			'variable3' => 'Variable3',
			'nom_empresa' => 'Nom Empresa',
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

		$criteria->compare('id_corto',$this->id_corto);
		$criteria->compare('cod_empleado',$this->cod_empleado);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('VP',$this->VP,true);
		$criteria->compare('id_vp',$this->id_vp,true);
		$criteria->compare('nom_contacto',$this->nom_contacto,true);
		$criteria->compare('unidad',$this->unidad,true);
		$criteria->compare('id_unidad',$this->id_unidad,true);
		$criteria->compare('nom_servicio',$this->nom_servicio,true);
		$criteria->compare('id_servicio',$this->id_servicio,true);
		$criteria->compare('Nivel',$this->Nivel,true);
		$criteria->compare('id_Nivel',$this->id_Nivel,true);
		$criteria->compare('canal_de_ingreso',$this->canal_de_ingreso,true);
		$criteria->compare('negocio',$this->negocio,true);
		$criteria->compare('mes',$this->mes,true);
		$criteria->compare('grupo_de_inter',$this->grupo_de_inter,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('ext',$this->ext,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('fec_ini',$this->fec_ini,true);
		$criteria->compare('fec_fin',$this->fec_fin,true);
		$criteria->compare('División_de_personal',$this->División_de_personal,true);
		$criteria->compare('id_División_de_personal',$this->id_División_de_personal,true);
		$criteria->compare('ciudad',$this->ciudad,true);
		$criteria->compare('variable1',$this->variable1,true);
		$criteria->compare('variable2',$this->variable2,true);
		$criteria->compare('variable3',$this->variable3,true);
		$criteria->compare('nom_empresa',$this->nom_empresa,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}