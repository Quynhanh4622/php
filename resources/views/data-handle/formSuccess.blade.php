<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>From Success</h1>
    <ul>
        <li>Name: {{$eventName}}</li>
        <li>BandNames: {{$bandNames}}</li>
        <li>Start Date: {{$startDate}}</li>
        <li>End Date: {{$endDate}}</li>
        <li>Port Folio: {{$portfolio}}</li>
        <li>Ticket Price: {{$ticketPrice}}</li>
        <li>Status:
            @switch($status)
                @case(1)
                Dang dien ra
                @break
                @case(2)
                Sap dien ra
                @break
                @case(3)
                Da dien ra
                @break
                @case(4)
                Hoan thanh
                @break
            @endswitch
        </li>
    </ul>
</body>
</html>
