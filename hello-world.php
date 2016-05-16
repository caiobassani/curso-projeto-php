<html><body>
<?php

# Lista de atributos de carro (Array Associativo, também chamado de Hash)
$carro =
    [
        "marca"     => "Ferrari", 
        "modelo"    => "F12 Berlinetta",
        "ano"       => "2012",
        "dono"      => "Cleyton",
        "fodase tem q meter a rola msm!" 
    ];

echo "<h1>Carro</h1>";
echo "<ul>";

// Permutar array
$attr_names = array_flip($carro);

foreach($carro as $elem)
{
    echo "<li><b>{$attr_names[$elem]}</b>: {$elem}</li>";
}

echo "</ul>"

?>
</body>
</html>