<?php

include (__DIR__).'/../vendor/autoload.php';

class SteemConnectionTest extends PHPUnit_Framework_TestCase
{
	protected function setUp()
	{
		$this->SteemConnection = new \SteemPHP\SteemConnection('https://steemd.steemit.com');
	}

	public function testGetApi()
	{
		$this->assertInternalType('int', $this->SteemConnection->getApi('login_api'));
	}

	public function testGetProps()
	{
		$this->assertArrayHasKey('head_block_number', $this->SteemConnection->getProps());
	}

	public function testGetAccountHistory()
	{
		$this->assertArrayHasKey('0', $this->SteemConnection->getAccountHistory('davidk'));
	}

	public function testGetAccount()
	{
		$this->assertArrayHasKey('0', $this->SteemConnection->getAccount('davidk'));
	}

	public function testGetReputation()
	{
		$this->assertInternalType('int', $this->SteemConnection->getReputation('davidk'));
	}

	public function testVestToSteemByAccount()
	{
		$this->assertInternalType('float', $this->SteemConnection->vestToSteemByAccount('davidk'));
	}

	public function testGetFollowing()
	{
		$this->assertArrayHasKey('0', $this->SteemConnection->getFollowing('davidk'));
	}

	public function testGetFollowers()
	{
		$this->assertArrayHasKey('0', $this->SteemConnection->getFollowers('davidk'));
	}

	public function testCountFollows()
	{
		$this->assertArrayHasKey('account', $this->SteemConnection->countFollows('davidk'));
	}

}

?>