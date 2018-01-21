<?php

namespace ASFF\TournoisBundle\Entity;

use ASFF\TournoisBundle\Entity\Tournois;
use ASFF\UserBundle\Entity\Users;
use Doctrine\ORM\Mapping as ORM;

/**
 * InscriptionsTournois
 *
 * @ORM\Table(name="inscriptions_tournois")
 * @ORM\Entity(repositoryClass="ASFF\TournoisBundle\Repository\InscriptionsTournoisRepository")
 */
class InscriptionsTournois
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

	/**
	* @ORM\ManyToOne(targetEntity="ASFF\UserBundle\Entity\Users")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $user;

	/**
	* @ORM\ManyToOne(targetEntity="ASFF\TournoisBundle\Entity\Tournois")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $tournois;

	/**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date;

    /**
     * @var bool
     *
     * @ORM\Column(name="match_simple", type="boolean", nullable=true)
     */
    private $match_simple;

    /**
     * @var bool
     *
     * @ORM\Column(name="match_mixte", type="boolean", nullable=true)
     */
    private $match_mixte;

    /**
     * @var bool
     *
     * @ORM\Column(name="match_double", type="boolean", nullable=true)
     */
    private $match_double;
	
    /**
     * @var \string
     *
     * @ORM\Column(name="partenaire_double", type="string", length=100, nullable=true)
     */
    private $partenaire_double;

    /**
     * @var \string
     *
     * @ORM\Column(name="partenaire_mixte", type="string", length=100, nullable=true)
     */
    private $partenaire_mixte;

	/**
     * @var \string
     *
     * @ORM\Column(name="partenaire_double_ext", type="string", length=100, nullable=true)
     */
	private $partenaire_double_ext;

    /**
     * @var \string
     *
     * @ORM\Column(name="club_double_ext", type="string", length=100, nullable=true)
     */
    private $club_double_ext;

    /**
     * @var \string
     *
     * @ORM\Column(name="partenaire_mixte_ext", type="string", length=100, nullable=true)
     */
    private $partenaire_mixte_ext;
  
    /**
     * @var \string
     *
     * @ORM\Column(name="club_mixte_ext", type="string", length=100, nullable=true)
     */
	private $club_mixte_ext;
  
    /**
     * @var bool
     *
     * @ORM\Column(name="reglement", type="boolean", nullable=false)
     */
	private $reglement;
	
	/**
     * @var string
     *
     * @ORM\Column(name="remarque", type="text", nullable=true)
     */
    private $remarque;
  
	public function __construct()
	{
		// Par défaut, la date de l'annonce est la date d'aujourd'hui
		$this->date = new \Datetime();
		$this->reglement = false;
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return UsersTournois
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
	
	/**
     * Get csvdate
     *
     * @return \DateTime
     */
    public function getCsvDate()
    {
        return $this->date->format('Y-m-d');
    }

    /**
     * Set reglement
     *
     * @param boolean $reglement
     *
     * @return UsersTournois
     */
    public function setReglement($reglement)
    {
        $this->reglement = $reglement;

        return $this;
    }

    /**
     * Get reglement
     *
     * @return boolean
     */
    public function getReglement()
    {
        return $this->reglement;
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     *
     * @return UsersTournois
     */
    public function setRemarque($remarque)
    {
        $this->remarque = $remarque;

        return $this;
    }

    /**
     * Get remarque
     *
     * @return string
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set user
     *
     * @param \ASFF\UserBundle\Entity\Users $user
     *
     * @return UsersTournois
     */
    public function setUser(\ASFF\UserBundle\Entity\Users $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \ASFF\UserBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set tournois
     *
     * @param \ASFF\TournoisBundle\Entity\Tournois $tournois
     *
     * @return UsersTournois
     */
    public function setTournois(\ASFF\TournoisBundle\Entity\Tournois $tournois)
    {
        $this->tournois = $tournois;

        return $this;
    }

    /**
     * Get tournois
     *
     * @return \ASFF\TournoisBundle\Entity\Tournois
     */
    public function getTournois()
    {
        return $this->tournois;
    }


    /**
     * Set matchSimple
     *
     * @param boolean $matchSimple
     *
     * @return InscriptionsTournois
     */
    public function setMatchSimple($matchSimple)
    {
        $this->match_simple = $matchSimple;

        return $this;
    }

    /**
     * Get matchSimple
     *
     * @return boolean
     */
    public function getMatchSimple()
    {
        return $this->match_simple;
    }

    /**
     * Set matchMixte
     *
     * @param boolean $matchMixte
     *
     * @return InscriptionsTournois
     */
    public function setMatchMixte($matchMixte)
    {
        $this->match_mixte = $matchMixte;

        return $this;
    }

    /**
     * Get matchMixte
     *
     * @return boolean
     */
    public function getMatchMixte()
    {
        return $this->match_mixte;
    }

    /**
     * Set matchDouble
     *
     * @param boolean $matchDouble
     *
     * @return InscriptionsTournois
     */
    public function setMatchDouble($matchDouble)
    {
        $this->match_double = $matchDouble;

        return $this;
    }

    /**
     * Get matchDouble
     *
     * @return boolean
     */
    public function getMatchDouble()
    {
        return $this->match_double;
    }

    /**
     * Set partenaireDoubleExt
     *
     * @param string $partenaireDoubleExt
     *
     * @return InscriptionsTournois
     */
    public function setPartenaireDoubleExt($partenaireDoubleExt)
    {
        $this->partenaire_double_ext = $partenaireDoubleExt;

        return $this;
    }

    /**
     * Get partenaireDoubleExt
     *
     * @return string
     */
    public function getPartenaireDoubleExt()
    {
        return $this->partenaire_double_ext;
    }

    /**
     * Set clubDoubleExt
     *
     * @param string $clubDoubleExt
     *
     * @return InscriptionsTournois
     */
    public function setClubDoubleExt($clubDoubleExt)
    {
        $this->club_double_ext = $clubDoubleExt;

        return $this;
    }

    /**
     * Get clubDoubleExt
     *
     * @return string
     */
    public function getClubDoubleExt()
    {
        return $this->club_double_ext;
    }

    /**
     * Set partenaireMixteExt
     *
     * @param string $partenaireMixteExt
     *
     * @return InscriptionsTournois
     */
    public function setPartenaireMixteExt($partenaireMixteExt)
    {
        $this->partenaire_mixte_ext = $partenaireMixteExt;

        return $this;
    }

    /**
     * Get partenaireMixteExt
     *
     * @return string
     */
    public function getPartenaireMixteExt()
    {
        return $this->partenaire_mixte_ext;
    }

    /**
     * Set clubMixteExt
     *
     * @param string $clubMixteExt
     *
     * @return InscriptionsTournois
     */
    public function setClubMixteExt($clubMixteExt)
    {
        $this->club_mixte_ext = $clubMixteExt;

        return $this;
    }

    /**
     * Get clubMixteExt
     *
     * @return string
     */
    public function getClubMixteExt()
    {
        return $this->club_mixte_ext;
    }

    /**
     * Set partenaireDouble
     *
     * @param string $partenaireDouble
     *
     * @return InscriptionsTournois
     */
    public function setPartenaireDouble($partenaireDouble)
    {
        $this->partenaire_double = $partenaireDouble;

        return $this;
    }

    /**
     * Get partenaireDouble
     *
     * @return string
     */
    public function getPartenaireDouble()
    {
        return $this->partenaire_double;
    }

    /**
     * Set partenaireMixte
     *
     * @param string $partenaireMixte
     *
     * @return InscriptionsTournois
     */
    public function setPartenaireMixte($partenaireMixte)
    {
        $this->partenaire_mixte = $partenaireMixte;

        return $this;
    }

    /**
     * Get partenaireMixte
     *
     * @return string
     */
    public function getPartenaireMixte()
    {
        return $this->partenaire_mixte;
    }
}
