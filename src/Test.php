<?php

namespace Root\App;

use Psl\Type;

class Test
{
    /**
     * @return array{name: string, age: int, location?: array{city: string, state: string, country: string}}
     */
    public function foo(mixed $data): array
    {
        return Type\shape([
            'name'     => Type\string(),
            'age'      => Type\int(),
            'location' => Type\optional(Type\shape([
                'city'    => Type\string(),
                'state'   => Type\string(),
                'country' => Type\string(),
            ])),
        ])->coerce($data);
    }
}