<?php


namespace model\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="u_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uId;

    /**
     * @var string
     *
     * @ORM\Column(name="u_uniquename", type="text", length=65535, nullable=true)
     */
    private $uUniquename;

    /**
     * @var string
     *
     * @ORM\Column(name="u_password", type="text", length=65535, nullable=true)
     */
    private $uPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="u_email", type="text", length=65535, nullable=true)
     */
    private $uEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="u_firstname", type="text", length=65535, nullable=false)
     */
    private $uFirstname;

    /**
     * @var string
     *
     * @ORM\Column(name="u_lastname", type="text", length=65535, nullable=false)
     */
    private $uLastname;

    /**
     * @var string
     *
     * @ORM\Column(name="u_date_of_birth", type="text", length=65535, nullable=false)
     */
    private $uDateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="u_account_type", type="string", nullable=false)
     */
    private $uAccountType;

    /**
     * @var string
     *
     * @ORM\Column(name="u_country", type="text", length=65535, nullable=false)
     */
    private $uCountry;

    /**
     * @var string
     *
     * @ORM\Column(name="u_currency", type="string", nullable=false)
     */
    private $uCurrency;

    /**
     * @var string
     *
     * @ORM\Column(name="u_description", type="text", length=65535, nullable=true)
     */
    private $uDescription;


    /**
     * Get uId
     *
     * @return integer
     */
    public function getUId()
    {
        return $this->uId;
    }

    /**
     * Set uUniquename
     *
     * @param string $uUniquename
     *
     * @return User
     */
    public function setUUniquename($uUniquename)
    {
        $this->uUniquename = $uUniquename;

        return $this;
    }

    /**
     * Get uUniquename
     *
     * @return string
     */
    public function getUUniquename()
    {
        return $this->uUniquename;
    }

    /**
     * Set uPassword
     *
     * @param string $uPassword
     *
     * @return User
     */
    public function setUPassword($uPassword)
    {
        $this->uPassword = $uPassword;

        return $this;
    }

    /**
     * Get uPassword
     *
     * @return string
     */
    public function getUPassword()
    {
        return $this->uPassword;
    }

    /**
     * Set uEmail
     *
     * @param string $uEmail
     *
     * @return User
     */
    public function setUEmail($uEmail)
    {
        $this->uEmail = $uEmail;

        return $this;
    }

    /**
     * Get uEmail
     *
     * @return string
     */
    public function getUEmail()
    {
        return $this->uEmail;
    }

    /**
     * Set uFirstname
     *
     * @param string $uFirstname
     *
     * @return User
     */
    public function setUFirstname($uFirstname)
    {
        $this->uFirstname = $uFirstname;

        return $this;
    }

    /**
     * Get uFirstname
     *
     * @return string
     */
    public function getUFirstname()
    {
        return $this->uFirstname;
    }

    /**
     * Set uLastname
     *
     * @param string $uLastname
     *
     * @return User
     */
    public function setULastname($uLastname)
    {
        $this->uLastname = $uLastname;

        return $this;
    }

    /**
     * Get uLastname
     *
     * @return string
     */
    public function getULastname()
    {
        return $this->uLastname;
    }

    /**
     * Set uDateOfBirth
     *
     * @param string $uDateOfBirth
     *
     * @return User
     */
    public function setUDateOfBirth($uDateOfBirth)
    {
        $this->uDateOfBirth = $uDateOfBirth;

        return $this;
    }

    /**
     * Get uDateOfBirth
     *
     * @return string
     */
    public function getUDateOfBirth()
    {
        return $this->uDateOfBirth;
    }

    /**
     * Set uAccountType
     *
     * @param string $uAccountType
     *
     * @return User
     */
    public function setUAccountType($uAccountType)
    {
        $this->uAccountType = $uAccountType;

        return $this;
    }

    /**
     * Get uAccountType
     *
     * @return string
     */
    public function getUAccountType()
    {
        return $this->uAccountType;
    }

    /**
     * Set uCountry
     *
     * @param string $uCountry
     *
     * @return User
     */
    public function setUCountry($uCountry)
    {
        $this->uCountry = $uCountry;

        return $this;
    }

    /**
     * Get uCountry
     *
     * @return string
     */
    public function getUCountry()
    {
        return $this->uCountry;
    }

    /**
     * Set uCurrency
     *
     * @param string $uCurrency
     *
     * @return User
     */
    public function setUCurrency($uCurrency)
    {
        $this->uCurrency = $uCurrency;

        return $this;
    }

    /**
     * Get uCurrency
     *
     * @return string
     */
    public function getUCurrency()
    {
        return $this->uCurrency;
    }

    /**
     * Set uDescription
     *
     * @param string $uDescription
     *
     * @return User
     */
    public function setUDescription($uDescription)
    {
        $this->uDescription = $uDescription;

        return $this;
    }

    /**
     * Get uDescription
     *
     * @return string
     */
    public function getUDescription()
    {
        return $this->uDescription;
    }
}
