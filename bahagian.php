<?php
// Define an array to store departments
$departments = array(
  'HR' => array('name' => 'Human Resources', 'grade' => 1),
  'IT' => array('name' => 'Information Technology', 'grade' => 2),
  'Finance' => array('name' => 'Finance Department', 'grade' => 3),
  'Marketing' => array('name' => 'Marketing Department', 'grade' => 4),
);

// Define an array to store positions
$positions = array(
  'HR Manager' => array('department' => 'HR', 'grade' => 5),
  'IT Manager' => array('department' => 'IT', 'grade' => 6),
  'Financial Analyst' => array('department' => 'Finance', 'grade' => 7),
  'Marketing Manager' => array('department' => 'Marketing', 'grade' => 8),
  'Software Engineer' => array('department' => 'IT', 'grade' => 9),
  'HR Generalist' => array('department' => 'HR', 'grade' => 10),
);

// Function to get department name by code
function get_department_name($code) {
  global $departments;
  return $departments[$code]['name'];
}

// Function to get position details by name
function get_position_details($name) {
  global $positions;
  return $positions[$name];
}

// Example usage:
$department_code = 'HR';
$position_name = 'HR Manager';

$department_name = get_department_name($department_code);
$position_details = get_position_details($position_name);

echo "Department: $department_name (Grade: {$departments[$department_code]['grade']})\n";
echo "Position: $position_name (Grade: {$position_details['grade']})\n";
?>