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

/* vendor/symfony/finder/Comparator/NumberComparator.php */
class __TwigTemplate_75a99d5314d51d5760e3bb80c3b7fe598b0ab986af6f23f11850f84293f09779 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Comparator/NumberComparator.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Comparator/NumberComparator.php"));

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

namespace Symfony\\Component\\Finder\\Comparator;

/**
 * NumberComparator compiles a simple comparison to an anonymous
 * subroutine, which you can call with a value to be tested again.
 *
 * Now this would be very pointless, if NumberCompare didn't understand
 * magnitudes.
 *
 * The target value may use magnitudes of kilobytes (k, ki),
 * megabytes (m, mi), or gigabytes (g, gi).  Those suffixed
 * with an i use the appropriate 2**n version in accordance with the
 * IEC standard: http://physics.nist.gov/cuu/Units/binary.html
 *
 * Based on the Perl Number::Compare module.
 *
 * @author    Fabien Potencier <fabien@symfony.com> PHP port
 * @author    Richard Clamp <richardc@unixbeard.net> Perl version
 * @copyright 2004-2005 Fabien Potencier <fabien@symfony.com>
 * @copyright 2002 Richard Clamp <richardc@unixbeard.net>
 *
 * @see http://physics.nist.gov/cuu/Units/binary.html
 */
class NumberComparator extends Comparator
{
    /**
     * @param string|int \$test A comparison string or an integer
     *
     * @throws \\InvalidArgumentException If the test is not understood
     */
    public function __construct(?string \$test)
    {
        if (!preg_match('#^\\s*(==|!=|[<>]=?)?\\s*([0-9\\.]+)\\s*([kmg]i?)?\\s*\$#i', \$test, \$matches)) {
            throw new \\InvalidArgumentException(sprintf('Don\\'t understand \"%s\" as a number test.', \$test));
        }

        \$target = \$matches[2];
        if (!is_numeric(\$target)) {
            throw new \\InvalidArgumentException(sprintf('Invalid number \"%s\".', \$target));
        }
        if (isset(\$matches[3])) {
            // magnitude
            switch (strtolower(\$matches[3])) {
                case 'k':
                    \$target *= 1000;
                    break;
                case 'ki':
                    \$target *= 1024;
                    break;
                case 'm':
                    \$target *= 1000000;
                    break;
                case 'mi':
                    \$target *= 1024 * 1024;
                    break;
                case 'g':
                    \$target *= 1000000000;
                    break;
                case 'gi':
                    \$target *= 1024 * 1024 * 1024;
                    break;
            }
        }

        \$this->setTarget(\$target);
        \$this->setOperator(isset(\$matches[1]) ? \$matches[1] : '==');
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Comparator/NumberComparator.php";
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

namespace Symfony\\Component\\Finder\\Comparator;

/**
 * NumberComparator compiles a simple comparison to an anonymous
 * subroutine, which you can call with a value to be tested again.
 *
 * Now this would be very pointless, if NumberCompare didn't understand
 * magnitudes.
 *
 * The target value may use magnitudes of kilobytes (k, ki),
 * megabytes (m, mi), or gigabytes (g, gi).  Those suffixed
 * with an i use the appropriate 2**n version in accordance with the
 * IEC standard: http://physics.nist.gov/cuu/Units/binary.html
 *
 * Based on the Perl Number::Compare module.
 *
 * @author    Fabien Potencier <fabien@symfony.com> PHP port
 * @author    Richard Clamp <richardc@unixbeard.net> Perl version
 * @copyright 2004-2005 Fabien Potencier <fabien@symfony.com>
 * @copyright 2002 Richard Clamp <richardc@unixbeard.net>
 *
 * @see http://physics.nist.gov/cuu/Units/binary.html
 */
class NumberComparator extends Comparator
{
    /**
     * @param string|int \$test A comparison string or an integer
     *
     * @throws \\InvalidArgumentException If the test is not understood
     */
    public function __construct(?string \$test)
    {
        if (!preg_match('#^\\s*(==|!=|[<>]=?)?\\s*([0-9\\.]+)\\s*([kmg]i?)?\\s*\$#i', \$test, \$matches)) {
            throw new \\InvalidArgumentException(sprintf('Don\\'t understand \"%s\" as a number test.', \$test));
        }

        \$target = \$matches[2];
        if (!is_numeric(\$target)) {
            throw new \\InvalidArgumentException(sprintf('Invalid number \"%s\".', \$target));
        }
        if (isset(\$matches[3])) {
            // magnitude
            switch (strtolower(\$matches[3])) {
                case 'k':
                    \$target *= 1000;
                    break;
                case 'ki':
                    \$target *= 1024;
                    break;
                case 'm':
                    \$target *= 1000000;
                    break;
                case 'mi':
                    \$target *= 1024 * 1024;
                    break;
                case 'g':
                    \$target *= 1000000000;
                    break;
                case 'gi':
                    \$target *= 1024 * 1024 * 1024;
                    break;
            }
        }

        \$this->setTarget(\$target);
        \$this->setOperator(isset(\$matches[1]) ? \$matches[1] : '==');
    }
}
", "vendor/symfony/finder/Comparator/NumberComparator.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Comparator/NumberComparator.php");
    }
}
