function foo(array $arr) {
  foreach ($arr as $value) {
    if ($value === null) {
      return false; 
    }
  }
  return true;
}

function fooCorrected(array $arr) {
  foreach ($arr as $value) {
    if ($value === null || $value === 0 || $value === '0' || $value === "") {
      return false; 
    }
  }
  return true;
}

$arr = [1, 2, 3, null, 4, 5];
$arr2 = [1,2,3,0,4,5];
$arr3 = [1,2,3,'0',4,5];
$arr4 = [1,2,3,'',4,5];
if (foo($arr)) {
  echo "Array does not contain null values (Incorrect).";
} else {
  echo "Array contains null values (Correct).";
}

if (fooCorrected($arr)) {
  echo "\nArray does not contain null values (Incorrect).";
} else {
  echo "\nArray contains null values (Correct).";
}

if (fooCorrected($arr2)) {
  echo "\nArray does not contain null values (Correct).";
} else {
  echo "\nArray contains null values (Incorrect).";
}

if (fooCorrected($arr3)) {
  echo "\nArray does not contain null values (Correct).";
} else {
  echo "\nArray contains null values (Incorrect).";
}

if (fooCorrected($arr4)) {
  echo "\nArray does not contain null values (Correct).";
} else {
  echo "\nArray contains null values (Incorrect).";
}
