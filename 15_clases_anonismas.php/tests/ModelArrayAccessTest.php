<?php

use Arcoders\Model;

class ModelArrayAccessTest extends PHPUnit\Framework\TestCase {

    public function test_offset_get()
    {

        $user = new class extends Model {

            protected $attributes = [
                'name' => 'Ismael Haytam',
                'email' => 'arcoders@gmail.com',
                'website' => 'https://www.arcoders.org'
            ];

            public function fill(array $attributes = [])
            {
                $this->attributes = array_merge($this->attributes, $attributes);
            }


        };

        $this->assertSame('Ismael Haytam', $user['name']);

        $this->assertSame('arcoders@gmail.com', $user['email']);

        $this->assertSame('https://www.arcoders.org', $user['website']);

    }

    public function test_offset_exists()
    {

        $user = new UserTest([
            'name' => 'Ismael Haytam'
        ]);

        $this->assertTrue(isset($user['name']));

        $this->assertFalse(empty($user['name']));

        $this->assertFalse(isset($user['email']));

        $this->assertTrue(empty($user['email']));

    }

    /** @test **/
    function it_set_and_get_value_with_array_access()
    {
        $user = new UserTest();

        $user['name'] = 'Ismael Haytam';

        $this->assertSame('Ismael Haytam', $user['name']);
    }

    /** @test **/
    function it_can_set_and_unset_properties_with_array_access()
    {
        $user = new UserTest();

        $user['name'] = 'Ismael Haytam';

        $this->assertTrue(isset($user['name']));

        unset($user['name']);

        $this->assertFalse(isset($user['name']));
    }

}

class UserTest extends Model
{
    // ...
}
