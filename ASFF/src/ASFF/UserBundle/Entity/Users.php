<?php

namespace ASFF\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Users
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="ASFF\UserBundle\Repository\UsersRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Users extends BaseUser
{
	/**
    * @ORM\OneToOne(targetEntity="ASFF\UserBundle\Entity\Image", cascade={"persist", "remove"})
    */
	private $image;
	
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @var \string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;
	
	/**
     * @var \string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;
	
	/**
     * @var \string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=false)
     */
    private $sexe;
	
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_naissance", type="datetime", nullable=true)
     */
    private $dateNaissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_inscription", type="datetime", nullable=false)
     */
    private $dateInscription;

    /**
     * @var string
     *
     * @ORM\Column(name="msn", type="string", length=5, nullable=true)
     */
    private $msn;

    /**
     * @var string
     *
     * @ORM\Column(name="aim", type="string", length=5, nullable=true)
     */
    private $aim;

    /**
     * @var string
     *
     * @ORM\Column(name="yim", type="string", length=5, nullable=true)
     */
    private $yim;
	
	/**
     * @var string
     *
     * @ORM\Column(name="licence", type="integer", nullable=true)
     */
    private $licence;
	
	public function __construct()
	{
		$this->roles = array('ROLE_JOUEUR');
		$this->dateInscription = new \Datetime();
	}

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return Users
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }
	
	/**
     * Get csvdateNaissance
     *
     * @return \DateTime
     */
    public function getCsvDateNaissance()
    {
        return $this->dateNaissance->format('Y-m-d');
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     *
     * @return Users
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set msn
     *
     * @param string $msn
     *
     * @return Users
     */
    public function setMsn($msn)
    {
        $this->msn = $msn;

        return $this;
    }

    /**
     * Get msn
     *
     * @return string
     */
    public function getMsn()
    {
        return $this->msn;
    }

    /**
     * Set aim
     *
     * @param string $aim
     *
     * @return Users
     */
    public function setAim($aim)
    {
        $this->aim = $aim;

        return $this;
    }

    /**
     * Get aim
     *
     * @return string
     */
    public function getAim()
    {
        return $this->aim;
    }

    /**
     * Set yim
     *
     * @param string $yim
     *
     * @return Users
     */
    public function setYim($yim)
    {
        $this->yim = $yim;

        return $this;
    }

    /**
     * Get yim
     *
     * @return string
     */
    public function getYim()
    {
        return $this->yim;
    }

    /**
     * Set licence
     *
     * @param integer $licence
     *
     * @return Users
     */
    public function setLicence($licence)
    {
        $this->licence = $licence;

        return $this;
    }

    /**
     * Get licence
     *
     * @return integer
     */
    public function getLicence()
    {
        return $this->licence;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Users
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Get PrenomNom
     *
     * @return string
     */
    public function getPrenomNom()
    {
        return $this->prenom." ".$this->nom;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Users
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set sexe
     *
     * @param boolean $sexe
     *
     * @return Users
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return boolean
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set image
     *
     * @param \ASFF\UserBundle\Entity\Image $image
     *
     * @return Users
     */
    public function setImage(\ASFF\UserBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \ASFF\UserBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
