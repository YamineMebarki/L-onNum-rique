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

/* vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php */
class __TwigTemplate_c2be235b21819a3beb1e5a89272d0faa696dfa3e10b71ee0473f6b2641abc9ac extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php"));

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
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

/**
 * Convert DateTime instances from request attribute variable.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class DateTimeParamConverter implements ParamConverterInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws NotFoundHttpException When invalid date given
     */
    public function apply(Request \$request, ParamConverter \$configuration)
    {
        \$param = \$configuration->getName();

        if (!\$request->attributes->has(\$param)) {
            return false;
        }

        \$options = \$configuration->getOptions();
        \$value = \$request->attributes->get(\$param);

        if (!\$value && \$configuration->isOptional()) {
            \$request->attributes->set(\$param, null);

            return true;
        }

        \$class = \$configuration->getClass();

        if (isset(\$options['format'])) {
            \$date = \$class::createFromFormat(\$options['format'], \$value);

            if (0 < \\DateTime::getLastErrors()['warning_count']) {
                \$date = false;
            }

            if (!\$date) {
                throw new NotFoundHttpException(sprintf('Invalid date given for parameter \"%s\".', \$param));
            }
        } else {
            if (false === strtotime(\$value)) {
                throw new NotFoundHttpException(sprintf('Invalid date given for parameter \"%s\".', \$param));
            }

            \$date = new \$class(\$value);
        }

        \$request->attributes->set(\$param, \$date);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ParamConverter \$configuration)
    {
        if (null === \$configuration->getClass()) {
            return false;
        }

        return 'DateTime' === \$configuration->getClass() || is_subclass_of(\$configuration->getClass(), \\PHP_VERSION_ID < 50500 ? 'DateTime' : 'DateTimeInterface');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php";
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
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

/**
 * Convert DateTime instances from request attribute variable.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class DateTimeParamConverter implements ParamConverterInterface
{
    /**
     * {@inheritdoc}
     *
     * @throws NotFoundHttpException When invalid date given
     */
    public function apply(Request \$request, ParamConverter \$configuration)
    {
        \$param = \$configuration->getName();

        if (!\$request->attributes->has(\$param)) {
            return false;
        }

        \$options = \$configuration->getOptions();
        \$value = \$request->attributes->get(\$param);

        if (!\$value && \$configuration->isOptional()) {
            \$request->attributes->set(\$param, null);

            return true;
        }

        \$class = \$configuration->getClass();

        if (isset(\$options['format'])) {
            \$date = \$class::createFromFormat(\$options['format'], \$value);

            if (0 < \\DateTime::getLastErrors()['warning_count']) {
                \$date = false;
            }

            if (!\$date) {
                throw new NotFoundHttpException(sprintf('Invalid date given for parameter \"%s\".', \$param));
            }
        } else {
            if (false === strtotime(\$value)) {
                throw new NotFoundHttpException(sprintf('Invalid date given for parameter \"%s\".', \$param));
            }

            \$date = new \$class(\$value);
        }

        \$request->attributes->set(\$param, \$date);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function supports(ParamConverter \$configuration)
    {
        if (null === \$configuration->getClass()) {
            return false;
        }

        return 'DateTime' === \$configuration->getClass() || is_subclass_of(\$configuration->getClass(), \\PHP_VERSION_ID < 50500 ? 'DateTime' : 'DateTimeInterface');
    }
}
", "vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Request/ParamConverter/DateTimeParamConverter.php");
    }
}
