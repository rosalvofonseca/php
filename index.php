
<?php
/*incluir classe Conexao.php*/
include "Conexao.php";

/*classe paciente*/
class Paciente{
/*atributos de pessoa*/
private $nomePaciente;
private $auturaPaciente;
private $pesoPaciente;
private $cpfPaciente;
private $dataNascPaciente;
private $telefonePaciente;
private $enderecoPaciente;
private $bairroPaciente;
private $cidadePaciente;
private $ufPaciente;


/*métodos acessores SET e GET*/
public function setNomePaciente($valor){
     $this->nomePaciente = $valor;	
}
public function getNomePaciente(){
     return $this->nomePaciente;	
}

public function setAlturaPaciente($valor){
     $this->alturaPaciente = $valor;	
}
public function getAlturaPaciente(){
     return $this->alturaPaciente;	
}

public function setPesoPaciente($valor){
     $this->pesoPaciente = $valor;	
}
public function getPesoPaciente(){
     return $this->pesoPaciente;	
}
public function setCpfPaciente($valor){
     $this->cpfPaciente = $valor;	
}
public function getCpfPaciente(){
     return $this->cpfPaciente;	
}

public function setDataNascPaciente($valor){
     $this->datanascPaciente = $valor;	
}
public function getDataNascPaciente(){
     return $this->datanascPaciente;	
}

public function setTelefonePaciente($valor){
     $this->telefonePaciente = $valor;	
}
public function getTelefonePaciente(){
     return $this->telefonePaciente;	
}
public function setEnderecoPaciente($valor){
     $this->enderecoPaciente = $valor;	
}
public function getEnderecoNomePaciente(){
     return $this-enderecoPaciente;	
}

public function setBairroPaciente($valor){
     $this->bairroPaciente = $valor;	
}
public function getBairroPaciente(){
     return $this->bairroPaciente;	
}

public function setCidadePaciente($valor){
     $this->cidadePaciente = $valor;	
}
public function getCidadePaciente(){
     return $this->cidadePaciente;	
}
public function setUfPaciente($valor){
     $this->ufPaciente = $valor;	
}
public function getUfPaciente(){
     return $this->ufPaciente;	
}

/*método para cadastro de dados do pessoa*/
public function calculaImcPaciente(){



}

/*método para cadastro de dados do pessoa*/
public function incluirPaciente(){

$strSql= " INSERT INTO paciente (nome_paciente,altura_paciente,peso_paciente,cpf_paciente,datanasc_paciente,telefone_paciente,endereco_paciente,bairro_paciente,cidade_paciente,uf_paciente)
VALUES ( 
' ".$this ->getNomePaciente()." ', ".
$this ->getAlturaPaciente (). ",".
$this ->getPesoPaciente (). ",".
"' ".$this ->getCpfPaciente (). "',".
"' ".$this ->getDatanascPaciente (). "',".
"' ".$this ->getTelefonePaciente (). "',".
"' ".$this ->getEnderecoPaciente (). "',".
"' ".$this ->getBairroPaciente (). "',".
"' ".$this ->getCidadePaciente (). "',".
"' ".$this ->getUfPaciente(). "')";
$rs - Conexao::executaSqlInsert($strSql);
return $rs;
 


}

/*método para cadastro de dados do pessoa*/
public function listarPaciente(){



}

} 

?>
