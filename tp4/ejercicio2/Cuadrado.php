
include_once 'Figuras.php';

class Cuadrado extends Figuras{
    protected $lado;
     function __construct()
    {
        $lado=1;
    }
    public function getSuperficie(){
        return $this->lado * $this->lado;
    }
    public function setSuperficie($valor){
        $this->lado=$valor;
    }





}