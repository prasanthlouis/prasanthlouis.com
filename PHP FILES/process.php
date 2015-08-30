<?
if( $_POST )
{
  $con = mysql_connect("localhost","prasanthl","Superduper21!");

  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("prasanthdatabase", $con);

  $users_name = $_POST['name'];
  $users_email = $_POST['email'];
  $users_website = $_POST['website'];
  $users_comment = $_POST['comment'];

  $users_name = mysql_real_escape_string($users_name);
  $users_email = mysql_real_escape_string($users_email);
  $users_website = mysql_real_escape_string($users_website);
  $users_comment = mysql_real_escape_string($users_comment);

 
  $query = "
  INSERT INTO `prasanthdatabase`.`comments` (`id`, `name`, `email`, `website`,
        `comment`, `timestamp`) VALUES (NULL, '$users_name',
        '$users_email', '$users_website', '$users_comment',
        CURRENT_TIMESTAMP);";

  mysql_query($query);

  echo "<h2>Thank you for your Comment!</h2>";

  mysql_close($con);
}
?>