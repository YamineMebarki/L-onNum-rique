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

/* vendor/symfony/intl/DateFormatter/DateFormat/SecondTransformer.php */
class __TwigTemplate_5556d130fa51d29c300514f1c729415f37c169600474a9b30afb5a8bbf45c2b7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/DateFormatter/DateFormat/SecondTransformer.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/intl/DateFormatter/DateFormat/SecondTransformer.php"));

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

namespace Symfony\\Component\\Intl\\DateFormatter\\DateFormat;

/**
 * Parser and formatter for the second format.
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 */
class SecondTransformer extends Transformer
{
    /**
     * {@inheritdoc}
     */
    public function format(\\DateTime \$dateTime, int \$length): string
    {
        \$secondOfMinute = (int) \$dateTime->format('s');

        return \$this->padLeft(\$secondOfMinute, \$length);
    }

    /**
     * {@inheritdoc}
     */
    public function getReverseMatchingRegExp(int \$length): string
    {
        return 1 === \$length ? '\\d{1,2}' : '\\d{'.\$length.'}';
    }

    /**
     * {@inheritdoc}
     */
    public function extractDateOptions(string \$matched, int \$length): array
    {
        return [
            'second' => (int) \$matched,
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/intl/DateFormatter/DateFormat/SecondTransformer.php";
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

namespace Symfony\\Component\\Intl\\DateFormatter\\DateFormat;

/**
 * Parser and formatter for the second format.
 *
 * @author Igor Wiedler <igor@wiedler.ch>
 *
 * @internal
 */
class SecondTransformer extends Transformer
{
    /**
     * {@inheritdoc}
     */
    public function format(\\DateTime \$dateTime, int \$length): string
    {
        \$secondOfMinute = (int) \$dateTime->format('s');

        return \$this->padLeft(\$secondOfMinute, \$length);
    }

    /**
     * {@inheritdoc}
     */
    public function getReverseMatchingRegExp(int \$length): string
    {
        return 1 === \$length ? '\\d{1,2}' : '\\d{'.\$length.'}';
    }

    /**
     * {@inheritdoc}
     */
    public function extractDateOptions(string \$matched, int \$length): array
    {
        return [
            'second' => (int) \$matched,
        ];
    }
}
", "vendor/symfony/intl/DateFormatter/DateFormat/SecondTransformer.php", "/var/www/public/DevLaon/templates/vendor/symfony/intl/DateFormatter/DateFormat/SecondTransformer.php");
    }
}
