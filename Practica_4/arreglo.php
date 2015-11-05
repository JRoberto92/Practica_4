<?php
  $registros=array(
  0=>array(
  "id"=>"1",
  "titulo"=>"cutonala",
  "Autor"=>"admin"
  ),
  1=>array(
  "id"=>"1",
  "titulo"=>"c++",
  "Autor"=>"benito"
  ),
  2=>array(
  "id"=>"1",
  "titulo"=>"c#",
  "Autor"=>"chuy"
  ),
  3=>array(
  "id"=>"1",
  "titulo"=>"java",
  "Autor"=>"Roberto"
  ),
  4=>array(
  "id"=>"1",
  "titulo"=>"base de datos",
  "Autor"=>"oscar"
  ),
);
?>
<?php foreach ($registros as $registro){ ?>
<div>
    <h1>
	<?php echo $registro["titulo"]; ?>
<br/>
	<?php echo $registro["Autor"]; ?>
    </h1>
    <p>
	cutonala: ingenieria en ciencias computacionales(ICCO)
    </p>
<div>
autor
</div>

</div>
<?php } ?>