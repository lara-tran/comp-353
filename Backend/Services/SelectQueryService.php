<?php

    function executeSelectStatement($sql){
        require('DbConnectionService.php');    
        
        $output = 'Result not found';
        if ($result = $con->query($sql)) {
    
            require('FormatTableService.php');
    
            $output = outputTable($result);
    
            mysqli_free_result($result);
        }
        $con->close();
        return $output;
    }
?>
