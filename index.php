<?php
 const PRECIO = "12900$";
 const TITULO = "Lista de Comics";
 $heroes = ["El Asombroso Spiderman","Los 4 Fantasticos","Thor","Hulk","Iron Man"];
 $comicVolume = 1;

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
        <div><img class="logo" src="https://thumb.wikimedia.org/wikipedia/commons/thumb/b/b9/Marvel_Logo.svg/1280px-Marvel_Logo.svg.png?utm_source=es.wikipedia.org&utm_campaign=index&utm_content=thumbnail" alt="logo"></div>
        <div class="UniversosMarvel">
            <button class="Ultimate">Universo Ultimate</button>
            <button class="Clasica">Coleccion Clasica Marvel</button>
            <button class="Midnight">Midnight</button>
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

            <tr>
                <td><?php echo $comicVolume++; ?></td>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/05/MCC01.jpg.webp" alt="comic 1"></td>
                <td><?php echo $heroes[0] ?></td>
                <td>¡Poder y responsabilidad!</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>
            <tr>
                <td><?php echo $comicVolume++; ?></td>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/05/C-C-MARVEL-02.jpg.webp" alt="comic 2"></td>
                <td><?php echo $heroes[1] ?></td>
                <td>Prisioneros del Doctor Destino</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>            
            <tr>
                <th><?php echo $comicVolume++; ?></th>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/06/C-C-MARVEL-03.jpg.webp" alt="comic 3"></td>
                <td><?php echo $heroes[2] ?></td>
                <td>Será digno el…</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>            
            <tr>
                <th><?php echo $comicVolume++; ?></th>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/06/C-C-MARVEL-04.jpg.webp" alt="comic 4"></td>
                <td><?php echo $heroes[3] ?></td>
                <td>El hombre o el monstruo</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>            
            <tr>
                <th><?php echo $comicVolume++; ?></th>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/06/C-C-MARVEL-05.jpg.webp" alt="comic 5"></td>
                <td><?php echo $heroes[1] ?></td>
                <td>El príncipe Submarino</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>            
            <tr>
                <th><?php echo $comicVolume++; ?></th>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-06.jpg.webp" alt="comic 6"></td>
                <td><?php echo $heroes[4] ?></td>
                <td>El vengador dorado</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>            
            <tr>
                <th><?php echo $comicVolume++; ?></th>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-07.jpg.webp" alt="comic 7"></td>
                <td><?php echo $heroes[1] ?></td>
                <td>Amenaza en la luna</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>            
            <tr>
                <th><?php echo $comicVolume++; ?></th>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-08.jpg.webp" alt="comic 8"></td>
                <td><?php echo $heroes[2] ?></td>
                <td>Cuentos de Asgard</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>            
            <tr>
                <th><?php echo $comicVolume++; ?></th>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-09.jpg.webp" alt="comic 9"></td>
                <td><?php echo $heroes[1] ?></td>
                <td>Un Skrull entre nosotros</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>            
            <tr>
                <th><?php echo $comicVolume++; ?></th>
                <td><img src="https://brihet.com.ar/wp-content/uploads/2025/07/C-C-MARVEL-10.jpg.webp" alt="comic 10"></td>
                <td><?php echo $heroes[0] ?></td>
                <td>Todos contra la Araña</td>
                <td><?php echo PRECIO;?></td>
                <td><input type="checkbox" name="" id=""></td>
            </tr>            
        </table>
    </section>
</body>
</html>