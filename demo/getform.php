<?php

foreach($date as $d => $v)
{
	echo"kk";
}
else
{
	echo "not";
}

?>
Change your query into this one

SELECT *, GROUP_CONCAT(CATEGORY) AS categories
FROM TABLE
WHERE COLUMN = 'Fruits'
GROUP BY ACCOUNT_NUMBER
The full code

<?php
  $sqlTxt = "SELECT *, GROUP_CONCAT(CATEGORY) as categories FROM users WHERE column = '$date' GROUP BY ACCOUNT_NUMBER";
  $sql = ORACLE::getInstance()->FetchArray($sqlTxt);
  if(count($sql) > 0)
  {
    foreach($sql as $row)
    {
?>
    <tr>
      					
				<td> <?php echo $row['name'];  ?></td>                     
				<td> <?php echo $row['to_email'];  ?></td>
				<td> <?php echo $row['title'];  ?></td>
				<td> <?php echo $row['content'];  ?></td>
				<td> <?php echo $row['date'];  ?></td>
    </tr>
<?php
    }
  }
?>
