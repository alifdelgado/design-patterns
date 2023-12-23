<?php

namespace App\Patterns\Behavioral\Visitor;

interface ShoppingCartVisitor
{
    public function visitBook(Book $book): int;
    public function visitFruit(Fruit $fruit): int;
}
