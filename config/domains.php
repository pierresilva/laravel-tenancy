<?php
return [

    ['bootstrap' => 'App\Providers\DomainBootstrapServiceProvider',
        'id' => 1,
        'domain' => 'tenancy.test',
        'name' => 'TENANCY',
        'domain_alternatives' => [
            'www.tenancy.test',
        ],
    ],

    ['bootstrap' => 'App\Providers\DomainBootstrapServiceProvider',
        'id' => 2,
        'domain' => 'tenancy-one.test',
        'name' => 'TENANCY ONE',
        'domain_alternatives' => [
            'www.tenancy-one.test',
        ],
    ],

    ['bootstrap' => 'App\Providers\DomainBootstrapServiceProvider',
        'id' => 3,
        'domain' => 'tenancy-two.test',
        'name' => 'TENANCY TWO',
        'domain_alternatives' => [
            'www.tenancy-two.test',
        ],
    ],
];
