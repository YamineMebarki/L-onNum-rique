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

/* vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php */
class __TwigTemplate_49ee04d17d1c075d68fc7d07b6cf5681ab52bbf40a4abd82b274a90b3039d121 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php"));

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

namespace Symfony\\Component\\Mime\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers custom mime types guessers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class AddMimeTypeGuesserPass implements CompilerPassInterface
{
    private \$mimeTypesService;
    private \$mimeTypeGuesserTag;

    public function __construct(string \$mimeTypesService = 'mime_types', string \$mimeTypeGuesserTag = 'mime.mime_type_guesser')
    {
        \$this->mimeTypesService = \$mimeTypesService;
        \$this->mimeTypeGuesserTag = \$mimeTypeGuesserTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (\$container->has(\$this->mimeTypesService)) {
            \$definition = \$container->findDefinition(\$this->mimeTypesService);
            foreach (\$container->findTaggedServiceIds(\$this->mimeTypeGuesserTag, true) as \$id => \$attributes) {
                \$definition->addMethodCall('registerGuesser', [new Reference(\$id)]);
            }
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php";
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

namespace Symfony\\Component\\Mime\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Reference;

/**
 * Registers custom mime types guessers.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 *
 * @experimental in 4.3
 */
class AddMimeTypeGuesserPass implements CompilerPassInterface
{
    private \$mimeTypesService;
    private \$mimeTypeGuesserTag;

    public function __construct(string \$mimeTypesService = 'mime_types', string \$mimeTypeGuesserTag = 'mime.mime_type_guesser')
    {
        \$this->mimeTypesService = \$mimeTypesService;
        \$this->mimeTypeGuesserTag = \$mimeTypeGuesserTag;
    }

    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder \$container)
    {
        if (\$container->has(\$this->mimeTypesService)) {
            \$definition = \$container->findDefinition(\$this->mimeTypesService);
            foreach (\$container->findTaggedServiceIds(\$this->mimeTypeGuesserTag, true) as \$id => \$attributes) {
                \$definition->addMethodCall('registerGuesser', [new Reference(\$id)]);
            }
        }
    }
}
", "vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/mime/DependencyInjection/AddMimeTypeGuesserPass.php");
    }
}
