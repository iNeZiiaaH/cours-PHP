<?php

class User {

    private string $firstName;
    private string $lastName;
    private int|DateTime $age;
    private bool $banned;

    public function __construct(string $firstName, string $lastName, int|DateTime $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->banned = false;
    }
    public function getfirstName(): string 
    {
        return $this->firstName;
    }
    public function setfirstName(string $firstName): void 
    {
        $this->firstName;
    }
    public function getlastName(): string 
    {
        return $this->lastName;
    }
    public function setlastName(string $lastName): void 
    {
        $this->lastName;
    }

    public function getFullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function hasLegalAge(): bool {
        if (is_int($this->age)) {
            $age = $this->age;
        } else {
            $now = new DateTime();
            $age = $this->age->diff($now)->y;
        }
        return $age >= 18;
    }

    public function isBanned(): bool {
        return $this->banned;
    }

    public function ban(): void {
        $this->banned = true;
    }

}

function ban(User $user): void {
    $user->ban(true);
}

$users = [
    new User('Justé', 'Jocyté', new DateTime('2005-11-19')),
    new User('Tarek', 'Doss', new DateTime('2008-01-01')),
    new User('Mamoud', 'Patoche', new DateTime('1998-05-12')),
    new User('Ciryl', 'Gane', new DateTime('1990-04-12')),
    new User('Johnny', 'Hallyday', new DateTime('1943-06-15')),
    new User('Jone', 'Jones', new DateTime('1987-07-19'))
];

foreach ($users as $user) {
    echo $user->getFullName() . ' est ' . ($user->hasLegalAge() ? 'majeur' : 'mineur') . PHP_EOL ?>  <br /> <?php ;
}
var_dump($users)
?>

