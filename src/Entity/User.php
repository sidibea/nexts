<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[Vich\Uploadable]
#[ORM\Table(name: '`user`')]
class User extends \Nucleos\UserBundle\Model\User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    protected ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $biographie = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $profile = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $createdAt = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $updatedAt = null;
    protected array $roles = ['ROLE_USER'];

    #[ORM\OneToMany(mappedBy: 'publishedBy', targetEntity: Storyline::class)]
    private Collection $storylines;

    #[ORM\OneToMany(mappedBy: 'publishedBy', targetEntity: ProposedScene::class)]
    private Collection $proposedScenes;

    #[Vich\UploadableField(mapping: 'uploader', fileNameProperty: 'profile')]
    private ?File $profileFile = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Participant::class)]
    private Collection $participants;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Message::class)]
    private Collection $messages;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function __construct()
    {
        parent::__construct();
        $this->storylines = new ArrayCollection();
        $this->proposedScenes = new ArrayCollection();
        $this->createdAt = new \datetime;
        $this->updatedAt = new \datetime;
        $this->participants = new ArrayCollection();
        $this->messages = new ArrayCollection();
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getBiographie(): ?string
    {
        return $this->biographie;
    }

    public function setBiographie(?string $biographie): self
    {
        $this->biographie = $biographie;

        return $this;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function setProfile(?string $profile): self
    {
        $this->profile = $profile;

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

    /**
     * @return Collection<int, Storyline>
     */
    public function getStorylines(): Collection
    {
        return $this->storylines;
    }

    public function addStoryline(Storyline $storyline): self
    {
        if (!$this->storylines->contains($storyline)) {
            $this->storylines->add($storyline);
            $storyline->setPublishedBy($this);
        }

        return $this;
    }

    public function removeStoryline(Storyline $storyline): self
    {
        if ($this->storylines->removeElement($storyline)) {
            // set the owning side to null (unless already changed)
            if ($storyline->getPublishedBy() === $this) {
                $storyline->setPublishedBy(null);
            }
        }

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
            $proposedScene->setPublishedBy($this);
        }

        return $this;
    }

    public function removeProposedScene(ProposedScene $proposedScene): self
    {
        if ($this->proposedScenes->removeElement($proposedScene)) {
            // set the owning side to null (unless already changed)
            if ($proposedScene->getPublishedBy() === $this) {
                $proposedScene->setPublishedBy(null);
            }
        }

        return $this;
    }

    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile|null $imageFile
     */
    public function setProfileFile(?File $imageFile = null): void
    {
        $this->profileFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getProfileFile(): ?File
    {
        return $this->profileFile;
    }

    /**
     * @return Collection<int, Participant>
     */
    public function getParticipants(): Collection
    {
        return $this->participants;
    }

    public function addParticipant(Participant $participant): self
    {
        if (!$this->participants->contains($participant)) {
            $this->participants->add($participant);
            $participant->setUser($this);
        }

        return $this;
    }

    public function removeParticipant(Participant $participant): self
    {
        if ($this->participants->removeElement($participant)) {
            // set the owning side to null (unless already changed)
            if ($participant->getUser() === $this) {
                $participant->setUser(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Message>
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages->add($message);
            $message->setUser($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getUser() === $this) {
                $message->setUser(null);
            }
        }

        return $this;
    }

}
