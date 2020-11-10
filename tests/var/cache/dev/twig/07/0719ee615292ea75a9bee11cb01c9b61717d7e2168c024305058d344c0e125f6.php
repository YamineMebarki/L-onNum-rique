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

/* vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php */
class __TwigTemplate_07254a9d436b20b81eff0be2028592b06a7b92d24e753b33bb1d38f293492cda extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter;

use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Managers converters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 */
class ParamConverterManager
{
    /**
     * @var array
     */
    private \$converters = [];

    /**
     * @var array
     */
    private \$namedConverters = [];

    /**
     * Applies all converters to the passed configurations and stops when a
     * converter is applied it will move on to the next configuration and so on.
     *
     * @param array|object \$configurations
     */
    public function apply(Request \$request, \$configurations)
    {
        if (\\is_object(\$configurations)) {
            \$configurations = [\$configurations];
        }

        foreach (\$configurations as \$configuration) {
            \$this->applyConverter(\$request, \$configuration);
        }
    }

    /**
     * Applies converter on request based on the given configuration.
     */
    private function applyConverter(Request \$request, ParamConverter \$configuration)
    {
        \$value = \$request->attributes->get(\$configuration->getName());
        \$className = \$configuration->getClass();

        // If the value is already an instance of the class we are trying to convert it into
        // we should continue as no conversion is required
        if (\\is_object(\$value) && \$value instanceof \$className) {
            return;
        }

        if (\$converterName = \$configuration->getConverter()) {
            if (!isset(\$this->namedConverters[\$converterName])) {
                throw new \\RuntimeException(sprintf(
                    \"No converter named '%s' found for conversion of parameter '%s'.\",
                    \$converterName,
                    \$configuration->getName()
                ));
            }

            \$converter = \$this->namedConverters[\$converterName];

            if (!\$converter->supports(\$configuration)) {
                throw new \\RuntimeException(sprintf(
                    \"Converter '%s' does not support conversion of parameter '%s'.\",
                    \$converterName,
                    \$configuration->getName()
                ));
            }

            \$converter->apply(\$request, \$configuration);

            return;
        }

        foreach (\$this->all() as \$converter) {
            if (\$converter->supports(\$configuration)) {
                if (\$converter->apply(\$request, \$configuration)) {
                    return;
                }
            }
        }
    }

    /**
     * Adds a parameter converter.
     *
     * Converters match either explicitly via \$name or by iteration over all
     * converters with a \$priority. If you pass a \$priority = null then the
     * added converter will not be part of the iteration chain and can only
     * be invoked explicitly.
     *
     * @param int    \$priority the priority (between -10 and 10)
     * @param string \$name     name of the converter
     */
    public function add(ParamConverterInterface \$converter, \$priority = 0, \$name = null)
    {
        if (null !== \$priority) {
            if (!isset(\$this->converters[\$priority])) {
                \$this->converters[\$priority] = [];
            }

            \$this->converters[\$priority][] = \$converter;
        }

        if (null !== \$name) {
            \$this->namedConverters[\$name] = \$converter;
        }
    }

    /**
     * Returns all registered param converters.
     *
     * @return array An array of param converters
     */
    public function all()
    {
        krsort(\$this->converters);

        \$converters = [];
        foreach (\$this->converters as \$all) {
            \$converters = array_merge(\$converters, \$all);
        }

        return \$converters;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Request\\ParamConverter;

use Sensio\\Bundle\\FrameworkExtraBundle\\Configuration\\ParamConverter;
use Symfony\\Component\\HttpFoundation\\Request;

/**
 * Managers converters.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Henrik Bjornskov <henrik@bjrnskov.dk>
 */
class ParamConverterManager
{
    /**
     * @var array
     */
    private \$converters = [];

    /**
     * @var array
     */
    private \$namedConverters = [];

    /**
     * Applies all converters to the passed configurations and stops when a
     * converter is applied it will move on to the next configuration and so on.
     *
     * @param array|object \$configurations
     */
    public function apply(Request \$request, \$configurations)
    {
        if (\\is_object(\$configurations)) {
            \$configurations = [\$configurations];
        }

        foreach (\$configurations as \$configuration) {
            \$this->applyConverter(\$request, \$configuration);
        }
    }

    /**
     * Applies converter on request based on the given configuration.
     */
    private function applyConverter(Request \$request, ParamConverter \$configuration)
    {
        \$value = \$request->attributes->get(\$configuration->getName());
        \$className = \$configuration->getClass();

        // If the value is already an instance of the class we are trying to convert it into
        // we should continue as no conversion is required
        if (\\is_object(\$value) && \$value instanceof \$className) {
            return;
        }

        if (\$converterName = \$configuration->getConverter()) {
            if (!isset(\$this->namedConverters[\$converterName])) {
                throw new \\RuntimeException(sprintf(
                    \"No converter named '%s' found for conversion of parameter '%s'.\",
                    \$converterName,
                    \$configuration->getName()
                ));
            }

            \$converter = \$this->namedConverters[\$converterName];

            if (!\$converter->supports(\$configuration)) {
                throw new \\RuntimeException(sprintf(
                    \"Converter '%s' does not support conversion of parameter '%s'.\",
                    \$converterName,
                    \$configuration->getName()
                ));
            }

            \$converter->apply(\$request, \$configuration);

            return;
        }

        foreach (\$this->all() as \$converter) {
            if (\$converter->supports(\$configuration)) {
                if (\$converter->apply(\$request, \$configuration)) {
                    return;
                }
            }
        }
    }

    /**
     * Adds a parameter converter.
     *
     * Converters match either explicitly via \$name or by iteration over all
     * converters with a \$priority. If you pass a \$priority = null then the
     * added converter will not be part of the iteration chain and can only
     * be invoked explicitly.
     *
     * @param int    \$priority the priority (between -10 and 10)
     * @param string \$name     name of the converter
     */
    public function add(ParamConverterInterface \$converter, \$priority = 0, \$name = null)
    {
        if (null !== \$priority) {
            if (!isset(\$this->converters[\$priority])) {
                \$this->converters[\$priority] = [];
            }

            \$this->converters[\$priority][] = \$converter;
        }

        if (null !== \$name) {
            \$this->namedConverters[\$name] = \$converter;
        }
    }

    /**
     * Returns all registered param converters.
     *
     * @return array An array of param converters
     */
    public function all()
    {
        krsort(\$this->converters);

        \$converters = [];
        foreach (\$this->converters as \$all) {
            \$converters = array_merge(\$converters, \$all);
        }

        return \$converters;
    }
}
", "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/ParamConverterManager.php");
    }
}
