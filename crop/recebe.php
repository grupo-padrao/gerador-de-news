<?php 

//define('ROOT_PATH', dirname(__FILE__));

//$base64 = base64_decode($_POST['imagem1']);

function PrimeiraImagem() {

	$base64_string = $_POST['imagem1'];
	$imagemSemData = explode(';', $base64_string);
	$imagemSem64 = explode(',', $imagemSemData[1]);
	$imagem = base64_decode($imagemSem64[1]);
	$img = rand().".png";
	$caminho = 'upload';

	file_put_contents($caminho.'/'.$img, $imagem);

	return $img;

}

function SegundoImagem() {

	$base64_string = $_POST['imagem2'];
	$imagemSemData = explode(';', $base64_string);
	$imagemSem64 = explode(',', $imagemSemData[1]);
	$imagem = base64_decode($imagemSem64[1]);
	$img = rand().".png";
	$caminho = 'upload';

	file_put_contents($caminho.'/'.$img, $imagem);

	return '<img src="upload/'.$img.'" alt="">';
	
}



echo "Imagem 01: " . PrimeiraImagem();
echo "<br><br><br>";
echo "Imagem 02: " . SegundoImagem();


