<?php
namespace Code\CategoriaBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="Categoria")
 */
class Categoria {


    public function __construct()
    {
        $this->produtos = new ArrayCollection();
    }
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue
	 */
	protected $id = null;
	
	/**
	 * @ORM\Column(type="string", name="name", length=60, unique=false, nullable=false)
	 */
	protected $name = null;
	
	/**
	 * @ORM\Column(type="string", name="slug", length=60, unique=true, nullable=false)
	 */
	protected $slug = null;
	

    /**
     * @OneToMany(targetEntity="Code\ProdutoBundle\Produto", mappedBy="categoria")
     */
    protected $produtos;


    /**
     * Gets the value of id.
     *
     * @ORM\return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @ORM\param mixed $id the id
     *
     * @ORM\return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @ORM\return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @ORM\param mixed $name the name
     *
     * @ORM\return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of slug.
     *
     * @ORM\return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Sets the value of slug.
     *
     * @ORM\param mixed $slug the slug
     *
     * @ORM\return self
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Gets the value of produtos.
     *
     * @return mixed
     */
    public function getProdutos()
    {
        return $this->produtos;
    }

    /**
     * Sets the value of produtos.
     *
     * @param mixed $produtos the produtos
     *
     * @return self
     */
    protected function setProdutos($produtos)
    {
        $this->produtos = $produtos;

        return $this;
    }
}