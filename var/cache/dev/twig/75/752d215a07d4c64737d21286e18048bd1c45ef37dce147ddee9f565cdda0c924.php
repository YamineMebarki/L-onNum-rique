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

/* vendor/symfony/finder/Tests/GlobTest.php */
class __TwigTemplate_4161a94009de462ccebafbd1edd8aa33f716e8d848a211817ee6f746e9ffef7d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/GlobTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/GlobTest.php"));

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

namespace Symfony\\Component\\Finder\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Finder\\Glob;

class GlobTest extends TestCase
{
    public function testGlobToRegexDelimiters()
    {
        \$this->assertEquals('#^(?=[^\\.])\\#\$#', Glob::toRegex('#'));
        \$this->assertEquals('#^\\.[^/]*\$#', Glob::toRegex('.*'));
        \$this->assertEquals('^\\.[^/]*\$', Glob::toRegex('.*', true, true, ''));
        \$this->assertEquals('/^\\.[^/]*\$/', Glob::toRegex('.*', true, true, '/'));
    }

    public function testGlobToRegexDoubleStarStrictDots()
    {
        \$finder = new Finder();
        \$finder->ignoreDotFiles(false);
        \$regex = Glob::toRegex('/**/*.neon');

        foreach (\$finder->in(__DIR__) as \$k => \$v) {
            \$k = str_replace(\\DIRECTORY_SEPARATOR, '/', \$k);
            if (preg_match(\$regex, substr(\$k, \\strlen(__DIR__)))) {
                \$match[] = substr(\$k, 10 + \\strlen(__DIR__));
            }
        }
        sort(\$match);

        \$this->assertSame(['one/b/c.neon', 'one/b/d.neon'], \$match);
    }

    public function testGlobToRegexDoubleStarNonStrictDots()
    {
        \$finder = new Finder();
        \$finder->ignoreDotFiles(false);
        \$regex = Glob::toRegex('/**/*.neon', false);

        foreach (\$finder->in(__DIR__) as \$k => \$v) {
            \$k = str_replace(\\DIRECTORY_SEPARATOR, '/', \$k);
            if (preg_match(\$regex, substr(\$k, \\strlen(__DIR__)))) {
                \$match[] = substr(\$k, 10 + \\strlen(__DIR__));
            }
        }
        sort(\$match);

        \$this->assertSame(['.dot/b/c.neon', '.dot/b/d.neon', 'one/b/c.neon', 'one/b/d.neon'], \$match);
    }

    public function testGlobToRegexDoubleStarWithoutLeadingSlash()
    {
        \$finder = new Finder();
        \$finder->ignoreDotFiles(false);
        \$regex = Glob::toRegex('/Fixtures/one/**');

        foreach (\$finder->in(__DIR__) as \$k => \$v) {
            \$k = str_replace(\\DIRECTORY_SEPARATOR, '/', \$k);
            if (preg_match(\$regex, substr(\$k, \\strlen(__DIR__)))) {
                \$match[] = substr(\$k, 10 + \\strlen(__DIR__));
            }
        }
        sort(\$match);

        \$this->assertSame(['one/a', 'one/b', 'one/b/c.neon', 'one/b/d.neon'], \$match);
    }

    public function testGlobToRegexDoubleStarWithoutLeadingSlashNotStrictLeadingDot()
    {
        \$finder = new Finder();
        \$finder->ignoreDotFiles(false);
        \$regex = Glob::toRegex('/Fixtures/one/**', false);

        foreach (\$finder->in(__DIR__) as \$k => \$v) {
            \$k = str_replace(\\DIRECTORY_SEPARATOR, '/', \$k);
            if (preg_match(\$regex, substr(\$k, \\strlen(__DIR__)))) {
                \$match[] = substr(\$k, 10 + \\strlen(__DIR__));
            }
        }
        sort(\$match);

        \$this->assertSame(['one/.dot', 'one/a', 'one/b', 'one/b/c.neon', 'one/b/d.neon'], \$match);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/GlobTest.php";
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

namespace Symfony\\Component\\Finder\\Tests;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Finder\\Finder;
use Symfony\\Component\\Finder\\Glob;

class GlobTest extends TestCase
{
    public function testGlobToRegexDelimiters()
    {
        \$this->assertEquals('#^(?=[^\\.])\\#\$#', Glob::toRegex('#'));
        \$this->assertEquals('#^\\.[^/]*\$#', Glob::toRegex('.*'));
        \$this->assertEquals('^\\.[^/]*\$', Glob::toRegex('.*', true, true, ''));
        \$this->assertEquals('/^\\.[^/]*\$/', Glob::toRegex('.*', true, true, '/'));
    }

    public function testGlobToRegexDoubleStarStrictDots()
    {
        \$finder = new Finder();
        \$finder->ignoreDotFiles(false);
        \$regex = Glob::toRegex('/**/*.neon');

        foreach (\$finder->in(__DIR__) as \$k => \$v) {
            \$k = str_replace(\\DIRECTORY_SEPARATOR, '/', \$k);
            if (preg_match(\$regex, substr(\$k, \\strlen(__DIR__)))) {
                \$match[] = substr(\$k, 10 + \\strlen(__DIR__));
            }
        }
        sort(\$match);

        \$this->assertSame(['one/b/c.neon', 'one/b/d.neon'], \$match);
    }

    public function testGlobToRegexDoubleStarNonStrictDots()
    {
        \$finder = new Finder();
        \$finder->ignoreDotFiles(false);
        \$regex = Glob::toRegex('/**/*.neon', false);

        foreach (\$finder->in(__DIR__) as \$k => \$v) {
            \$k = str_replace(\\DIRECTORY_SEPARATOR, '/', \$k);
            if (preg_match(\$regex, substr(\$k, \\strlen(__DIR__)))) {
                \$match[] = substr(\$k, 10 + \\strlen(__DIR__));
            }
        }
        sort(\$match);

        \$this->assertSame(['.dot/b/c.neon', '.dot/b/d.neon', 'one/b/c.neon', 'one/b/d.neon'], \$match);
    }

    public function testGlobToRegexDoubleStarWithoutLeadingSlash()
    {
        \$finder = new Finder();
        \$finder->ignoreDotFiles(false);
        \$regex = Glob::toRegex('/Fixtures/one/**');

        foreach (\$finder->in(__DIR__) as \$k => \$v) {
            \$k = str_replace(\\DIRECTORY_SEPARATOR, '/', \$k);
            if (preg_match(\$regex, substr(\$k, \\strlen(__DIR__)))) {
                \$match[] = substr(\$k, 10 + \\strlen(__DIR__));
            }
        }
        sort(\$match);

        \$this->assertSame(['one/a', 'one/b', 'one/b/c.neon', 'one/b/d.neon'], \$match);
    }

    public function testGlobToRegexDoubleStarWithoutLeadingSlashNotStrictLeadingDot()
    {
        \$finder = new Finder();
        \$finder->ignoreDotFiles(false);
        \$regex = Glob::toRegex('/Fixtures/one/**', false);

        foreach (\$finder->in(__DIR__) as \$k => \$v) {
            \$k = str_replace(\\DIRECTORY_SEPARATOR, '/', \$k);
            if (preg_match(\$regex, substr(\$k, \\strlen(__DIR__)))) {
                \$match[] = substr(\$k, 10 + \\strlen(__DIR__));
            }
        }
        sort(\$match);

        \$this->assertSame(['one/.dot', 'one/a', 'one/b', 'one/b/c.neon', 'one/b/d.neon'], \$match);
    }
}
", "vendor/symfony/finder/Tests/GlobTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/GlobTest.php");
    }
}
