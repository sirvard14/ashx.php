<?php
var_dump($_POST);
session_start();
if (isset($_POST['full name'])&&$_POST['full_name']!=''){
    echo $_POST['full_name'];
}else{
    echo "<p style='color:red;'>ERROR:Full name is required";
}
    if (isset($_POST['age'])&& $_POST['age']>=18)
        echo "Age:" .$_POST['age']
    

?>