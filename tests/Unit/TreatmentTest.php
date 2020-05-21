<?php

namespace Tests\Unit;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Collection;

//use PHPUnit\Framework\TestCase;
use App\Treatment;
use App\Animal;

class TreatmentTest extends TestCase
{

    use RefreshDatabase;

    public function testFromString()
    {
        //$result = Treatment::fromString("Hammock");
        // $this->assertInstanceOf(Treatment::class, $result);
        // $this->assertSame("Hammock", $result->name);

        // get the first treatment from the database
        //$treatmentFromDB = Treatment::all()->first();

        // check we get a treatment
       // $this->assertInstanceOf(Treatment::class, $treatmentFromDB);

        // check it's got the right name
     //   $this->assertSame("Hammock", $treatmentFromDB->name);

        // test no duplicates
        $result = Treatment::fromString("Fleas");
        $allTreatments = Treatment::where("name", "Fleas");
        $this->assertSame(1, $allTreatments->count());

    }



    public function testFromStrings()
    {
    // call the fromStrings method

    $result = Treatment::fromStrings(["Test", "Hammock"]);

    // check it's a Collection
    $this->assertInstanceOf(Collection::class, $result);

    // check the first item is "Test"
    $this->assertSame("Test", $result[0]->name);

    // check the second item is "Hammock"
    $this->assertSame("Hammock", $result[1]->name);

    }


}