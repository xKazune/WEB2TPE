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
    {include file="header.tpl" titulo="Home - Personas"}
    <h1>Games List</h1>
        <table>
            <thead>
                <th>Games</th>
                <th>Genre</th>
                <th>Year</th>
                <th>Score</th>
                <th>Company</th>
            </thead>
    {foreach $games as $game}
            <tr>
                <td> {$game->game_name} </td>
                <td> {$game->genre} </td>
                <td> {$game->year} </td>
                <td> {$game->score} </td>
                <td> {$game->company_name} </td>
            </tr>
    {/foreach}
        <table>
            <thead>
                <th>Company List</th>
            </thead>
    {foreach $compa as $company}
            <tr>
                <td> {$company->company_name} </td>
            </tr>
    {/foreach}
        </table>
    {include file="footer2.tpl"}
</body>
</html>