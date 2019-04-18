<?php
/*incluir classe Conexao.php*/
include "Conexao.php";

/*classe consulta*/
class Comsulta{
/*atributos de pessoa*/
private $idPacienteConsulta;
private $idMedicoConsulta;
private $dataConsulta;
private $horaConsulta;
private $valorConsulta;
private $observacaoConseulta;



/*métodos acessores SET e GET*/
public function setIdPacienteConsulta($valor){
     $this->idpacienteconsulta = $valor;	
}
public function getIdPacienteConsulta(){
     return $this->idpacienteconsulta;	
}

public function setIdMedicoConsulta($valor){
     $this->idMedicoConsulta = $valor;	
}
public function getIdMedicoConsulta(){
     return $this->idMedicoConsulta;	
}

public function setDataConsulta($valor){
     $this->dataConsulta = $valor;	
}
public function getDataConsulta(){
     return $this->dataConsulta;	
}
public function setHoraConsulta($valor){
     $this->horaConsulta = $valor;	
}
public function getHoraConsulta(){
     return $this->horaConsulta;	
}

public function setValorConsulta($valor){
     $this->valorConsulta = $valor;	
}
public function getValorConsulta(){
     return $this->valorConsulta;	
}

public function setObservacaoConseulta($valor){
     $this->observacaoConseulta = $valor;	
}
public function getObservacaoConseulta(){
     return $this->observacaoConseulta;	
}




/*método para cadastro de dados do pessoa*/
public function calculaImcPaciente(){



}

/*método para cadastro de dados do pessoa*/
public function incluirConsulta(){

$strSql= " INSERT INTO consulta (id_consulta,id_paciente_consulta,id_medico_consulta,data_consulta,hora_consulta,valor_consulta,observacao_consulta)
VALUES ( 
' ".$this ->getIdConsulta()." ', ".
$this ->getIdPacienteConsulta (). ",".
$this ->getIdMedicoConsulta (). ",".
"' ".$this ->getDataConsulta (). "',".
"' ".$this ->getHoraConsulta(). "',".
"' ".$this ->getValorConsulta (). "',".
"' ".$this ->getObservacaoConsulta (). "'),";

$rs - Conexao::executaSqlInsert($strSql);
return $rs;
 


}

/*método para cadastro de dados do pessoa*/
public function listarPaciente(){



}

} 

?>
