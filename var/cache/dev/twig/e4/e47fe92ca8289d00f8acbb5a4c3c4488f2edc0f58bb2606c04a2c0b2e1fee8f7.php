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

/* vendor/symfony/dom-crawler/FormFieldRegistry.php */
class __TwigTemplate_5f766827859c7dbfcdc28f9cfa8082f3032757262867267f73ccdc34365bd19c extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/FormFieldRegistry.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/dom-crawler/FormFieldRegistry.php"));

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

namespace Symfony\\Component\\DomCrawler;

use Symfony\\Component\\DomCrawler\\Field\\FormField;

/**
 * This is an internal class that must not be used directly.
 *
 * @internal
 */
class FormFieldRegistry
{
    private \$fields = [];

    private \$base;

    /**
     * Adds a field to the registry.
     */
    public function add(FormField \$field)
    {
        \$segments = \$this->getSegments(\$field->getName());

        \$target = &\$this->fields;
        while (\$segments) {
            if (!\\is_array(\$target)) {
                \$target = [];
            }
            \$path = array_shift(\$segments);
            if ('' === \$path) {
                \$target = &\$target[];
            } else {
                \$target = &\$target[\$path];
            }
        }
        \$target = \$field;
    }

    /**
     * Removes a field and its children from the registry.
     *
     * @param string \$name The fully qualified name of the base field
     */
    public function remove(\$name)
    {
        \$segments = \$this->getSegments(\$name);
        \$target = &\$this->fields;
        while (\\count(\$segments) > 1) {
            \$path = array_shift(\$segments);
            if (!\\is_array(\$target) || !\\array_key_exists(\$path, \$target)) {
                return;
            }
            \$target = &\$target[\$path];
        }
        unset(\$target[array_shift(\$segments)]);
    }

    /**
     * Returns the value of the field and its children.
     *
     * @param string \$name The fully qualified name of the field
     *
     * @return mixed The value of the field
     *
     * @throws \\InvalidArgumentException if the field does not exist
     */
    public function &get(\$name)
    {
        \$segments = \$this->getSegments(\$name);
        \$target = &\$this->fields;
        while (\$segments) {
            \$path = array_shift(\$segments);
            if (!\\is_array(\$target) || !\\array_key_exists(\$path, \$target)) {
                throw new \\InvalidArgumentException(sprintf('Unreachable field \"%s\"', \$path));
            }
            \$target = &\$target[\$path];
        }

        return \$target;
    }

    /**
     * Tests whether the form has the given field.
     *
     * @param string \$name The fully qualified name of the field
     *
     * @return bool Whether the form has the given field
     */
    public function has(\$name)
    {
        try {
            \$this->get(\$name);

            return true;
        } catch (\\InvalidArgumentException \$e) {
            return false;
        }
    }

    /**
     * Set the value of a field and its children.
     *
     * @param string \$name  The fully qualified name of the field
     * @param mixed  \$value The value
     *
     * @throws \\InvalidArgumentException if the field does not exist
     */
    public function set(\$name, \$value)
    {
        \$target = &\$this->get(\$name);
        if ((!\\is_array(\$value) && \$target instanceof Field\\FormField) || \$target instanceof Field\\ChoiceFormField) {
            \$target->setValue(\$value);
        } elseif (\\is_array(\$value)) {
            \$registry = new static();
            \$registry->base = \$name;
            \$registry->fields = \$value;
            foreach (\$registry->all() as \$k => \$v) {
                \$this->set(\$k, \$v);
            }
        } else {
            throw new \\InvalidArgumentException(sprintf('Cannot set value on a compound field \"%s\".', \$name));
        }
    }

    /**
     * Returns the list of field with their value.
     *
     * @return FormField[] The list of fields as [string] Fully qualified name => (mixed) value)
     */
    public function all()
    {
        return \$this->walk(\$this->fields, \$this->base);
    }

    /**
     * Transforms a PHP array in a list of fully qualified name / value.
     *
     * @param array  \$array  The PHP array
     * @param string \$base   The name of the base field
     * @param array  \$output The initial values
     *
     * @return array The list of fields as [string] Fully qualified name => (mixed) value)
     */
    private function walk(array \$array, \$base = '', array &\$output = [])
    {
        foreach (\$array as \$k => \$v) {
            \$path = empty(\$base) ? \$k : sprintf('%s[%s]', \$base, \$k);
            if (\\is_array(\$v)) {
                \$this->walk(\$v, \$path, \$output);
            } else {
                \$output[\$path] = \$v;
            }
        }

        return \$output;
    }

    /**
     * Splits a field name into segments as a web browser would do.
     *
     *     getSegments('base[foo][3][]') = ['base', 'foo, '3', ''];
     *
     * @param string \$name The name of the field
     *
     * @return string[] The list of segments
     */
    private function getSegments(\$name)
    {
        if (preg_match('/^(?P<base>[^[]+)(?P<extra>(\\[.*)|\$)/', \$name, \$m)) {
            \$segments = [\$m['base']];
            while (!empty(\$m['extra'])) {
                \$extra = \$m['extra'];
                if (preg_match('/^\\[(?P<segment>.*?)\\](?P<extra>.*)\$/', \$extra, \$m)) {
                    \$segments[] = \$m['segment'];
                } else {
                    \$segments[] = \$extra;
                }
            }

            return \$segments;
        }

        return [\$name];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/dom-crawler/FormFieldRegistry.php";
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

namespace Symfony\\Component\\DomCrawler;

use Symfony\\Component\\DomCrawler\\Field\\FormField;

/**
 * This is an internal class that must not be used directly.
 *
 * @internal
 */
class FormFieldRegistry
{
    private \$fields = [];

    private \$base;

    /**
     * Adds a field to the registry.
     */
    public function add(FormField \$field)
    {
        \$segments = \$this->getSegments(\$field->getName());

        \$target = &\$this->fields;
        while (\$segments) {
            if (!\\is_array(\$target)) {
                \$target = [];
            }
            \$path = array_shift(\$segments);
            if ('' === \$path) {
                \$target = &\$target[];
            } else {
                \$target = &\$target[\$path];
            }
        }
        \$target = \$field;
    }

    /**
     * Removes a field and its children from the registry.
     *
     * @param string \$name The fully qualified name of the base field
     */
    public function remove(\$name)
    {
        \$segments = \$this->getSegments(\$name);
        \$target = &\$this->fields;
        while (\\count(\$segments) > 1) {
            \$path = array_shift(\$segments);
            if (!\\is_array(\$target) || !\\array_key_exists(\$path, \$target)) {
                return;
            }
            \$target = &\$target[\$path];
        }
        unset(\$target[array_shift(\$segments)]);
    }

    /**
     * Returns the value of the field and its children.
     *
     * @param string \$name The fully qualified name of the field
     *
     * @return mixed The value of the field
     *
     * @throws \\InvalidArgumentException if the field does not exist
     */
    public function &get(\$name)
    {
        \$segments = \$this->getSegments(\$name);
        \$target = &\$this->fields;
        while (\$segments) {
            \$path = array_shift(\$segments);
            if (!\\is_array(\$target) || !\\array_key_exists(\$path, \$target)) {
                throw new \\InvalidArgumentException(sprintf('Unreachable field \"%s\"', \$path));
            }
            \$target = &\$target[\$path];
        }

        return \$target;
    }

    /**
     * Tests whether the form has the given field.
     *
     * @param string \$name The fully qualified name of the field
     *
     * @return bool Whether the form has the given field
     */
    public function has(\$name)
    {
        try {
            \$this->get(\$name);

            return true;
        } catch (\\InvalidArgumentException \$e) {
            return false;
        }
    }

    /**
     * Set the value of a field and its children.
     *
     * @param string \$name  The fully qualified name of the field
     * @param mixed  \$value The value
     *
     * @throws \\InvalidArgumentException if the field does not exist
     */
    public function set(\$name, \$value)
    {
        \$target = &\$this->get(\$name);
        if ((!\\is_array(\$value) && \$target instanceof Field\\FormField) || \$target instanceof Field\\ChoiceFormField) {
            \$target->setValue(\$value);
        } elseif (\\is_array(\$value)) {
            \$registry = new static();
            \$registry->base = \$name;
            \$registry->fields = \$value;
            foreach (\$registry->all() as \$k => \$v) {
                \$this->set(\$k, \$v);
            }
        } else {
            throw new \\InvalidArgumentException(sprintf('Cannot set value on a compound field \"%s\".', \$name));
        }
    }

    /**
     * Returns the list of field with their value.
     *
     * @return FormField[] The list of fields as [string] Fully qualified name => (mixed) value)
     */
    public function all()
    {
        return \$this->walk(\$this->fields, \$this->base);
    }

    /**
     * Transforms a PHP array in a list of fully qualified name / value.
     *
     * @param array  \$array  The PHP array
     * @param string \$base   The name of the base field
     * @param array  \$output The initial values
     *
     * @return array The list of fields as [string] Fully qualified name => (mixed) value)
     */
    private function walk(array \$array, \$base = '', array &\$output = [])
    {
        foreach (\$array as \$k => \$v) {
            \$path = empty(\$base) ? \$k : sprintf('%s[%s]', \$base, \$k);
            if (\\is_array(\$v)) {
                \$this->walk(\$v, \$path, \$output);
            } else {
                \$output[\$path] = \$v;
            }
        }

        return \$output;
    }

    /**
     * Splits a field name into segments as a web browser would do.
     *
     *     getSegments('base[foo][3][]') = ['base', 'foo, '3', ''];
     *
     * @param string \$name The name of the field
     *
     * @return string[] The list of segments
     */
    private function getSegments(\$name)
    {
        if (preg_match('/^(?P<base>[^[]+)(?P<extra>(\\[.*)|\$)/', \$name, \$m)) {
            \$segments = [\$m['base']];
            while (!empty(\$m['extra'])) {
                \$extra = \$m['extra'];
                if (preg_match('/^\\[(?P<segment>.*?)\\](?P<extra>.*)\$/', \$extra, \$m)) {
                    \$segments[] = \$m['segment'];
                } else {
                    \$segments[] = \$extra;
                }
            }

            return \$segments;
        }

        return [\$name];
    }
}
", "vendor/symfony/dom-crawler/FormFieldRegistry.php", "/var/www/public/DevLaon/templates/vendor/symfony/dom-crawler/FormFieldRegistry.php");
    }
}
