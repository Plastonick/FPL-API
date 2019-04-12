<?php

namespace FPL\Entity;

class Player
{
    private $id;
    private $firstName;
    private $secondName;
    private $positionId;
    private $teamId;
    private $fixtures;
    private $history;

    public function __construct(array $bootstrap)
    {
        $this->id = $bootstrap['id'];
        $this->firstName = $bootstrap['first_name'];
        $this->secondName = $bootstrap['second_name'];
        $this->positionId = $bootstrap['element_type'];
        $this->teamId = $bootstrap['team'];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTeamId(): int
    {
        return $this->teamId;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getSecondName(): string
    {
        return $this->secondName;
    }

    public function getPositionId(): int
    {
        return $this->positionId;
    }

    public function getFixtures(): ?array
    {
        return $this->fixtures;
    }

    public function getHistory(): ?array
    {
        return $this->history;
    }

    public function setFixtures(array $fixtures): void
    {
        $this->fixtures = $fixtures;
    }

    public function setHistory(array $history): void
    {
        $this->history = $history;
    }
}
