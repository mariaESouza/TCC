<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>


    <table class="table table-success table-striped">
        <h1 class="text-center" style="color:#5B5231; font-family:'Lucida Sans'; padding: 30px;">Lista de tipos de peças:</h1>
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Tipo</th>
                <th scope="col">Cofigurações</th>
            </tr>
        </thead>

        <tr>
            <th scope="row">1</th>
        <tr>
            <td> {{ $post->status }} </td>

        </tr>
        <tr>
            <td> {{ $post->description }} </td>
        </tr>
        <td>
            <button type="submit" class="btn btn-warning">Editar</button>
            <button type="submit" class="btn btn-danger">Excluir</button>
        </td>

        </tr>

    </table>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</html>