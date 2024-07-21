<?php

namespace Structural\Bridge\Pages\Helper;

/**
 * A helper class for the ProductPage class.
 */
class Product
{
    private $id;
    private $title;
    private $description;
    private $image;
    private $price;
    
    /**
     * __construct
     *
     * @param string $id
     * @param string $title
     * @param string $description
     * @param string $image
     * @param float $price
     * 
     * @return void
     */
    public function __construct(
        string $id,
        string $title,
        string $description,
        string $image,
        float $price
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->price = $price;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function getPrice(): float
    {
        return $this->price;
    }
}
