<?php

use Doctrine\ORM\Mapping as ORM;
/**
 * @Entity
 * @Table(name="Fabricante")
 */
class Fabricante {
	/**
	 * @Id
	 * @Column(type="integer")
	 * @GeneratedValue
	 */
	protected $id = null;
	
	/**
	 * @Column(type="string", name="nome", length=60, unique=true, nullable=false)
	 */
	protected $nome = null;
	

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
    protected function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of nome.
     *
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Sets the value of nome.
     *
     * @param mixed $nome the nome
     *
     * @return self
     */
    protected function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }
}