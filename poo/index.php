<?php

class User {

    private string $firstName;
    private string $lastName;
    private int|DateTime $birthDate;
    private bool $banned;

    public function __construct(string $firstName, string $lastName, int|DateTime $birthDate) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthDate = $birthDate;
        $this->banned = false;
    }

    public function fullName(): string {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function hasLegalAge(): bool {
        if (is_int($this->birthDate)) {
            $age = $this->birthDate;
        } else {
            $now = new DateTime();
            $age = $this->birthDate->diff($now)->y;
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
    $user->ban();
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
    echo $user->fullName() . ' est ' . ($user->hasLegalAge() ? 'majeur' : 'mineur') . PHP_EOL ?>  <br /> <?php ;
}

?>
