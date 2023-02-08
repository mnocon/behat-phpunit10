Reproducer for https://github.com/Behat/Behat/issues/1421

PHPUnit's assertion failure in Behat steps results in:
```
    Given ExceptionStringer is triggered     # FeatureContext::triggerExceptionStringer()
PHP Fatal error:  Uncaught Error: Class "PHPUnit_Framework_TestFailure" not found in /Users/mareknocon/Desktop/repos/behat-phpunit10/vendor/behat/behat/src/Behat/Testwork/Exception/Stringer/PHPUnitExceptionStringer.php:39
Stack trace:
#0 /Users/mareknocon/Desktop/repos/behat-phpunit10/vendor/behat/behat/src/Behat/Testwork/Exception/ExceptionPresenter.php(93): Behat\Testwork\Exception\Stringer\PHPUnitExceptionStringer->stringException(Object(PHPUnit\Framework\ExpectationFailedException), 1)
#1 /Users/mareknocon/Desktop/repos/behat-phpunit10/vendor/behat/behat/src/Behat/Behat/Output/Node/Printer/Pretty/PrettyStepPrinter.php(174): Behat\Testwork\Exception\ExceptionPresenter->presentException(Object(PHPUnit\Framework\ExpectationFailedException))
(...)
```

Reproduce it by running:
```
composer install
vendor/bin/behat
```

