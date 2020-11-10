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

/* vendor/symfony/validator/Tests/Fixtures/FakeMetadataFactory.php */
class __TwigTemplate_93314b3e5861b390b188ffffd5b5efb863db657292801a092794d182bc9ae7ca extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Fixtures/FakeMetadataFactory.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/validator/Tests/Fixtures/FakeMetadataFactory.php"));

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

namespace Symfony\\Component\\Validator\\Tests\\Fixtures;

use Symfony\\Component\\Validator\\Exception\\NoSuchMetadataException;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;
use Symfony\\Component\\Validator\\MetadataInterface;

class FakeMetadataFactory implements MetadataFactoryInterface
{
    protected \$metadatas = [];

    public function getMetadataFor(\$class)
    {
        \$hash = null;

        if (\\is_object(\$class)) {
            \$hash = spl_object_hash(\$class);
            \$class = \\get_class(\$class);
        }

        if (!\\is_string(\$class)) {
            throw new NoSuchMetadataException(sprintf('No metadata for type %s', \\gettype(\$class)));
        }

        if (!isset(\$this->metadatas[\$class])) {
            if (isset(\$this->metadatas[\$hash])) {
                return \$this->metadatas[\$hash];
            }

            throw new NoSuchMetadataException(sprintf('No metadata for \"%s\"', \$class));
        }

        return \$this->metadatas[\$class];
    }

    public function hasMetadataFor(\$class)
    {
        \$hash = null;

        if (\\is_object(\$class)) {
            \$hash = spl_object_hash(\$class);
            \$class = \\get_class(\$class);
        }

        if (!\\is_string(\$class)) {
            return false;
        }

        return isset(\$this->metadatas[\$class]) || isset(\$this->metadatas[\$hash]);
    }

    public function addMetadata(\$metadata)
    {
        \$this->metadatas[\$metadata->getClassName()] = \$metadata;
    }

    public function addMetadataForValue(\$value, MetadataInterface \$metadata)
    {
        \$key = \\is_object(\$value) ? spl_object_hash(\$value) : \$value;
        \$this->metadatas[\$key] = \$metadata;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/validator/Tests/Fixtures/FakeMetadataFactory.php";
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

namespace Symfony\\Component\\Validator\\Tests\\Fixtures;

use Symfony\\Component\\Validator\\Exception\\NoSuchMetadataException;
use Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface;
use Symfony\\Component\\Validator\\MetadataInterface;

class FakeMetadataFactory implements MetadataFactoryInterface
{
    protected \$metadatas = [];

    public function getMetadataFor(\$class)
    {
        \$hash = null;

        if (\\is_object(\$class)) {
            \$hash = spl_object_hash(\$class);
            \$class = \\get_class(\$class);
        }

        if (!\\is_string(\$class)) {
            throw new NoSuchMetadataException(sprintf('No metadata for type %s', \\gettype(\$class)));
        }

        if (!isset(\$this->metadatas[\$class])) {
            if (isset(\$this->metadatas[\$hash])) {
                return \$this->metadatas[\$hash];
            }

            throw new NoSuchMetadataException(sprintf('No metadata for \"%s\"', \$class));
        }

        return \$this->metadatas[\$class];
    }

    public function hasMetadataFor(\$class)
    {
        \$hash = null;

        if (\\is_object(\$class)) {
            \$hash = spl_object_hash(\$class);
            \$class = \\get_class(\$class);
        }

        if (!\\is_string(\$class)) {
            return false;
        }

        return isset(\$this->metadatas[\$class]) || isset(\$this->metadatas[\$hash]);
    }

    public function addMetadata(\$metadata)
    {
        \$this->metadatas[\$metadata->getClassName()] = \$metadata;
    }

    public function addMetadataForValue(\$value, MetadataInterface \$metadata)
    {
        \$key = \\is_object(\$value) ? spl_object_hash(\$value) : \$value;
        \$this->metadatas[\$key] = \$metadata;
    }
}
", "vendor/symfony/validator/Tests/Fixtures/FakeMetadataFactory.php", "/var/www/public/DevLaon/templates/vendor/symfony/validator/Tests/Fixtures/FakeMetadataFactory.php");
    }
}
