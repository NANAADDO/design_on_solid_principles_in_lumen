<?php

namespace App\Services;

class WebInformation
{

    private ?string $endpointURL = null;

    private ?string $httpVerb = null;

    private ?string $userName = null;

    private ?string $password = null;

    /**
     * @return string|null
     */
    public function getEndpointURL(): ?string
    {
        return $this->endpointURL;
    }

    /**
     * @param string|null $endpointURL
     */
    public function setEndpointURL(?string $endpointURL): WebInformation
    {
        $this->endpointURL = $endpointURL;
    }

    /**
     * @return string|null
     */
    public function getHttpVerb(): ?string
    {
        return $this->httpVerb;
    }

    /**
     * @param string|null $httpVerb
     */
    public function setHttpVerb(?string $httpVerb): WebInformation
    {
        $this->httpVerb = $httpVerb;
    }

    /**
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->userName;
    }

    /**
     * @param string|null $userName
     */
    public function setUserName(?string $userName):  WebInformation
    {
        $this->userName = $userName;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): WebInformation
    {
        $this->password = $password;
    }


}