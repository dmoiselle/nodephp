<?php
$username=$argv[1];
$title=$argv[2];
$sendOutputToNodejs = 'SELECT username, title FROM editcount WHERE ' .
buildWhereCondition($username , $title ) .
' ORDER BY username, title LIMIT 5;';

function buildWhereCondition ($username, $title){
    //where clause
    //username may or may not be the same as the preceding one but title
    //return "username >= $username && title > $title";
    return "count =
  
    CASE WHEN username = $username THEN 
          CASE WHEN title > $title THEN count
          ELSE NULL
          END
    WHEN username > $username THEN count
    ELSE NULL
          
    END";
}

echo $sendOutputToNodejs ;

?>

