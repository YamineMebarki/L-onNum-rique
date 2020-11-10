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

/* vendor/symfony/var-dumper/Cloner/DumperInterface.php */
class __TwigTemplate_9a61a2c7c9999b424e62491b1eb40b417944898f453a48800dbcf10fa0098f9a extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Cloner/DumperInterface.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Cloner/DumperInterface.php"));

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

namespace Symfony\\Component\\VarDumper\\Cloner;

/**
 * DumperInterface used by Data objects.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface DumperInterface
{
    /**
     * Dumps a scalar value.
     *
     * @param Cursor                \$cursor The Cursor position in the dump
     * @param string                \$type   The PHP type of the value being dumped
     * @param string|int|float|bool \$value  The scalar value being dumped
     */
    public function dumpScalar(Cursor \$cursor, \$type, \$value);

    /**
     * Dumps a string.
     *
     * @param Cursor \$cursor The Cursor position in the dump
     * @param string \$str    The string being dumped
     * @param bool   \$bin    Whether \$str is UTF-8 or binary encoded
     * @param int    \$cut    The number of characters \$str has been cut by
     */
    public function dumpString(Cursor \$cursor, \$str, \$bin, \$cut);

    /**
     * Dumps while entering an hash.
     *
     * @param Cursor     \$cursor   The Cursor position in the dump
     * @param int        \$type     A Cursor::HASH_* const for the type of hash
     * @param string|int \$class    The object class, resource type or array count
     * @param bool       \$hasChild When the dump of the hash has child item
     */
    public function enterHash(Cursor \$cursor, \$type, \$class, \$hasChild);

    /**
     * Dumps while leaving an hash.
     *
     * @param Cursor     \$cursor   The Cursor position in the dump
     * @param int        \$type     A Cursor::HASH_* const for the type of hash
     * @param string|int \$class    The object class, resource type or array count
     * @param bool       \$hasChild When the dump of the hash has child item
     * @param int        \$cut      The number of items the hash has been cut by
     */
    public function leaveHash(Cursor \$cursor, \$type, \$class, \$hasChild, \$cut);
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Cloner/DumperInterface.php";
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

namespace Symfony\\Component\\VarDumper\\Cloner;

/**
 * DumperInterface used by Data objects.
 *
 * @author Nicolas Grekas <p@tchwork.com>
 */
interface DumperInterface
{
    /**
     * Dumps a scalar value.
     *
     * @param Cursor                \$cursor The Cursor position in the dump
     * @param string                \$type   The PHP type of the value being dumped
     * @param string|int|float|bool \$value  The scalar value being dumped
     */
    public function dumpScalar(Cursor \$cursor, \$type, \$value);

    /**
     * Dumps a string.
     *
     * @param Cursor \$cursor The Cursor position in the dump
     * @param string \$str    The string being dumped
     * @param bool   \$bin    Whether \$str is UTF-8 or binary encoded
     * @param int    \$cut    The number of characters \$str has been cut by
     */
    public function dumpString(Cursor \$cursor, \$str, \$bin, \$cut);

    /**
     * Dumps while entering an hash.
     *
     * @param Cursor     \$cursor   The Cursor position in the dump
     * @param int        \$type     A Cursor::HASH_* const for the type of hash
     * @param string|int \$class    The object class, resource type or array count
     * @param bool       \$hasChild When the dump of the hash has child item
     */
    public function enterHash(Cursor \$cursor, \$type, \$class, \$hasChild);

    /**
     * Dumps while leaving an hash.
     *
     * @param Cursor     \$cursor   The Cursor position in the dump
     * @param int        \$type     A Cursor::HASH_* const for the type of hash
     * @param string|int \$class    The object class, resource type or array count
     * @param bool       \$hasChild When the dump of the hash has child item
     * @param int        \$cut      The number of items the hash has been cut by
     */
    public function leaveHash(Cursor \$cursor, \$type, \$class, \$hasChild, \$cut);
}
", "vendor/symfony/var-dumper/Cloner/DumperInterface.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Cloner/DumperInterface.php");
    }
}
