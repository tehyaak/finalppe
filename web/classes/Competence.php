<?php

use Doctrine\ORM\Mapping as ORM;

    /**
	* @Entity
	* @Table(name="competence")
	**/

class Competence
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
        * @OneToMany(targetEntity="validation", mappedBy="competence")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="intitule", type="string", length=255)
     */
    private $intitule;


    /**
     * @var boolean
     *
     * @Column(name="obligatoire", type="boolean")
     */
    private $obligatoire;

    /**
     * @var integer
     *
     * @Column(name="parcours", type="integer")
     */
    private $parcours;
    
    


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
     * Set intitule
     *
     * @param string $intitule
     * @return Competence
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string 
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set code
     *
     * @param float $code
     * @return Competence
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return float 
     */
    public function getCode()
    {
        return $this->code;
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
}
