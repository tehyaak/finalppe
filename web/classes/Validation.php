<?php

use Doctrine\ORM\Mapping as ORM;

    /**
	* @Entity
	* @Table(name="validation")
	**/

class Validation
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer")
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
    * @ManyToOne(targetEntity="statut")
     */
    private $statut;


    /**
    * @ManyToOne(targetEntity="user")
     */
    private $user;
    
    /**
    * @ManyToOne(targetEntity="competence")
     */
    protected $competence;

    /**
     * @var \DateTime
     *
     * @Column(name="date", type="datetime")
     */
    private $date;


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
     * Set competence
     *
     * @param \stdClass $competence
     * @return Validation
     */
    public function setCompetence($competence)
    {
        $this->competence = $competence;

        return $this;
    }

    /**
     * Get competence
     *
     * @return \stdClass 
     */
    public function getCompetence()
    {
        return $this->competence;
    }

    /**
     * Set user
     *
     * @param \stdClass $user
     * @return Validation
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \stdClass 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set statut
     *
     * @param \stdClass $statut
     * @return Validation
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return \stdClass 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Validation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
