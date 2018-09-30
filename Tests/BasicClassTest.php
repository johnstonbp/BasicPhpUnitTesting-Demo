<?php
require_once('Source/BasicClass.php');
require_once('PHPUnit/Framework/TestCase.php');

final class BasicClassTest extends PHPUnit_Framework_TestCase {

    public function testVersion_GetValue_Expect0dot1() {
        
        //Arrange
        $target = new BasicClass();

        //Act
        $version = $target->version;

        //Assert
        $this->assertEquals('0.1', $version);
    }
}