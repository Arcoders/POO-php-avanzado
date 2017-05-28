<?php

use Arcoders\Model;

class ArrayAccessTest extends PHPUnit\Framework\TestCase {

    public function test_a_model_has_array_access()
    {

        $user = new UserTest([
            'name' => 'Ismael Haytam',
            'email' => 'arcoders@gmail.com',
            'website' => 'https://www.arcoders.org'
        ]);

        $this->assertSame('Ismael Haytam', $user['name']);

        $this->assertSame('arcoders@gmail.com', $user['email']);

        $this->assertSame('https://www.arcoders.org', $user['website']);

    }

}

class UserTest extends Model implements ArrayAccess
{

    public function offsetExists($offset)
    {

    }

    public function offsetGet($offset)
    {
        return $this->getAttribute($offset);
    }

    public function offsetSet($offset, $value)
    {

    }

    public function offsetUnset($offset)
    {

    }

}
