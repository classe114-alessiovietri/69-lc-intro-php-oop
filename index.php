<?php
    class User {

        public $firstName;
        public $lastName;
        private $age;
        public $address;

        function __construct(string $nome, string $cognome, int $eta = 0, Address $indirizzo = null) {
            $this->firstName = $nome;
            $this->lastName = $cognome;
            $this->setAge($eta);
            $this->address = $indirizzo;
        }

        public function getFullName() {
            return $this->firstName.' '.$this->lastName;
        }

        public function getAge() {
            return $this->age;
        }

        public function setAge($age) {
            if (is_numeric($age)) {
                $this->age = $age;
            }
            else {
                var_dump('ERRORE: valore non valido!');
            }
        }

    }

    class Address {
        public $street = 'Via Roma, 1';

        public function getStreet() {
            return $this->street;
        }
    }
    
    $indirizzoFilippo = new Address();

    $filippo = new User('Filippo', 'Mangione', 30, $indirizzoFilippo);
    // $filippo->firstName = 'Filippo';
    // $filippo->lastName = 'Mangione';
    $filippo->setAge(30);
    var_dump($filippo);

    var_dump($filippo->getFullName());
    var_dump($filippo->address?->street);
    	
    $sofia = new User('Sofia', 'Perlari');
    // $sofia->firstName = 'Sofia';
    // $sofia->lastName = 'Perlari';
    $sofia->setAge('trenta');
    var_dump($sofia);

    var_dump($sofia->getFullName());
    var_dump($sofia->firstName);
    var_dump($sofia->address?->street);

    var_dump('La metà degli anni di Filippo è: '.($filippo->getAge() / 2));
    var_dump('La metà degli anni di Sofia è: '.($sofia->getAge() / 2));

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template PHP</title>
    </head>
    <body>

        <header>
            HEADER
        </header>

        <main>
            MAIN
        </main>

        <footer>
            FOOTER
        </footer>
        
        <script>
            const person = {
                firstName: 'Filippo',
                lastName: 'Mangione',
                getFullName() {
                    return this.firstName + ' ' + this.lastName;
                }
            };

            console.log(person.getFullName());
        </script>
    </body>
</html>