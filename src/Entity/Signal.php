<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SignalRepository")
 */
class Signal
{
	/**
	 * @ORM\Id()
	 * @ORM\CustomIdGenerator()
	 * @ORM\Column(type="integer", unique=true)
     */
    private $signalId;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $tradePair;

	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $tradeAction;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $price;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $takeProfit;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $stopLoss;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $profit;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $closed;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $closedPrice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    public function getSignalId(): ?int
    {
        return $this->signalId;
    }

    public function setSignalId(int $signalId): self
    {
        $this->signalId = $signalId;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getCreated(): ?\DateTimeInterface
    {
        return $this->created;
    }

    public function setCreated(?\DateTimeInterface $created): self
    {
        $this->created = $created;

        return $this;
    }

    public function getTakeProfit(): ?float
    {
        return $this->takeProfit;
    }

    public function setTakeProfit(?float $takeProfit): self
    {
        $this->takeProfit = $takeProfit;

        return $this;
    }

    public function getStopLoss(): ?float
    {
        return $this->stopLoss;
    }

    public function setStopLoss(?float $stopLoss): self
    {
        $this->stopLoss = $stopLoss;

        return $this;
    }

    public function getProfit(): ?float
    {
        return $this->profit;
    }

    public function setProfit(?float $profit): self
    {
        $this->profit = $profit;

        return $this;
    }

    public function getClosed(): ?\DateTimeInterface
    {
        return $this->closed;
    }

    public function setClosed(?\DateTimeInterface $closed): self
    {
        $this->closed = $closed;

        return $this;
    }

    public function getClosedPrice(): ?float
    {
        return $this->closedPrice;
    }

    public function setClosedPrice(?float $closedPrice): self
    {
        $this->closedPrice = $closedPrice;

        return $this;
    }

    public function getTradeAction(): ?string
    {
        return $this->tradeAction;
    }

    public function setTradeAction(?string $tradeAction): self
    {
        $this->tradeAction = $tradeAction;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getTradePair(): ?string
    {
        return $this->tradePair;
    }

    public function setTradePair(?string $tradePair): self
    {
        $this->tradePair = $tradePair;

        return $this;
    }
}
