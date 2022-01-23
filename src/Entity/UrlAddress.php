<?php

namespace App\Entity;

use App\Repository\UrlAddressRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UrlAddressRepository::class)]
class UrlAddress
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $urlEndpoint;

    #[ORM\Column(type: 'string', length: 255)]
    private $realUrl;

    #[ORM\Column(type: 'boolean')]
    private $autogenerated;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUrlEndpoint(): ?string
    {
        return $this->urlEndpoint;
    }

    public function setUrlEndpoint(string $urlEndpoint): self
    {
        $this->urlEndpoint = $urlEndpoint;

        return $this;
    }

    public function getRealUrl(): ?string
    {
        return $this->realUrl;
    }

    public function setRealUrl(string $realUrl): self
    {
        $this->realUrl = $realUrl;

        return $this;
    }

    public function getAutogenerated(): ?bool
    {
        return $this->autogenerated;
    }

    public function setAutogenerated(bool $autogenerated): self
    {
        $this->autogenerated = $autogenerated;

        return $this;
    }
}