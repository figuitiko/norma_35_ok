<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\SurveyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=SurveyRepository::class)
 */
class Survey
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $link;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $firstItems = [];

    /**
     * @ORM\Column(type="json")
     */
    private $secondItems = [];

    /**
     * @ORM\ManyToOne(targetEntity=SurveyType::class, inversedBy="surveys")
     */
    private $surveyType;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getFirstItems(): ?array
    {
        return $this->firstItems;
    }

    public function setFirstItems(?array $firstItems): self
    {
        $this->firstItems = $firstItems;

        return $this;
    }

    public function getSecondItems(): ?array
    {
        return $this->secondItems;
    }

    public function setSecondItems(array $secondItems): self
    {
        $this->secondItems = $secondItems;

        return $this;
    }

    public function getSurveyType(): ?SurveyType
    {
        return $this->surveyType;
    }

    public function setSurveyType(?SurveyType $surveyType): self
    {
        $this->surveyType = $surveyType;

        return $this;
    }
}
