<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class ExpirationCheck implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $customConfig = new \Config\Custom(); // Instantiate the configuration object
        $expirationDate = new \DateTime($customConfig->expirationDate);
        $currentDate = new \DateTime();

        if ($currentDate > $expirationDate) {
            return redirect()->to('blank');
        }

        return $request;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        return $response;
    }
}
