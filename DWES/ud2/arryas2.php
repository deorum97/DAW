<?php
  // Array asociativo de un videojuego
$videojuego = [
    "titulo" => "Elden Ring",
    "genero" => "RPG",
    "plataforma" => "PC",
    "valoracion" => 9.5
];

// Array asociativo de un jugador
$jugador = [
    "nombre" => "Alex",
    "nivel" => 35,
    "juegos" => ["Elden Ring", "God of War", "FIFA 22"],
    "tiempo_total" => 120  // en horas
];

$catalogo = [
    [
        "titulo" => "Elden Ring",
        "genero" => "RPG",
        "plataforma" => "PC",
        "valoracion" => 9.5
    ],
    [
        "titulo" => "FIFA 22",
        "genero" => "Deportes",
        "plataforma" => "PS5",
        "valoracion" => 8.0
    ],
    [
        "titulo" => "Minecraft",
        "genero" => "Aventura",
        "plataforma" => "PC",
        "valoracion" => 9.0
    ]
];

// Lista de jugadores
$jugadores = [
    [
        "nombre" => "Alex",
        "nivel" => 35,
        "juegos" => ["Elden Ring", "FIFA 22"],
        "tiempo_total" => 120
    ],
    [
        "nombre" => "Lucía",
        "nivel" => 42,
        "juegos" => ["Minecraft", "FIFA 22"],
        "tiempo_total" => 150
    ]
];

echo "<b>Ejercicio 1: Acceder a datos de arrays asociados</b> <br>";
echo 'El videojuego "'.$videojuego["titulo"].'" es del género '.$videojuego["genero"].' y está disponible en '.$videojuego["plataforma"].' con una valoración de '.$videojuego["valoracion"]."<br>";

echo "<br><b>Ejercicio 2: Recorrer arrays multidimensionales</b> <br>";

echo "<br><b>Con foreach</b>";
foreach ($catalogo as $juego) {
    echo "<br>".$juego["titulo"];
    echo "<br>".$juego["genero"];
    echo "<br>".$juego["valoracion"]."<br>";
};

echo "<br><b>Con for</b>";
for ($i=0; $i < count($catalogo); $i++) { 
    echo "<br>".$catalogo[$i]["titulo"];
    echo "<br>".$catalogo[$i]["genero"];
    echo "<br>".$catalogo[$i]["valoracion"]."<br>";
};

echo "<br><b>Ejercicio 3: Trabajar con arrays indexados dentro de arrays asociativos</b> <br>";

echo "<br><b>Con foreach</b>";
foreach ($jugadores as $persona) {
    echo "<br>El jugador ".$persona["nombre"]. " tiene ".count($persona["juegos"])." juegos que son: ";
    foreach ($persona["juegos"] as $key => $value) {
        echo "$value ";
    };
};

echo "<br><br><b>Con for</b>";
for ($i=0; $i < count($jugadores); $i++) { 
    echo "<br>El jugador ".$jugadores[$i]["nombre"]." tiene ".count($jugadores[$i]["juegos"])." juegos.<br>";    
}

echo "<br><b>Ejercicio 4: Comparar los juegos de dos jugadores</b> <br>";
$res = array_intersect($jugadores[0]["juegos"], $jugadores[1]["juegos"]);
echo "tienen en comun: ";
foreach ($res as $key => $value) {
    echo "$value";
};

