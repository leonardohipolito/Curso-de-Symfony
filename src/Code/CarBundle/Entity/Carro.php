<?php
namespace Code\CarBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Carro")
 */
class Carro {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id = null;
	
	/**
	 * @ORM\Column(type="string", name="modelo", length=60, unique=true, nullable=false)
	 */
	protected $modelo = null;
	
	/**
	 * @ORM\Column(type="string", name="fabricante")
	 */
	protected $fabricante = null;
	
	/**
	 * @ORM\Column(type="integer", name="ano", nullable=false)
	 */
	protected $ano = null;
	
	/**
	 * @ORM\Column(type="string", name="cor", length=20, nullable=false)
	 */
	protected $cor = null;
	


    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of modelo.
     *
     * @return mixed
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Sets the value of modelo.
     *
     * @param mixed $modelo the modelo
     *
     * @return self
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Gets the value of fabricante.
     *
     * @return mixed
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }

    /**
     * Sets the value of fabricante.
     *
     * @param mixed $fabricante the fabricante
     *
     * @return self
     */
    public function setFabricante($fabricante)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Gets the value of ano.
     *
     * @return mixed
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Sets the value of ano.
     *
     * @param mixed $ano the ano
     *
     * @return self
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Gets the value of cor.
     *
     * @return mixed
     */
    public function getCor()
    {
        return $this->cor;
    }

    /**
     * Sets the value of cor.
     *
     * @param mixed $cor the cor
     *
     * @return self
     */
    public function setCor($cor)
    {
        $this->cor = $cor;

        return $this;
    }
}