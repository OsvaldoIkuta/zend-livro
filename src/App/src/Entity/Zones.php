<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Zones
 *
 * @ORM\Table(name="zones", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"}), @ORM\UniqueConstraint(name="code", columns={"code"})})
 * @ORM\Entity
 */
class Zones
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=2, nullable=false)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;


}
