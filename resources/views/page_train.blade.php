<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        <ul>
            <li>Azienda</li>
            <li>Stazione di partenza</li>
            <li>Stazione di arrivo</li>
            <li>Orario di partenza</li>
            <li>Orario di arrivo</li>
            <li>Codice treno</li>
            <li>Numero carrozza</li>
        </ul>

        @foreach ($myTrain as $obj)
        <div class="train">
            <span>{{ $obj->Azienda }}</span>
            <span>{{ $obj->Stazione_di_partenza }}</span>
            <span>{{ $obj->Stazione_di_arrivo }}</span>
            <span>{{ $obj->Orario_di_partenza }}</span>
            <span>{{ $obj->Orario_di_arrivo }}</span>
            <span>{{ $obj->Codice_treno }}</span>
            <span class="last">{{ $obj->Numero_carrozza }}</span>
        </div>
        @endforeach
        <span>{{ $myTrain->links() }}</span>
    </div>
</body>
</html>