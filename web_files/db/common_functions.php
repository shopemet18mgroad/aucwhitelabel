<?php
function errorMessage($str) {
    return '<div style="width:50%; margin:0 auto; border:2px solid #F00;padding:2px; color:#000; margin-top:10px; text-align:center;">' . $str . '</div>';
}

function successMessage($str) {
    return '<div style="width:50%; margin:0 auto; border:2px solid #06C;padding:2px; color:#000; margin-top:10px; text-align:center;">' . $str . '</div>';
}
//=================================================================================================================
function getAuth($table_name, $username, $password){
	//$vol = str_replace('-',' ',$vol);
    global $DB;
    $rs = array();
    $sql = "SELECT * FROM " . $table_name . " WHERE username = '" . $username . "' AND password = '". base64_encode($password) ."' ORDER BY sl_no DESC";
    
    try {
        $stmt = $DB->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll();
    } catch (Exception $ex) {
        echo errorMessage($ex->getMessage());
    }

    if (count($results) > 0) {
       return $results[0];
    }else{
		return false;
	}
}
//=======================================================================================
?>