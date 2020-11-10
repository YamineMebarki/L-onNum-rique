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

/* vendor/symfony/serializer/Exception/ExtraAttributesException.php */
class __TwigTemplate_2ec2af5970c5e88983339bfa8e840c7da36aa900f38ad1f0a57f0415b143f72a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Exception/ExtraAttributesException.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Exception/ExtraAttributesException.php"));

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

namespace Symfony\\Component\\Serializer\\Exception;

/**
 * ExtraAttributesException.
 *
 * @author Julien DIDIER <julien@didier.io>
 */
class ExtraAttributesException extends RuntimeException
{
    private \$extraAttributes;

    public function __construct(array \$extraAttributes, \\Exception \$previous = null)
    {
        \$msg = sprintf('Extra attributes are not allowed (\"%s\" are unknown).', implode('\", \"', \$extraAttributes));

        \$this->extraAttributes = \$extraAttributes;

        parent::__construct(\$msg, 0, \$previous);
    }

    /**
     * Get the extra attributes that are not allowed.
     *
     * @return array
     */
    public function getExtraAttributes()
    {
        return \$this->extraAttributes;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Exception/ExtraAttributesException.php";
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

namespace Symfony\\Component\\Serializer\\Exception;

/**
 * ExtraAttributesException.
 *
 * @author Julien DIDIER <julien@didier.io>
 */
class ExtraAttributesException extends RuntimeException
{
    private \$extraAttributes;

    public function __construct(array \$extraAttributes, \\Exception \$previous = null)
    {
        \$msg = sprintf('Extra attributes are not allowed (\"%s\" are unknown).', implode('\", \"', \$extraAttributes));

        \$this->extraAttributes = \$extraAttributes;

        parent::__construct(\$msg, 0, \$previous);
    }

    /**
     * Get the extra attributes that are not allowed.
     *
     * @return array
     */
    public function getExtraAttributes()
    {
        return \$this->extraAttributes;
    }
}
", "vendor/symfony/serializer/Exception/ExtraAttributesException.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Exception/ExtraAttributesException.php");
    }
}
