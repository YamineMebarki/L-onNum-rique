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

/* vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php */
class __TwigTemplate_a8bf3a12f625f994ddb2b7ebdd8150fb1c8dd737194dd76eeb0e2ea4c342dd2e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php"));

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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Request;

use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;

/**
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class ArgumentNameConverter
{
    private \$argumentMetadataFactory;

    public function __construct(ArgumentMetadataFactoryInterface \$argumentMetadataFactory)
    {
        \$this->argumentMetadataFactory = \$argumentMetadataFactory;
    }

    /**
     * Returns an associative array of the controller arguments for the event.
     *
     * @return array
     */
    public function getControllerArguments(ControllerArgumentsEvent \$event)
    {
        \$namedArguments = \$event->getRequest()->attributes->all();
        \$argumentMetadatas = \$this->argumentMetadataFactory->createArgumentMetadata(\$event->getController());
        \$controllerArguments = \$event->getArguments();

        foreach (\$argumentMetadatas as \$index => \$argumentMetadata) {
            if (\$argumentMetadata->isVariadic()) {
                // set the rest of the arguments as this arg's value
                \$namedArguments[\$argumentMetadata->getName()] = \\array_slice(\$controllerArguments, \$index);

                break;
            }

            if (!\\array_key_exists(\$index, \$controllerArguments)) {
                throw new \\LogicException(sprintf('Could not find an argument value for argument %d of the controller.', \$index));
            }

            \$namedArguments[\$argumentMetadata->getName()] = \$controllerArguments[\$index];
        }

        return \$namedArguments;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php";
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

namespace Sensio\\Bundle\\FrameworkExtraBundle\\Request;

use Symfony\\Component\\HttpKernel\\ControllerMetadata\\ArgumentMetadataFactoryInterface;
use Symfony\\Component\\HttpKernel\\Event\\ControllerArgumentsEvent;

/**
 * @author Ryan Weaver <ryan@knpuniversity.com>
 */
class ArgumentNameConverter
{
    private \$argumentMetadataFactory;

    public function __construct(ArgumentMetadataFactoryInterface \$argumentMetadataFactory)
    {
        \$this->argumentMetadataFactory = \$argumentMetadataFactory;
    }

    /**
     * Returns an associative array of the controller arguments for the event.
     *
     * @return array
     */
    public function getControllerArguments(ControllerArgumentsEvent \$event)
    {
        \$namedArguments = \$event->getRequest()->attributes->all();
        \$argumentMetadatas = \$this->argumentMetadataFactory->createArgumentMetadata(\$event->getController());
        \$controllerArguments = \$event->getArguments();

        foreach (\$argumentMetadatas as \$index => \$argumentMetadata) {
            if (\$argumentMetadata->isVariadic()) {
                // set the rest of the arguments as this arg's value
                \$namedArguments[\$argumentMetadata->getName()] = \\array_slice(\$controllerArguments, \$index);

                break;
            }

            if (!\\array_key_exists(\$index, \$controllerArguments)) {
                throw new \\LogicException(sprintf('Could not find an argument value for argument %d of the controller.', \$index));
            }

            \$namedArguments[\$argumentMetadata->getName()] = \$controllerArguments[\$index];
        }

        return \$namedArguments;
    }
}
", "vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php", "/var/www/public/DevLaon/templates/vendor/sensio/framework-extra-bundle/src/Request/ArgumentNameConverter.php");
    }
}
