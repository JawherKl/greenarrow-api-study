<?php

namespace App\Controller;

use App\Service\GreenArrowApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GreenArrowApiController extends AbstractController
{
    private $greenArrowApiService;

    public function __construct(GreenArrowApiService $greenArrowApiService)
    {
        $this->greenArrowApiService = $greenArrowApiService;
    }

    # Route for fetching DKIM keys from GreenArrow
    # /greenarrow/dkim_keys
    #[Route('/greenarrow/dkim_keys', name: 'greenarrow_dkim_keys')]
    public function getDkimKeys(): JsonResponse
    {
        $response = $this->greenArrowApiService->callApi('dkim_keys');
        return new JsonResponse($response);
    }

    # Route for monitoring domain with GreenArrow
    # /greenarrow/domain_monitoring
    #[Route('/greenarrow/domain_monitoring', name: 'greenarrow_domain_monitoring')]
    public function getDomainMonitoring(): JsonResponse
    {
        $response = $this->greenArrowApiService->callApi('domain_monitoring');
        return new JsonResponse($response);
    }

    // Add more routes here with the same style for other GreenArrow API endpoints
}
