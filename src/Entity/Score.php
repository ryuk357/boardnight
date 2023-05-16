<?php

namespace App\Entity;

use App\Repository\ScoreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ScoreRepository::class)
 */
class Score
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbr;

    /**
     * @ORM\OneToOne(targetEntity=user::class, inversedBy="score", cascade={"persist", "remove"})
     */
    private $user;

    /**
     * @ORM\OneToOne(targetEntity=group::class, inversedBy="score", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $boardgroup;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbr(): ?int
    {
        return $this->nbr;
    }

    public function setNbr(?int $nbr): self
    {
        $this->nbr = $nbr;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUser(?user $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getBoardgroup(): ?group
    {
        return $this->boardgroup;
    }

    public function setBoardgroup(group $boardgroup): self
    {
        $this->boardgroup = $boardgroup;

        return $this;
    }
}
