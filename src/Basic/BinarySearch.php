<?php

namespace Azuka\Algorithms\Basic;

class BinarySearch {

  private $haystack;

  public function __construct(array $haystack)
  {
    $this->haystack = $haystack;
  }

  public function search($value) {
    // Upper and lower bounds
    $left = 0;
    $right = count($this->haystack) - 1;

    while ($left < $right) {
      $middle = (int) floor(($right + $left)/2);
      if ($this->haystack[$middle] === $value) {
        return $middle;
      }
      if ($this->haystack[$middle] < $value) {
        $left = $middle + 1;
      }
      else {
        $right = $middle - 1;
      }
    }

    return false;
  }
}
