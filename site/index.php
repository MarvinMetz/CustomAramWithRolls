<html>

<head>
    <title>PHP-Test</title>
</head>

<body>
    <div>
        <form action="/join.php" method="post">
        <label for="join_code">Join a lobby!</label><br>
        <input type="text" id="join_code" name="Joincode" value="123456"><br>
        <input type="submit" value="Join" name="join">
        <input type="submit" value="Create Lobby" name="create">
        </form>
    </div>
    <?php echo '<p>Hallo Welt 2</p>'; ?>
</body>

</html>