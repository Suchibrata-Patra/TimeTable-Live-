<?php
require 'database.php';

// Step 1: SQL Query to join class_schedule with teacher_profile and fetch Teacher_Name
$sql = "SELECT cs.*, tp.teacher_Name as teacher
    FROM class_schedule cs
    JOIN teacher_profile tp 
    ON cs.Teacher_ID = tp.Teacher_ID
    WHERE cs.class is not NULL AND cs.Subject is not NULL
";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Step 2: Initialize an array to store the schedules by day
    $scheduleByDay = [
        "Monday" => [],
        "Tuesday" => [],
        "Wednesday" => [],
        "Thursday" => [],
        "Friday" => [],
        "Saturday" => [],
        "Sunday" => []
    ];

    // Step 3: Fetch the data
    while ($row = $result->fetch_assoc()) {
        // Step 4: Modify the "Class" field format
        $classSection = $row['Class'] ?? '';  // Use null coalescing to set a default value

        // Check if classSection is not empty or null before running preg_match
        if (!empty($classSection) && preg_match('/(\d+)([A-Za-z])/', $classSection, $matches)) {
            $class = "Class " . $matches[1];  // Grade number
            $section = $matches[2];  // Section letter
        } else {
            $class = '';  // Set default values if not matching
            $section = '';
        }

        // Add the converted class and section to the row
        $row['Class'] = $class;  // Store formatted class under 'Class' key
        $row['Section'] = $section;  // Store section

        // Step 5: Check if the "Weekday" field exists before using it
        if (isset($row['Weekday'])) {
            $dayOfWeek = $row['Weekday'];  // e.g., "Monday", "Tuesday", etc.
            if (array_key_exists($dayOfWeek, $scheduleByDay)) {
                // Step 6: Rename "Class_Time" to "timeSlot"
                if (isset($row['Class_Time'])) {
                    
                    $row['class'] = $row['Class'];  // Rename Class_Time to timeSlot
                    unset($row['Class']);  // Remove the original Class_Time field

                    $row['section'] = $row['Section'];  // Rename Class_Time to timeSlot
                    unset($row['Class']);  // Remove the original Class_Time field

                    $row['subject'] = $row['Subject'];  // Rename Class_Time to timeSlot
                    unset($row['Subject']);  // Remove the original Class_Time field

                    $row['timeSlot'] = $row['Class_Time'];  // Rename Class_Time to timeSlot
                    unset($row['Class_Time']);  // Remove the original Class_Time field


                    $row['section'] = $row['Section'];  // Rename Class_Time to timeSlot
                    unset($row['Section']);  // Remove the original Class_Time field
                    unset($row['Weekday']);  // Remove the original Class_Time field
                    unset($row['ID']);  // Remove the original Class_Time field
                    unset($row['Teacher_ID']);  // Remove the original Class_Time field

                }
                $scheduleByDay[$dayOfWeek][] = $row;  // Store the row without Class_Time
            }
        }

        // Remove the old "Class" key and other unwanted keys
        unset($row['ID']);
        unset($row['Teacher_ID']);
    }

    // Step 7: Prepare the final data structure
    $finalData = ['schedule' => $scheduleByDay];

    // Step 8: Generate a temporary JSON file
    $tempFileName = 'temp_data' .'.json';  // Use timestamp for unique file name
    $jsonData = json_encode($finalData, JSON_PRETTY_PRINT);

    // Save JSON data to a temporary file
    file_put_contents($tempFileName, $jsonData);

    // Step 9: Provide a link or path for further usage
    echo "Temporary JSON file created: " . $tempFileName;

} else {
    echo "No records found";
}

// Step 10: Close the database connection
$conn->close();
?>
