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

/* vendor/symfony/serializer/NameConverter/NameConverterInterface.php */
class __TwigTemplate_25c91098b26bf9aa0d8e8b702141692e59f33d5dd479eec97eda0a5d87501e96 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/NameConverter/NameConverterInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/NameConverter/NameConverterInterface.php"));

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

namespace Symfony\\Component\\Serializer\\NameConverter;

/**
 * Defines the interface for property name converters.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface NameConverterInterface
{
    /**
     * Converts a property name to its normalized value.
     *
     * @param string \$propertyName
     *
     * @return string
     */
    public function normalize(\$propertyName);

    /**
     * Converts a property name to its denormalized value.
     *
     * @param string \$propertyName
     *
     * @return string
     */
    public function denormalize(\$propertyName);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/NameConverter/NameConverterInterface.php";
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

namespace Symfony\\Component\\Serializer\\NameConverter;

/**
 * Defines the interface for property name converters.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
interface NameConverterInterface
{
    /**
     * Converts a property name to its normalized value.
     *
     * @param string \$propertyName
     *
     * @return string
     */
    public function normalize(\$propertyName);

    /**
     * Converts a property name to its denormalized value.
     *
     * @param string \$propertyName
     *
     * @return string
     */
    public function denormalize(\$propertyName);
}
", "vendor/symfony/serializer/NameConverter/NameConverterInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/NameConverter/NameConverterInterface.php");
    }
}
