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

/* vendor/symfony/polyfill-intl-icu/README.md */
class __TwigTemplate_99097c273e73bf91b73f95d2876aa0543191b550736c6dd68d99e4fc6e301d70 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-intl-icu/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-intl-icu/README.md"));

        // line 1
        echo "Symfony Polyfill / Intl: ICU
============================

This component provides a collection of functions/classes using the
[`symfony/intl`](https://github.com/symfony/intl) package when the
[Intl](http://php.net/intl) extension is not installed, including:

- [`intl_is_failure()`](http://php.net/manual/en/function.intl-is-failure.php)
- [`intl_get_error_code()`](http://php.net/manual/en/function.intl-get-error-code.php)
- [`intl_get_error_message()`](http://php.net/manual/en/function.intl-get-error-message.php)
- [`intl_error_name()`](http://php.net/manual/en/function.intl-error-name.php)
- [`Collator`](http://php.net/Collator)
- [`NumberFormatter`](http://php.net/NumberFormatter)
- [`Locale`](http://php.net/Locale)
- [`IntlDateFormatter`](http://php.net/IntlDateFormatter)

More information can be found in the
[main Polyfill README](https://github.com/symfony/polyfill/blob/master/README.md).

License
=======

This library is released under the [MIT license](LICENSE).
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/polyfill-intl-icu/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Symfony Polyfill / Intl: ICU
============================

This component provides a collection of functions/classes using the
[`symfony/intl`](https://github.com/symfony/intl) package when the
[Intl](http://php.net/intl) extension is not installed, including:

- [`intl_is_failure()`](http://php.net/manual/en/function.intl-is-failure.php)
- [`intl_get_error_code()`](http://php.net/manual/en/function.intl-get-error-code.php)
- [`intl_get_error_message()`](http://php.net/manual/en/function.intl-get-error-message.php)
- [`intl_error_name()`](http://php.net/manual/en/function.intl-error-name.php)
- [`Collator`](http://php.net/Collator)
- [`NumberFormatter`](http://php.net/NumberFormatter)
- [`Locale`](http://php.net/Locale)
- [`IntlDateFormatter`](http://php.net/IntlDateFormatter)

More information can be found in the
[main Polyfill README](https://github.com/symfony/polyfill/blob/master/README.md).

License
=======

This library is released under the [MIT license](LICENSE).
", "vendor/symfony/polyfill-intl-icu/README.md", "/var/www/public/DevLaon/templates/vendor/symfony/polyfill-intl-icu/README.md");
    }
}
