<?php

/* Fighter class definition */
class Fighter 
{
    public const MAX_LIFE = 100;
    private string $name;
    private int $strength;
    private int $dexterity;
    private int $life = self::MAX_LIFE;

    public function __construct(string $name, int $strength, int $dexterity)
    {
        $this->name = $name;
        $this->strength = $strength;
        $this->dexterity = $dexterity;
    }

    public function fight(Fighter $adversary)
    {
        $attackFighter = rand(1, $this->getStrength());
        $damage = $attackFighter - $adversary->getDexterity();
        if ($damage < 0 ) {
            $damage = 0;
        }
        $newLifeAdversary = $adversary->getLife() - $damage;
        $adversary->setLife($newLifeAdversary);
        return $this->name . " attaque " . $adversary->getName() . " 💙 " . $adversary->getLife();
    }

    public function isAlive(): bool
    {
        if($this->getLife() === 0 ){
            return false;
        }
        return true;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the value of life
     */ 
    public function getLife()
    {
        return $this->life;
    }

    /**
     * Get the value of strength
     */ 
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Get the value of dexterity
     */ 
    public function getDexterity()
    {
        return $this->dexterity;
    }

    /**
     * Set the value of life
     *
     * @return  self
     */ 
    public function setLife($life)
    {
        if ($life > 0 ) {
        $this->life = $life;
        } else {
            $this->life = 0;
        }

        return $this;
    }
}