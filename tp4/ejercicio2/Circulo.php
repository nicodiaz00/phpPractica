
include_once 'Figuras.php';
class Circulo extends Figuras
{
    protected $radio;

    public function setRadio($valorRadio)
    {
        $this->radio=$valorRadio;
    }
    public function getSuperficie(){
        $resultado = ($this->radio * $this->radio) * 3.14;
        return $resultado;
    }



}