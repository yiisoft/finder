<?php

declare(strict_types=1);

namespace Yiisoft\Classifier\Tests\Support;

use Yiisoft\Classifier\Tests\Support\Attributes\AuthorAttribute;
use Yiisoft\Classifier\Tests\Support\Attributes\UserAttribute;
use Yiisoft\Classifier\Tests\Support\Interfaces\PostInterface;

#[AuthorAttribute]
#[UserAttribute]
class AuthorPost implements PostInterface
{
}
