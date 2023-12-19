<?php
function getLayoutForUser()
{
    if (!Auth::check()) {
        return 'layouts.log';
    } elseif (Auth::user()->role === 'admin') {
        return 'layouts.admin';
    } else {
        return 'layouts.user';
    }
}