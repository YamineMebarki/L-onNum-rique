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

/* vendor/symfony/serializer/DependencyInjection/SerializerPass.php */
class __TwigTemplate_e5918136c001dbd8ee0546a0760e107e6e7cc705005754eac2550ee82cd851b2 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/DependencyInjection/SerializerPass.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/DependencyInjection/SerializerPass.php"));

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

namespace Symfony\\Component\\Serializer\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * Adds all services with the tags \"serializer.encoder\" and \"serializer.normalizer\" as
 * encoders and normalizers to the \"serializer\" service.
 *
 * @author Javier Lopez <f12loalf@gmail.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class SerializerPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$serializerService;
    private \$normalizerTag;
    private \$encoderTag;

    public function __construct(string \$serializerService = 'serializer', string \$normalizerTag = 'serializer.normalizer', string \$encoderTag = 'serializer.encoder')
    {
        \$this->serializerService = \$serializerService;
        \$this->normalizerTag = \$normalizerTag;
        \$this->encoderTag = \$encoderTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->serializerService)) {
            return;
        }

        if (!\$normalizers = \$this->findAndSortTaggedServices(\$this->normalizerTag, \$container)) {
            throw new RuntimeException(sprintf('You must tag at least one service as \"%s\" to use the \"%s\" service.', \$this->normalizerTag, \$this->serializerService));
        }

        \$serializerDefinition = \$container->getDefinition(\$this->serializerService);
        \$serializerDefinition->replaceArgument(0, \$normalizers);

        if (!\$encoders = \$this->findAndSortTaggedServices(\$this->encoderTag, \$container)) {
            throw new RuntimeException(sprintf('You must tag at least one service as \"%s\" to use the \"%s\" service.', \$this->encoderTag, \$this->serializerService));
        }

        \$serializerDefinition->replaceArgument(1, \$encoders);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/DependencyInjection/SerializerPass.php";
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

namespace Symfony\\Component\\Serializer\\DependencyInjection;

use Symfony\\Component\\DependencyInjection\\Compiler\\CompilerPassInterface;
use Symfony\\Component\\DependencyInjection\\Compiler\\PriorityTaggedServiceTrait;
use Symfony\\Component\\DependencyInjection\\ContainerBuilder;
use Symfony\\Component\\DependencyInjection\\Exception\\RuntimeException;

/**
 * Adds all services with the tags \"serializer.encoder\" and \"serializer.normalizer\" as
 * encoders and normalizers to the \"serializer\" service.
 *
 * @author Javier Lopez <f12loalf@gmail.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class SerializerPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private \$serializerService;
    private \$normalizerTag;
    private \$encoderTag;

    public function __construct(string \$serializerService = 'serializer', string \$normalizerTag = 'serializer.normalizer', string \$encoderTag = 'serializer.encoder')
    {
        \$this->serializerService = \$serializerService;
        \$this->normalizerTag = \$normalizerTag;
        \$this->encoderTag = \$encoderTag;
    }

    public function process(ContainerBuilder \$container)
    {
        if (!\$container->hasDefinition(\$this->serializerService)) {
            return;
        }

        if (!\$normalizers = \$this->findAndSortTaggedServices(\$this->normalizerTag, \$container)) {
            throw new RuntimeException(sprintf('You must tag at least one service as \"%s\" to use the \"%s\" service.', \$this->normalizerTag, \$this->serializerService));
        }

        \$serializerDefinition = \$container->getDefinition(\$this->serializerService);
        \$serializerDefinition->replaceArgument(0, \$normalizers);

        if (!\$encoders = \$this->findAndSortTaggedServices(\$this->encoderTag, \$container)) {
            throw new RuntimeException(sprintf('You must tag at least one service as \"%s\" to use the \"%s\" service.', \$this->encoderTag, \$this->serializerService));
        }

        \$serializerDefinition->replaceArgument(1, \$encoders);
    }
}
", "vendor/symfony/serializer/DependencyInjection/SerializerPass.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/DependencyInjection/SerializerPass.php");
    }
}
