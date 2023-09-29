<?php
class Dog
{
    protected string $name;
    protected string $category;

    public function __construct(string $name, string $category = 'Pit Bull')
    {
        $this->name = $name;
        $this->category = $category;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }
}

$original = new Dog('Bong');

echo $original->getName();
echo $original->getCategory();

// Clone and modify what is required

$cloned = clone $original;
$cloned->setName('Gau');
echo $cloned->getName();
echo $cloned->getCategory();
