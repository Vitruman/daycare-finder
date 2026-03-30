<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomApiAuthenticate
{
    public function handle(Request $request, Closure $next): Response
    {
        $expectedLogin = (string) (Setting::getValue('api_login') ?? env('CUSTOM_API_LOGIN', ''));
        $expectedKey = (string) (Setting::getValue('api_key') ?? env('CUSTOM_API_KEY', ''));

        $user = (string) ($request->getUser() ?? '');
        $pass = (string) ($request->getPassword() ?? '');

        if ($expectedLogin === '' || $expectedKey === '') {
            return response()->json([
                'message' => 'Custom API is not configured (api_login/api_key).',
            ], 500);
        }

        if (!hash_equals($expectedLogin, $user) || !hash_equals($expectedKey, $pass)) {
            return response()->json(['message' => 'Unauthorized'], 401, [
                'WWW-Authenticate' => 'Basic realm="Custom API"',
            ]);
        }

        return $next($request);
    }
}

