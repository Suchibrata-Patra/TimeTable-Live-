<?php 
require 'database.php'; // Assuming database connection is handled in this file

$sql = "CREATE TABLE provisional_routine (
    Teacher_ID INT,
    Subject VARCHAR2(255),
    Period INT,
    Class VARCHAR2(50)
);
WITH TeacherLoad AS (
    SELECT 
        t.Teacher_ID, 
        t.Subject, 
        COUNT(pr.Teacher_ID) AS TotalPeriods
    FROM 
        teacher_profile t
    LEFT JOIN 
        provisional_routine pr ON t.Teacher_ID = pr.Teacher_ID
    GROUP BY 
        t.Teacher_ID, t.Subject
),
AbsentTeachers AS (
    SELECT 
        teacher_id, 
        period
    FROM 
        (
            SELECT teacher_id, '1st_period' AS period, 1st_period_present_or_absent AS present_status FROM teacher_attendance
            UNION ALL
            SELECT teacher_id, '2nd_period' AS period, 2nd_period_present_or_absent AS present_status FROM teacher_attendance
            UNION ALL
            SELECT teacher_id, '3rd_period' AS period, 3rd_period_present_or_absent AS present_status FROM teacher_attendance
            UNION ALL
            SELECT teacher_id, '4th_period' AS period, 4th_period_present_or_absent AS present_status FROM teacher_attendance
            UNION ALL
            SELECT teacher_id, '5th_period' AS period, 5th_period_present_or_absent AS present_status FROM teacher_attendance
            UNION ALL
            SELECT teacher_id, '6th_period' AS period, 6th_period_present_or_absent AS present_status FROM teacher_attendance
            UNION ALL
            SELECT teacher_id, '7th_period' AS period, 7th_period_present_or_absent AS present_status FROM teacher_attendance
            UNION ALL
            SELECT teacher_id, '8th_period' AS period, 8th_period_present_or_absent AS present_status FROM teacher_attendance
        ) AS periods
    WHERE present_status = 0 -- Only consider absent teachers
),
AvailableSubstituteTeachers AS (
    -- Step 3: Fetch available substitute teachers for the same subject with fewer than 6 periods
    SELECT 
        t.Teacher_ID, 
        t.Subject, 
        tl.TotalPeriods
    FROM 
        teacher_profile t
    JOIN 
        TeacherLoad tl ON t.Teacher_ID = tl.Teacher_ID
    WHERE 
        tl.TotalPeriods < 6
)
-- Step 4: Allocate a substitute teacher to the absent teacher's period
SELECT 
    at.teacher_id AS Absent_Teacher,
    at.period AS Absent_Period,
    ast.Teacher_ID AS Substitute_Teacher,
    ast.Subject
FROM 
    AbsentTeachers at
JOIN 
    AvailableSubstituteTeachers ast ON at.period IN (
        '1st_period', '2nd_period', '3rd_period', '4th_period', '5th_period', '6th_period', '7th_period', '8th_period'
    )
WHERE 
    ast.Subject = (SELECT Subject FROM teacher_profile WHERE Teacher_ID = at.teacher_id) -- Same subject
ORDER BY 
    ast.TotalPeriods ASC; -- Allocate to teacher with fewer periods first
";

$result = $conn->query($sql); // Execute the query

if ($result === false) {
    // Output any SQL error
    echo "Error in SQL query: " . $conn->error;
} elseif ($result->num_rows > 0) {
    // Output the results
    while ($row = $result->fetch_assoc()) {
        echo "Absent Teacher: " . $row["Absent_Teacher"] . " | ";
        echo "Absent Period: " . $row["Absent_Period"] . " | ";
        echo "Substitute Teacher: " . $row["Substitute_Teacher"] . " | ";
        echo "Subject: " . $row["Subject"] . "<br>";
    }
} else {
    echo "No results found. Please check if there are absent teachers and available substitutes.";
}

$conn->close(); // Close the connection
?>
