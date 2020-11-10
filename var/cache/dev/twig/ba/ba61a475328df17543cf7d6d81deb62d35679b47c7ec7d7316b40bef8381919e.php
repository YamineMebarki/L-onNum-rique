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

/* vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php */
class __TwigTemplate_740786c82c7c9e64021f71579cc36e0b8d6371226e01d931209441df31ecde49 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php"));

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

namespace Symfony\\Component\\Form\\Extension\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\FormExtensionInterface;
use Symfony\\Component\\Form\\FormTypeGuesserChain;

class DependencyInjectionExtension implements FormExtensionInterface
{
    private \$guesser;
    private \$guesserLoaded = false;
    private \$typeContainer;
    private \$typeExtensionServices;
    private \$guesserServices;

    /**
     * @param iterable[] \$typeExtensionServices
     */
    public function __construct(ContainerInterface \$typeContainer, array \$typeExtensionServices, iterable \$guesserServices)
    {
        \$this->typeContainer = \$typeContainer;
        \$this->typeExtensionServices = \$typeExtensionServices;
        \$this->guesserServices = \$guesserServices;
    }

    public function getType(\$name)
    {
        if (!\$this->typeContainer->has(\$name)) {
            throw new InvalidArgumentException(sprintf('The field type \"%s\" is not registered in the service container.', \$name));
        }

        return \$this->typeContainer->get(\$name);
    }

    public function hasType(\$name)
    {
        return \$this->typeContainer->has(\$name);
    }

    public function getTypeExtensions(\$name)
    {
        \$extensions = [];

        if (isset(\$this->typeExtensionServices[\$name])) {
            foreach (\$this->typeExtensionServices[\$name] as \$serviceId => \$extension) {
                \$extensions[] = \$extension;

                if (method_exists(\$extension, 'getExtendedTypes')) {
                    \$extendedTypes = [];

                    foreach (\$extension::getExtendedTypes() as \$extendedType) {
                        \$extendedTypes[] = \$extendedType;
                    }
                } else {
                    \$extendedTypes = [\$extension->getExtendedType()];
                }

                // validate the result of getExtendedTypes()/getExtendedType() to ensure it is consistent with the service definition
                if (!\\in_array(\$name, \$extendedTypes, true)) {
                    throw new InvalidArgumentException(sprintf('The extended type specified for the service \"%s\" does not match the actual extended type. Expected \"%s\", given \"%s\".', \$serviceId, \$name, implode(', ', \$extendedTypes)));
                }
            }
        }

        return \$extensions;
    }

    public function hasTypeExtensions(\$name)
    {
        return isset(\$this->typeExtensionServices[\$name]);
    }

    public function getTypeGuesser()
    {
        if (!\$this->guesserLoaded) {
            \$this->guesserLoaded = true;
            \$guessers = [];

            foreach (\$this->guesserServices as \$serviceId => \$service) {
                \$guessers[] = \$service;
            }

            if (\$guessers) {
                \$this->guesser = new FormTypeGuesserChain(\$guessers);
            }
        }

        return \$this->guesser;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php";
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

namespace Symfony\\Component\\Form\\Extension\\DependencyInjection;

use Psr\\Container\\ContainerInterface;
use Symfony\\Component\\Form\\Exception\\InvalidArgumentException;
use Symfony\\Component\\Form\\FormExtensionInterface;
use Symfony\\Component\\Form\\FormTypeGuesserChain;

class DependencyInjectionExtension implements FormExtensionInterface
{
    private \$guesser;
    private \$guesserLoaded = false;
    private \$typeContainer;
    private \$typeExtensionServices;
    private \$guesserServices;

    /**
     * @param iterable[] \$typeExtensionServices
     */
    public function __construct(ContainerInterface \$typeContainer, array \$typeExtensionServices, iterable \$guesserServices)
    {
        \$this->typeContainer = \$typeContainer;
        \$this->typeExtensionServices = \$typeExtensionServices;
        \$this->guesserServices = \$guesserServices;
    }

    public function getType(\$name)
    {
        if (!\$this->typeContainer->has(\$name)) {
            throw new InvalidArgumentException(sprintf('The field type \"%s\" is not registered in the service container.', \$name));
        }

        return \$this->typeContainer->get(\$name);
    }

    public function hasType(\$name)
    {
        return \$this->typeContainer->has(\$name);
    }

    public function getTypeExtensions(\$name)
    {
        \$extensions = [];

        if (isset(\$this->typeExtensionServices[\$name])) {
            foreach (\$this->typeExtensionServices[\$name] as \$serviceId => \$extension) {
                \$extensions[] = \$extension;

                if (method_exists(\$extension, 'getExtendedTypes')) {
                    \$extendedTypes = [];

                    foreach (\$extension::getExtendedTypes() as \$extendedType) {
                        \$extendedTypes[] = \$extendedType;
                    }
                } else {
                    \$extendedTypes = [\$extension->getExtendedType()];
                }

                // validate the result of getExtendedTypes()/getExtendedType() to ensure it is consistent with the service definition
                if (!\\in_array(\$name, \$extendedTypes, true)) {
                    throw new InvalidArgumentException(sprintf('The extended type specified for the service \"%s\" does not match the actual extended type. Expected \"%s\", given \"%s\".', \$serviceId, \$name, implode(', ', \$extendedTypes)));
                }
            }
        }

        return \$extensions;
    }

    public function hasTypeExtensions(\$name)
    {
        return isset(\$this->typeExtensionServices[\$name]);
    }

    public function getTypeGuesser()
    {
        if (!\$this->guesserLoaded) {
            \$this->guesserLoaded = true;
            \$guessers = [];

            foreach (\$this->guesserServices as \$serviceId => \$service) {
                \$guessers[] = \$service;
            }

            if (\$guessers) {
                \$this->guesser = new FormTypeGuesserChain(\$guessers);
            }
        }

        return \$this->guesser;
    }
}
", "vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php", "/var/www/public/DevLaon/templates/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php");
    }
}
