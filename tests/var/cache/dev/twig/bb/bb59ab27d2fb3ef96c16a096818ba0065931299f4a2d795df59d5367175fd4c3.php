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

/* vendor/symfony/var-dumper/Tests/Cloner/VarClonerTest.php */
class __TwigTemplate_580833157af93c13b679aa8e0d8d46266fde171eb21157e2ae17a3c2ff115142 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Cloner/VarClonerTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/var-dumper/Tests/Cloner/VarClonerTest.php"));

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

namespace Symfony\\Component\\VarDumper\\Tests\\Cloner;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Tests\\Fixtures\\Php74;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class VarClonerTest extends TestCase
{
    public function testMaxIntBoundary()
    {
        \$data = [PHP_INT_MAX => 123];

        \$cloner = new VarCloner();
        \$clone = \$cloner->cloneVar(\$data);

        \$expected = <<<EOTXT
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [1] => 1
                        )

                )

            [1] => Array
                (
                    [%s] => 123
                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertSame(sprintf(\$expected, PHP_INT_MAX), print_r(\$clone, true));
    }

    public function testClone()
    {
        \$json = json_decode('{\"1\":{\"var\":\"val\"},\"2\":{\"var\":\"val\"}}');

        \$cloner = new VarCloner();
        \$clone = \$cloner->cloneVar(\$json);

        \$expected = <<<EOTXT
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => stdClass
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 1
                            [attr] => Array
                                (
                                )

                        )

                )

            [1] => Array
                (
                    [\\000+\\0001] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => stdClass
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 2
                            [attr] => Array
                                (
                                )

                        )

                    [\\000+\\0002] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => stdClass
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 3
                            [attr] => Array
                                (
                                )

                        )

                )

            [2] => Array
                (
                    [\\000+\\000var] => val
                )

            [3] => Array
                (
                    [\\000+\\000var] => val
                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertStringMatchesFormat(\$expected, print_r(\$clone, true));
    }

    public function testLimits()
    {
        // Level 0:
        \$data = [
            // Level 1:
            [
                // Level 2:
                [
                    // Level 3:
                    'Level 3 Item 0',
                    'Level 3 Item 1',
                    'Level 3 Item 2',
                    'Level 3 Item 3',
                ],
                [
                    'Level 3 Item 4',
                    'Level 3 Item 5',
                    'Level 3 Item 6',
                ],
                [
                    'Level 3 Item 7',
                ],
            ],
            [
                [
                    'Level 3 Item 8',
                ],
                'Level 2 Item 0',
            ],
            [
                'Level 2 Item 1',
            ],
            'Level 1 Item 0',
            [
                // DevLaon setMaxString:
                'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                'SHORT',
            ],
        ];

        \$cloner = new VarCloner();
        \$cloner->setMinDepth(2);
        \$cloner->setMaxItems(5);
        \$cloner->setMaxString(20);
        \$clone = \$cloner->cloneVar(\$data);

        \$expected = <<<EOTXT
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [2] => 1
                        )

                )

            [1] => Array
                (
                    [0] => Array
                        (
                            [2] => 2
                        )

                    [1] => Array
                        (
                            [2] => 3
                        )

                    [2] => Array
                        (
                            [2] => 4
                        )

                    [3] => Level 1 Item 0
                    [4] => Array
                        (
                            [2] => 5
                        )

                )

            [2] => Array
                (
                    [0] => Array
                        (
                            [2] => 6
                        )

                    [1] => Array
                        (
                            [0] => 2
                            [2] => 7
                        )

                    [2] => Array
                        (
                            [0] => 1
                            [2] => 0
                        )

                )

            [3] => Array
                (
                    [0] => Array
                        (
                            [0] => 1
                            [2] => 0
                        )

                    [1] => Level 2 Item 0
                )

            [4] => Array
                (
                    [0] => Level 2 Item 1
                )

            [5] => Array
                (
                    [0] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 2
                            [class] => 2
                            [value] => ABCDEFGHIJKLMNOPQRST
                            [cut] => 6
                            [handle] => 0
                            [refCount] => 0
                            [position] => 0
                            [attr] => Array
                                (
                                )

                        )

                    [1] => SHORT
                )

            [6] => Array
                (
                    [0] => Level 3 Item 0
                    [1] => Level 3 Item 1
                    [2] => Level 3 Item 2
                    [3] => Level 3 Item 3
                )

            [7] => Array
                (
                    [0] => Level 3 Item 4
                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertStringMatchesFormat(\$expected, print_r(\$clone, true));
    }

    public function testJsonCast()
    {
        if (2 == ini_get('xdebug.overload_var_dump')) {
            \$this->markTestSkipped('xdebug is active');
        }

        \$data = (array) json_decode('{\"1\":{}}');

        \$cloner = new VarCloner();
        \$clone = \$cloner->cloneVar(\$data);

        \$expected = <<<'EOTXT'
object(Symfony\\Component\\VarDumper\\Cloner\\Data)#%i (6) {
  [\"data\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  array(2) {
    [0]=>
    array(1) {
      [0]=>
      array(1) {
        [1]=>
        int(1)
      }
    }
    [1]=>
    array(1) {
      [\"1\"]=>
      object(Symfony\\Component\\VarDumper\\Cloner\\Stub)#%i (8) {
        [\"type\"]=>
        int(4)
        [\"class\"]=>
        string(8) \"stdClass\"
        [\"value\"]=>
        NULL
        [\"cut\"]=>
        int(0)
        [\"handle\"]=>
        int(%i)
        [\"refCount\"]=>
        int(0)
        [\"position\"]=>
        int(0)
        [\"attr\"]=>
        array(0) {
        }
      }
    }
  }
  [\"position\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(0)
  [\"key\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(0)
  [\"maxDepth\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(20)
  [\"maxItemsPerDepth\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(-1)
  [\"useRefHandles\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(-1)
}

EOTXT;
        ob_start();
        var_dump(\$clone);
        \$this->assertStringMatchesFormat(\\PHP_VERSION_ID >= 70200 ? str_replace('\"1\"', '1', \$expected) : \$expected, ob_get_clean());
    }

    public function testCaster()
    {
        \$cloner = new VarCloner([
            '*' => function (\$obj, \$array) {
                return ['foo' => 123];
            },
            __CLASS__ => function (\$obj, \$array) {
                ++\$array['foo'];

                return \$array;
            },
        ]);
        \$clone = \$cloner->cloneVar(\$this);

        \$expected = <<<EOTXT
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => %s
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 1
                            [attr] => Array
                                (
                                    [file] => %a%eVarClonerTest.php
                                    [line] => 21
                                )

                        )

                )

            [1] => Array
                (
                    [foo] => 124
                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertStringMatchesFormat(\$expected, print_r(\$clone, true));
    }

    /**
     * @requires PHP 7.4
     */
    public function testPhp74()
    {
        \$data = new Php74();

        \$cloner = new VarCloner();
        \$clone = \$cloner->cloneVar(\$data);

        \$expected = <<<'EOTXT'
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => Symfony\\Component\\VarDumper\\Tests\\Fixtures\\Php74
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 1
                            [attr] => Array
                                (
                                    [file] => %s
                                    [line] => 5
                                )

                        )

                )

            [1] => Array
                (
                    [p1] => 123
                    [p2] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => stdClass
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 0
                            [attr] => Array
                                (
                                )

                        )

                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertStringMatchesFormat(\$expected, print_r(\$clone, true));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/var-dumper/Tests/Cloner/VarClonerTest.php";
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

namespace Symfony\\Component\\VarDumper\\Tests\\Cloner;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\VarDumper\\Cloner\\VarCloner;
use Symfony\\Component\\VarDumper\\Tests\\Fixtures\\Php74;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class VarClonerTest extends TestCase
{
    public function testMaxIntBoundary()
    {
        \$data = [PHP_INT_MAX => 123];

        \$cloner = new VarCloner();
        \$clone = \$cloner->cloneVar(\$data);

        \$expected = <<<EOTXT
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [1] => 1
                        )

                )

            [1] => Array
                (
                    [%s] => 123
                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertSame(sprintf(\$expected, PHP_INT_MAX), print_r(\$clone, true));
    }

    public function testClone()
    {
        \$json = json_decode('{\"1\":{\"var\":\"val\"},\"2\":{\"var\":\"val\"}}');

        \$cloner = new VarCloner();
        \$clone = \$cloner->cloneVar(\$json);

        \$expected = <<<EOTXT
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => stdClass
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 1
                            [attr] => Array
                                (
                                )

                        )

                )

            [1] => Array
                (
                    [\\000+\\0001] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => stdClass
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 2
                            [attr] => Array
                                (
                                )

                        )

                    [\\000+\\0002] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => stdClass
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 3
                            [attr] => Array
                                (
                                )

                        )

                )

            [2] => Array
                (
                    [\\000+\\000var] => val
                )

            [3] => Array
                (
                    [\\000+\\000var] => val
                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertStringMatchesFormat(\$expected, print_r(\$clone, true));
    }

    public function testLimits()
    {
        // Level 0:
        \$data = [
            // Level 1:
            [
                // Level 2:
                [
                    // Level 3:
                    'Level 3 Item 0',
                    'Level 3 Item 1',
                    'Level 3 Item 2',
                    'Level 3 Item 3',
                ],
                [
                    'Level 3 Item 4',
                    'Level 3 Item 5',
                    'Level 3 Item 6',
                ],
                [
                    'Level 3 Item 7',
                ],
            ],
            [
                [
                    'Level 3 Item 8',
                ],
                'Level 2 Item 0',
            ],
            [
                'Level 2 Item 1',
            ],
            'Level 1 Item 0',
            [
                // DevLaon setMaxString:
                'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
                'SHORT',
            ],
        ];

        \$cloner = new VarCloner();
        \$cloner->setMinDepth(2);
        \$cloner->setMaxItems(5);
        \$cloner->setMaxString(20);
        \$clone = \$cloner->cloneVar(\$data);

        \$expected = <<<EOTXT
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Array
                        (
                            [2] => 1
                        )

                )

            [1] => Array
                (
                    [0] => Array
                        (
                            [2] => 2
                        )

                    [1] => Array
                        (
                            [2] => 3
                        )

                    [2] => Array
                        (
                            [2] => 4
                        )

                    [3] => Level 1 Item 0
                    [4] => Array
                        (
                            [2] => 5
                        )

                )

            [2] => Array
                (
                    [0] => Array
                        (
                            [2] => 6
                        )

                    [1] => Array
                        (
                            [0] => 2
                            [2] => 7
                        )

                    [2] => Array
                        (
                            [0] => 1
                            [2] => 0
                        )

                )

            [3] => Array
                (
                    [0] => Array
                        (
                            [0] => 1
                            [2] => 0
                        )

                    [1] => Level 2 Item 0
                )

            [4] => Array
                (
                    [0] => Level 2 Item 1
                )

            [5] => Array
                (
                    [0] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 2
                            [class] => 2
                            [value] => ABCDEFGHIJKLMNOPQRST
                            [cut] => 6
                            [handle] => 0
                            [refCount] => 0
                            [position] => 0
                            [attr] => Array
                                (
                                )

                        )

                    [1] => SHORT
                )

            [6] => Array
                (
                    [0] => Level 3 Item 0
                    [1] => Level 3 Item 1
                    [2] => Level 3 Item 2
                    [3] => Level 3 Item 3
                )

            [7] => Array
                (
                    [0] => Level 3 Item 4
                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertStringMatchesFormat(\$expected, print_r(\$clone, true));
    }

    public function testJsonCast()
    {
        if (2 == ini_get('xdebug.overload_var_dump')) {
            \$this->markTestSkipped('xdebug is active');
        }

        \$data = (array) json_decode('{\"1\":{}}');

        \$cloner = new VarCloner();
        \$clone = \$cloner->cloneVar(\$data);

        \$expected = <<<'EOTXT'
object(Symfony\\Component\\VarDumper\\Cloner\\Data)#%i (6) {
  [\"data\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  array(2) {
    [0]=>
    array(1) {
      [0]=>
      array(1) {
        [1]=>
        int(1)
      }
    }
    [1]=>
    array(1) {
      [\"1\"]=>
      object(Symfony\\Component\\VarDumper\\Cloner\\Stub)#%i (8) {
        [\"type\"]=>
        int(4)
        [\"class\"]=>
        string(8) \"stdClass\"
        [\"value\"]=>
        NULL
        [\"cut\"]=>
        int(0)
        [\"handle\"]=>
        int(%i)
        [\"refCount\"]=>
        int(0)
        [\"position\"]=>
        int(0)
        [\"attr\"]=>
        array(0) {
        }
      }
    }
  }
  [\"position\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(0)
  [\"key\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(0)
  [\"maxDepth\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(20)
  [\"maxItemsPerDepth\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(-1)
  [\"useRefHandles\":\"Symfony\\Component\\VarDumper\\Cloner\\Data\":private]=>
  int(-1)
}

EOTXT;
        ob_start();
        var_dump(\$clone);
        \$this->assertStringMatchesFormat(\\PHP_VERSION_ID >= 70200 ? str_replace('\"1\"', '1', \$expected) : \$expected, ob_get_clean());
    }

    public function testCaster()
    {
        \$cloner = new VarCloner([
            '*' => function (\$obj, \$array) {
                return ['foo' => 123];
            },
            __CLASS__ => function (\$obj, \$array) {
                ++\$array['foo'];

                return \$array;
            },
        ]);
        \$clone = \$cloner->cloneVar(\$this);

        \$expected = <<<EOTXT
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => %s
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 1
                            [attr] => Array
                                (
                                    [file] => %a%eVarClonerTest.php
                                    [line] => 21
                                )

                        )

                )

            [1] => Array
                (
                    [foo] => 124
                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertStringMatchesFormat(\$expected, print_r(\$clone, true));
    }

    /**
     * @requires PHP 7.4
     */
    public function testPhp74()
    {
        \$data = new Php74();

        \$cloner = new VarCloner();
        \$clone = \$cloner->cloneVar(\$data);

        \$expected = <<<'EOTXT'
Symfony\\Component\\VarDumper\\Cloner\\Data Object
(
    [data:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => Array
        (
            [0] => Array
                (
                    [0] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => Symfony\\Component\\VarDumper\\Tests\\Fixtures\\Php74
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 1
                            [attr] => Array
                                (
                                    [file] => %s
                                    [line] => 5
                                )

                        )

                )

            [1] => Array
                (
                    [p1] => 123
                    [p2] => Symfony\\Component\\VarDumper\\Cloner\\Stub Object
                        (
                            [type] => 4
                            [class] => stdClass
                            [value] => 
                            [cut] => 0
                            [handle] => %i
                            [refCount] => 0
                            [position] => 0
                            [attr] => Array
                                (
                                )

                        )

                )

        )

    [position:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [key:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 0
    [maxDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => 20
    [maxItemsPerDepth:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
    [useRefHandles:Symfony\\Component\\VarDumper\\Cloner\\Data:private] => -1
)

EOTXT;
        \$this->assertStringMatchesFormat(\$expected, print_r(\$clone, true));
    }
}
", "vendor/symfony/var-dumper/Tests/Cloner/VarClonerTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/var-dumper/Tests/Cloner/VarClonerTest.php");
    }
}
