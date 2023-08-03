<?php
class Vertebrates{

    public function __construct()
    {
        $this->stampaVertebrati();  
    }

    protected function stampaVertebrati()
    {
        echo "sono un vertebrato \n ";
    }
}

class Warm_blooded extends Vertebrates{

    public function __construct()
    {
        parent::__construct();
        $this->stampaSangueCaldo();  
    }  
    protected function stampaSangueCaldo()
    {
        echo "sono un Sangue Caldo\n ";
    }
}

class Mammals extends Warm_blooded{

    public function __construct()
    {
        parent::__construct();
        $this->stampaMammifero();  
    }
    protected function stampaMammifero()
    {
        echo "sono un Mammifero \n ";
    }
}

class Birds extends Warm_blooded{

    public function __construct()
    {
        parent::__construct();
        $this->stampaUccello();  
    }
    protected function stampaUccello()
    {
        echo "sono un Uccello \n ";
    }
}

class Cold_blooded extends Vertebrates{

    public function __construct()
    {
        parent::__construct();
        $this->stampaColdblooded();  
    }
    protected function stampaColdblooded()
    {
        echo "sono un Sangue Freddo \n ";
    }
}

class Fish extends Cold_blooded{

    public function __construct()
    {
        parent::__construct();
        $this->stampaPesce();  
    }
    protected function stampaPesce()
    {
        echo "sono un Pesce \n ";
    }
}

class Reptiles extends Cold_blooded{

    public function __construct()
    {
        parent::__construct();
        $this->stampaRettile();  
    }
    protected function stampaRettile()
    {
        echo "sono un Rettile \n ";
    }
}

class Amphibians extends Cold_blooded{

    public function __construct()
    {
        parent::__construct();
        $this->stampaAnfibio();  
    }
    protected function stampaAnfibio()
    {
        echo "sono un Anfibio \n ";
    }
}





$test = new Mammals();
$test= new Amphibians();