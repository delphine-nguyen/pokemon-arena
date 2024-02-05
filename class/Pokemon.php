<?php

class Pokemon
{
    protected string $name;
    protected int $hp;
    protected int $maxHp;
    protected int $atk;

    protected string $sprite;

    public function __construct(
        string $name,
        int $maxHp,
        int $atk,
        string $sprite,
    ) {
        $this->name = $name;
        $this->maxHp = $maxHp;
        $this->atk = $atk;
        $this->sprite = $sprite;
        $this->hp = $maxHp;
    }

    public function getName(): string
    {
        return $this->name;
    }
    public function getHp(): int
    {
        return $this->hp;
    }

    public function getMaxHp(): int
    {
        return $this->maxHp;
    }

    public function getAtk(): int
    {
        return $this->atk;
    }

    public function getSprite(): string
    {
        return $this->sprite;
    }

    public function getType(): string
    {
        return "normal";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setHp(int $hp): void
    {
        if ($hp < 0) {
            $this->hp = 0;
        } else {
            $this->hp = $hp;
        }
    }

    public function setSprite(string $sprite): void
    {
        $this->sprite = $sprite;
    }
    public function setAtk(int $atk): void
    {
        $this->atk = $atk;
    }

    public function isDead(): bool
    {
        return $this->hp <= 0;
    }

    public function attack(Pokemon $pokemon): void
    {
        $damage = $this->atk;
        $pokemon->setHp($pokemon->getHp() - $damage);
    }

    public function __toString(): string
    {
        return
            "Name: " . $this->name . "<br>" .
            "HP: " . $this->hp . "<br>" .
            "ATK: " . $this->atk . "<br>" .
            "Status: " . ($this->isDead()) ? "Dead" : "Alive";
    }
}
