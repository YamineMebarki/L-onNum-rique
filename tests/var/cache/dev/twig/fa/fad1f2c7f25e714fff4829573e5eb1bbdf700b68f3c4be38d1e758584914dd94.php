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

/* vendor/symfony/serializer/Mapping/Loader/LoaderChain.php */
class __TwigTemplate_4fe79af442b569baf61d28233dfd4d6ff82fd49f3bb865e0df37fd98ae94b7de extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/LoaderChain.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/serializer/Mapping/Loader/LoaderChain.php"));

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

namespace Symfony\\Component\\Serializer\\Mapping\\Loader;

use Symfony\\Component\\Serializer\\Exception\\MappingException;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;

/**
 * Calls multiple {@link LoaderInterface} instances in a chain.
 *
 * This class accepts multiple instances of LoaderInterface to be passed to the
 * constructor. When {@link loadClassMetadata()} is called, the same method is called
 * in <em>all</em> of these loaders, regardless of whether any of them was
 * successful or not.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoaderChain implements LoaderInterface
{
    private \$loaders;

    /**
     * Accepts a list of LoaderInterface instances.
     *
     * @param LoaderInterface[] \$loaders An array of LoaderInterface instances
     *
     * @throws MappingException If any of the loaders does not implement LoaderInterface
     */
    public function __construct(array \$loaders)
    {
        foreach (\$loaders as \$loader) {
            if (!\$loader instanceof LoaderInterface) {
                throw new MappingException(sprintf('Class %s is expected to implement LoaderInterface', \\get_class(\$loader)));
            }
        }

        \$this->loaders = \$loaders;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadataInterface \$metadata)
    {
        \$success = false;

        foreach (\$this->loaders as \$loader) {
            \$success = \$loader->loadClassMetadata(\$metadata) || \$success;
        }

        return \$success;
    }

    /**
     * @return LoaderInterface[]
     */
    public function getLoaders()
    {
        return \$this->loaders;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/serializer/Mapping/Loader/LoaderChain.php";
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

namespace Symfony\\Component\\Serializer\\Mapping\\Loader;

use Symfony\\Component\\Serializer\\Exception\\MappingException;
use Symfony\\Component\\Serializer\\Mapping\\ClassMetadataInterface;

/**
 * Calls multiple {@link LoaderInterface} instances in a chain.
 *
 * This class accepts multiple instances of LoaderInterface to be passed to the
 * constructor. When {@link loadClassMetadata()} is called, the same method is called
 * in <em>all</em> of these loaders, regardless of whether any of them was
 * successful or not.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 * @author Kévin Dunglas <dunglas@gmail.com>
 */
class LoaderChain implements LoaderInterface
{
    private \$loaders;

    /**
     * Accepts a list of LoaderInterface instances.
     *
     * @param LoaderInterface[] \$loaders An array of LoaderInterface instances
     *
     * @throws MappingException If any of the loaders does not implement LoaderInterface
     */
    public function __construct(array \$loaders)
    {
        foreach (\$loaders as \$loader) {
            if (!\$loader instanceof LoaderInterface) {
                throw new MappingException(sprintf('Class %s is expected to implement LoaderInterface', \\get_class(\$loader)));
            }
        }

        \$this->loaders = \$loaders;
    }

    /**
     * {@inheritdoc}
     */
    public function loadClassMetadata(ClassMetadataInterface \$metadata)
    {
        \$success = false;

        foreach (\$this->loaders as \$loader) {
            \$success = \$loader->loadClassMetadata(\$metadata) || \$success;
        }

        return \$success;
    }

    /**
     * @return LoaderInterface[]
     */
    public function getLoaders()
    {
        return \$this->loaders;
    }
}
", "vendor/symfony/serializer/Mapping/Loader/LoaderChain.php", "/var/www/public/DevLaon/templates/vendor/symfony/serializer/Mapping/Loader/LoaderChain.php");
    }
}
