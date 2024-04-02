<!DOCTYPE html>
<html>
<body>
    
    <h1>Reminder Form</h1>
    <form method="post" action="demo1.php">
	
	   <input type="hidden" name="no" id="no"><br>
        Name:
        <input type="text" name="name" id="name" required><br>
        
		To Email:
        <input type="to_email" name="to_email" id="to_email" maxlength="64" placeholder="@email.com" required><br>
		
		Title:
        <input type="text" name="title" id="title" required><br>
		
		Content:
		 <textarea id="content" name="content" rows="4" cols="50" placeholder="enter your content value..."></textarea>
         <br>
		Reminder Date:
    <input type="date" name="date" id="date" required><br>
        <br>
		  <input type="hidden" name="action" value = "users_insert"><br>
       <button>Set Reminder</button>
    </form>
</body>
</html>
