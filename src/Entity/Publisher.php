<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publisher
 *
 * @ORM\Table(name="publisher")
 * @ORM\Entity
 */
class Publisher
{
    /**
     * @var int
     *
     * @ORM\Column(name="publisher_id", type="integer", nullable=false, options={"comment"="internal id"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $publisherId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255, nullable=false)
     */
    private $website;

    public function getPublisherId(): ?int
    {
        return $this->publisherId;
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

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(string $website): self
    {
        $this->website = $website;

        return $this;
    }


}
