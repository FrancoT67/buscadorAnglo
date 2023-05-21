<?php
include './search.controller.php';

?>

<form action="" method="GET">
    <input type="text" name="keyword" placeholder="ingrese el nombre a buscar...">
    <input type="submit" value="Buscar">
</form>

<table>
    <thead>
        <tr>
            <th scope="col" >ID</th>
            <th scope="col" >Nombre</th>
            <th scope="col" >Sexo</th>
        </tr>
        
    </thead>
    <tbody>
        <?php 
            if (isset($_GET['keyword'])) {
                $keyword = $_GET['keyword'];
            
                $search = new Search();
                $results = $search->searchItems($keyword);
            
                // Mostrar los resultados
                foreach ($results as $result) { ?>
                <tr>
                    <td scope="row" ><?php echo $result['idU']?></td>
                    <td scope="row" ><?php echo $result['nombre']?></td>
                    <td scope="row" ><?php echo $result['sexo']?></td>
                </tr>
                <?php }?>
            <?php }?>
    </tbody>
</table>
