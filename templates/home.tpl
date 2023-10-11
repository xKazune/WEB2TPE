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
    <h1>
        Hello World!
    </h1>

    {foreach $games as $game}
        <h1 >{$game->Game_name|cat:" "|cat:$game->Genre}</h1>
    {/foreach}

</body>
</html>