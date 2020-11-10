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

/* vendor/symfony/validator/Mapping/Loader/LoaderChain.php */
class __TwigTemplate_e816e903fb067af4eb6cf88bb0b6f09d5069cabc24bce4adf9ebc4f0ebb2cfbb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/LoaderChain.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Mapping/Loader/LoaderChain.php"));

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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Validator\\Exception\\MappingException;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Loads validation metadata from multiple {@link LoaderInterface} instances.
 *
 * Pass the loaders when constructing the chain. Once
 * {@link loadClassMetadata()} is called, that method will be called on all
 * loaders in the chain.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LoaderChain implements LoaderInterface
{
    protected \$loaders;

    /**
     * @param LoaderInterface[] \$loaders The metadata loaders to use
     *
     * @throws MappingException If any of the loaders has an invalid type
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
    public function loadClassMetadata(ClassMetadata \$metadata)
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
        return "vendor/symfony/validator/Mapping/Loader/LoaderChain.php";
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

namespace Symfony\\Component\\Validator\\Mapping\\Loader;

use Symfony\\Component\\Validator\\Exception\\MappingException;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

/**
 * Loads validation metadata from multiple {@link LoaderInterface} instances.
 *
 * Pass the loaders when constructing the chain. Once
 * {@link loadClassMetadata()} is called, that method will be called on all
 * loaders in the chain.
 *
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class LoaderChain implements LoaderInterface
{
    protected \$loaders;

    /**
     * @param LoaderInterface[] \$loaders The metadata loaders to use
     *
     * @throws MappingException If any of the loaders has an invalid type
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
    public function loadClassMetadata(ClassMetadata \$metadata)
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
", "vendor/symfony/validator/Mapping/Loader/LoaderChain.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Mapping/Loader/LoaderChain.php");
    }
}
