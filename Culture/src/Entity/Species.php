<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SpeciesRepository")
 */
class Species
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $latin_name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $familly;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $health_property;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $utilization;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $good_association;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $bad_association;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $seedling;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $harvest;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $exposure;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $soil;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inter_line;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $inter_plant;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLatinName(): ?string
    {
        return $this->latin_name;
    }

    public function setLatinName(string $latin_name): self
    {
        $this->latin_name = $latin_name;

        return $this;
    }

    public function getFamilly(): ?string
    {
        return $this->familly;
    }

    public function setFamilly(string $familly): self
    {
        $this->familly = $familly;

        return $this;
    }

    public function getHealthProperty(): ?string
    {
        return $this->health_property;
    }

    public function setHealthProperty(?string $health_property): self
    {
        $this->health_property = $health_property;

        return $this;
    }

    public function getUtilization(): ?string
    {
        return $this->utilization;
    }

    public function setUtilization(?string $utilization): self
    {
        $this->utilization = $utilization;

        return $this;
    }

    public function getGoodAssociation(): ?string
    {
        return $this->good_association;
    }

    public function setGoodAssociation(?string $good_association): self
    {
        $this->good_association = $good_association;

        return $this;
    }

    public function getBadAssociation(): ?string
    {
        return $this->bad_association;
    }

    public function setBadAssociation(?string $bad_association): self
    {
        $this->bad_association = $bad_association;

        return $this;
    }

    public function getSeedling(): ?string
    {
        return $this->seedling;
    }

    public function setSeedling(string $seedling): self
    {
        $this->seedling = $seedling;

        return $this;
    }

    public function getHarvest(): ?string
    {
        return $this->harvest;
    }

    public function setHarvest(string $harvest): self
    {
        $this->harvest = $harvest;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getExposure(): ?string
    {
        return $this->exposure;
    }

    public function setExposure(string $exposure): self
    {
        $this->exposure = $exposure;

        return $this;
    }

    public function getSoil(): ?string
    {
        return $this->soil;
    }

    public function setSoil(?string $soil): self
    {
        $this->soil = $soil;

        return $this;
    }

    public function getInterLine(): ?int
    {
        return $this->inter_line;
    }

    public function setInterLine(?int $inter_line): self
    {
        $this->inter_line = $inter_line;

        return $this;
    }

    public function getInterPlant(): ?int
    {
        return $this->inter_plant;
    }

    public function setInterPlant(?int $inter_plant): self
    {
        $this->inter_plant = $inter_plant;

        return $this;
    }
}
