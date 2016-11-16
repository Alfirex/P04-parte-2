<?php
class ia
{
//Declaracion de las propiedades
  public $tipo="nave";
  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;


//Array
//Array naveHumana vacia
public $navesHumano=[];
//Array naveIA vacia
public $navesIA=[];




//Metodo o funcion GET(Pide): pide la variable con return$this->
  public function getColumna() {
    return $this->mapaCol;
  }
  public function getFila() {
    return $this->mapaFil;
  }
  public function getNave() {
    return $this->numNaves;
  }
  public function getNaveshumano(){
    return $this->navesHumano;
  }
  //Se añade Movimiento de una de las naves de IA
  public function getNavesIA(){
  	$this->navesIA[0]["fil"]=1;
    return $this->navesIA;
  }





//SETERS(modifica) se establece estructura de control a la columna y fila,
  public function setMapaCol($mapaCol){
      if($mapaCol>3 ){
         $this->mapaCol = 3;
      }elseif ($mapaCol<0) {
        $this->mapaCol = 0;
      }else{
        $this->mapaCol = $mapaCol;
      }
  }

  public function setMapaFil($mapaFil){
      if($mapaFil>3 ){
         $this->mapaFil = 3;
 }    elseif ($mapaFil<0) {
        $this->mapaFil = 0;
 }    else{
        $this->mapaFil = $mapaFil;
  }
  }

  public function setNaveHumana($id,$tipo,$col,$fil){
    $this->navesHumano[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }

  public function setNaveIA($id,$tipo,$col,$fil){
    $this->navesIA[]=[
      "id"=>$id,
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
    ];
  }









//Movimiento de la nave aleatoria por rangos
  public function randompos() {
	$this->columna=rand(0,3);
	$this->fila=rand(0,3);
  }
}
?>