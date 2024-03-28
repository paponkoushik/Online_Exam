<?php

namespace App\Enums;

enum UserType:string
{
    case Teacher = 'teacher';
    case Student = 'student';
}
