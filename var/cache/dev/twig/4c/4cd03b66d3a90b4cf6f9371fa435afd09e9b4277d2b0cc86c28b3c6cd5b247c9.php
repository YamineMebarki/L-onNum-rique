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

/* vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php */
class __TwigTemplate_1f502a97889311f308a2ea413e029342a77074d2444937e9a35bb196f63491b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php"));

        // line 1
        echo "<?php
namespace Doctrine\\Common\\Proxy\\Exception;

use UnexpectedValueException as BaseUnexpectedValueException;

/**
 * Proxy Unexpected Value Exception.
 *
 * @link   www.doctrine-project.org
 * @since  2.4
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class UnexpectedValueException extends BaseUnexpectedValueException implements ProxyException
{
    /**
     * @param string \$proxyDirectory
     *
     * @return self
     */
    public static function proxyDirectoryNotWritable(\$proxyDirectory)
    {
        return new self(sprintf('Your proxy directory \"%s\" must be writable', \$proxyDirectory));
    }

    /**
     * @param string          \$className
     * @param string          \$methodName
     * @param string          \$parameterName
     * @param \\Exception|null \$previous
     *
     * @return self
     */
    public static function invalidParameterTypeHint(
        \$className,
        \$methodName,
        \$parameterName,
        \\Exception \$previous = null
    ) {
        return new self(
            sprintf(
                'The type hint of parameter \"%s\" in method \"%s\" in class \"%s\" is invalid.',
                \$parameterName,
                \$methodName,
                \$className
            ),
            0,
            \$previous
        );
    }

    /**
     * @param string \$className
     * @param string \$methodName
     * @param \\Exception|null \$previous
     *
     * @return self
     */
    public static function invalidReturnTypeHint(\$className, \$methodName, \\Exception \$previous = null)
    {
        return new self(
            sprintf(
                'The return type of method \"%s\" in class \"%s\" is invalid.',
                \$methodName,
                \$className
            ),
            0,
            \$previous
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Doctrine\\Common\\Proxy\\Exception;

use UnexpectedValueException as BaseUnexpectedValueException;

/**
 * Proxy Unexpected Value Exception.
 *
 * @link   www.doctrine-project.org
 * @since  2.4
 * @author Marco Pivetta <ocramius@gmail.com>
 *
 * @deprecated The Doctrine\\Common\\Proxy component is deprecated, please use ocramius/proxy-manager instead.
 */
class UnexpectedValueException extends BaseUnexpectedValueException implements ProxyException
{
    /**
     * @param string \$proxyDirectory
     *
     * @return self
     */
    public static function proxyDirectoryNotWritable(\$proxyDirectory)
    {
        return new self(sprintf('Your proxy directory \"%s\" must be writable', \$proxyDirectory));
    }

    /**
     * @param string          \$className
     * @param string          \$methodName
     * @param string          \$parameterName
     * @param \\Exception|null \$previous
     *
     * @return self
     */
    public static function invalidParameterTypeHint(
        \$className,
        \$methodName,
        \$parameterName,
        \\Exception \$previous = null
    ) {
        return new self(
            sprintf(
                'The type hint of parameter \"%s\" in method \"%s\" in class \"%s\" is invalid.',
                \$parameterName,
                \$methodName,
                \$className
            ),
            0,
            \$previous
        );
    }

    /**
     * @param string \$className
     * @param string \$methodName
     * @param \\Exception|null \$previous
     *
     * @return self
     */
    public static function invalidReturnTypeHint(\$className, \$methodName, \\Exception \$previous = null)
    {
        return new self(
            sprintf(
                'The return type of method \"%s\" in class \"%s\" is invalid.',
                \$methodName,
                \$className
            ),
            0,
            \$previous
        );
    }
}
", "vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php", "/var/www/public/DevLaon/templates/vendor/doctrine/common/lib/Doctrine/Common/Proxy/Exception/UnexpectedValueException.php");
    }
}
