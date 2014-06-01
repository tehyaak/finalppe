<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Examinateur
 */
class Examinateur
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
