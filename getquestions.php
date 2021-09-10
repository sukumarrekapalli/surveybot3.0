
<?php

include 'config.php';
$query = "select * from questions_table ORDER BY id DESC";

$result=mysqli_query($dbconnect,$query);

// $drop =' <select id='.'"'.'foo_select'.'"'. 'style='.'"'.'height:300px'.'"'. 'name=' .'"'.'questionsselected[]'.'"' .'class=' .'"'. 'dropdown'.'"' .'form='.'"'.'foo_form'.'"'.'multiple data-placeholder='.'"'.'Click to select questions list...'.'"'.'>';

/*$drop =' <label for="foo_select" class="screen-reader-text">Click to select questions list</label>';
$drop .=' <select id="foo_select" name="questionsselected[]" style="height:300px;" class="dropdown" form="foo_form" multiple >';



while ($row = mysqli_fetch_assoc($result)) {
$drop .= '<option value='.'"'.$row['Id'].'"'.">".$row['question_text'].'</option>';
}
$drop .= '</select>';
echo $drop;*/

echo '<?php getquestions(); ?'
?>