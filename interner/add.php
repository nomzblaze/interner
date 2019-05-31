<?php
  2: //check for required fields from the form
  3: if ((!$_POST[topic_owner]) || (!$_POST[topic_title])
  4:     || (!$_POST[post_text])) {
  5:     header("Location: addtopic.html");
  6:     exit;
  7: }
  8: 
  9: //connect to server and select database
 10: $conn = mysql_connect("localhost", "joeuser", "somepass")
 11:     or die(mysql_error());
 12: mysql_select_db("testDB",$conn) or die(mysql_error());
 13: 
 14: //create and issue the first query
 15: $add_topic = "insert into forum_topics values ('', '$_POST[topic_title]',
 16:     now(), '$_POST[topic_owner]')";
 17: mysql_query($add_topic,$conn) or die(mysql_error());
 18: 
 19: //get the id of the last query 
 20: $topic_id = mysql_insert_id();
 21: 
 22: //create and issue the second query
 23: $add_post = "insert into forum_posts values ('', '$topic_id',
 24:     '$_POST[post_text]', now(), '$_POST[topic_owner]')";
 25: mysql_query($add_post,$conn) or die(mysql_error());
 26: 