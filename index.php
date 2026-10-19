<?php
    const PRECIO = "12900$";
    const TITULO = "Lista de Comics";

    $heroes = [
        1 => "El Asombroso Spiderman",
        2 => "Los 4 Fantasticos",
        3 => "Thor",
        4 => "Hulk",
        5 => "Iron Man"];

    $comicsInfo = [
        ["heroe" => 1, "titulo" =>"¡Poder y responsabilidad!", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/05/MCC01.jpg.webp" ],
        ["heroe" => 2, "titulo" =>"Prisioneros del Doctor Destino", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/05/C-C-MARVEL-02.jpg.webp" ],
        ["heroe" => 3, "titulo" =>"Será digno el…", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/06/C-C-MARVEL-03.jpg.webp" ],
        ["heroe" => 4, "titulo" =>"El hombre o el monstruo", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/06/C-C-MARVEL-04.jpg.webp" ],
        ["heroe" => 2, "titulo" =>"El príncipe Submarino", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/06/C-C-MARVEL-05.jpg.webp" ],
        ["heroe" => 5, "titulo" =>"El vengador dorado", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-06.jpg.webp" ],
        ["heroe" => 2, "titulo" =>"Amenaza en la luna", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-07.jpg.webp" ],
        ["heroe" => 3, "titulo" =>"Cuentos de Asgard", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-08.jpg.webp" ],
        ["heroe" => 2, "titulo" =>"Un Skrull entre nosotros", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-09.jpg.webp" ],
        ["heroe" => 1, "titulo" =>"Todos contra la Araña", "imagen" => "https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-10.jpg.webp" ],
    ];

    $comicVolume = 1;

    $heroeSeleccionado = $_GET["heroe"] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de comics</title>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <header>
        <div>
            <form method="GET" action="index.php">
                <button type="submit", name="heroe", value="0">
                    <img class="logo" src="https://thumb.wikimedia.org/wikipedia/commons/thumb/b/b9/Marvel_Logo.svg/1280px-Marvel_Logo.svg.png?utm_source=es.wikipedia.org&utm_campaign=index&utm_content=thumbnail" alt="logo">
                </button>
            </form>
        </div>
        <div class="UniversosMarvel">
            <form method="GET">
                <?php foreach($heroes as $id => $filtroHeroe): ?>
                    <button type="submit", name="heroe", value="<?php echo $id; ?>">
                        <?php echo $filtroHeroe; ?>
                    </button>
                <?php endforeach; ?>
            </form>
        </div>
        <div>
            <button>inicio sesion</button>
        </div>
    </header>
    <h1><?php echo TITULO?></h1>
    <section>
        <table>
            <tr>
                <th>Numero</th>
                <th>Imagen</th>
                <th>Heroe</th>
                <th>Titulo</th>
                <th>Precio</th>
                <th>checkbox</th>
            </tr>

            <?php foreach ($comicsInfo as $comicInfo): ?>
                <?php if($heroeSeleccionado == 0 || $comicInfo["heroe"] == $heroeSeleccionado): ?>
                    <tr>
                        <td><?php echo $comicVolume++ ?></td>
                        <td><img src="<?php echo $comicInfo["imagen"]; ?>" alt="Comic Image"></td>
                        <td><?php echo $heroes[$comicInfo["heroe"]]; ?></td>
                        <td><?php echo $comicInfo["titulo"]; ?></td>
                        <td><?php echo PRECIO; ?></td>
                        <td><input type="checkbox"></td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; ?>    
            
        </table>
    </section>
</body>
</html>