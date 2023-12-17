<?php

namespace App\Http\Controllers\Portal;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PortalController extends Controller
{

    /**
     * @param Request $request
     *
     * @return View
     */
    public function index(Request $request): View
    {

        $host = $request->getHost();
        $apiBackendUrl = env('MIX_APP_URL');

        if ($host === 'localhost' && 'prod.torifando.online') {
            return $this->blockedPage($apiBackendUrl);
        }

        return $this->functionalPage($apiBackendUrl, $host);
    }

    /**
     * @param string $apiBackendUrl
     *
     * @return View
     */
    private function blockedPage(string $apiBackendUrl): View
    {
        return view("blocked", [
            "serviceName" => 'To Rifando Online',
            'pageTitle' => ' :: Acesso bloqueado',
            'tenantId' => 'dev',
            'apiBackendUrl' => $apiBackendUrl,
        ]);
    }

    /**
     * @param string $apiBackendUrl
     * @param string $host
     *
     * @return View
     */
    private function functionalPage(string $apiBackendUrl, string $host): View
    {
        $subDomain = explode(".", $host);

        $tenantId = 'dev';

        if (count($subDomain) > 0) {
            if ($subDomain[0] !== 'localhost') {
                $tenantId = "tid-{$subDomain[0]}";
            }
        }

        $titleArray = [
            '404' => 'Página não licalizada',
            'index.home' => "Página Inicial"
        ];

        $currentKeyExists = '404';
        $pageKey = Route::currentRouteName();
        if (array_key_exists($pageKey, $titleArray)) {
            $currentKeyExists = $pageKey;
        }

        return view("home", [
            "serviceName" => utf8_decode(env('APP_NAME')),
            'pageTitle' => $titleArray[$currentKeyExists],
            'tenantId' => $tenantId,
            'apiBackendUrl' => $apiBackendUrl,
        ]);
    }
}
