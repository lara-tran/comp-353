<?php 

    function outputTable($result) {

        $output = '';
        $firstLoop = false;
        while ($row = $result->fetch_assoc()) {
            if (!$firstLoop) {
            $output = $output.'<table class="u-full-width">
                <thead>
                  <tr>';
                foreach ($row as $key => $value) {
                    $output = $output.'<th>' . $key . '</th>';
                }
                $output = $output.' </tr>
                </thead>
                <tbody>';
                $firstLoop = true;
            }

            $output = $output.'<tr>';
            foreach ($row as $key => $value) {
                $output = $output.'<td>'. $value .'</td>';
            }
            $output = $output.'</tr>';
        }

        $output = $output.'<tbody>
                </table>';
        return $output;
    } 

?>