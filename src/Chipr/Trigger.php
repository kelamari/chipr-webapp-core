<?php

namespace Chipr;

final abstract class Trigger
{
    public const NONE     = 0;
    public const ACTIVATE = 1;
    public const FIRE     = 2;
    public const SNOOZE   = 3;
    public const DISMISS  = 4;
} 
