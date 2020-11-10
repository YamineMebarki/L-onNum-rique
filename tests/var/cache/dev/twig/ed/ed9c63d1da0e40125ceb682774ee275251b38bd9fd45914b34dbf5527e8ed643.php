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

/* vendor/symfony/security-core/Tests/Role/RoleHierarchyTest.php */
class __TwigTemplate_05944211ad6f600b0705525169f044501440aa5e26dc77cb915d426d42a572ed extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Role/RoleHierarchyTest.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/security-core/Tests/Role/RoleHierarchyTest.php"));

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

namespace Symfony\\Component\\Security\\Core\\Tests\\Role;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Role\\Role;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy;

class RoleHierarchyTest extends TestCase
{
    /**
     * @group legacy
     */
    public function testGetReachableRoles()
    {
        \$role = new RoleHierarchy([
            'ROLE_ADMIN' => ['ROLE_USER'],
            'ROLE_SUPER_ADMIN' => ['ROLE_ADMIN', 'ROLE_FOO'],
        ]);

        \$this->assertEquals([new Role('ROLE_USER')], \$role->getReachableRoles([new Role('ROLE_USER')]));
        \$this->assertEquals([new Role('ROLE_FOO')], \$role->getReachableRoles([new Role('ROLE_FOO')]));
        \$this->assertEquals([new Role('ROLE_ADMIN'), new Role('ROLE_USER')], \$role->getReachableRoles([new Role('ROLE_ADMIN')]));
        \$this->assertEquals([new Role('ROLE_FOO'), new Role('ROLE_ADMIN'), new Role('ROLE_USER')], \$role->getReachableRoles([new Role('ROLE_FOO'), new Role('ROLE_ADMIN')]));
        \$this->assertEquals([new Role('ROLE_SUPER_ADMIN'), new Role('ROLE_ADMIN'), new Role('ROLE_FOO'), new Role('ROLE_USER')], \$role->getReachableRoles([new Role('ROLE_SUPER_ADMIN')]));
    }

    public function testGetReachableRoleNames()
    {
        \$role = new RoleHierarchy([
            'ROLE_ADMIN' => ['ROLE_USER'],
            'ROLE_SUPER_ADMIN' => ['ROLE_ADMIN', 'ROLE_FOO'],
        ]);

        \$this->assertEquals(['ROLE_USER'], \$role->getReachableRoleNames(['ROLE_USER']));
        \$this->assertEquals(['ROLE_FOO'], \$role->getReachableRoleNames(['ROLE_FOO']));
        \$this->assertEquals(['ROLE_ADMIN', 'ROLE_USER'], \$role->getReachableRoleNames(['ROLE_ADMIN']));
        \$this->assertEquals(['ROLE_FOO', 'ROLE_ADMIN', 'ROLE_USER'], \$role->getReachableRoleNames(['ROLE_FOO', 'ROLE_ADMIN']));
        \$this->assertEquals(['ROLE_SUPER_ADMIN', 'ROLE_ADMIN', 'ROLE_FOO', 'ROLE_USER'], \$role->getReachableRoleNames(['ROLE_SUPER_ADMIN']));
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/security-core/Tests/Role/RoleHierarchyTest.php";
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

namespace Symfony\\Component\\Security\\Core\\Tests\\Role;

use PHPUnit\\Framework\\TestCase;
use Symfony\\Component\\Security\\Core\\Role\\Role;
use Symfony\\Component\\Security\\Core\\Role\\RoleHierarchy;

class RoleHierarchyTest extends TestCase
{
    /**
     * @group legacy
     */
    public function testGetReachableRoles()
    {
        \$role = new RoleHierarchy([
            'ROLE_ADMIN' => ['ROLE_USER'],
            'ROLE_SUPER_ADMIN' => ['ROLE_ADMIN', 'ROLE_FOO'],
        ]);

        \$this->assertEquals([new Role('ROLE_USER')], \$role->getReachableRoles([new Role('ROLE_USER')]));
        \$this->assertEquals([new Role('ROLE_FOO')], \$role->getReachableRoles([new Role('ROLE_FOO')]));
        \$this->assertEquals([new Role('ROLE_ADMIN'), new Role('ROLE_USER')], \$role->getReachableRoles([new Role('ROLE_ADMIN')]));
        \$this->assertEquals([new Role('ROLE_FOO'), new Role('ROLE_ADMIN'), new Role('ROLE_USER')], \$role->getReachableRoles([new Role('ROLE_FOO'), new Role('ROLE_ADMIN')]));
        \$this->assertEquals([new Role('ROLE_SUPER_ADMIN'), new Role('ROLE_ADMIN'), new Role('ROLE_FOO'), new Role('ROLE_USER')], \$role->getReachableRoles([new Role('ROLE_SUPER_ADMIN')]));
    }

    public function testGetReachableRoleNames()
    {
        \$role = new RoleHierarchy([
            'ROLE_ADMIN' => ['ROLE_USER'],
            'ROLE_SUPER_ADMIN' => ['ROLE_ADMIN', 'ROLE_FOO'],
        ]);

        \$this->assertEquals(['ROLE_USER'], \$role->getReachableRoleNames(['ROLE_USER']));
        \$this->assertEquals(['ROLE_FOO'], \$role->getReachableRoleNames(['ROLE_FOO']));
        \$this->assertEquals(['ROLE_ADMIN', 'ROLE_USER'], \$role->getReachableRoleNames(['ROLE_ADMIN']));
        \$this->assertEquals(['ROLE_FOO', 'ROLE_ADMIN', 'ROLE_USER'], \$role->getReachableRoleNames(['ROLE_FOO', 'ROLE_ADMIN']));
        \$this->assertEquals(['ROLE_SUPER_ADMIN', 'ROLE_ADMIN', 'ROLE_FOO', 'ROLE_USER'], \$role->getReachableRoleNames(['ROLE_SUPER_ADMIN']));
    }
}
", "vendor/symfony/security-core/Tests/Role/RoleHierarchyTest.php", "/var/www/public/DevLaon/templates/vendor/symfony/security-core/Tests/Role/RoleHierarchyTest.php");
    }
}
