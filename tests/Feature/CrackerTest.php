<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Cracker;

class CrackerTest extends TestCase
{

    public function testBang()
    {
        $cracker = new Cracker("! ) # ( £ * % & > < @ a b c d e f g h i j k l m n o");
        $this->assertSame("a", $cracker->decrypt("!"));
    }

    public function testHash()
    {
        $cracker = new Cracker("! ) # ( £ * % & > < @ a b c d e f g h i j k l m n o");
        $this->assertSame("c", $cracker->decrypt("#"));
    }

    public function testPound()
    {
        $cracker = new Cracker("! ) # ( £ * % & > < @ a d e k l m n o b c f g h i j");
        $this->assertSame("e", $cracker->decrypt("£"));
    }

    public function gtlt()
    {
        $cracker = new Cracker("! ) # ( £ * % & @ a d e k l m n o b c f g h i j > <");
        $this->assertSame("yz", $cracker->decrypt("£"));
    }

    public function testFull()
    {
        $cracker = new Cracker("! ) # ( £ * % & > < @ a b c d e f g h i j k l m n o");
        $this->assertSame("hello mum", $cracker->decrypt("&£aad bjb"));
    }



}