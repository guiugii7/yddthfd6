<?php
// Создать ассоциативный массив, представляющий информацию о книгах
$libros = [
    "El Quijote" => "Miguel de Cervantes",
    "Cien años de soledad" => "Gabriel García Márquez",
    "El principito" => "Antoine de Saint-Exupéry",
    "1984" => "George Orwell",
    "El señor de los anillos" => "J.R.R. Tolkien"
];

// Вывести список книг на экран с использованием цикла foreach
foreach ($libros as $libro => $autor) {
    echo "$libro - $autor" . PHP_EOL;
}
?>