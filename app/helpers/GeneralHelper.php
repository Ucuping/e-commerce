<?php

use Illuminate\Support\Facades\Auth;

if (!function_exists('getInfoLogin')) {
    function getInfoLogin()
    {
        $user = Auth::user();
        return $user;
    }
}

if (!function_exists('generateRandomName')) {
    function generateRandomName($uploadedFile)
    {
        $origNameSplitted = explode('.', $uploadedFile->getClientOriginalName());
        unset($origNameSplitted[count($origNameSplitted) - 1]);
        return join('.', $origNameSplitted) . '_' . rand(10, 99) . '.' . $uploadedFile->getClientOriginalExtension();
    }
}

if (!function_exists('getAuthPermissions')) {
    function getAuthPermissions()
    {
        $permissionsName = auth()->user()->getAllPermissions()->map(function ($perm) {
            return $perm->name;
        });
        return implode(',', $permissionsName->toArray());
    }
}
