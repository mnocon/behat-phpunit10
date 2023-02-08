<?php

use Behat\Behat\Context\Context;
use PHPUnit\Framework\Assert;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * @Given ExceptionStringer is triggered
     */
    public function triggerExceptionStringer(): void
    {
        Assert::assertStringContainsString('login', 'fail');
    }
}
