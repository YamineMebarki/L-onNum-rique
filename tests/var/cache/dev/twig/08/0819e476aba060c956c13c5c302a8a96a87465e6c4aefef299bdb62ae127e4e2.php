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

/* vendor/symfony/var-dumper/Tests/Caster/CasterTest.php */
class __TwigTemplate_14f4d9d3ee2d0f178cb60c11f4802148097b7e8a7366141f19817a28429a8df1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/CasterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Caster/CasterTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Caster\\Caster;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CasterTest extends TestCase
{
    use VarDumperTestTrait;

    private \$referenceArray = [
        'null' => null,
        'empty' => false,
        'public' => 'pub',
        \"\\0~\\0virtual\" => 'virt',
        \"\\0+\\0dynamic\" => 'dyn',
        \"\\0*\\0protected\" => 'prot',
        \"\\0Foo\\0private\" => 'priv',
    ];

    /**
     * @dataProvider provideFilter
     */
    public function testFilter(\$filter, \$expectedDiff, \$listedProperties = null)
    {
        if (null === \$listedProperties) {
            \$filteredArray = Caster::filter(\$this->referenceArray, \$filter);
        } else {
            \$filteredArray = Caster::filter(\$this->referenceArray, \$filter, \$listedProperties);
        }

        \$this->assertSame(\$expectedDiff, array_diff_assoc(\$this->referenceArray, \$filteredArray));
    }

    public function provideFilter()
    {
        return [
            [
                0,
                [],
            ],
            [
                Caster::EXCLUDE_PUBLIC,
                [
                    'null' => null,
                    'empty' => false,
                    'public' => 'pub',
                ],
            ],
            [
                Caster::EXCLUDE_NULL,
                [
                    'null' => null,
                ],
            ],
            [
                Caster::EXCLUDE_EMPTY,
                [
                    'null' => null,
                    'empty' => false,
                ],
            ],
            [
                Caster::EXCLUDE_VIRTUAL,
                [
                    \"\\0~\\0virtual\" => 'virt',
                ],
            ],
            [
                Caster::EXCLUDE_DYNAMIC,
                [
                    \"\\0+\\0dynamic\" => 'dyn',
                ],
            ],
            [
                Caster::EXCLUDE_PROTECTED,
                [
                    \"\\0*\\0protected\" => 'prot',
                ],
            ],
            [
                Caster::EXCLUDE_PRIVATE,
                [
                    \"\\0Foo\\0private\" => 'priv',
                ],
            ],
            [
                Caster::EXCLUDE_VERBOSE,
                [
                    'public' => 'pub',
                    \"\\0*\\0protected\" => 'prot',
                ],
                ['public', \"\\0*\\0protected\"],
            ],
            [
                Caster::EXCLUDE_NOT_IMPORTANT,
                [
                    'null' => null,
                    'empty' => false,
                    \"\\0~\\0virtual\" => 'virt',
                    \"\\0+\\0dynamic\" => 'dyn',
                    \"\\0Foo\\0private\" => 'priv',
                ],
                ['public', \"\\0*\\0protected\"],
            ],
            [
                Caster::EXCLUDE_VIRTUAL | Caster::EXCLUDE_DYNAMIC,
                [
                    \"\\0~\\0virtual\" => 'virt',
                    \"\\0+\\0dynamic\" => 'dyn',
                ],
            ],
            [
                Caster::EXCLUDE_NOT_IMPORTANT | Caster::EXCLUDE_VERBOSE,
                \$this->referenceArray,
                ['public', \"\\0*\\0protected\"],
            ],
            [
                Caster::EXCLUDE_NOT_IMPORTANT | Caster::EXCLUDE_EMPTY,
                [
                    'null' => null,
                    'empty' => false,
                    \"\\0~\\0virtual\" => 'virt',
                    \"\\0+\\0dynamic\" => 'dyn',
                    \"\\0*\\0protected\" => 'prot',
                    \"\\0Foo\\0private\" => 'priv',
                ],
                ['public', 'empty'],
            ],
            [
                Caster::EXCLUDE_VERBOSE | Caster::EXCLUDE_EMPTY | Caster::EXCLUDE_STRICT,
                [
                    'empty' => false,
                ],
                ['public', 'empty'],
            ],
        ];
    }

    public function testAnonymousClass()
    {
        \$c = eval('return new class extends stdClass { private \$foo = \"foo\"; };');

        \$this->assertDumpMatchesFormat(
            <<<'EOTXT'
stdClass@anonymous {
  -foo: \"foo\"
}
EOTXT
            , \$c
        );

        \$c = eval('return new class { private \$foo = \"foo\"; };');

        \$this->assertDumpMatchesFormat(
            <<<'EOTXT'
@anonymous {
  -foo: \"foo\"
}
EOTXT
            , \$c
        );
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Caster/CasterTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Caster;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Caster\\Caster;
use Symfony\\Component\\VarDumper\\Test\\VarDumperTestTrait;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class CasterTest extends TestCase
{
    use VarDumperTestTrait;

    private \$referenceArray = [
        'null' => null,
        'empty' => false,
        'public' => 'pub',
        \"\\0~\\0virtual\" => 'virt',
        \"\\0+\\0dynamic\" => 'dyn',
        \"\\0*\\0protected\" => 'prot',
        \"\\0Foo\\0private\" => 'priv',
    ];

    /**
     * @dataProvider provideFilter
     */
    public function testFilter(\$filter, \$expectedDiff, \$listedProperties = null)
    {
        if (null === \$listedProperties) {
            \$filteredArray = Caster::filter(\$this->referenceArray, \$filter);
        } else {
            \$filteredArray = Caster::filter(\$this->referenceArray, \$filter, \$listedProperties);
        }

        \$this->assertSame(\$expectedDiff, array_diff_assoc(\$this->referenceArray, \$filteredArray));
    }

    public function provideFilter()
    {
        return [
            [
                0,
                [],
            ],
            [
                Caster::EXCLUDE_PUBLIC,
                [
                    'null' => null,
                    'empty' => false,
                    'public' => 'pub',
                ],
            ],
            [
                Caster::EXCLUDE_NULL,
                [
                    'null' => null,
                ],
            ],
            [
                Caster::EXCLUDE_EMPTY,
                [
                    'null' => null,
                    'empty' => false,
                ],
            ],
            [
                Caster::EXCLUDE_VIRTUAL,
                [
                    \"\\0~\\0virtual\" => 'virt',
                ],
            ],
            [
                Caster::EXCLUDE_DYNAMIC,
                [
                    \"\\0+\\0dynamic\" => 'dyn',
                ],
            ],
            [
                Caster::EXCLUDE_PROTECTED,
                [
                    \"\\0*\\0protected\" => 'prot',
                ],
            ],
            [
                Caster::EXCLUDE_PRIVATE,
                [
                    \"\\0Foo\\0private\" => 'priv',
                ],
            ],
            [
                Caster::EXCLUDE_VERBOSE,
                [
                    'public' => 'pub',
                    \"\\0*\\0protected\" => 'prot',
                ],
                ['public', \"\\0*\\0protected\"],
            ],
            [
                Caster::EXCLUDE_NOT_IMPORTANT,
                [
                    'null' => null,
                    'empty' => false,
                    \"\\0~\\0virtual\" => 'virt',
                    \"\\0+\\0dynamic\" => 'dyn',
                    \"\\0Foo\\0private\" => 'priv',
                ],
                ['public', \"\\0*\\0protected\"],
            ],
            [
                Caster::EXCLUDE_VIRTUAL | Caster::EXCLUDE_DYNAMIC,
                [
                    \"\\0~\\0virtual\" => 'virt',
                    \"\\0+\\0dynamic\" => 'dyn',
                ],
            ],
            [
                Caster::EXCLUDE_NOT_IMPORTANT | Caster::EXCLUDE_VERBOSE,
                \$this->referenceArray,
                ['public', \"\\0*\\0protected\"],
            ],
            [
                Caster::EXCLUDE_NOT_IMPORTANT | Caster::EXCLUDE_EMPTY,
                [
                    'null' => null,
                    'empty' => false,
                    \"\\0~\\0virtual\" => 'virt',
                    \"\\0+\\0dynamic\" => 'dyn',
                    \"\\0*\\0protected\" => 'prot',
                    \"\\0Foo\\0private\" => 'priv',
                ],
                ['public', 'empty'],
            ],
            [
                Caster::EXCLUDE_VERBOSE | Caster::EXCLUDE_EMPTY | Caster::EXCLUDE_STRICT,
                [
                    'empty' => false,
                ],
                ['public', 'empty'],
            ],
        ];
    }

    public function testAnonymousClass()
    {
        \$c = eval('return new class extends stdClass { private \$foo = \"foo\"; };');

        \$this->assertDumpMatchesFormat(
            <<<'EOTXT'
stdClass@anonymous {
  -foo: \"foo\"
}
EOTXT
            , \$c
        );

        \$c = eval('return new class { private \$foo = \"foo\"; };');

        \$this->assertDumpMatchesFormat(
            <<<'EOTXT'
@anonymous {
  -foo: \"foo\"
}
EOTXT
            , \$c
        );
    }
}
", "vendor/symfony/var-dumper/Tests/Caster/CasterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Caster/CasterTest.php");
    }
}
