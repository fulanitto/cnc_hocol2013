<?php 
/**
* 
*/
class Obrero 
{
	
	/**
     * Obtiene la escala de 1 a 10
     */
	public static function getEscala1a10() {
		return array(
			'01' => '1',
			'02' => '2',
			'03' => '3',
			'04' => '4',
			'05' => '5',
			'06' => '6',
			'07' => '7',
			'08' => '8',
			'09' => '9',
			'10' => '10',
			// '99' => 'NR/NS',
			);
	}
	/**
     * Obtiene la escala de 1 a 3
     */
	public static function getEscala1a3() {
		return array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			// '99' => 'NR/NS',
			);
	}
	/**
     * Obtiene la escala de 1 a 3
     */
	public static function getEscala1a3_2() {
		return array(
			'1' => '1',
			'2' => '2',
			'3' => '3',
			'99' => 'NR/NS',
			);
	}
	/**
     * Obtiene la escala de 1 a 2
     */
	public static function getEscala1a2() {
		return array(
			'1' => '1',
			'2' => '2',
			// '99' => 'NR/NS',
			);
	}

	/**
     * Obtiene la escala de ACCESO
     */
	public static function getEscalaAcceso() {
		return array(
			'99' => 'Selecciona una...',
			'10' => 'Teléfono',
			'20' => 'Presencial/Reuniones',
			'30' => 'Correo electrónico',
			'40' => 'Portal/intranet',
			'50' => 'Cartas/comunicación escrita',
			);
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_1() {
		echo '<th style="text-align: center; background-color: #cccccc;">En una escala de 1 a 10 donde 1 es malo y 10 es excelente</th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">Malo (1)</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">Excelente (10)</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_2() {
		echo '<th style="text-align: center; background-color: #cccccc;">En una escala de 1 a 10 donde 1 es malo y 10 es excelente Cómo califica a Mansarovar en cuanto a…</th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">Malo (1)</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">Excelente (10)</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_n($n) {
		echo '<th style="text-align: center; background-color: #cccccc;">'.$n.'</th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">Malo (1)</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">Excelente (10)</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_3() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 es Nada o muy poco</th>';
				break;
				case 7:
				echo '<th style="text-align: center; background-color: #cccccc;">7 es Lo necesario</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 es Mucho, se clasificaría como conocedor o experto</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_4() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 Totalmente en Desacuerdo</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 Totalmente de Acuerdo</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_5() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 Mínima</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 Máxima</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_6() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 Nada útil</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 Totalmente útil</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a10
     */
	public static function printEscala1a10_7() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		for ($index = 1; $index <= 10; $index++) {
			switch ($index) {
				case 1:
				echo '<th style="text-align: center; background-color: #cccccc;">1 Totalmente Inadecuada</th>';
				break;
				case 10:
				echo '<th style="text-align: center; background-color: #cccccc;">10 Totalmente Inadecuada</th>';
				break;
				default:
				echo '<th style="text-align: center; background-color: #cccccc;">' . $index . '</th>';
				break;
			}
		}
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a3
     */
	public static function printEscala1a3_1() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Por encima de sus expectativas</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Igual a sus expectativas</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Por debajo de sus expectativas</th>';
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}
	/**
     * Imprima la cabecera de la getEscala1a3
     */
	public static function printEscala1a3_n($n) {
		echo '<th style="text-align: center; background-color: #cccccc;">'.$n.'</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Superará sus expectativas</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Cumplirá con sus expectativas</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Estará por debajo de sus expectativas</th>';
		// echo '<th style="text-align: center; background-color: #cccccc;">NS/NR</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a3
     */
	public static function printEscala1a3_2() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Ha mejorado</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Se ha mantenido</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Ha desmejorado</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">No puede evaluarlo (No estuvo en 2010 ó 2011)</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a3
     */
	public static function printEscala1a3_3() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Facilitan el trabajo de su empresa</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Complican el trabajo de la empresa</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">No afectan el trabajo de la empresa</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a2
     */
	public static function printEscala1a2_1() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Si</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">No</th>';
	}

	/**
     * Imprima la cabecera de la getEscala1a2
     */
	public static function printEscala1a2_2() {
		echo '<th style="text-align: center; background-color: #cccccc;"></th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Aplicación, distribución y transferencia de pagos</th>';
		echo '<th style="text-align: center; background-color: #cccccc;">Gestión cartera de los cargos por uso del STN</th>';
	}

	/**
	 * Obtiene las gerencias
	*/
	public static function getGerencias(){
		return array(
			'1' => 'Estrategia y Crecimiento',
			'2' => 'Administrativa',
			'3' => 'Financiera',
			'4' => 'Talento Humano',
			'5' => 'Auditoría Interna',
			'6' => 'Legal',
			);
	}
}

?>