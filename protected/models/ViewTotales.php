<?php

/**
 * This is the model class for table "view_totales".
 *
 * The followings are the available columns in table 'view_totales':
 * @property string $total
 * @property string $estrategia_y_crecimiento
 * @property string $administrativa
 * @property string $financiera
 * @property string $talento_humano
 * @property string $auditoria_interna
 * @property string $legal
 */
class ViewTotales extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewTotales the static model class
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
		return 'view_totales';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('total, estrategia_y_crecimiento, administrativa, financiera, talento_humano, auditoria_interna, legal', 'length', 'max'=>21),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('total, estrategia_y_crecimiento, administrativa, financiera, talento_humano, auditoria_interna, legal', 'safe', 'on'=>'search'),
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
			'total' => 'Total',
			'estrategia_y_crecimiento' => 'Estrategia Y Crecimiento',
			'administrativa' => 'Administrativa',
			'financiera' => 'Financiera',
			'talento_humano' => 'Talento Humano',
			'auditoria_interna' => 'Auditoria Interna',
			'legal' => 'Legal',
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

		$criteria->compare('total',$this->total,true);
		$criteria->compare('estrategia_y_crecimiento',$this->estrategia_y_crecimiento,true);
		$criteria->compare('administrativa',$this->administrativa,true);
		$criteria->compare('financiera',$this->financiera,true);
		$criteria->compare('talento_humano',$this->talento_humano,true);
		$criteria->compare('auditoria_interna',$this->auditoria_interna,true);
		$criteria->compare('legal',$this->legal,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}