<?php


namespace App\Controller\Api;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class DomainController
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function show(Request $request)
    {
        $subDomain = explode('.', $request->getHost())[0];

        return new JsonResponse($subDomain);
    }
}