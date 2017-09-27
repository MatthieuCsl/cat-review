<?php 

namespace CatBundle\Repository;

class CatRepository
{
    public function findAllCats(): array
    {
        $cats = [
            'Frifrou',
            'Shiva',
            'Thalie',
            'Lénou',
        ];
        
        return $cats;
    }
}
