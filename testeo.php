<?php

require_once("funsiones.php");

use PHPUnit\Framework\TestCase;

final class testeo extends TestCase
{
	public function testradio()
	{
		$obj= new clsf();
		$this->assertEquals(12.57,$obj->rad(2));
		
	}
	
	public function testpromedio()
	{
		$obj= new clsf();
		$this->assertEquals(1.28,$obj->promedio(7,0.183333));
		
	}
}

?>
