<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Demo in Laravel 7</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'DejaVu Sans', 'Raleway';
        }

        table {
            width: 100%;
        }

        .table1 {
            border: 1px solid black;
        }

    </style>
</head>

<body>
    <table class="table table-bordered table1">
        <thead>
            <tr class="table-danger">
                <td colspan="4" >Name</td>
                <td>Mẫu số <i>(Form)</i>:</td>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < 5; $i++)
                <tr>
                    <td colspan="3">1</td>
                    <td>2</td>
                    <td>2</td>
                    <td>2</td>
                </tr>
            @endfor

        </tbody>
    </table>
</body>

</html>
