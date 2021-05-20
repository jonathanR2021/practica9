<?php 
class clsf {
    public function rad($radio){
		$respuesta=sprintf('%.2f', (3.1416 * $radio * $radio));
		return $respuesta;
	}
	public function promedio($v1,$v2){
		$promedio = sprintf('%.2f', ($v1 * $v2));
		return $promedio;
	}
}
?>