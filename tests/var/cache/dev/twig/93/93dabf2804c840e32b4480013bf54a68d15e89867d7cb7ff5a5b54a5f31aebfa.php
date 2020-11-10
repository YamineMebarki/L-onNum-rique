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

/* vendor/symfony/form/Extension/Core/DataTransformer/BaseDateTimeTransformer.php */
class __TwigTemplate_6c4443a23218a9ea19834e14cc01244f6301e5a3ac171e16fde0dbf29254fcae extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/BaseDateTimeTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/Core/DataTransformer/BaseDateTimeTransformer.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;

abstract class BaseDateTimeTransformer implements DataTransformerInterface
{
    protected static \$formats = [
        \\IntlDateFormatter::NONE,
        \\IntlDateFormatter::FULL,
        \\IntlDateFormatter::LONG,
        \\IntlDateFormatter::MEDIUM,
        \\IntlDateFormatter::SHORT,
    ];

    protected \$inputTimezone;

    protected \$outputTimezone;

    /**
     * @param string \$inputTimezone  The name of the input timezone
     * @param string \$outputTimezone The name of the output timezone
     *
     * @throws InvalidArgumentException if a timezone is not valid
     */
    public function __construct(string \$inputTimezone = null, string \$outputTimezone = null)
    {
        \$this->inputTimezone = \$inputTimezone ?: date_default_timezone_get();
        \$this->outputTimezone = \$outputTimezone ?: date_default_timezone_get();

        // Check if input and output timezones are valid
        try {
            new \\DateTimeZone(\$this->inputTimezone);
        } catch (\\Exception \$e) {
            throw new InvalidArgumentException(sprintf('Input timezone is invalid: %s.', \$this->inputTimezone), \$e->getCode(), \$e);
        }

        try {
            new \\DateTimeZone(\$this->outputTimezone);
        } catch (\\Exception \$e) {
            throw new InvalidArgumentException(sprintf('Output timezone is invalid: %s.', \$this->outputTimezone), \$e->getCode(), \$e);
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/Core/DataTransformer/BaseDateTimeTransformer.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Component\\Form\\Extension\\Core\\DataTransformer;

use Symfony\\Component\\Form\\DataTransformerInterface;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;

abstract class BaseDateTimeTransformer implements DataTransformerInterface
{
    protected static \$formats = [
        \\IntlDateFormatter::NONE,
        \\IntlDateFormatter::FULL,
        \\IntlDateFormatter::LONG,
        \\IntlDateFormatter::MEDIUM,
        \\IntlDateFormatter::SHORT,
    ];

    protected \$inputTimezone;

    protected \$outputTimezone;

    /**
     * @param string \$inputTimezone  The name of the input timezone
     * @param string \$outputTimezone The name of the output timezone
     *
     * @throws InvalidArgumentException if a timezone is not valid
     */
    public function __construct(string \$inputTimezone = null, string \$outputTimezone = null)
    {
        \$this->inputTimezone = \$inputTimezone ?: date_default_timezone_get();
        \$this->outputTimezone = \$outputTimezone ?: date_default_timezone_get();

        // Check if input and output timezones are valid
        try {
            new \\DateTimeZone(\$this->inputTimezone);
        } catch (\\Exception \$e) {
            throw new InvalidArgumentException(sprintf('Input timezone is invalid: %s.', \$this->inputTimezone), \$e->getCode(), \$e);
        }

        try {
            new \\DateTimeZone(\$this->outputTimezone);
        } catch (\\Exception \$e) {
            throw new InvalidArgumentException(sprintf('Output timezone is invalid: %s.', \$this->outputTimezone), \$e->getCode(), \$e);
        }
    }
}
", "vendor/symfony/form/Extension/Core/DataTransformer/BaseDateTimeTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/Core/DataTransformer/BaseDateTimeTransformer.php");
    }
}
