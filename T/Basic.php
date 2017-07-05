<?php
namespace Dfe\ZohoInventory\T;
use Dfe\ZohoInventory\Settings as S;
// 2017-07-05
final class Basic extends TestCase {
	/** @test 2017-07-05 */
	function t00() {}

	/** @test 2017-07-05 */
	function t01() {echo S::s()->token();}
}