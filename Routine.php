<?php

require ('database.php') ;

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all teachers
$teachersQuery = "SELECT Teacher_ID, Teacher_Name FROM teacher_profile ORDER BY Teacher_Name";
$teachersResult = $conn->query($teachersQuery);
$teachers = [];
if ($teachersResult->num_rows > 0) {
    while ($row = $teachersResult->fetch_assoc()) {
        $teachers[] = $row;
    }
}

// Handle GET request for fetching schedules by weekday
if (isset($_GET['weekday'])) {
    $weekday = $conn->real_escape_string($_GET['weekday']);

    $schedulesQuery = "SELECT * FROM class_schedule WHERE Weekday = '$weekday'";
    $schedulesResult = $conn->query($schedulesQuery);
    $schedulesForWeekday = [];
    if ($schedulesResult->num_rows > 0) {
        while ($row = $schedulesResult->fetch_assoc()) {
            $schedulesForWeekday[] = $row;
        }
    }

    // Return the response as JSON
    echo json_encode($schedulesForWeekday);
    exit;
}

// Handle POST request to save schedules
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $weekday = $conn->real_escape_string($_POST['weekday']);
    $entries = json_decode($_POST['entries'], true);

    foreach ($entries as $entry) {
        $teacherID = $conn->real_escape_string($entry['teacher_id']);
        $classSection = $conn->real_escape_string($entry['class_section']);
        $subject = $conn->real_escape_string($entry['subject']);
        $period = $conn->real_escape_string($entry['period']);

        // Delete any existing duplicate schedule for the same teacher, weekday, class, and period
        $deleteQuery = "DELETE FROM class_schedule 
                        WHERE Teacher_ID = '$teacherID' 
                        AND Weekday = '$weekday' 
                        AND Class = '$classSection' 
                        AND Class_Time = '$period'";
        $conn->query($deleteQuery);

        // Insert the new schedule entry with both Class and Subject
        $insertQuery = "INSERT INTO class_schedule (Weekday, Class, Teacher_ID, Class_Time, Subject) 
                        VALUES ('$weekday', '$classSection', '$teacherID', '$period', '$subject')";
        $conn->query($insertQuery);
    }

    echo "Schedule saved successfully!";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Insert Class Schedule</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Timora</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <style>
        body {
            background-color: rgb(245, 245, 245);
            font-weight: 400 !important;
            /* background-color: #f0f0f2; */
        }

        /* Remove the default dropdown arrow */
        .class-section-dropdown {
            appearance: none;
            /* Removes the default arrow for modern browsers */
            -webkit-appearance: none;
            /* Removes the default arrow for Safari */
            -moz-appearance: none;
            /* Removes the default arrow for Firefox */
            background-color: #fafafc;
            /* Light background */
            border: 1px solid #ffffff;
            /* Border color */
            border-radius: 0px;
            /* Rounded corners */
            padding: 1px;
            /* Padding inside the dropdown */
            font-size: 16px;
            /* Font size */
            color: #495057;
            /* Text color */
            width: 100%;
            /* Full width */
            max-width: 300px;
            /* Maximum width */
            cursor: pointer;
            /* Pointer cursor on hover */
            outline: none;
            /* Removes outline on focus */
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        /* Add hover and focus effects */
        .class-section-dropdown:hover {
            border-color: #80bdff;
            /* Change border color on hover */
        }

        .class-section-dropdown:focus {
            border-color: #80bdff;
            /* Change border color on focus */
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            /* Add a subtle shadow */
        }

        .btn-primary {
            padding: 16px 30px;
            background-color: black;
            border-radius: 5px;
            border: none;
            border-radius: 5px;
        }

        .btn-primary:hover {
            background-color: rgb(0, 0, 0);
            color: rgb(255, 255, 255);
        }

        #weekday {
            padding: 15px;
            border: 2px solid black;
            font-weight: 300;
            font-size: 15px;
            background-color: #fafafc;
        }

        /* Hide the dropdown arrow */
        .class-section-dropdown {
            -webkit-appearance: none;
            /* For Safari and Chrome */
            -moz-appearance: none;
            /* For Firefox */
            appearance: none;
            /* For modern browsers */
            background: transparent;
            /* Remove the default background */
            border: none;
            /* Optional: Add border for styling */
            text-align: center;
            color: black
        }

        .class-section-dropdown::-ms-expand {
            display: none;
            /* Hide the arrow in IE/Edge */
        }
    </style>

</head>

<body>
    <div style="position:sticky;">
        <?php include('header.php') ?>
    </div>

    <div class="container mt-5">
        <h2 class="mb-4">Edit Schedule</h2>
        <!-- Weekday Selection -->
        <form id="scheduleForm" method="POST">

            <div class="row align-items-center">
                <div class="col-md-4 d-flex align-items-center">
                    <select class="form-select" id="weekday" name="weekday" required>
                        <option value="" disabled selected>Choose...</option>
                        <?php
                            $weekdays = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                            foreach ($weekdays as $day) {
                                echo "<option value=\"$day\">$day</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <button type="submit" class="btn btn-primary">Save Schedule</button>
                </div>
            </div>


            <!-- Table Display -->
            <div id="scheduleTable" class="mt-4">
                <table class="table table-bordered">
                    <thead id="tableHeader">
                        <tr style="text-align:center;">
                            <th style="font-weight:500;">Teacher</th>
                            <?php
                            // Periods for columns
                            $periods = ['1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th'];
                            foreach ($periods as $period) {
                                echo "<th style='font-weight:400 !important;background-color:#f7f9fa;'>$period - Period</th>";
                            }
                            ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($teachers as $teacher): ?>
                        <tr style="text-align:center;vertical-align:middle;">
                            <td>
                                <?= htmlspecialchars($teacher['Teacher_Name']) ?>
                            </td>
                            <?php foreach ($periods as $period): ?>
                            <td>
                                <!-- Dropdown for Class -->
                                <select class="form-select class-section-dropdown"
                                    data-teacher-id="<?= $teacher['Teacher_ID'] ?>" data-period="<?= $period ?>"
                                    data-type="class">
                                    <option value="" disabled selected>.</option>
                                    <?php 
        $classes = [
            "Class 5" => ['5A','5B','5C'],
            "Class 6" => ['6A','6B','6C'],
            "Class 7" => ['7A','7B','7C'],
            "Class 8" => ['8A','8B','8C'],
            "Class 9" => ['9A','9B'],
            "Class 10" => ['10A','10B'],
            "Higher Secondary" => ['Combined 11', '11 ARTS', '11 SCIENCE', 'Combined 12', '12 ARTS', '12 SCIENCE']
        ];

        foreach ($classes as $group => $groupClasses) {
            echo "<optgroup label=\"$group\">";
            foreach ($groupClasses as $class) {
                echo "<option value=\"$class\">$class</option>";
            }
            echo "</optgroup>";
        }
    ?>
                                </select>


                                <!-- Dropdown for Subject -->
                                <select class="form-select class-section-dropdown"
                                    style="border-top:0.5px solid rgb(226, 226, 226)"
                                    data-teacher-id="<?= $teacher['Teacher_ID'] ?>" data-period="<?= $period ?>"
                                    data-type="subject">
                                    <option value="" disabled selected>.</option>
                                    <?php 
            $subjects = ['Bengali', 'English', 'Math', 'Science','Education','History', 'Geography', 'Physics', 'Chemistry', 'Biology','Poribesh','Sanskrit','Computer','Life Science','Computer Application','Computer Science','Physical Education','Work Education','Physical Science'];
            foreach ($subjects as $subject) {
                echo "<option value=\"$subject\">$subject</option>";
            }
        ?>
                                </select>
                            </td>

                            <?php endforeach; ?>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </form>
    </div>

    <script>
        $(document).ready(function () {
            function updateTable(weekday) {
                // Clear the current table data
                $('.class-section-dropdown').val('');

                // Update the table header with the selected weekday
                // $('#tableHeader tr').find('th').first().text('Teacher - ' + weekday);
                $('#tableHeader tr').find('th').first().text('' + weekday);

                // Fetch schedule data for the selected weekday
                $.ajax({
                    type: 'GET',
                    url: '', // Use the same PHP file
                    data: { weekday: weekday },
                    success: function (response) {
                        const schedules = JSON.parse(response);

                        // Populate the table with the fetched data
                        schedules.forEach(schedule => {
                            const teacherId = schedule.Teacher_ID;
                            const period = schedule.Class_Time;
                            const classSection = schedule.Class;
                            const subject = schedule.Subject;

                            // Find the corresponding dropdown and update its value
                            $(`.class-section-dropdown[data-teacher-id="${teacherId}"][data-period="${period}"][data-type="class"]`).val(classSection);
                            $(`.class-section-dropdown[data-teacher-id="${teacherId}"][data-period="${period}"][data-type="subject"]`).val(subject);
                        });
                    }
                });
            }

            // Set default weekday to Monday on page load
            const defaultWeekday = 'Monday';
            $('#weekday').val(defaultWeekday);

            // Trigger the updateTable function for Monday on page load
            updateTable(defaultWeekday);

            // Listen for changes in the weekday dropdown
            $('#weekday').on('change', function () {
                const selectedWeekday = $(this).val();
                if (selectedWeekday) {
                    updateTable(selectedWeekday);
                }
            });

            // Handle form submission
            $('#scheduleForm').on('submit', function (e) {
                e.preventDefault();

                const weekday = $('#weekday').val();
                if (!weekday) {
                    alert('Please select a weekday.');
                    return;
                }

                const entries = [];
                $('.class-section-dropdown').each(function () {
                    const teacherId = $(this).data('teacher-id');
                    const period = $(this).data('period');
                    const type = $(this).data('type');
                    const value = $(this).val();

                    // Ensure both class and subject are selected
                    if (value) {
                        // Only push data when both Class and Subject are selected for each period
                        if (type === 'class') {
                            const subjectDropdown = $(`.class-section-dropdown[data-teacher-id="${teacherId}"][data-period="${period}"][data-type="subject"]`);
                            const subject = subjectDropdown.val();

                            if (subject) {
                                entries.push({
                                    teacher_id: teacherId,
                                    class_section: value,  // Class section
                                    subject: subject,      // Subject
                                    weekday: weekday,
                                    period: period
                                });
                            }
                        }
                    }
                });

                // If there are valid entries, send them via AJAX
                if (entries.length > 0) {
                    $.ajax({
                        type: 'POST',
                        url: '',
                        data: {
                            weekday: weekday,
                            entries: JSON.stringify(entries)
                        },
                        success: function (response) {
                            alert(response);
                            $.ajax({
    type: 'GET',
    url: 'json.php', // URL of json.php script
    success: function () {
        console.log('json.php script executed successfully');
    },
    error: function () {
        console.error('Error executing json.php script');
    }
});

                            location.reload();
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>