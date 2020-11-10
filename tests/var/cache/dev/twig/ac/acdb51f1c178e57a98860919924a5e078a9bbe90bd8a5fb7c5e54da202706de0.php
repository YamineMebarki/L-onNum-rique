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

/* vendor/symfony/serializer/NameConverter/CamelCaseToSnakeCaseNameConverter.php */
class __TwigTemplate_f87c24ee33f4e81556e2ee4e5e9c20d3d85e9bedfa360179f6d14a87d4e0cdf1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/NameConverter/CamelCaseToSnakeCaseNameConverter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/NameConverter/CamelCaseToSnakeCaseNameConverter.php"));

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
 * CamelCase to Underscore name converter.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CamelCaseToSnakeCaseNameConverter implements NameConverterInterface
{
    private \$attributes;
    private \$lowerCamelCase;

    /**
     * @param array|null \$attributes     The list of attributes to rename or null for all attributes
     * @param bool       \$lowerCamelCase Use lowerCamelCase style
     */
    public function __construct(array \$attributes = null, bool \$lowerCamelCase = true)
    {
        \$this->attributes = \$attributes;
        \$this->lowerCamelCase = \$lowerCamelCase;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(\$propertyName)
    {
        if (null === \$this->attributes || \\in_array(\$propertyName, \$this->attributes)) {
            return strtolower(preg_replace('/[A-Z]/', '_\\\\0', lcfirst(\$propertyName)));
        }

        return \$propertyName;
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize(\$propertyName)
    {
        \$camelCasedName = preg_replace_callback('/(^|_|\\.)+(.)/', function (\$match) {
            return ('.' === \$match[1] ? '_' : '').strtoupper(\$match[2]);
        }, \$propertyName);

        if (\$this->lowerCamelCase) {
            \$camelCasedName = lcfirst(\$camelCasedName);
        }

        if (null === \$this->attributes || \\in_array(\$camelCasedName, \$this->attributes)) {
            return \$camelCasedName;
        }

        return \$propertyName;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/NameConverter/CamelCaseToSnakeCaseNameConverter.php";
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
 * CamelCase to Underscore name converter.
 *
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class CamelCaseToSnakeCaseNameConverter implements NameConverterInterface
{
    private \$attributes;
    private \$lowerCamelCase;

    /**
     * @param array|null \$attributes     The list of attributes to rename or null for all attributes
     * @param bool       \$lowerCamelCase Use lowerCamelCase style
     */
    public function __construct(array \$attributes = null, bool \$lowerCamelCase = true)
    {
        \$this->attributes = \$attributes;
        \$this->lowerCamelCase = \$lowerCamelCase;
    }

    /**
     * {@inheritdoc}
     */
    public function normalize(\$propertyName)
    {
        if (null === \$this->attributes || \\in_array(\$propertyName, \$this->attributes)) {
            return strtolower(preg_replace('/[A-Z]/', '_\\\\0', lcfirst(\$propertyName)));
        }

        return \$propertyName;
    }

    /**
     * {@inheritdoc}
     */
    public function denormalize(\$propertyName)
    {
        \$camelCasedName = preg_replace_callback('/(^|_|\\.)+(.)/', function (\$match) {
            return ('.' === \$match[1] ? '_' : '').strtoupper(\$match[2]);
        }, \$propertyName);

        if (\$this->lowerCamelCase) {
            \$camelCasedName = lcfirst(\$camelCasedName);
        }

        if (null === \$this->attributes || \\in_array(\$camelCasedName, \$this->attributes)) {
            return \$camelCasedName;
        }

        return \$propertyName;
    }
}
", "vendor/symfony/serializer/NameConverter/CamelCaseToSnakeCaseNameConverter.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/NameConverter/CamelCaseToSnakeCaseNameConverter.php");
    }
}
