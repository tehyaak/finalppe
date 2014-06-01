<?php


use Doctrine\ORM\Mapping as ORM;

    /**
	* @Entity
	* @Table(name="statut")
	**/
class Statut
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
     * @Column(name="description", type="string", length=255)
     */
    private $description;
    
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
     * @return Statut
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
}
