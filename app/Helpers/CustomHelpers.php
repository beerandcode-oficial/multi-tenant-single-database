<?php

if (!function_exists('checkTenantId')) {
    function checkTenantId() {
        return session()->has('tenant_id') && !is_null(session('tenant_id'));
    }
}
