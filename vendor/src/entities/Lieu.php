<?php


use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection; //c'est une bibliotheque qui ns permet d'importer la collection 
/**
 * @ORM\Entity  @ORM\Table(name="lieu") 
 **/ 
class Lieu
    {
    /** @ORM\Id  @ORM\Column(type="integer") @ORM\GeneratedValue **/
    private $id;
    /**  @ORM\Column(type="string") **/
    private $nom;
    /**  @ORM\Column(type="string") **/
    private $date;
    /**  @ORM\Column(type="decimal") **/
    private $longitude;
    /**  @ORM\Column(type="decimal") **/
    private $latitude;
    //c'est une collection one lieu correspond a many formations(one to many)
    /**
     * One lieu has many formations. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Formation", mappedBy="lieu")
     */
    private $formations;
    /**
     * Many Lieux have one user. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Lieu", inversedBy="lieux")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;
     public function __construct()
     {
       //instancier la collection 
      $this->formations = new ArrayCollection();
     }

     public function getId()
    {
         return $this->id;
    }

     public function setId()
     {
       $this->id =$id; 
     }

     public function getnom()
     {
        return $this->nom;
     }

    public function setNom()
     {
      $this->nom =$nom; 
     }

    public function getLongitude()
     {
       return $this->longitude;
     }

    public function setLongitude()
     {
     $this->longitude =$longitude; 
     }

    public function getLatitude()
     {
      return $this->latitude;
     }

    public function setLatitude()
     {
    $this->latitude =$latitude; 
     }

    public function getFormations()
     {
     return $this->formations;
     }

    public function setFormations()
     {
    $this->formations =$formations;
     }
     
     public function getUser()
     {
     return $this->user;
     }

    public function setUser()
    {
    $this->user =$user;
    }
    
 
}
 

?>
