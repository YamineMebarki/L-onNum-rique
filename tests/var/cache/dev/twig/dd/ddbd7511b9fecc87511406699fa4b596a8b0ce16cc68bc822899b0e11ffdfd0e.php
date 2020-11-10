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

/* vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php */
class __TwigTemplate_d06f319955d9e24527ab7219ad406ccb20dd1d52af9eb96839f7fb7c4adfea60 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php"));

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

namespace Symfony\\Component\\DependencyInjection\\Argument;

/**
 * Represents a collection of services found by tag name to lazily iterate over.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class TaggedIteratorArgument extends IteratorArgument
{
    private \$tag;
    private \$indexAttribute;
    private \$defaultIndexMethod;
    private \$needsIndexes = false;

    /**
     * @param string      \$tag                The name of the tag identifying the target services
     * @param string|null \$indexAttribute     The name of the attribute that defines the key referencing each service in the tagged collection
     * @param string|null \$defaultIndexMethod The static method that should be called to get each service's key when their tag doesn't define the previous attribute
     * @param bool        \$needsIndexes       Whether indexes are required and should be generated when computing the map
     */
    public function __construct(string \$tag, string \$indexAttribute = null, string \$defaultIndexMethod = null, bool \$needsIndexes = false)
    {
        parent::__construct([]);

        if (null === \$indexAttribute && \$needsIndexes) {
            \$indexAttribute = preg_match('/[^.]++\$/', \$tag, \$m) ? \$m[0] : \$tag;
        }

        \$this->tag = \$tag;
        \$this->indexAttribute = \$indexAttribute;
        \$this->defaultIndexMethod = \$defaultIndexMethod ?: ('getDefault'.str_replace(' ', '', ucwords(preg_replace('/[^a-zA-Z0-9\\x7f-\\xff]++/', ' ', \$indexAttribute ?? ''))).'Name');
        \$this->needsIndexes = \$needsIndexes;
    }

    public function getTag()
    {
        return \$this->tag;
    }

    public function getIndexAttribute(): ?string
    {
        return \$this->indexAttribute;
    }

    public function getDefaultIndexMethod(): ?string
    {
        return \$this->defaultIndexMethod;
    }

    public function needsIndexes(): bool
    {
        return \$this->needsIndexes;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php";
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

namespace Symfony\\Component\\DependencyInjection\\Argument;

/**
 * Represents a collection of services found by tag name to lazily iterate over.
 *
 * @author Roland Franssen <franssen.roland@gmail.com>
 */
class TaggedIteratorArgument extends IteratorArgument
{
    private \$tag;
    private \$indexAttribute;
    private \$defaultIndexMethod;
    private \$needsIndexes = false;

    /**
     * @param string      \$tag                The name of the tag identifying the target services
     * @param string|null \$indexAttribute     The name of the attribute that defines the key referencing each service in the tagged collection
     * @param string|null \$defaultIndexMethod The static method that should be called to get each service's key when their tag doesn't define the previous attribute
     * @param bool        \$needsIndexes       Whether indexes are required and should be generated when computing the map
     */
    public function __construct(string \$tag, string \$indexAttribute = null, string \$defaultIndexMethod = null, bool \$needsIndexes = false)
    {
        parent::__construct([]);

        if (null === \$indexAttribute && \$needsIndexes) {
            \$indexAttribute = preg_match('/[^.]++\$/', \$tag, \$m) ? \$m[0] : \$tag;
        }

        \$this->tag = \$tag;
        \$this->indexAttribute = \$indexAttribute;
        \$this->defaultIndexMethod = \$defaultIndexMethod ?: ('getDefault'.str_replace(' ', '', ucwords(preg_replace('/[^a-zA-Z0-9\\x7f-\\xff]++/', ' ', \$indexAttribute ?? ''))).'Name');
        \$this->needsIndexes = \$needsIndexes;
    }

    public function getTag()
    {
        return \$this->tag;
    }

    public function getIndexAttribute(): ?string
    {
        return \$this->indexAttribute;
    }

    public function getDefaultIndexMethod(): ?string
    {
        return \$this->defaultIndexMethod;
    }

    public function needsIndexes(): bool
    {
        return \$this->needsIndexes;
    }
}
", "vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php", "/var/www/public/DevLaon/templates/vendor/symfony/dependency-injection/Argument/TaggedIteratorArgument.php");
    }
}
