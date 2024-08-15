<!DOCTYPE html> 
<html> 
    <body>
    <?php
        echo "\n    ------------------------------------------------------------------";
        echo "\n    |                 LIST OF STUDENTS' AVERAGE                      |  ";
        echo "\n    ------------------------------------------------------------------\n";
        function calculate_average($math, $science, $english) {
            return ($math + $science + $english) / 3;
        }

        function determine_final_grade($average) {
            if ($average >= 90) {
                return "A";
            } elseif ($average >= 80) {
                return "B";
            } elseif ($average >= 70) {
                return "C";
            } elseif ($average >= 60) {
                return "D";
            } else {
                return "F";
            }
        }

        function display_student_info($name, $math, $science, $english) {
            $average = calculate_average($math, $science, $english);
            $final_grade = determine_final_grade($average);
            
            echo "\n\tStudent       : $name\n";
            echo "\tGrades        : Math = $math, Science = $science, English = $english\n";
            echo "\tAverage Grade : " . number_format($average, 2) . "\n";
            echo "\tFinal Grade   : $final_grade\n";
            echo "\n    ------------------------------------------------------------------\n";
        }
        display_student_info("Inis Livoria", 90, 88, 90);
        display_student_info("Hernix Giloi", 92, 88, 94);
        display_student_info("Maira Torfunado", 88, 95, 80);
        display_student_info("Awrin Sabaria", 75, 75, 78);
        display_student_info("Ennam Sowl", 73, 72, 88);
?>
    </body>
    </html>