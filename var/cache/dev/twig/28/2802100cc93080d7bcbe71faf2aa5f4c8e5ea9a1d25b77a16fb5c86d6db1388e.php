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

/* vendor/symfony/finder/Tests/GitignoreTest.php */
class __TwigTemplate_b442329c0d95ffdd89ee0711104f3ca9f0b79e9ebb3c03fa0639e5d6b0792306 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/GitignoreTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/finder/Tests/GitignoreTest.php"));

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
use Symfony\\Component\\Finder\\Gitignore;

class GitignoreTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testCases(string \$patterns, array \$matchingCases, array \$nonMatchingCases)
    {
        \$regex = Gitignore::toRegex(\$patterns);

        foreach (\$matchingCases as \$matchingCase) {
            \$this->assertRegExp(\$regex, \$matchingCase, sprintf('Failed asserting path [%s] matches gitignore patterns [%s] using regex [%s]', \$matchingCase, \$patterns, \$regex));
        }

        foreach (\$nonMatchingCases as \$nonMatchingCase) {
            \$this->assertNotRegExp(\$regex, \$nonMatchingCase, sprintf('Failed asserting path [%s] not matching gitignore patterns [%s] using regex [%s]', \$nonMatchingCase, \$patterns, \$regex));
        }
    }

    /**
     * @return array return is array of
     *               [
     *               [
     *               '', // Git-ignore Pattern
     *               [], // array of file paths matching
     *               [], // array of file paths not matching
     *               ],
     *               ]
     */
    public function provider()
    {
        return [
            [
                '
                    *
                    !/bin/bash
                ',
                ['bin/cat', 'abc/bin/cat'],
                ['bin/bash'],
            ],
            [
                'fi#le.txt',
                [],
                ['#file.txt'],
            ],
            [
                '
                /bin/
                /usr/local/
                !/bin/bash
                !/usr/local/bin/bash
                ',
                ['bin/cat'],
                ['bin/bash'],
            ],
            [
                '*.py[co]',
                ['file.pyc', 'file.pyc'],
                ['filexpyc', 'file.pycx', 'file.py'],
            ],
            [
                'dir1/**/dir2/',
                ['dir1/dirA/dir2/', 'dir1/dirA/dirB/dir2/'],
                [],
            ],
            [
                'dir1/*/dir2/',
                ['dir1/dirA/dir2/'],
                ['dir1/dirA/dirB/dir2/'],
            ],
            [
                '/*.php',
                ['file.php'],
                ['app/file.php'],
            ],
            [
                '\\#file.txt',
                ['#file.txt'],
                [],
            ],
            [
                '*.php',
                ['app/file.php', 'file.php'],
                ['file.phps', 'file.phps', 'filephps'],
            ],
            [
                'app/cache/',
                ['app/cache/file.txt', 'app/cache/dir1/dir2/file.txt', 'a/app/cache/file.txt'],
                [],
            ],
            [
                '
                #IamComment
                /app/cache/',
                ['app/cache/file.txt', 'app/cache/subdir/ile.txt'],
                ['a/app/cache/file.txt', '#IamComment', 'IamComment'],
            ],
            [
                '
                /app/cache/
                #LastLineIsComment',
                ['app/cache/file.txt', 'app/cache/subdir/ile.txt'],
                ['a/app/cache/file.txt', '#LastLineIsComment', 'LastLineIsComment'],
            ],
            [
                '
                /app/cache/
                \\#file.txt
                #LastLineIsComment',
                ['app/cache/file.txt', 'app/cache/subdir/ile.txt', '#file.txt'],
                ['a/app/cache/file.txt', '#LastLineIsComment', 'LastLineIsComment'],
            ],
            [
                '
                /app/cache/
                \\#file.txt
                #IamComment
                another_file.txt',
                ['app/cache/file.txt', 'app/cache/subdir/ile.txt', '#file.txt', 'another_file.txt'],
                ['a/app/cache/file.txt', 'IamComment', '#IamComment'],
            ],
        ];
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/finder/Tests/GitignoreTest.php";
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
use Symfony\\Component\\Finder\\Gitignore;

class GitignoreTest extends TestCase
{
    /**
     * @dataProvider provider
     */
    public function testCases(string \$patterns, array \$matchingCases, array \$nonMatchingCases)
    {
        \$regex = Gitignore::toRegex(\$patterns);

        foreach (\$matchingCases as \$matchingCase) {
            \$this->assertRegExp(\$regex, \$matchingCase, sprintf('Failed asserting path [%s] matches gitignore patterns [%s] using regex [%s]', \$matchingCase, \$patterns, \$regex));
        }

        foreach (\$nonMatchingCases as \$nonMatchingCase) {
            \$this->assertNotRegExp(\$regex, \$nonMatchingCase, sprintf('Failed asserting path [%s] not matching gitignore patterns [%s] using regex [%s]', \$nonMatchingCase, \$patterns, \$regex));
        }
    }

    /**
     * @return array return is array of
     *               [
     *               [
     *               '', // Git-ignore Pattern
     *               [], // array of file paths matching
     *               [], // array of file paths not matching
     *               ],
     *               ]
     */
    public function provider()
    {
        return [
            [
                '
                    *
                    !/bin/bash
                ',
                ['bin/cat', 'abc/bin/cat'],
                ['bin/bash'],
            ],
            [
                'fi#le.txt',
                [],
                ['#file.txt'],
            ],
            [
                '
                /bin/
                /usr/local/
                !/bin/bash
                !/usr/local/bin/bash
                ',
                ['bin/cat'],
                ['bin/bash'],
            ],
            [
                '*.py[co]',
                ['file.pyc', 'file.pyc'],
                ['filexpyc', 'file.pycx', 'file.py'],
            ],
            [
                'dir1/**/dir2/',
                ['dir1/dirA/dir2/', 'dir1/dirA/dirB/dir2/'],
                [],
            ],
            [
                'dir1/*/dir2/',
                ['dir1/dirA/dir2/'],
                ['dir1/dirA/dirB/dir2/'],
            ],
            [
                '/*.php',
                ['file.php'],
                ['app/file.php'],
            ],
            [
                '\\#file.txt',
                ['#file.txt'],
                [],
            ],
            [
                '*.php',
                ['app/file.php', 'file.php'],
                ['file.phps', 'file.phps', 'filephps'],
            ],
            [
                'app/cache/',
                ['app/cache/file.txt', 'app/cache/dir1/dir2/file.txt', 'a/app/cache/file.txt'],
                [],
            ],
            [
                '
                #IamComment
                /app/cache/',
                ['app/cache/file.txt', 'app/cache/subdir/ile.txt'],
                ['a/app/cache/file.txt', '#IamComment', 'IamComment'],
            ],
            [
                '
                /app/cache/
                #LastLineIsComment',
                ['app/cache/file.txt', 'app/cache/subdir/ile.txt'],
                ['a/app/cache/file.txt', '#LastLineIsComment', 'LastLineIsComment'],
            ],
            [
                '
                /app/cache/
                \\#file.txt
                #LastLineIsComment',
                ['app/cache/file.txt', 'app/cache/subdir/ile.txt', '#file.txt'],
                ['a/app/cache/file.txt', '#LastLineIsComment', 'LastLineIsComment'],
            ],
            [
                '
                /app/cache/
                \\#file.txt
                #IamComment
                another_file.txt',
                ['app/cache/file.txt', 'app/cache/subdir/ile.txt', '#file.txt', 'another_file.txt'],
                ['a/app/cache/file.txt', 'IamComment', '#IamComment'],
            ],
        ];
    }
}
", "vendor/symfony/finder/Tests/GitignoreTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/finder/Tests/GitignoreTest.php");
    }
}
