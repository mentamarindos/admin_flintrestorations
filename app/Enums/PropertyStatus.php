<?php

namespace App\Enums;

enum PropertyStatus: string
{
    case Avaialble  = 'avaialble';
    case Funded     = 'funded';
    case Exited     = 'exited';
}
