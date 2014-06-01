<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Professeur
 */
class Professeur
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
