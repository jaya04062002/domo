<!DOCTYPE html>
<html>
<head> <h3>Insert Form Page</h3></head>
<body>
    <form method="post" action='demo3_insert.php'>
	
	   <input type="hidden" name="id" id="id"><br>
    Name:
        <input type="text" name="name" id="name" placeholder="cat/tigger" required><br>
    Type:
       <input type="text" name="type" id="type" placeholder="wild animals/domestic" required><br>
    Sound:
        <input type="text" name="sound" id="sound" required><br>				
       <input type="submit" value="submit">
    </form>
</body>
</html>