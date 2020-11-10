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

/* vendor/symfony/security-core/Tests/Authorization/Voter/VoterTest.php */
class __TwigTemplate_6570e0ae55472f946b6c819080d5ca38e0a99cb21107bff53c93fffdc408ed45 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/VoterTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Authorization/Voter/VoterTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authorization\\Voter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

class VoterTest extends TestCase
{
    protected \$token;

    protected function setUp(): void
    {
        \$this->token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
    }

    public function getTests()
    {
        return [
            [['EDIT'], VoterInterface::ACCESS_GRANTED, new \\stdClass(), 'ACCESS_GRANTED if attribute and class are supported and attribute grants access'],
            [['CREATE'], VoterInterface::ACCESS_DENIED, new \\stdClass(), 'ACCESS_DENIED if attribute and class are supported and attribute does not grant access'],

            [['DELETE', 'EDIT'], VoterInterface::ACCESS_GRANTED, new \\stdClass(), 'ACCESS_GRANTED if one attribute is supported and grants access'],
            [['DELETE', 'CREATE'], VoterInterface::ACCESS_DENIED, new \\stdClass(), 'ACCESS_DENIED if one attribute is supported and denies access'],

            [['CREATE', 'EDIT'], VoterInterface::ACCESS_GRANTED, new \\stdClass(), 'ACCESS_GRANTED if one attribute grants access'],

            [['DELETE'], VoterInterface::ACCESS_ABSTAIN, new \\stdClass(), 'ACCESS_ABSTAIN if no attribute is supported'],

            [['EDIT'], VoterInterface::ACCESS_ABSTAIN, \$this, 'ACCESS_ABSTAIN if class is not supported'],

            [['EDIT'], VoterInterface::ACCESS_ABSTAIN, null, 'ACCESS_ABSTAIN if object is null'],

            [[], VoterInterface::ACCESS_ABSTAIN, new \\stdClass(), 'ACCESS_ABSTAIN if no attributes were provided'],
        ];
    }

    /**
     * @dataProvider getTests
     */
    public function testVote(array \$attributes, \$expectedVote, \$object, \$message)
    {
        \$voter = new VoterTest_Voter();

        \$this->assertEquals(\$expectedVote, \$voter->vote(\$this->token, \$object, \$attributes), \$message);
    }
}

class VoterTest_Voter extends Voter
{
    protected function voteOnAttribute(\$attribute, \$object, TokenInterface \$token)
    {
        return 'EDIT' === \$attribute;
    }

    protected function supports(\$attribute, \$object)
    {
        return \$object instanceof \\stdClass && \\in_array(\$attribute, ['EDIT', 'CREATE']);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Authorization/Voter/VoterTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Authorization\\Voter;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\Voter;
use Symfony\\Component\\Security\\Core\\Authorization\\Voter\\VoterInterface;

class VoterTest extends TestCase
{
    protected \$token;

    protected function setUp(): void
    {
        \$this->token = \$this->getMockBuilder('Symfony\\Component\\Security\\Core\\Authentication\\Token\\TokenInterface')->getMock();
    }

    public function getTests()
    {
        return [
            [['EDIT'], VoterInterface::ACCESS_GRANTED, new \\stdClass(), 'ACCESS_GRANTED if attribute and class are supported and attribute grants access'],
            [['CREATE'], VoterInterface::ACCESS_DENIED, new \\stdClass(), 'ACCESS_DENIED if attribute and class are supported and attribute does not grant access'],

            [['DELETE', 'EDIT'], VoterInterface::ACCESS_GRANTED, new \\stdClass(), 'ACCESS_GRANTED if one attribute is supported and grants access'],
            [['DELETE', 'CREATE'], VoterInterface::ACCESS_DENIED, new \\stdClass(), 'ACCESS_DENIED if one attribute is supported and denies access'],

            [['CREATE', 'EDIT'], VoterInterface::ACCESS_GRANTED, new \\stdClass(), 'ACCESS_GRANTED if one attribute grants access'],

            [['DELETE'], VoterInterface::ACCESS_ABSTAIN, new \\stdClass(), 'ACCESS_ABSTAIN if no attribute is supported'],

            [['EDIT'], VoterInterface::ACCESS_ABSTAIN, \$this, 'ACCESS_ABSTAIN if class is not supported'],

            [['EDIT'], VoterInterface::ACCESS_ABSTAIN, null, 'ACCESS_ABSTAIN if object is null'],

            [[], VoterInterface::ACCESS_ABSTAIN, new \\stdClass(), 'ACCESS_ABSTAIN if no attributes were provided'],
        ];
    }

    /**
     * @dataProvider getTests
     */
    public function testVote(array \$attributes, \$expectedVote, \$object, \$message)
    {
        \$voter = new VoterTest_Voter();

        \$this->assertEquals(\$expectedVote, \$voter->vote(\$this->token, \$object, \$attributes), \$message);
    }
}

class VoterTest_Voter extends Voter
{
    protected function voteOnAttribute(\$attribute, \$object, TokenInterface \$token)
    {
        return 'EDIT' === \$attribute;
    }

    protected function supports(\$attribute, \$object)
    {
        return \$object instanceof \\stdClass && \\in_array(\$attribute, ['EDIT', 'CREATE']);
    }
}
", "vendor/symfony/security-core/Tests/Authorization/Voter/VoterTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Authorization/Voter/VoterTest.php");
    }
}
