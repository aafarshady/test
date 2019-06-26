<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    p:not(#aa){
        color: orange;
    }
</style>
<body>

<div id="box" style="background: yellow;width: 500px;height: 500px;display: block">
<div id="box1" style="background: lime;width: 100px;height: 100px;display: block">


</div>



</div>

<script src="jquery-3.3.1.min.js"></script>
<script src="jquery-ui/jquery-ui.min.js"></script>

<script>
    $(document).ready(function () {
        $('#box1').draggable();
    })
</script>
</body>
</html>