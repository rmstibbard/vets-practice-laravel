<?php

// namespace Tests\Unit;

// //use PHPUnit\Framework\TestCase;
// use Tests\TestCase;
// use Illuminate\Foundation\Testing\RefreshDatabase;
// use App\Owner;

// class OwnerTest extends TestCase
// {
//     use RefreshDatabase;
//     /**
//      * A basic unit test example.
//      *
//      * @return void
//      */
//     public function testFillable()
//     {
//         $owner = new Owner(
//             [
//                 "firstname" => 'testfn',
//                 "lastname" => 'testln',
//                 "address_1" => 'testad1',
//                 "address_2" => 'testad2',
//                 "town" => 'testtown',
//                 "postcode" => 'testpc',
//                 "landline" => 'testll',
//                 "mobile" => 'testmob'
//             ]
//         );

//         $this->assertSame("testfn", $owner->firstname);
//         $this->assertSame("testln", $owner->lastname);
//         $this->assertSame("testad1", $owner->address_1);
//         $this->assertSame("testad2", $owner->address_2);
//         $this->assertSame("testtown", $owner->town);
//         $this->assertSame("testpc", $owner->postcode);
//         $this->assertSame("testll", $owner->landline);
//         $this->assertSame("testmob", $owner->mobile);
//     }

//     public function testValidPhoneNumber()
//     {
//         // $owner = new Owner(["landline" => "07816155471"]);
//         // $this->assertTrue($owner->validPhoneNumber());
//         $owner = new Owner(["landline" => "07816155471"]);
//         $this->assertTrue($owner->validPhoneNumber());
//     }
//     public function testDatabase() {
//         Owner::create(
//             [
//                 "firstname" => "Test Firstname",
//                 "lastname" => "Test Lastname",
//                 "address_1" => "Test address_1",
//                 "address_2" => "Test address_2",
//                 "town" => "Test town",
//                 "landline" => "Test landline",
//                 "mobile" => "Test mobile"
//             ]
//         );
//         // get the first article back from the database
//         $ownerFromDB = Owner::all()->first();

//         // check the titles match
//         $this->assertSame("Test Firstname", $ownerFromDB->firstname);

//     }

//     public function testNumberOfPets()
//     {
//         $owner = new Owner(
//             [

//             ]
//         );
//         $this->assertSame($owner->numberOfPets());
//     }


// }