<?php

/**
 * Test class for /src/sys/common.php
 */
class commonTest extends UnitTestCase {

	public function __construct()
	{
		parent::__construct('Common.php Tests');
	}

	public function setUp()
	{
		$this->empty = array();
		$this->object = new stdClass();
		$this->array_like = new stdClass(array('foo' => 'bar'));
	}

	public function tearDown()
	{
		unset($this->empty);
		unset($this->object);
		unset($this->array_like);
	}

	public function testEmptyArrayNotLikeArray()
	{
		// Empty is not array like
		$this->assertFalse(miniMVC\is_like_array($this->empty));
	}

	public function testEmptyObjectIsLikeArray()
	{
		// Empty object is array like - because objects are truthy
		$this->assertTrue(miniMVC\is_like_array($this->object));
	}

}