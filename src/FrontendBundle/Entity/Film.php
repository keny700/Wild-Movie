<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\FilmRepository")
 */
class Film
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
     * @ORM\Column(name="titre", type="string", length=255, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="parution", type="date", nullable=true)
     */
    private $parution;

    /**
     * @var string
     *
     * @ORM\Column(name="folder", type="string", length=255, nullable=true)
     */
    private $folder;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;


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
     * Set titre
     *
     * @param string $titre
     * @return Film
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Film
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
     * Set parution
     *
     * @param \DateTime $parution
     * @return Film
     */
    public function setParution($parution)
    {
        $this->parution = $parution;

        return $this;
    }

    /**
     * Get parution
     *
     * @return \DateTime 
     */
    public function getParution()
    {
        return $this->parution;
    }

    /**
     * Set folder
     *
     * @param string $folder
     *
     * @return Film
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;
        return $this;
    }
    /**
     * Get folder
     *
     * @return string
     */
    public function getFolder()
    {
        return $this->folder;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Film
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
        return $this;
    }
    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }
}
