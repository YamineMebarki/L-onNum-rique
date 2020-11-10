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

/* vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php */
class __TwigTemplate_88cedc6ffb4d3b213997120b856098e807a1ee24eeca704ae5db61388766e8eb extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php"));

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

namespace Symfony\\Component\\HttpFoundation\\Session\\Attribute;

/**
 * This class relates to session attribute storage.
 */
class AttributeBag implements AttributeBagInterface, \\IteratorAggregate, \\Countable
{
    private \$name = 'attributes';
    private \$storageKey;

    protected \$attributes = [];

    /**
     * @param string \$storageKey The key used to store attributes in the session
     */
    public function __construct(string \$storageKey = '_sf2_attributes')
    {
        \$this->storageKey = \$storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$attributes)
    {
        \$this->attributes = &\$attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        return \\array_key_exists(\$name, \$this->attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name, \$default = null)
    {
        return \\array_key_exists(\$name, \$this->attributes) ? \$this->attributes[\$name] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$name, \$value)
    {
        \$this->attributes[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return \$this->attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array \$attributes)
    {
        \$this->attributes = [];
        foreach (\$attributes as \$key => \$value) {
            \$this->set(\$key, \$value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$name)
    {
        \$retval = null;
        if (\\array_key_exists(\$name, \$this->attributes)) {
            \$retval = \$this->attributes[\$name];
            unset(\$this->attributes[\$name]);
        }

        return \$retval;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$return = \$this->attributes;
        \$this->attributes = [];

        return \$return;
    }

    /**
     * Returns an iterator for attributes.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->attributes);
    }

    /**
     * Returns the number of attributes.
     *
     * @return int The number of attributes
     */
    public function count()
    {
        return \\count(\$this->attributes);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php";
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

namespace Symfony\\Component\\HttpFoundation\\Session\\Attribute;

/**
 * This class relates to session attribute storage.
 */
class AttributeBag implements AttributeBagInterface, \\IteratorAggregate, \\Countable
{
    private \$name = 'attributes';
    private \$storageKey;

    protected \$attributes = [];

    /**
     * @param string \$storageKey The key used to store attributes in the session
     */
    public function __construct(string \$storageKey = '_sf2_attributes')
    {
        \$this->storageKey = \$storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return \$this->name;
    }

    public function setName(\$name)
    {
        \$this->name = \$name;
    }

    /**
     * {@inheritdoc}
     */
    public function initialize(array &\$attributes)
    {
        \$this->attributes = &\$attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function getStorageKey()
    {
        return \$this->storageKey;
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        return \\array_key_exists(\$name, \$this->attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name, \$default = null)
    {
        return \\array_key_exists(\$name, \$this->attributes) ? \$this->attributes[\$name] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$name, \$value)
    {
        \$this->attributes[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return \$this->attributes;
    }

    /**
     * {@inheritdoc}
     */
    public function replace(array \$attributes)
    {
        \$this->attributes = [];
        foreach (\$attributes as \$key => \$value) {
            \$this->set(\$key, \$value);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$name)
    {
        \$retval = null;
        if (\\array_key_exists(\$name, \$this->attributes)) {
            \$retval = \$this->attributes[\$name];
            unset(\$this->attributes[\$name]);
        }

        return \$retval;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        \$return = \$this->attributes;
        \$this->attributes = [];

        return \$return;
    }

    /**
     * Returns an iterator for attributes.
     *
     * @return \\ArrayIterator An \\ArrayIterator instance
     */
    public function getIterator()
    {
        return new \\ArrayIterator(\$this->attributes);
    }

    /**
     * Returns the number of attributes.
     *
     * @return int The number of attributes
     */
    public function count()
    {
        return \\count(\$this->attributes);
    }
}
", "vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Attribute/AttributeBag.php");
    }
}
