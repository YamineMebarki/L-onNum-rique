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

/* vendor/symfony/polyfill-php72/README.md */
class __TwigTemplate_93f7935fde52f81add4110062c3cf3625a810fb3aeb180e3c13ecadc8fb7d401 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-php72/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/polyfill-php72/README.md"));

        // line 1
        echo "Symfony Polyfill / Php72
========================

This component provides functions added to PHP 7.2 core:

- [`spl_object_id`](https://php.net/spl_object_id)
- [`stream_isatty`](https://php.net/stream_isatty)

On Windows only:

- [`sapi_windows_vt100_support`](https://php.net/sapi_windows_vt100_support)

Moved to core since 7.2 (was in the optional XML extension earlier):

- [`utf8_encode`](https://php.net/utf8_encode)
- [`utf8_decode`](https://php.net/utf8_decode)

Also, it provides a constant added to PHP 7.2:
- [`PHP_OS_FAMILY`](http://php.net/manual/en/reserved.constants.php#constant.php-os-family)

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
        return "vendor/symfony/polyfill-php72/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Symfony Polyfill / Php72
========================

This component provides functions added to PHP 7.2 core:

- [`spl_object_id`](https://php.net/spl_object_id)
- [`stream_isatty`](https://php.net/stream_isatty)

On Windows only:

- [`sapi_windows_vt100_support`](https://php.net/sapi_windows_vt100_support)

Moved to core since 7.2 (was in the optional XML extension earlier):

- [`utf8_encode`](https://php.net/utf8_encode)
- [`utf8_decode`](https://php.net/utf8_decode)

Also, it provides a constant added to PHP 7.2:
- [`PHP_OS_FAMILY`](http://php.net/manual/en/reserved.constants.php#constant.php-os-family)

More information can be found in the
[main Polyfill README](https://github.com/symfony/polyfill/blob/master/README.md).

License
=======

This library is released under the [MIT license](LICENSE).
", "vendor/symfony/polyfill-php72/README.md", "/var/www/public/DevLaon/templates/vendor/symfony/polyfill-php72/README.md");
    }
}
