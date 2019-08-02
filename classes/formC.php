<?php 

Class Default {

	private $titulo;
	private $linhaFina;
	private $link;
	private $imagem;
	private $categoria;

	public function __set($atributo, $valor) {

		$this->$atributo = $valor;

	}

	public function __get($atributo) {

		return $this->$atributo;

	}

	public function salvaArquivo($valor) {

		$arquivo = "news.html"; 
		$content = $valor; 
		$abrearquivo = fopen($arquivo, 'w'); 
		fwrite($abrearquivo, $content); 
		fclose($abrearquivo);

	}

	public function __construct() {

		echo "
		<style>
		a#botaoDownload {
		background: #10569e;
		padding: 15px 80px;
		position: fixed;
		top: 0;
		right: 0;
		font-size: 18px;
		text-decoration: none;
		color: white;
		font-family: Verdana;
		text-transform: uppercase;
		border-bottom-left-radius: 10px;
		transition: all 1s ease-out;
		}
		a#botaoDownload:hover {
		background-color: #0b710e;
		}
		</style>

		<a href='news.html' id='botaoDownload' download>Download</a>
		" ;

	}

}


