<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lumen crud test application</title>
</head>
<body style="margin: 0; padding:0;  width:100%; height: 100vh; display:flex; flex-direction: column;">
    <x-navbar/>
    <div style="flex:1; display: flex; justify-content: center; align-items:center;">
        {{$slot}}
    </div>
</body>
</html>

<style>
    * {
        box-sizing: border-box;
    }
</style>