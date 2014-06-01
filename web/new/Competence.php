<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Competence
 */
class Competence
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $parcours;

    /**
     * @var boolean
     */
    private $obligatoire;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $validation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->validation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Competence
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set parcours
     *
     * @param integer $parcours
     * @return Competence
     */
    public function setParcours($parcours)
    {
        $this->parcours = $parcours;

        return $this;
    }

    /**
     * Get parcours
     *
     * @return integer 
     */
    public function getParcours()
    {
        return $this->parcours;
    }

    /**
     * Set obligatoire
     *
     * @param boolean $obligatoire
     * @return Competence
     */
    public function setObligatoire($obligatoire)
    {
        $this->obligatoire = $obligatoire;

        return $this;
    }

    /**
     * Get obligatoire
     *
     * @return boolean 
     */
    public function getObligatoire()
    {
        return $this->obligatoire;
    }

    /**
     * Add validation
     *
     * @param \Validation $validation
     * @return Competence
     */
    public function addValidation(\Validation $validation)
    {
        $this->validation[] = $validation;

        return $this;
    }

    /**
     * Remove validation
     *
     * @param \Validation $validation
     */
    public function removeValidation(\Validation $validation)
    {
        $this->validation->removeElement($validation);
    }

    /**
     * Get validation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getValidation()
    {
        return $this->validation;
    }
}
