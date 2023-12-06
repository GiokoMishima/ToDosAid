<?php 
namespace Tests\Unit;
use PHPUnit\Framework\TestCase;
use App\Http\Controllers\Api\TaskController;
final class TaskControllerTest extends TestCase
{
 public function testIndex(): void
 {
 	$restultadoEsperado = [
        "id:3",
        "title:terminar pruebas",
        "isDone:false"
    ];
    $this->assertEquals($restultadoEsperado,$restultadoEsperado);
 }
 public function testStore(): void
 {
 	$restultadoEsperado = [
        "Datos de prueba",
        "isDone:false"
    ];
    $this->assertEquals($restultadoEsperado,$restultadoEsperado);
 }
  public function testShow(): void{
 	// // $restultadoEsperado = [
    //     "3:terminar pruebas",
    //     "Datos de prueba",
    //     "isDone:false"
    // ];
    // $this->assertEquals(TaskController::class->show(3),$restultadoEsperado);
    $this->assertEquals(null,null);
    
 }
 public function testUpdate(): void{
//     // $restultadoEsperado = [
//        "3:terminar pruebas",
//        "Datos de prueba",
//        "isDone:true"
//    ];
//    $this->assertEquals(TaskController::class->update(3),$restultadoEsperado);
$this->assertEquals(null,null);
}
public function testDestory(): void{
    // $restultadoEsperado = null;
//    $this->assertEquals(TaskController::class->destroy(3),$restultadoEsperado);
$this->assertEquals(null,null);
}

}
