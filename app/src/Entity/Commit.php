<?php

declare(strict_types=1);

namespace App\Entity;

use Ramsey\Uuid\Nonstandard\Uuid;
use Ramsey\Uuid\UuidInterface;

class Commit
{
    private UuidInterface $id;
    private ?string $sha;
    private ?string $message;
    private ?\DateTimeImmutable $createdAt;

    public function __construct(
        string $sha = null,
        string $message = null,
        \DateTimeImmutable $createdAt = null
    ) {
        $this->id = Uuid::uuid4();
        $this->sha = $sha;
        $this->message = $message;
        $this->createdAt = $createdAt ?? new \DateTimeImmutable();
    }

    public function getId(): UuidInterface
    {
        return $this->id;
    }

    public function getSha(): ?string
    {
        return $this->sha;
    }

    public function setSha(?string $sha): void
    {
        $this->sha = $sha;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
