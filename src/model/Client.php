<?php


namespace App\Model;


class Client
{

    private $id;
    private $firstname;
    private $lastname;
    private $entryDate;
    private $departureDate;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEntryDate()
    {
        return $this->entryDate;
    }

    /**
     * @param mixed $entryDate
     */
    public function setEntryDate($entryDate)
    {
        $this->entryDate = $entryDate;
    }

    /**
     * @return mixed
     */
    public function getDepartureDate()
    {
        return $this->departureDate;
    }

    /**
     * @param mixed $departureDate
     */
    public function setDepartureDate($departureDate)
    {
        $this->departureDate = $departureDate;
    }

}