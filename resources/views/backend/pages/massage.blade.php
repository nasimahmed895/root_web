<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #lined {
            display: block;
            margin: auto;
            width: 80%;
            font-size: 15px;
            padding: 10px 0;
            line-height: 40px;
            background-image: linear-gradient(#eee 1px, transparent 1px);
            background-size: 100% 40px;
            border: 0;
            outline: 0;
        }
    </style>
</head>

<body>
    <textarea name="" id="lined" cols="30" rows="10" class="w-100">
@if ($contact->message)
{{ $contact->message }}
@else
{{ $contact->application }}
@endif
</textarea>

</body>

</html>
