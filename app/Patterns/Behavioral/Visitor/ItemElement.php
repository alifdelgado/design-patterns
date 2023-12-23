<?php

namespace App\Patterns\Behavioral\Visitor;

interface ItemElement
{
    public function accept(ShoppingCartVisitor $visitor): int;
}
