<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Banks
 *
 * @ORM\Table(name="banks", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="zone_id", columns={"zone_id"})})
 * @ORM\Entity
 */
class Banks
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parentId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=20, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=20, nullable=false)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="address1", type="string", length=250, nullable=false)
     */
    private $address1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address2", type="string", length=250, nullable=true)
     */
    private $address2;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var int
     *
     * @ORM\Column(name="zone_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $zoneId;

    /**
     * @var string
     *
     * @ORM\Column(name="zip", type="string", length=15, nullable=false)
     */
    private $zip;

    /**
     * @var string
     *
     * @ORM\Column(name="product_1_price", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $product1Price;

    /**
     * @var string
     *
     * @ORM\Column(name="product_2_price", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $product2Price;

    /**
     * @var bool
     *
     * @ORM\Column(name="allow_email_attachment", type="boolean", nullable=false)
     */
    private $allowEmailAttachment = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modified", type="datetime", nullable=false)
     */
    private $modified;


}
