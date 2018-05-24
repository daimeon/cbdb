<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comic
 *
 * @ORM\Table(name="comic")
 * @ORM\Entity
 */
class Comic
{
    /**
     * @var int
     *
     * @ORM\Column(name="comic_id", type="integer", nullable=false, options={"comment"="key identifier"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $comicId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true, options={"comment"="issue title"})
     */
    private $title;

    /**
     * @var int|null
     *
     * @ORM\Column(name="issue_number", type="integer", nullable=true, options={"comment"="issue number if any"})
     */
    private $issueNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="issue_title", type="string", length=255, nullable=false, options={"comment"="name of this issue"})
     */
    private $issueTitle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_date", type="date", nullable=false)
     */
    private $releaseDate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="page_count", type="integer", nullable=true, options={"comment"="number of pages"})
     */
    private $pageCount;

    /**
     * @var string
     *
     * @ORM\Column(name="cover_price", type="decimal", precision=10, scale=2, nullable=false, options={"comment"="original price"})
     */
    private $coverPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="currency", type="string", length=100, nullable=false, options={"comment"="currency of original price"})
     */
    private $currency;

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2, nullable=false, options={"comment"="language this one was written in"})
     */
    private $language;

    /**
     * @var string
     *
     * @ORM\Column(name="cbdb_id", type="string", length=255, nullable=false, options={"comment"="our own id"})
     */
    private $cbdbId;

    /**
     * @var int
     *
     * @ORM\Column(name="publisher", type="integer", nullable=false, options={"comment"="publisher.publisher_id"})
     */
    private $publisher;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false, options={"default"="1","comment"="1: hardcopy, 2: digital"})
     */
    private $type = '1';

    public function getComicId(): ?int
    {
        return $this->comicId;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getIssueNumber(): ?int
    {
        return $this->issueNumber;
    }

    public function setIssueNumber(?int $issueNumber): self
    {
        $this->issueNumber = $issueNumber;

        return $this;
    }

    public function getIssueTitle(): ?string
    {
        return $this->issueTitle;
    }

    public function setIssueTitle(string $issueTitle): self
    {
        $this->issueTitle = $issueTitle;

        return $this;
    }

    public function getReleaseDate(): ?\DateTimeInterface
    {
        return $this->releaseDate;
    }

    public function setReleaseDate(\DateTimeInterface $releaseDate): self
    {
        $this->releaseDate = $releaseDate;

        return $this;
    }

    public function getPageCount(): ?int
    {
        return $this->pageCount;
    }

    public function setPageCount(?int $pageCount): self
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    public function getCoverPrice()
    {
        return $this->coverPrice;
    }

    public function setCoverPrice($coverPrice): self
    {
        $this->coverPrice = $coverPrice;

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getCbdbId(): ?string
    {
        return $this->cbdbId;
    }

    public function setCbdbId(string $cbdbId): self
    {
        $this->cbdbId = $cbdbId;

        return $this;
    }

    public function getPublisher(): ?int
    {
        return $this->publisher;
    }

    public function setPublisher(int $publisher): self
    {
        $this->publisher = $publisher;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }


}
