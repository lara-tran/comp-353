<?php 

    function outputAppointmentsTable($result) {

        $output = '';
        $firstLoop = false;
        $rowId =1;
        while ($row = $result->fetch_assoc()) {
            if (!$firstLoop) {
            $output = $output.'<table id="app-table" class="u-full-width">
                <thead>
                  <tr>';
                foreach ($row as $key => $value) {
                    $output = $output.'<th>' . $key . '</th>';
                }
                $output =$output.'<th></th>';
                $output =$output.'<th></th>';
                $output = $output.' </tr>
                </thead>
                <tbody>';
                $firstLoop = true;
            }

            $appId = 0;
            $output = $output.'<tr>';
            foreach ($row as $key => $value) {
                $output = $output.'<td>'. $value .'</td>';
                if($key == "Appointment ID"){
                    $appId = $value;
                }
            }
            $output = $output.'<td><button type="button" class="btn" onclick="deteteAppointment('.$appId.','.$rowId.')" >Delete</button></td>';
            $output = $output.'<td><button type="button" class="btn" onclick="editAppointmentPage('.$appId.')">Edit</button></td>';
            
            $output = $output.'</tr>';
            $rowId++;
        }

        $output = $output.'<tbody>
                </table>';
        return $output;
    } 

?>