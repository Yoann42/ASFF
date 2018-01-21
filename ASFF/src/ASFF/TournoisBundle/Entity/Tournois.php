<?php

namespace ASFF\TournoisBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tournois
 *
 * @ORM\Table(name="tournois")
 * @ORM\Entity(repositoryClass="ASFF\TournoisBundle\Repository\TournoisRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Tournois
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="adversaire", type="string", length=255)
     */
    private $adversaire;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_limit", type="datetime")
     */
    private $dateLimit;
	
	/**
     * @var \DateTime
     *
     * @ORM\Column(name="date_tournois", type="datetime")
     */
    private $dateTournois;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_tournois", type="string", length=255, nullable=true)
     */
    private $lienTournois;

    /**
     * @var string
     *
     * @ORM\Column(name="lien_ligue", type="string", length=255, nullable=true)
     */
    private $lienLigue;

    /**
     * @var string
     *
     * @ORM\Column(name="series", type="string", length=255, nullable=true)
     */
    private $series;
	
	/**
     * @var string
     *
     * @ORM\Column(name="TableauxPoules", type="string", length=255, nullable=true)
     */
    private $TableauxPoules;
	
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
		$this->date_tournois = new \Datetime();
		$this->date_limit = new \Datetime();
	}


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set adversaire
     *
     * @param string $adversaire
     *
     * @return Tournois
     */
    public function setAdversaire($adversaire)
    {
        $this->adversaire = $adversaire;

        return $this;
    }

    /**
     * Get adversaire
     *
     * @return string
     */
    public function getAdversaire()
    {
        return $this->adversaire;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Tournois
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tournois
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
     * Set dateLimit
     *
     * @param \DateTime $dateLimit
     *
     * @return Tournois
     */
    public function setDateLimit($dateLimit)
    {
        $this->dateLimit = $dateLimit;

        return $this;
    }

    /**
     * Get dateLimit
     *
     * @return \DateTime
     */
    public function getDateLimit()
    {
        return $this->dateLimit;
    }

    /**
     * Set lienTournois
     *
     * @param string $lienTournois
     *
     * @return Tournois
     */
    public function setLienTournois($lienTournois)
    {
        $this->lienTournois = $lienTournois;

        return $this;
    }

    /**
     * Get lienTournois
     *
     * @return string
     */
    public function getLienTournois()
    {
        return $this->lienTournois;
    }

    /**
     * Set lienLigue
     *
     * @param string $lienLigue
     *
     * @return Tournois
     */
    public function setLienLigue($lienLigue)
    {
        $this->lienLigue = $lienLigue;

        return $this;
    }

    /**
     * Get lienLigue
     *
     * @return string
     */
    public function getLienLigue()
    {
        return $this->lienLigue;
    }

    /**
     * Set series
     *
     * @param string $series
     *
     * @return Tournois
     */
    public function setSeries($series)
    {
        $this->series = $series;

        return $this;
    }

    /**
     * Get series
     *
     * @return string
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * Set dateTournois
     *
     * @param \DateTime $dateTournois
     *
     * @return Tournois
     */
    public function setDateTournois($dateTournois)
    {
        $this->dateTournois = $dateTournois;

        return $this;
    }

    /**
     * Get dateTournois
     *
     * @return \DateTime
     */
    public function getDateTournois()
    {
        return $this->dateTournois;
    }
	
	/**
     * Get csvdateTournois
     *
     * @return \DateTime
     */
    public function getCsvDateTournois()
    {
        return $this->dateTournois->format('Y-m-d');
    }

    /**
     * Set remarque
     *
     * @param string $remarque
     *
     * @return Tournois
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
     * Set tableauxPoules
     *
     * @param string $tableauxPoules
     *
     * @return Tournois
     */
    public function setTableauxPoules($tableauxPoules)
    {
        $this->TableauxPoules = $tableauxPoules;

        return $this;
    }

    /**
     * Get tableauxPoules
     *
     * @return string
     */
    public function getTableauxPoules()
    {
        return $this->TableauxPoules;
    }
}
