<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* vendor/egulias/email-validator/README.md */
class __TwigTemplate_b9a976aeccbd9cd411aed3e10ca260367f97111227af34ac2e62c3a170bc4371 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/egulias/email-validator/README.md"));

        // line 1
        echo "# EmailValidator
[![Build Status](https://travis-ci.org/egulias/EmailValidator.svg?branch=master)](https://travis-ci.org/egulias/EmailValidator) [![Coverage Status](https://coveralls.io/repos/egulias/EmailValidator/badge.svg?branch=master)](https://coveralls.io/r/egulias/EmailValidator?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/egulias/EmailValidator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/egulias/EmailValidator/?branch=master) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/22ba6692-9c02-42e5-a65d-1c5696bfffc6/small.png)](https://insight.sensiolabs.com/projects/22ba6692-9c02-42e5-a65d-1c5696bfffc6)
=============================
## Suported RFCs ##
This library aims to support:

RFC 5321, 5322, 6530, 6531, 6532.

## Requirements ##

 * [Composer](https://getcomposer.org) is required for installation
 * [Spoofchecking](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/SpoofCheckValidation.php) and [DNSCheckValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/DNSCheckValidation.php) validation requires that your PHP system has the [PHP Internationalization Libraries](https://php.net/manual/en/book.intl.php) (also known as PHP Intl)

## Installation ##

Run the command below to install via Composer

```shell
composer require egulias/email-validator
```

## Getting Started ##
`EmailValidator`requires you to decide which (or combination of them) validation/s strategy/ies you'd like to follow for each [validation](#available-validations).

A basic example with the RFC validation
```php
<?php

use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Validation\\RFCValidation;

\$validator = new EmailValidator();
\$validator->isValid(\"example@example.com\", new RFCValidation()); //true
```


### Available validations ###

1. [RFCValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/RFCValidation.php)
2. [NoRFCWarningsValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/NoRFCWarningsValidation.php)
3. [DNSCheckValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/DNSCheckValidation.php)
4. [SpoofCheckValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/SpoofCheckValidation.php)
5. [MultipleValidationWithAnd](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/MultipleValidationWithAnd.php)
6. [Your own validation](#how-to-extend)

`MultipleValidationWithAnd`

It is a validation that operates over other validations performing a logical and (&&) over the result of each validation.

```php
<?php

use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Validation\\DNSCheckValidation;
use Egulias\\EmailValidator\\Validation\\MultipleValidationWithAnd;
use Egulias\\EmailValidator\\Validation\\RFCValidation;

\$validator = new EmailValidator();
\$multipleValidations = new MultipleValidationWithAnd([
    new RFCValidation(),
    new DNSCheckValidation()
]);
\$validator->isValid(\"example@example.com\", \$multipleValidations); //true
```

### How to extend ###

It's easy! You just need to implement [EmailValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/EmailValidation.php) and you can use your own validation.


## Other Contributors ##
(You can find current contributors [here](https://github.com/egulias/EmailValidator/graphs/contributors))

As this is a port from another library and work, here are other people related to the previous one:

* Ricard Clau [@ricardclau](https://github.com/ricardclau):      \tPerformance against PHP built-in filter_var
* Josepf Bielawski [@stloyd](https://github.com/stloyd):      \t\tFor its first re-work of Dominic's lib
* Dominic Sayers [@dominicsayers](https://github.com/dominicsayers):  \tThe original isemail function

## License ##
Released under the MIT License attached with this code.

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/egulias/email-validator/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# EmailValidator
[![Build Status](https://travis-ci.org/egulias/EmailValidator.svg?branch=master)](https://travis-ci.org/egulias/EmailValidator) [![Coverage Status](https://coveralls.io/repos/egulias/EmailValidator/badge.svg?branch=master)](https://coveralls.io/r/egulias/EmailValidator?branch=master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/egulias/EmailValidator/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/egulias/EmailValidator/?branch=master) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/22ba6692-9c02-42e5-a65d-1c5696bfffc6/small.png)](https://insight.sensiolabs.com/projects/22ba6692-9c02-42e5-a65d-1c5696bfffc6)
=============================
## Suported RFCs ##
This library aims to support:

RFC 5321, 5322, 6530, 6531, 6532.

## Requirements ##

 * [Composer](https://getcomposer.org) is required for installation
 * [Spoofchecking](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/SpoofCheckValidation.php) and [DNSCheckValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/DNSCheckValidation.php) validation requires that your PHP system has the [PHP Internationalization Libraries](https://php.net/manual/en/book.intl.php) (also known as PHP Intl)

## Installation ##

Run the command below to install via Composer

```shell
composer require egulias/email-validator
```

## Getting Started ##
`EmailValidator`requires you to decide which (or combination of them) validation/s strategy/ies you'd like to follow for each [validation](#available-validations).

A basic example with the RFC validation
```php
<?php

use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Validation\\RFCValidation;

\$validator = new EmailValidator();
\$validator->isValid(\"example@example.com\", new RFCValidation()); //true
```


### Available validations ###

1. [RFCValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/RFCValidation.php)
2. [NoRFCWarningsValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/NoRFCWarningsValidation.php)
3. [DNSCheckValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/DNSCheckValidation.php)
4. [SpoofCheckValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/SpoofCheckValidation.php)
5. [MultipleValidationWithAnd](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/MultipleValidationWithAnd.php)
6. [Your own validation](#how-to-extend)

`MultipleValidationWithAnd`

It is a validation that operates over other validations performing a logical and (&&) over the result of each validation.

```php
<?php

use Egulias\\EmailValidator\\EmailValidator;
use Egulias\\EmailValidator\\Validation\\DNSCheckValidation;
use Egulias\\EmailValidator\\Validation\\MultipleValidationWithAnd;
use Egulias\\EmailValidator\\Validation\\RFCValidation;

\$validator = new EmailValidator();
\$multipleValidations = new MultipleValidationWithAnd([
    new RFCValidation(),
    new DNSCheckValidation()
]);
\$validator->isValid(\"example@example.com\", \$multipleValidations); //true
```

### How to extend ###

It's easy! You just need to implement [EmailValidation](https://github.com/egulias/EmailValidator/blob/master/EmailValidator/Validation/EmailValidation.php) and you can use your own validation.


## Other Contributors ##
(You can find current contributors [here](https://github.com/egulias/EmailValidator/graphs/contributors))

As this is a port from another library and work, here are other people related to the previous one:

* Ricard Clau [@ricardclau](https://github.com/ricardclau):      \tPerformance against PHP built-in filter_var
* Josepf Bielawski [@stloyd](https://github.com/stloyd):      \t\tFor its first re-work of Dominic's lib
* Dominic Sayers [@dominicsayers](https://github.com/dominicsayers):  \tThe original isemail function

## License ##
Released under the MIT License attached with this code.

", "vendor/egulias/email-validator/README.md", "/var/www/public/DevLaon/templates/vendor/egulias/email-validator/README.md");
    }
}
