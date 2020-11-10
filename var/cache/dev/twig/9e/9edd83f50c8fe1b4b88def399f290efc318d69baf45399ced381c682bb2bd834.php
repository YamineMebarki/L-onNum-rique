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

/* vendor/symfony/finder/Tests/Iterator/RealIteratorTestCase.php */
class __TwigTemplate_8540feb671cf4faa0d7431654333d95e735a654476b110c698198261d332c896 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/RealIteratorTestCase.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/Iterator/RealIteratorTestCase.php"));

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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

abstract class RealIteratorTestCase extends IteratorTestCase
{
    protected static \$tmpDir;
    protected static \$files;

    public static function setUpBeforeClass(): void
    {
        self::\$tmpDir = realpath(sys_get_temp_dir()).\\DIRECTORY_SEPARATOR.'symfony_finder';

        self::\$files = [
            '.git/',
            '.foo/',
            '.foo/.bar',
            '.foo/bar',
            '.bar',
            'test.py',
            'foo/',
            'foo/bar.tmp',
            'test.php',
            'toto/',
            'toto/.git/',
            'foo bar',
            'qux_0_1.php',
            'qux_2_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux/',
            'qux/baz_1_2.py',
            'qux/baz_100_1.py',
        ];

        self::\$files = self::toAbsolute(self::\$files);

        if (is_dir(self::\$tmpDir)) {
            self::tearDownAfterClass();
        } else {
            mkdir(self::\$tmpDir);
        }

        foreach (self::\$files as \$file) {
            if (\\DIRECTORY_SEPARATOR === \$file[\\strlen(\$file) - 1]) {
                mkdir(\$file);
            } else {
                touch(\$file);
            }
        }

        file_put_contents(self::toAbsolute('test.php'), str_repeat(' ', 800));
        file_put_contents(self::toAbsolute('test.py'), str_repeat(' ', 2000));

        file_put_contents(self::toAbsolute('.gitignore'), '*.php');

        touch(self::toAbsolute('foo/bar.tmp'), strtotime('2005-10-15'));
        touch(self::toAbsolute('test.php'), strtotime('2005-10-15'));
    }

    public static function tearDownAfterClass(): void
    {
        \$paths = new \\RecursiveIteratorIterator(
             new \\RecursiveDirectoryIterator(self::\$tmpDir, \\RecursiveDirectoryIterator::SKIP_DOTS),
             \\RecursiveIteratorIterator::CHILD_FIRST
         );

        foreach (\$paths as \$path) {
            if (\$path->isDir()) {
                if (\$path->isLink()) {
                    @unlink(\$path);
                } else {
                    @rmdir(\$path);
                }
            } else {
                @unlink(\$path);
            }
        }
    }

    protected static function toAbsolute(\$files = null)
    {
        /*
         * Without the call to setUpBeforeClass() property can be null.
         */
        if (!self::\$tmpDir) {
            self::\$tmpDir = realpath(sys_get_temp_dir()).\\DIRECTORY_SEPARATOR.'symfony_finder';
        }

        if (\\is_array(\$files)) {
            \$f = [];
            foreach (\$files as \$file) {
                if (\\is_array(\$file)) {
                    \$f[] = self::toAbsolute(\$file);
                } else {
                    \$f[] = self::\$tmpDir.\\DIRECTORY_SEPARATOR.str_replace('/', \\DIRECTORY_SEPARATOR, \$file);
                }
            }

            return \$f;
        }

        if (\\is_string(\$files)) {
            return self::\$tmpDir.\\DIRECTORY_SEPARATOR.str_replace('/', \\DIRECTORY_SEPARATOR, \$files);
        }

        return self::\$tmpDir;
    }

    protected static function toAbsoluteFixtures(\$files)
    {
        \$f = [];
        foreach (\$files as \$file) {
            \$f[] = realpath(__DIR__.\\DIRECTORY_SEPARATOR.'..'.\\DIRECTORY_SEPARATOR.'Fixtures'.\\DIRECTORY_SEPARATOR.\$file);
        }

        return \$f;
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/Iterator/RealIteratorTestCase.php";
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

namespace Symfony\\Component\\Finder\\Tests\\Iterator;

abstract class RealIteratorTestCase extends IteratorTestCase
{
    protected static \$tmpDir;
    protected static \$files;

    public static function setUpBeforeClass(): void
    {
        self::\$tmpDir = realpath(sys_get_temp_dir()).\\DIRECTORY_SEPARATOR.'symfony_finder';

        self::\$files = [
            '.git/',
            '.foo/',
            '.foo/.bar',
            '.foo/bar',
            '.bar',
            'test.py',
            'foo/',
            'foo/bar.tmp',
            'test.php',
            'toto/',
            'toto/.git/',
            'foo bar',
            'qux_0_1.php',
            'qux_2_0.php',
            'qux_10_2.php',
            'qux_12_0.php',
            'qux_1000_1.php',
            'qux_1002_0.php',
            'qux/',
            'qux/baz_1_2.py',
            'qux/baz_100_1.py',
        ];

        self::\$files = self::toAbsolute(self::\$files);

        if (is_dir(self::\$tmpDir)) {
            self::tearDownAfterClass();
        } else {
            mkdir(self::\$tmpDir);
        }

        foreach (self::\$files as \$file) {
            if (\\DIRECTORY_SEPARATOR === \$file[\\strlen(\$file) - 1]) {
                mkdir(\$file);
            } else {
                touch(\$file);
            }
        }

        file_put_contents(self::toAbsolute('test.php'), str_repeat(' ', 800));
        file_put_contents(self::toAbsolute('test.py'), str_repeat(' ', 2000));

        file_put_contents(self::toAbsolute('.gitignore'), '*.php');

        touch(self::toAbsolute('foo/bar.tmp'), strtotime('2005-10-15'));
        touch(self::toAbsolute('test.php'), strtotime('2005-10-15'));
    }

    public static function tearDownAfterClass(): void
    {
        \$paths = new \\RecursiveIteratorIterator(
             new \\RecursiveDirectoryIterator(self::\$tmpDir, \\RecursiveDirectoryIterator::SKIP_DOTS),
             \\RecursiveIteratorIterator::CHILD_FIRST
         );

        foreach (\$paths as \$path) {
            if (\$path->isDir()) {
                if (\$path->isLink()) {
                    @unlink(\$path);
                } else {
                    @rmdir(\$path);
                }
            } else {
                @unlink(\$path);
            }
        }
    }

    protected static function toAbsolute(\$files = null)
    {
        /*
         * Without the call to setUpBeforeClass() property can be null.
         */
        if (!self::\$tmpDir) {
            self::\$tmpDir = realpath(sys_get_temp_dir()).\\DIRECTORY_SEPARATOR.'symfony_finder';
        }

        if (\\is_array(\$files)) {
            \$f = [];
            foreach (\$files as \$file) {
                if (\\is_array(\$file)) {
                    \$f[] = self::toAbsolute(\$file);
                } else {
                    \$f[] = self::\$tmpDir.\\DIRECTORY_SEPARATOR.str_replace('/', \\DIRECTORY_SEPARATOR, \$file);
                }
            }

            return \$f;
        }

        if (\\is_string(\$files)) {
            return self::\$tmpDir.\\DIRECTORY_SEPARATOR.str_replace('/', \\DIRECTORY_SEPARATOR, \$files);
        }

        return self::\$tmpDir;
    }

    protected static function toAbsoluteFixtures(\$files)
    {
        \$f = [];
        foreach (\$files as \$file) {
            \$f[] = realpath(__DIR__.\\DIRECTORY_SEPARATOR.'..'.\\DIRECTORY_SEPARATOR.'Fixtures'.\\DIRECTORY_SEPARATOR.\$file);
        }

        return \$f;
    }
}
", "vendor/symfony/finder/Tests/Iterator/RealIteratorTestCase.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/Iterator/RealIteratorTestCase.php");
    }
}
