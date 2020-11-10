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

/* vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/DoctrineValidationPass.php */
class __TwigTemplate_56c93c559366a0bf8fd60d96b783a9b52781647301091f71c60986a8a3f2d02a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/DoctrineValidationPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/DoctrineValidationPass.php"));

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

namespace Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Registers additional validators.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class DoctrineValidationPass implements CompilerPassInterface
{
    private \$managerType;

    public function __construct(string \$managerType)
    {
        \$this->managerType = \$managerType;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->updateValidatorMappingFiles(\$container, 'xml', 'xml');
        \$this->updateValidatorMappingFiles(\$container, 'yaml', 'yml');
    }

    /**
     * Gets the validation mapping files for the format and extends them with
     * files matching a doctrine search pattern (Resources/config/validation.orm.xml).
     */
    private function updateValidatorMappingFiles(ContainerBuilder \$container, string \$mapping, string \$extension)
    {
        if (!\$container->hasParameter('validator.mapping.loader.'.\$mapping.'_files_loader.mapping_files')) {
            return;
        }

        \$files = \$container->getParameter('validator.mapping.loader.'.\$mapping.'_files_loader.mapping_files');
        \$validationPath = 'Resources/config/validation.'.\$this->managerType.'.'.\$extension;

        foreach (\$container->getParameter('kernel.bundles') as \$bundle) {
            \$reflection = new \\ReflectionClass(\$bundle);
            if (\$container->fileExists(\$file = \\dirname(\$reflection->getFileName()).'/'.\$validationPath)) {
                \$files[] = \$file;
            }
        }

        \$container->setParameter('validator.mapping.loader.'.\$mapping.'_files_loader.mapping_files', \$files);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/DoctrineValidationPass.php";
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

namespace Symfony\\Bridge\\Doctrine\\DependencyInjection\\CompilerPass;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;

/**
 * Registers additional validators.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 */
class DoctrineValidationPass implements CompilerPassInterface
{
    private \$managerType;

    public function __construct(string \$managerType)
    {
        \$this->managerType = \$managerType;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        \$this->updateValidatorMappingFiles(\$container, 'xml', 'xml');
        \$this->updateValidatorMappingFiles(\$container, 'yaml', 'yml');
    }

    /**
     * Gets the validation mapping files for the format and extends them with
     * files matching a doctrine search pattern (Resources/config/validation.orm.xml).
     */
    private function updateValidatorMappingFiles(ContainerBuilder \$container, string \$mapping, string \$extension)
    {
        if (!\$container->hasParameter('validator.mapping.loader.'.\$mapping.'_files_loader.mapping_files')) {
            return;
        }

        \$files = \$container->getParameter('validator.mapping.loader.'.\$mapping.'_files_loader.mapping_files');
        \$validationPath = 'Resources/config/validation.'.\$this->managerType.'.'.\$extension;

        foreach (\$container->getParameter('kernel.bundles') as \$bundle) {
            \$reflection = new \\ReflectionClass(\$bundle);
            if (\$container->fileExists(\$file = \\dirname(\$reflection->getFileName()).'/'.\$validationPath)) {
                \$files[] = \$file;
            }
        }

        \$container->setParameter('validator.mapping.loader.'.\$mapping.'_files_loader.mapping_files', \$files);
    }
}
", "vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/DoctrineValidationPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/doctrine-bridge/DependencyInjection/CompilerPass/DoctrineValidationPass.php");
    }
}
