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

/* vendor/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php */
class __TwigTemplate_28277e34ac0288149095da7af4a4415394ffca72f61f43475048019cd41fa03f extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php"));

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
 * This class provides structured storage of session attributes using
 * a name spacing character in the key.
 *
 * @author Drak <drak@zikula.org>
 */
class NamespacedAttributeBag extends AttributeBag
{
    private \$namespaceCharacter;

    /**
     * @param string \$storageKey         Session storage key
     * @param string \$namespaceCharacter Namespace character to use in keys
     */
    public function __construct(string \$storageKey = '_sf2_attributes', string \$namespaceCharacter = '/')
    {
        \$this->namespaceCharacter = \$namespaceCharacter;
        parent::__construct(\$storageKey);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        // reference mismatch: if fixed, re-introduced in array_key_exists; keep as it is
        \$attributes = \$this->resolveAttributePath(\$name);
        \$name = \$this->resolveKey(\$name);

        if (null === \$attributes) {
            return false;
        }

        return \\array_key_exists(\$name, \$attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name, \$default = null)
    {
        // reference mismatch: if fixed, re-introduced in array_key_exists; keep as it is
        \$attributes = \$this->resolveAttributePath(\$name);
        \$name = \$this->resolveKey(\$name);

        if (null === \$attributes) {
            return \$default;
        }

        return \\array_key_exists(\$name, \$attributes) ? \$attributes[\$name] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$name, \$value)
    {
        \$attributes = &\$this->resolveAttributePath(\$name, true);
        \$name = \$this->resolveKey(\$name);
        \$attributes[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$name)
    {
        \$retval = null;
        \$attributes = &\$this->resolveAttributePath(\$name);
        \$name = \$this->resolveKey(\$name);
        if (null !== \$attributes && \\array_key_exists(\$name, \$attributes)) {
            \$retval = \$attributes[\$name];
            unset(\$attributes[\$name]);
        }

        return \$retval;
    }

    /**
     * Resolves a path in attributes property and returns it as a reference.
     *
     * This method allows structured namespacing of session attributes.
     *
     * @param string \$name         Key name
     * @param bool   \$writeContext Write context, default false
     *
     * @return array|null
     */
    protected function &resolveAttributePath(\$name, \$writeContext = false)
    {
        \$array = &\$this->attributes;
        \$name = (0 === strpos(\$name, \$this->namespaceCharacter)) ? substr(\$name, 1) : \$name;

        // Check if there is anything to do, else return
        if (!\$name) {
            return \$array;
        }

        \$parts = explode(\$this->namespaceCharacter, \$name);
        if (\\count(\$parts) < 2) {
            if (!\$writeContext) {
                return \$array;
            }

            \$array[\$parts[0]] = [];

            return \$array;
        }

        unset(\$parts[\\count(\$parts) - 1]);

        foreach (\$parts as \$part) {
            if (null !== \$array && !\\array_key_exists(\$part, \$array)) {
                if (!\$writeContext) {
                    \$null = null;

                    return \$null;
                }

                \$array[\$part] = [];
            }

            \$array = &\$array[\$part];
        }

        return \$array;
    }

    /**
     * Resolves the key from the name.
     *
     * This is the last part in a dot separated string.
     *
     * @param string \$name
     *
     * @return string
     */
    protected function resolveKey(\$name)
    {
        if (false !== \$pos = strrpos(\$name, \$this->namespaceCharacter)) {
            \$name = substr(\$name, \$pos + 1);
        }

        return \$name;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php";
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
 * This class provides structured storage of session attributes using
 * a name spacing character in the key.
 *
 * @author Drak <drak@zikula.org>
 */
class NamespacedAttributeBag extends AttributeBag
{
    private \$namespaceCharacter;

    /**
     * @param string \$storageKey         Session storage key
     * @param string \$namespaceCharacter Namespace character to use in keys
     */
    public function __construct(string \$storageKey = '_sf2_attributes', string \$namespaceCharacter = '/')
    {
        \$this->namespaceCharacter = \$namespaceCharacter;
        parent::__construct(\$storageKey);
    }

    /**
     * {@inheritdoc}
     */
    public function has(\$name)
    {
        // reference mismatch: if fixed, re-introduced in array_key_exists; keep as it is
        \$attributes = \$this->resolveAttributePath(\$name);
        \$name = \$this->resolveKey(\$name);

        if (null === \$attributes) {
            return false;
        }

        return \\array_key_exists(\$name, \$attributes);
    }

    /**
     * {@inheritdoc}
     */
    public function get(\$name, \$default = null)
    {
        // reference mismatch: if fixed, re-introduced in array_key_exists; keep as it is
        \$attributes = \$this->resolveAttributePath(\$name);
        \$name = \$this->resolveKey(\$name);

        if (null === \$attributes) {
            return \$default;
        }

        return \\array_key_exists(\$name, \$attributes) ? \$attributes[\$name] : \$default;
    }

    /**
     * {@inheritdoc}
     */
    public function set(\$name, \$value)
    {
        \$attributes = &\$this->resolveAttributePath(\$name, true);
        \$name = \$this->resolveKey(\$name);
        \$attributes[\$name] = \$value;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(\$name)
    {
        \$retval = null;
        \$attributes = &\$this->resolveAttributePath(\$name);
        \$name = \$this->resolveKey(\$name);
        if (null !== \$attributes && \\array_key_exists(\$name, \$attributes)) {
            \$retval = \$attributes[\$name];
            unset(\$attributes[\$name]);
        }

        return \$retval;
    }

    /**
     * Resolves a path in attributes property and returns it as a reference.
     *
     * This method allows structured namespacing of session attributes.
     *
     * @param string \$name         Key name
     * @param bool   \$writeContext Write context, default false
     *
     * @return array|null
     */
    protected function &resolveAttributePath(\$name, \$writeContext = false)
    {
        \$array = &\$this->attributes;
        \$name = (0 === strpos(\$name, \$this->namespaceCharacter)) ? substr(\$name, 1) : \$name;

        // Check if there is anything to do, else return
        if (!\$name) {
            return \$array;
        }

        \$parts = explode(\$this->namespaceCharacter, \$name);
        if (\\count(\$parts) < 2) {
            if (!\$writeContext) {
                return \$array;
            }

            \$array[\$parts[0]] = [];

            return \$array;
        }

        unset(\$parts[\\count(\$parts) - 1]);

        foreach (\$parts as \$part) {
            if (null !== \$array && !\\array_key_exists(\$part, \$array)) {
                if (!\$writeContext) {
                    \$null = null;

                    return \$null;
                }

                \$array[\$part] = [];
            }

            \$array = &\$array[\$part];
        }

        return \$array;
    }

    /**
     * Resolves the key from the name.
     *
     * This is the last part in a dot separated string.
     *
     * @param string \$name
     *
     * @return string
     */
    protected function resolveKey(\$name)
    {
        if (false !== \$pos = strrpos(\$name, \$this->namespaceCharacter)) {
            \$name = substr(\$name, \$pos + 1);
        }

        return \$name;
    }
}
", "vendor/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php", "/var/www/public/DevLaon/templates/vendor/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php");
    }
}
