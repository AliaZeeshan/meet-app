<?php
namespace App\Enum;



enum UserRoles : string
{
    case SUBSCRIBER = 'subscriber';
    case CuSTOMER = 'customer';
    case VENDOR = 'vendor';
}

