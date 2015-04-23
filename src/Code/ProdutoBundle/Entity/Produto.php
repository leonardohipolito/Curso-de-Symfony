<?php
namespace Code\ProdutoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="Code\ProdutoBundle\Entity\ProdutoRepository")
 * @ORM\Table()
 */
class Produto
{
    /**
     * @var integer
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     * @ORM\Column(name="nome",type="string",length=255)
     */
    private $name;
    /**
     * @var string
     * @ORM\Column(name="description",type="text")
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="ProdutoDetalhe")
     * @ORM\JoinColumn(name="detalhe_id",referencedColumnName="id")
     */
    private $detalhe;

    /**
     * @ORM\ManyToOne(targetEntity="Code\CategoriaBundle\Entity\Categoria", inversedBy="produtos")
     * @ORM\JoinColumn(name="categoria", referencedColumnName="id")
     */
    protected $categoria;

    /**
     * @return mixed
     */
    public function getDetalhe()
    {
        return $this->detalhe;
    }

    /**
     * @param mixed $detalhe
     */
    public function setDetalhe($detalhe)
    {
        $this->detalhe = $detalhe;
    }
    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Gets the value of categoria.
     *
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Sets the value of categoria.
     *
     * @param mixed $categoria the categoria
     *
     * @return self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }
}