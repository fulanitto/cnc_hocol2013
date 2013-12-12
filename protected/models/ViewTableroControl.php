<?php

/**
 * This is the model class for table "view_tablero_control".
 *
 * The followings are the available columns in table 'view_tablero_control':
 * @property integer $cod_empleado
 * @property string $nom_contacto
 * @property string $estrategia_y_crecimiento
 * @property string $administrativa
 * @property string $financiera
 * @property string $talento_humano
 * @property string $auditoria_interna
 * @property string $legal
 */
class ViewTableroControl extends CActiveRecord
{
	public $_topFour=array('07','08','09','10');
	public $_all=array('01','02','03','04','05','06','07','08','09','10');

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ViewTableroControl the static model class
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
		return 'view_tablero_control';
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
			array('cod_empleado', 'numerical', 'integerOnly'=>true),
			array('nom_contacto', 'length', 'max'=>200),
			array('estrategia_y_crecimiento, administrativa, financiera, talento_humano, auditoria_interna, legal', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('cod_empleado, nom_contacto, estrategia_y_crecimiento, administrativa, financiera, talento_humano, auditoria_interna, legal', 'safe', 'on'=>'search'),
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
			'cod_empleado' => 'Cod Empleado',
			'nom_contacto' => 'Nom Contacto',
			'estrategia_y_crecimiento' => 'Calidad general de la Gerencia de Estrategia y Crecimiento',
			'administrativa' => 'Calidad general de la Gerencia Administrativa',
			'financiera' => 'Calidad general de la Gerencia Financiera',
			'talento_humano' => 'Calidad general de la Gerencia de Talento Humano',
			'auditoria_interna' => 'Calidad general de la Gerencia Auditoría Interna',
			'legal' => 'Calidad general de la Gerencia Legal ',
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

		$criteria->compare('cod_empleado',$this->cod_empleado);
		$criteria->compare('nom_contacto',$this->nom_contacto,true);
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

	/**
	 * Calcular top4
	*/
	public function calcularTopFour($pregunta){
		$valor=0;
		$todo= $this->calcularConteo($pregunta, $this->_all);
		if(!empty($todo)){
			$top4= $this->calcularConteo($pregunta, $this->_topFour);
			$valor = ($top4/$todo)*100;
			$valor = round($valor);
		}
		return $valor;
	}

	/**
	 * Calcular con base a la lista de valores (array)
	*/
	public function calcularConteo($pregunta, $valores){
		$c=new CDbCriteria;
		$c->addInCondition($pregunta,$valores);
		return $this->model()->count($c);
	}

	/**
     * Calcula el valor del semaforo
     */
	public function calcularSemaforo($t4b) {
		$r = Yii::app()->baseUrl . '/images/semaforo/verde.png';
		if ($t4b < 70) {
			$r = Yii::app()->baseUrl . '/images/semaforo/rojo.png';
		} elseif ($t4b > 70 && $t4b <= 85) {
			$r = Yii::app()->baseUrl . '/images/semaforo/naranja.png';
		}
		return $r;
	}
}