<?php

namespace Tests\Basic;

use Azuka\Algorithms\Basic\BinarySearch;

class BinarySearchTest extends \PHPUnit_Framework_TestCase {

  public static function providesBinarySearchCases()
  {
    return [
      [
        2,
        [1, 2, 3, 4, 5],
        3,
      ],
      [
        0,
        [1, 2, 3, 4, 5],
        1,
      ],
      [
        3,
        [1, 2, 3, 4, 5],
        4,
      ],
      [
        false,
        [1, 2, 3, 4, 5],
        6,
      ],
    ];
  }

  /**
   * @dataProvider providesBinarySearchCases
   */
  public function testBinarySearchPositions($expectedPosition, array $haystack, $needle)
  {
    $this->assertSame($expectedPosition, (new BinarySearch($haystack))->search($needle));
  }

}
