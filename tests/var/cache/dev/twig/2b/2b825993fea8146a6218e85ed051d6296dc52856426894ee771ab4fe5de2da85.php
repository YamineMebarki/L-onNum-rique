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

/* vendor/symfony/translation/Util/ArrayConverter.php */
class __TwigTemplate_3b2731504e4530545ac26149c7860590d34149ffe043ecc677e1c4c1a31ba478 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Util/ArrayConverter.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/translation/Util/ArrayConverter.php"));

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

namespace Symfony\\Component\\Translation\\Util;

/**
 * ArrayConverter generates tree like structure from a message catalogue.
 * e.g. this
 *   'foo.bar1' => 'test1',
 *   'foo.bar2' => 'test2'
 * converts to follows:
 *   foo:
 *     bar1: test1
 *     bar2: test2.
 *
 * @author Gennady Telegin <gtelegin@gmail.com>
 */
class ArrayConverter
{
    /**
     * Converts linear messages array to tree-like array.
     * For example this array('foo.bar' => 'value') will be converted to ['foo' => ['bar' => 'value']].
     *
     * @param array \$messages Linear messages array
     *
     * @return array Tree-like messages array
     */
    public static function expandToTree(array \$messages)
    {
        \$tree = [];

        foreach (\$messages as \$id => \$value) {
            \$referenceToElement = &self::getElementByPath(\$tree, explode('.', \$id));

            \$referenceToElement = \$value;

            unset(\$referenceToElement);
        }

        return \$tree;
    }

    private static function &getElementByPath(array &\$tree, array \$parts)
    {
        \$elem = &\$tree;
        \$parentOfElem = null;

        foreach (\$parts as \$i => \$part) {
            if (isset(\$elem[\$part]) && \\is_string(\$elem[\$part])) {
                /* Process next case:
                 *    'foo': 'test1',
                 *    'foo.bar': 'test2'
                 *
                 * \$tree['foo'] was string before we found array {bar: test2}.
                 *  Treat new element as string too, e.g. add \$tree['foo.bar'] = 'test2';
                 */
                \$elem = &\$elem[implode('.', \\array_slice(\$parts, \$i))];
                break;
            }
            \$parentOfElem = &\$elem;
            \$elem = &\$elem[\$part];
        }

        if (\$elem && \\is_array(\$elem) && \$parentOfElem) {
            /* Process next case:
             *    'foo.bar': 'test1'
             *    'foo': 'test2'
             *
             * \$tree['foo'] was array = {bar: 'test1'} before we found string constant `foo`.
             * Cancel treating \$tree['foo'] as array and cancel back it expansion,
             *  e.g. make it \$tree['foo.bar'] = 'test1' again.
             */
            self::cancelExpand(\$parentOfElem, \$part, \$elem);
        }

        return \$elem;
    }

    private static function cancelExpand(array &\$tree, \$prefix, array \$node)
    {
        \$prefix .= '.';

        foreach (\$node as \$id => \$value) {
            if (\\is_string(\$value)) {
                \$tree[\$prefix.\$id] = \$value;
            } else {
                self::cancelExpand(\$tree, \$prefix.\$id, \$value);
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
        return "vendor/symfony/translation/Util/ArrayConverter.php";
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

namespace Symfony\\Component\\Translation\\Util;

/**
 * ArrayConverter generates tree like structure from a message catalogue.
 * e.g. this
 *   'foo.bar1' => 'test1',
 *   'foo.bar2' => 'test2'
 * converts to follows:
 *   foo:
 *     bar1: test1
 *     bar2: test2.
 *
 * @author Gennady Telegin <gtelegin@gmail.com>
 */
class ArrayConverter
{
    /**
     * Converts linear messages array to tree-like array.
     * For example this array('foo.bar' => 'value') will be converted to ['foo' => ['bar' => 'value']].
     *
     * @param array \$messages Linear messages array
     *
     * @return array Tree-like messages array
     */
    public static function expandToTree(array \$messages)
    {
        \$tree = [];

        foreach (\$messages as \$id => \$value) {
            \$referenceToElement = &self::getElementByPath(\$tree, explode('.', \$id));

            \$referenceToElement = \$value;

            unset(\$referenceToElement);
        }

        return \$tree;
    }

    private static function &getElementByPath(array &\$tree, array \$parts)
    {
        \$elem = &\$tree;
        \$parentOfElem = null;

        foreach (\$parts as \$i => \$part) {
            if (isset(\$elem[\$part]) && \\is_string(\$elem[\$part])) {
                /* Process next case:
                 *    'foo': 'test1',
                 *    'foo.bar': 'test2'
                 *
                 * \$tree['foo'] was string before we found array {bar: test2}.
                 *  Treat new element as string too, e.g. add \$tree['foo.bar'] = 'test2';
                 */
                \$elem = &\$elem[implode('.', \\array_slice(\$parts, \$i))];
                break;
            }
            \$parentOfElem = &\$elem;
            \$elem = &\$elem[\$part];
        }

        if (\$elem && \\is_array(\$elem) && \$parentOfElem) {
            /* Process next case:
             *    'foo.bar': 'test1'
             *    'foo': 'test2'
             *
             * \$tree['foo'] was array = {bar: 'test1'} before we found string constant `foo`.
             * Cancel treating \$tree['foo'] as array and cancel back it expansion,
             *  e.g. make it \$tree['foo.bar'] = 'test1' again.
             */
            self::cancelExpand(\$parentOfElem, \$part, \$elem);
        }

        return \$elem;
    }

    private static function cancelExpand(array &\$tree, \$prefix, array \$node)
    {
        \$prefix .= '.';

        foreach (\$node as \$id => \$value) {
            if (\\is_string(\$value)) {
                \$tree[\$prefix.\$id] = \$value;
            } else {
                self::cancelExpand(\$tree, \$prefix.\$id, \$value);
            }
        }
    }
}
", "vendor/symfony/translation/Util/ArrayConverter.php", "/var/www/public/DevLaon/templates/vendor/symfony/translation/Util/ArrayConverter.php");
    }
}
