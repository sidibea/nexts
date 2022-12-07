<?php

namespace App\Entity;

use App\Repository\SceneRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SceneRepository::class)]
class Scene
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'scenes')]
    private ?Storyline $storyline = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $content = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column]
    private ?int $count = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updatedAt = null;

    #[ORM\Column]
    private ?bool $isEnabled = null;

    #[ORM\OneToMany(mappedBy: 'scene', targetEntity: ProposedScene::class)]
    private Collection $proposedScenes;

    public function __construct()
    {
        $this->proposedScenes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStoryline(): ?Storyline
    {
        return $this->storyline;
    }

    public function setStoryline(?Storyline $storyline): self
    {
        $this->storyline = $storyline;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCount(): ?int
    {
        return $this->count;
    }

    public function setCount(int $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function isIsEnabled(): ?bool
    {
        return $this->isEnabled;
    }

    public function setIsEnabled(bool $isEnabled): self
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * @return Collection<int, ProposedScene>
     */
    public function getProposedScenes(): Collection
    {
        return $this->proposedScenes;
    }

    public function addProposedScene(ProposedScene $proposedScene): self
    {
        if (!$this->proposedScenes->contains($proposedScene)) {
            $this->proposedScenes->add($proposedScene);
            $proposedScene->setScene($this);
        }

        return $this;
    }

    public function removeProposedScene(ProposedScene $proposedScene): self
    {
        if ($this->proposedScenes->removeElement($proposedScene)) {
            // set the owning side to null (unless already changed)
            if ($proposedScene->getScene() === $this) {
                $proposedScene->setScene(null);
            }
        }

        return $this;
    }
}
