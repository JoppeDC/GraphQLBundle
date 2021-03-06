<?php

declare(strict_types=1);

namespace Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction\GraphQL;

use Overblog\GraphQLBundle\ExpressionLanguage\ExpressionFunction;

final class Mutation extends ExpressionFunction
{
    public function __construct($name = 'mutation')
    {
        parent::__construct(
            $name,
            function ($alias, $args = '[]') {
                return "\$globalVariable->get('mutationResolver')->resolve([$alias, $args])";
            }
        );
    }
}
