<?php require 'database.php'; ?>

<?php

$plsql = "
BEGIN
   -- Create a temporary table by cloning the structure of class_schedule
   EXECUTE IMMEDIATE 'CREATE GLOBAL TEMPORARY TABLE class_schedule_temp AS SELECT * FROM class_schedule WHERE 1=0'; -- Ensures structure without data

   -- Optionally, you can fetch or manipulate data if needed
   -- For example, retrieving some data from the original table and inserting it into the temporary table
   FOR rec IN (SELECT * FROM class_schedule) LOOP
      -- Insert the data from class_schedule into the temporary table
      EXECUTE IMMEDIATE 'INSERT INTO class_schedule_temp SELECT * FROM class_schedule';
   END LOOP;
END;
";

// Parse and execute the PL/SQL block
$stid = oci_parse($conn, $plsql);
if (!oci_execute($stid)) {
    $error = oci_error($stid);
    echo "Error in executing PL/SQL: " . $error['message'];
} else {
    echo "PL/SQL executed successfully!<br>";

    // Now fetch and display the data from the temporary table
    $query = "SELECT * FROM class_schedule_temp";
    $stid_select = oci_parse($conn, $query);
    oci_execute($stid_select);

    // Fetch data and display it in a table
    echo "<table border='1'><tr>";
    
    // Fetch column names to use as table headers
    $num_cols = oci_num_fields($stid_select);
    for ($i = 1; $i <= $num_cols; $i++) {
        $col_name = oci_field_name($stid_select, $i);
        echo "<th>" . htmlspecialchars($col_name) . "</th>";
    }
    echo "</tr>";

    // Fetch each row and display it in the table
    while ($row = oci_fetch_assoc($stid_select)) {
        echo "<tr>";
        foreach ($row as $column_value) {
            echo "<td>" . htmlspecialchars($column_value) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}

?>
