<?php require 'database.php' ?>

<?php

$plsql = "
BEGIN
   -- Create a temporary table by cloning the structure of class_schedule
   EXECUTE IMMEDIATE 'CREATE GLOBAL TEMPORARY TABLE class_schedule_temp AS SELECT * FROM class_schedule';

   -- Optionally, you can fetch or manipulate data if needed
   -- For example, retrieving some data from the original table
   FOR rec IN (SELECT * FROM class_schedule) LOOP
      -- Process each record (if needed)
      NULL;
   END LOOP;
END;
";

// Parse and execute the PL/SQL block
$stid = oci_parse($conn, $plsql);
if (!oci_execute($stid)) {
    $error = oci_error($stid);
    echo "Error in executing PL/SQL: " . $error['message'];
} else {
    echo "PL/SQL executed successfully!";
}

// Close the connection
oci_free_statement($stid);
oci_close($conn);

?>
