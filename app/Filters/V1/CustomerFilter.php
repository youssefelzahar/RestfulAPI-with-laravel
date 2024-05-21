<?php

namespace App\Filters\V1;
use Illuminate\Http\Request;
use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter{
    protected $safeParms = [
        'name'=>['eq'],
        'type'=>['eq'],
        'email'=>['eq'],
        'address'=>['eq'],

        'city'=>['eq'],

        'state'=>['eq'],

        'postalcode'=>['eq','gt','lt'],

    ];

    protected $columnMap=[
        'postalcode'=>'postal_code',
    ]
    ;

    protected $operatorMap=[
        'eq'=> '=',
        'lt'=> '<',
        'lte'=> '<=',
        'gt'=> '>',
        'gte'=> '>=',
    ];

   
}
