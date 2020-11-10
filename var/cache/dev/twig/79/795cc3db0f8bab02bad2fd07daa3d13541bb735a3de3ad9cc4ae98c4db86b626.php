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

/* vendor/fzaninotto/faker/CONTRIBUTING.md */
class __TwigTemplate_db0bce6c33eed013ad5c6c303a915ea91a32cad91f9b1601a6336bb7afe7ad98 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/CONTRIBUTING.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/CONTRIBUTING.md"));

        // line 1
        echo "Contributing
============

If you've written a new formatter, adapted Faker to a new locale, or fixed a bug, your contribution is welcome!

Before proposing a pull request, check the following:

* Your code should follow the [PSR-2 coding standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md). Run `make sniff` to check that the coding standards are followed, and use [php-cs-fixer](https://github.com/fabpot/PHP-CS-Fixer) to fix inconsistencies.
* Unit tests should still pass after your patch. Run the tests on your dev server (with `make test`) or check the continuous integration status for your pull request.
* As much as possible, add unit tests for your code
* Never use `rand()` in your providers. Faker uses the Mersenne Twister Randomizer, so use `mt_rand()` or any of the base generators (`randomNumber`, `randomElement`, etc.) instead.
* If you add new providers (or new locales) and that they embed a lot of data for random generation (e.g. first names in a new language), please add a `@link` to the reference you used for this list (example [in the ru_RU locale](https://github.com/fzaninotto/Faker/blob/master/src/Faker/Provider/ru_RU/Person.php#L13)). This will ease future updates of the list and debates about the most relevant data for this provider.
* If you add long list of random data, please split the list into several lines. This makes diffs easier to read, and facilitates core review.
* If you add new formatters, please include documentation for it in the README. Don't forget to add a line about new formatters in the `@property` or `@method` phpDoc entries in [Generator.php](https://github.com/fzaninotto/Faker/blob/master/src/Faker/Generator.php#L6-L118) to help IDEs auto-complete your formatters.
* If your new formatters are specific to a certain locale, document them in the [Language-specific formatters](https://github.com/fzaninotto/Faker#language-specific-formatters) list instead.
* Avoid changing existing sets of data. Some developers use Faker with seeding for unit tests ; changing the data makes their tests fail.
* Speed is important in all Faker usages. Make sure your code is optimized to generate thousands of fake items in no time, without consuming too much memory or CPU.
* If you commit a new feature, be prepared to help maintaining it. Watch the project on GitHub, and please comment on issues or PRs regarding the feature you contributed.

Once your code is merged, it is available for free to everybody under the MIT License. Publishing your Pull Request on the Faker GitHub repository means that you agree with this license for your contribution.

Thank you for your contribution! Faker wouldn't be so great without you.
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/CONTRIBUTING.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Contributing
============

If you've written a new formatter, adapted Faker to a new locale, or fixed a bug, your contribution is welcome!

Before proposing a pull request, check the following:

* Your code should follow the [PSR-2 coding standard](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md). Run `make sniff` to check that the coding standards are followed, and use [php-cs-fixer](https://github.com/fabpot/PHP-CS-Fixer) to fix inconsistencies.
* Unit tests should still pass after your patch. Run the tests on your dev server (with `make test`) or check the continuous integration status for your pull request.
* As much as possible, add unit tests for your code
* Never use `rand()` in your providers. Faker uses the Mersenne Twister Randomizer, so use `mt_rand()` or any of the base generators (`randomNumber`, `randomElement`, etc.) instead.
* If you add new providers (or new locales) and that they embed a lot of data for random generation (e.g. first names in a new language), please add a `@link` to the reference you used for this list (example [in the ru_RU locale](https://github.com/fzaninotto/Faker/blob/master/src/Faker/Provider/ru_RU/Person.php#L13)). This will ease future updates of the list and debates about the most relevant data for this provider.
* If you add long list of random data, please split the list into several lines. This makes diffs easier to read, and facilitates core review.
* If you add new formatters, please include documentation for it in the README. Don't forget to add a line about new formatters in the `@property` or `@method` phpDoc entries in [Generator.php](https://github.com/fzaninotto/Faker/blob/master/src/Faker/Generator.php#L6-L118) to help IDEs auto-complete your formatters.
* If your new formatters are specific to a certain locale, document them in the [Language-specific formatters](https://github.com/fzaninotto/Faker#language-specific-formatters) list instead.
* Avoid changing existing sets of data. Some developers use Faker with seeding for unit tests ; changing the data makes their tests fail.
* Speed is important in all Faker usages. Make sure your code is optimized to generate thousands of fake items in no time, without consuming too much memory or CPU.
* If you commit a new feature, be prepared to help maintaining it. Watch the project on GitHub, and please comment on issues or PRs regarding the feature you contributed.

Once your code is merged, it is available for free to everybody under the MIT License. Publishing your Pull Request on the Faker GitHub repository means that you agree with this license for your contribution.

Thank you for your contribution! Faker wouldn't be so great without you.
", "vendor/fzaninotto/faker/CONTRIBUTING.md", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/CONTRIBUTING.md");
    }
}
