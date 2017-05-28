<?php

use Arcoders\Str;

class StrTest extends PHPUnit\Framework\TestCase {

    public function test_studly_method_convert_strings()
    {

        $this->assertSame(
            'Name', Str::studly('name'),
            'No retorna el valor esperado Name'
        );

        $this->assertSame(
            'FullName', Str::studly('full_name'),
            'No retorna el valor esperado FullName'
        );

        $this->assertSame(
            'BirthDate', Str::studly('birth_date'),
            'No retorna el valor esperado BirthDate'
        );

    }

}
