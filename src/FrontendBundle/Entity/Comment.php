<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="FrontendBundle\Repository\CommentRepository")
 */
class Comment
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
     * @ORM\Column(name="fos_userid", type="string", length=255)
     */
    private $fosUserid;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="string", length=255)
     */
    private $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="movie", type="string", length=255)
     */
    private $movie;


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
     * Set fosUserid
     *
     * @param string $fosUserid
     *
     * @return Comment
     */
    public function setFosUserid($fosUserid)
    {
        $this->fosUserid = $fosUserid;

        return $this;
    }

    /**
     * Get fosUserid
     *
     * @return string
     */
    public function getFosUserid()
    {
        return $this->fosUserid;
    }

    /**
     * Set comment
     *
     * @param string $comment
     *
     * @return Comment
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

    /**
     * Set movie
     *
     * @param string $movie
     *
     * @return Comment
     */
    public function setMovie($movie)
    {
        $this->movie = $movie;

        return $this;
    }

    /**
     * Get movie
     *
     * @return string
     */
    public function getMovie()
    {
        return $this->movie;
    }
}

