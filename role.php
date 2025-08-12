<?php
// Define an array to store roles
$roles = array(
  'admin' => array('name' => 'Administrator', 'access_level' => 1),
  'moderator' => array('name' => 'Moderator', 'access_level' => 2),
  'user' => array('name' => 'User', 'access_level' => 3),
);

// Define an array to store user roles
$user_roles = array(
  'john' => 'admin',
  'jane' => 'moderator',
  'bob' => 'user',
);

// Function to check if user has a specific role
function has_role($username, $role) {
  global $user_roles;
  return $user_roles[$username] == $role;
}

// Function to check if user has a certain access level
function has_access_level($username, $access_level) {
  global $user_roles;
  global $roles;
  $user_role = $user_roles[$username];
  return $roles[$user_role]['access_level'] <= $access_level;
}

// Example usage:
$username = 'john';
$role = 'admin';
$access_level = 2;

if (has_role($username, $role)) {
  echo "$username has the role of $role\n";
}

if (has_access_level($username, $access_level)) {
  echo "$username has access level $access_level\n";
} else {
  echo "$username does not have access level $access_level\n";
}
?>