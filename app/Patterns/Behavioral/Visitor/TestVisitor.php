<?php

namespace App\Patterns\Behavioral\Visitor;

use Illuminate\Support\Collection;

class TestVisitor
{
    public function init(): void
    {
        $items = collect([
            new Book(20, '1234'),
            new Book(10, '5678'),
            new Fruit(5, 2, 'Banana'),
            new Fruit(10, 5, 'Apple'),
        ]);

        $total = $this->calculatePrice($items);
        dump("Total cost: {$total}");
    }

    public function calculatePrice(Collection $items): int
    {
        $visitor = new ShoppingCartVisitorImp();
        return $items->reduce(fn ($total, $item) => $total + $item->accept($visitor), 0);
    }
}
