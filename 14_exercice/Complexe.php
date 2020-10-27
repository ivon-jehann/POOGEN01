<?php


class Complexe
{
    protected $r;
    protected $i;

    public function __construct(float $r, float $i) {
        $this->i = $i;
        $this->r = $r;
    }

    public function ajouter(Complexe $c): Complexe {
        $nr = $this->r + $c->getR();
        $ni = $this->i + $c->getI();
        return new Complexe($nr, $ni);
    }

    public function soustraction(Complexe $c): Complexe {
        $nr = $this->r - $c->getR();
        $ni = $this->i - $c->getI();
        return new Complexe($nr, $ni);
    }

    public function produit(Complexe $c): Complexe {
        $nr = $this->r*$c->getR() - $this->i*$c->getI();
        $ni = $c->getR()*$this->i + $this->r*$c->getI();
        return new Complexe($nr, $ni);
    }

    public function division(Complexe $c): Complexe {
        $nr = ($this->r*$c->getR() + $this->i*$c->getI()) / ($c->getR()**2 + $c->getI()**2);
        $ni = ($c->getR()*$this->i - $this->r*$c->getI()) / ($c->getR()**2 + $c->getI()**2);
        return new Complexe($nr, $ni);
    }

    public function __toString(): string {
        $r = $this->r;
        $i = $this->i >= 0 ? '+'.$this->i.'*i' : $this->i.'*i';
        return $r . $i;
    }

    /**
     * @return float
     */
    public function getR(): float
    {
        return $this->r;
    }

    /**
     * @param float $r
     * @return Complexe
     */
    public function setR(float $r): Complexe
    {
        $this->r = $r;
        return $this;
    }

    /**
     * @return float
     */
    public function getI(): float
    {
        return $this->i;
    }

    /**
     * @param float $i
     * @return Complexe
     */
    public function setI(float $i): Complexe
    {
        $this->i = $i;
        return $this;
    }


}