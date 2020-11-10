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

/* vendor/symfony/translation/Loader/ArrayLoader.php */
class __TwigTemplate_27d978b3d5cbfc227e17ccf6b13acf2cc3174d19b4e9fdb38f80505934ed9d18 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/ArrayLoader.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Loader/ArrayLoader.php"));

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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * ArrayLoader loads translations from a PHP array.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ArrayLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        \$this->flatten(\$resource);
        \$catalogue = new MessageCatalogue(\$locale);
        \$catalogue->add(\$resource, \$domain);

        return \$catalogue;
    }

    /**
     * Flattens an nested array of translations.
     *
     * The scheme used is:
     *   'key' => ['key2' => ['key3' => 'value']]
     * Becomes:
     *   'key.key2.key3' => 'value'
     *
     * This function takes an array by reference and will modify it
     *
     * @param array  &\$messages The array that will be flattened
     * @param array  \$subnode   Current subnode being parsed, used internally for recursive calls
     * @param string \$path      Current path being parsed, used internally for recursive calls
     */
    private function flatten(array &\$messages, array \$subnode = null, \$path = null)
    {
        if (null === \$subnode) {
            \$subnode = &\$messages;
        }
        foreach (\$subnode as \$key => \$value) {
            if (\\is_array(\$value)) {
                \$nodePath = \$path ? \$path.'.'.\$key : \$key;
                \$this->flatten(\$messages, \$value, \$nodePath);
                if (null === \$path) {
                    unset(\$messages[\$key]);
                }
            } elseif (null !== \$path) {
                \$messages[\$path.'.'.\$key] = \$value;
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
        return "vendor/symfony/translation/Loader/ArrayLoader.php";
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

namespace Symfony\\Component\\Translation\\Loader;

use Symfony\\Component\\Translation\\MessageCatalogue;

/**
 * ArrayLoader loads translations from a PHP array.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class ArrayLoader implements LoaderInterface
{
    /**
     * {@inheritdoc}
     */
    public function load(\$resource, \$locale, \$domain = 'messages')
    {
        \$this->flatten(\$resource);
        \$catalogue = new MessageCatalogue(\$locale);
        \$catalogue->add(\$resource, \$domain);

        return \$catalogue;
    }

    /**
     * Flattens an nested array of translations.
     *
     * The scheme used is:
     *   'key' => ['key2' => ['key3' => 'value']]
     * Becomes:
     *   'key.key2.key3' => 'value'
     *
     * This function takes an array by reference and will modify it
     *
     * @param array  &\$messages The array that will be flattened
     * @param array  \$subnode   Current subnode being parsed, used internally for recursive calls
     * @param string \$path      Current path being parsed, used internally for recursive calls
     */
    private function flatten(array &\$messages, array \$subnode = null, \$path = null)
    {
        if (null === \$subnode) {
            \$subnode = &\$messages;
        }
        foreach (\$subnode as \$key => \$value) {
            if (\\is_array(\$value)) {
                \$nodePath = \$path ? \$path.'.'.\$key : \$key;
                \$this->flatten(\$messages, \$value, \$nodePath);
                if (null === \$path) {
                    unset(\$messages[\$key]);
                }
            } elseif (null !== \$path) {
                \$messages[\$path.'.'.\$key] = \$value;
            }
        }
    }
}
", "vendor/symfony/translation/Loader/ArrayLoader.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Loader/ArrayLoader.php");
    }
}
