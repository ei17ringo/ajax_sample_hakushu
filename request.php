<?php
    header('Content-type: text/plain; charset= UTF-8');
    if(isset($_POST['userid']) && isset($_POST['articleid'])){
        $id = $_POST['userid'];
        $articleid = $_POST['articleid'];
        $str = "AJAX REQUEST SUCCESS\nuserid:".$id."\narticleid:".$articleid."\n";
        $result = nl2br($str);
        echo $result;
    }else{
        echo 'FAIL TO AJAX REQUEST';
    }
?>