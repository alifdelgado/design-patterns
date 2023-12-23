<?php

namespace App\Patterns\Behavioral\Visitor;

class ShoppingCartVisitorImp implements ShoppingCartVisitor
{
    public function visitBook(Book $book): int
    {
        $cost = $book->getCost();

        if($book->getCost() > 50) {
            $cost -= 5;
        }
        dump("Book ISBN: {$book->getIsbn()} Cost: {$cost}");
        return $cost;
    }

    public function visitFruit(Fruit $fruit): int
    {
        $cost = $fruit->getPricePerKg() * $fruit->getWeight();
        dump("{$fruit->getName()} Cost: {$cost}");
        return $cost;
    }
}
