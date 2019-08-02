<?php 

//Exibe todos os erros menos o NOTICE
error_reporting(E_ALL ^ E_NOTICE);

Class formDefault {

	private $titulo;
	private $linhaFina;
	private $link;
	private $imagem;
	private $categoria;
	private $topo;
	private $imagem1;
	private $imagem2;
	private $imagem3;
	private $imagem4;
	private $imagem5;


	public function __set($atributo, $valor) {

		$this->$atributo = $valor;

	}

	public function __get($atributo) {

		return $this->$atributo;

	}

	public function imagens($valor) {

		$base64_string = $valor;
		$imagemSemData = explode(';', $base64_string);
		$imagemSem64 = explode(',', $imagemSemData[1]);
		$imagem = base64_decode($imagemSem64[1]);
		$img = rand().".png";
		$caminho = '../upload/';

		file_put_contents($caminho.'/'.$img, $imagem);

		return $img;

	}

	// public function primeiraImagem() {

	// 	$base64_string = $this->imagem1;
	// 	$imagemSemData = explode(';', $base64_string);
	// 	$imagemSem64 = explode(',', $imagemSemData[1]);
	// 	$imagem = base64_decode($imagemSem64[1]);
	// 	$img = rand().".png";
	// 	$caminho = '../upload/';

	// 	file_put_contents($caminho.'/'.$img, $imagem);

	// 	return $img;

	// }

	// public function segundaImagem() {

	// 	$base64_string = $this->imagem2;
	// 	$imagemSemData = explode(';', $base64_string);
	// 	$imagemSem64 = explode(',', $imagemSemData[1]);
	// 	$imagem = base64_decode($imagemSem64[1]);
	// 	$img = rand().".png";
	// 	$caminho = '../upload/';

	// 	file_put_contents($caminho.'/'.$img, $imagem);

	// 	return $img;

	// }

	// public function terceiraImagem() {

	// 	$base64_string = $this->imagem3;
	// 	$imagemSemData = explode(';', $base64_string);
	// 	$imagemSem64 = explode(',', $imagemSemData[1]);
	// 	$imagem = base64_decode($imagemSem64[1]);
	// 	$img = rand().".png";
	// 	$caminho = '../upload/';

	// 	file_put_contents($caminho.'/'.$img, $imagem);

	// 	return $img;

	// }

	// public function quartaImagem() {

	// 	$base64_string = $this->imagem4;
	// 	$imagemSemData = explode(';', $base64_string);
	// 	$imagemSem64 = explode(',', $imagemSemData[1]);
	// 	$imagem = base64_decode($imagemSem64[1]);
	// 	$img = rand().".png";
	// 	$caminho = '../upload/';

	// 	file_put_contents($caminho.'/'.$img, $imagem);

	// 	return $img;

	// }

	// public function quintaImagem() {

	// 	$base64_string = $this->imagem5;
	// 	$imagemSemData = explode(';', $base64_string);
	// 	$imagemSem64 = explode(',', $imagemSemData[1]);
	// 	$imagem = base64_decode($imagemSem64[1]);
	// 	$img = rand().".png";
	// 	$caminho = '../upload/';

	// 	file_put_contents($caminho.'/'.$img, $imagem);

	// 	return $img;

	// }

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


