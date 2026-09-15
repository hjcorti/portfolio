<!DOCTYPE html>
<html lang="es-ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabla productos stock</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <div class="row">
            <div class="col-12 text-center py-5">
                <h1>Listado de stock</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table border table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td><img src="images/hp1102w.jpg" alt="Impresora HP1102w"></td>
                            <td>Impresora HP1102w</td>
                            <td>20</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="images/pizarra-digital.jpg" alt="Pizarra digital"></td>
                            <td>Pizarra digital</td>
                            <td>25</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td><img src="images/notebook15.jpg" alt="Notebook 15'"></td>
                            <td>Notebook 15"</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td colspan="3" class="text-end">TOTAL:</td>
                            <td>60 items</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>

</html>