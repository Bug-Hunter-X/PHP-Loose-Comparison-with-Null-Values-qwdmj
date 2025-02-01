function foo(array $arr) {
  foreach ($arr as $value) {
    if ($value === null) {
      return false; 
    }
  }
  return true;
}

$arr = [1, 2, 3, null, 4, 5];

if (foo($arr)) {
  echo "Array does not contain null values.";
} else {
  echo "Array contains null values.";
}