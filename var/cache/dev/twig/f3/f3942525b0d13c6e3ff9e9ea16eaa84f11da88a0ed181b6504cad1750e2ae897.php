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

/* vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php */
class __TwigTemplate_a0e81e796b1cc12f6e1255121a666d6f98192ad89af82684d85345ef4538a029 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php"));

        // line 1
        echo "<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Security;

use PhpParser\\Node;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassSourceManipulator;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Adds logic to implement UserInterface to an existing User class.
 *
 * @internal
 */
final class UserClassBuilder
{
    public function addUserInterfaceImplementation(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        \$manipulator->addInterface(UserInterface::class);

        \$this->addGetUsername(\$manipulator, \$userClassConfig);

        \$this->addGetRoles(\$manipulator, \$userClassConfig);

        \$this->addGetPassword(\$manipulator, \$userClassConfig);

        \$this->addGetSalt(\$manipulator, \$userClassConfig);

        \$this->addEraseCredentials(\$manipulator, \$userClassConfig);
    }

    private function addGetUsername(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        if (\$userClassConfig->isEntity()) {
            // add entity property
            \$manipulator->addEntityField(
                \$userClassConfig->getIdentityPropertyName(),
                [
                    'type' => 'string',
                    // https://github.com/FriendsOfSymfony/FOSUserBundle/issues/1919
                    'length' => 180,
                    'unique' => true,
                ]
            );
        } else {
            // add normal property
            \$manipulator->addProperty(\$userClassConfig->getIdentityPropertyName());

            \$manipulator->addGetter(
                \$userClassConfig->getIdentityPropertyName(),
                'string',
                true
            );

            \$manipulator->addSetter(
                \$userClassConfig->getIdentityPropertyName(),
                'string',
                false
            );
        }

        // define getUsername (if it was defined above, this will override)
        \$manipulator->addAccessorMethod(
            \$userClassConfig->getIdentityPropertyName(),
            'getUsername',
            'string',
            false,
            [
                'A visual identifier that represents this user.',
                '',
                '@see UserInterface',
            ],
            true
        );
    }

    private function addGetRoles(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        if (\$userClassConfig->isEntity()) {
            // add entity property
            \$manipulator->addEntityField(
                'roles',
                [
                    'type' => 'json',
                ]
            );
        } else {
            // add normal property
            \$manipulator->addProperty(
                'roles',
                [],
                new Node\\Expr\\Array_([], ['kind' => Node\\Expr\\Array_::KIND_SHORT])
            );

            \$manipulator->addGetter(
                'roles',
                'array',
                false
            );

            \$manipulator->addSetter(
                'roles',
                'array',
                false
            );
        }

        // define getRoles (if it was defined above, this will override)
        \$builder = \$manipulator->createMethodBuilder(
            'getRoles',
            'array',
            false,
            ['@see UserInterface']
        );

        // \$roles = \$this->roles
        \$builder->addStmt(
            new Node\\Stmt\\Expression(new Node\\Expr\\Assign(
                new Node\\Expr\\Variable('roles'),
                new Node\\Expr\\PropertyFetch(new Node\\Expr\\Variable('this'), 'roles')
            ))
        );
        // comment line
        \$builder->addStmt(
            \$manipulator->createMethodLevelCommentNode(
                'guarantee every user at least has ROLE_USER'
            )
        );
        // \$roles[] = 'ROLE_USER';
        \$builder->addStmt(
            new Node\\Stmt\\Expression(
                new Node\\Expr\\Assign(
                    new Node\\Expr\\ArrayDimFetch(
                        new Node\\Expr\\Variable('roles')
                    ),
                    new Node\\Scalar\\String_('ROLE_USER')
                )
            )
        );
        \$builder->addStmt(\$manipulator->createMethodLevelBlankLine());
        // return array_unique(\$roles);
        \$builder->addStmt(
            new Node\\Stmt\\Return_(
                new Node\\Expr\\FuncCall(
                    new Node\\Name('array_unique'),
                    [new Node\\Expr\\Variable('roles')]
                )
            )
        );

        \$manipulator->addMethodBuilder(\$builder);
    }

    private function addGetPassword(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        if (!\$userClassConfig->hasPassword()) {
            // add an empty method only
            \$builder = \$manipulator->createMethodBuilder(
                'getPassword',
                null,
                false,
                ['@see UserInterface']
            );
            \$builder->addStmt(
                \$manipulator->createMethodLevelCommentNode(
                    'not needed for apps that do not check user passwords'
                )
            );

            \$manipulator->addMethodBuilder(\$builder);

            return;
        }

        \$propertyDocs = '@var string The hashed password';
        if (\$userClassConfig->isEntity()) {
            // add entity property
            \$manipulator->addEntityField(
                'password',
                [
                    'type' => 'string',
                ],
                [\$propertyDocs]
            );
        } else {
            // add normal property
            \$manipulator->addProperty('password', [\$propertyDocs]);

            \$manipulator->addGetter(
                'password',
                'string',
                true
            );

            \$manipulator->addSetter(
                'password',
                'string',
                false
            );
        }

        // define getPassword (if it was defined above, this will override)
        \$manipulator->addAccessorMethod(
            'password',
            'getPassword',
            'string',
            false,
            [
                '@see UserInterface',
            ],
            true
        );
    }

    private function addGetSalt(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        // add getSalt(): always empty
        \$builder = \$manipulator->createMethodBuilder(
            'getSalt',
            null,
            false,
            ['@see UserInterface']
        );
        if (\$userClassConfig->hasPassword()) {
            \$builder->addStmt(
                \$manipulator->createMethodLevelCommentNode(
                    'not needed when using the \"bcrypt\" algorithm in security.yaml'
                )
            );
        } else {
            \$builder->addStmt(
                \$manipulator->createMethodLevelCommentNode(
                    'not needed for apps that do not check user passwords'
                )
            );
        }

        \$manipulator->addMethodBuilder(\$builder);
    }

    private function addEraseCredentials(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        // add eraseCredentials: always empty
        \$builder = \$manipulator->createMethodBuilder(
            'eraseCredentials',
            null,
            false,
            ['@see UserInterface']
        );
        \$builder->addStmt(
            \$manipulator->createMethodLevelCommentNode(
                'If you store any temporary, sensitive data on the user, clear it here'
            )
        );
        \$builder->addStmt(
            \$manipulator->createMethodLevelCommentNode(
                '\$this->plainPassword = null;'
            )
        );

        \$manipulator->addMethodBuilder(\$builder);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

/*
 * This file is part of the Symfony MakerBundle package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\\Bundle\\MakerBundle\\Security;

use PhpParser\\Node;
use Symfony\\Bundle\\MakerBundle\\Util\\ClassSourceManipulator;
use Symfony\\Component\\Security\\Core\\User\\UserInterface;

/**
 * Adds logic to implement UserInterface to an existing User class.
 *
 * @internal
 */
final class UserClassBuilder
{
    public function addUserInterfaceImplementation(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        \$manipulator->addInterface(UserInterface::class);

        \$this->addGetUsername(\$manipulator, \$userClassConfig);

        \$this->addGetRoles(\$manipulator, \$userClassConfig);

        \$this->addGetPassword(\$manipulator, \$userClassConfig);

        \$this->addGetSalt(\$manipulator, \$userClassConfig);

        \$this->addEraseCredentials(\$manipulator, \$userClassConfig);
    }

    private function addGetUsername(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        if (\$userClassConfig->isEntity()) {
            // add entity property
            \$manipulator->addEntityField(
                \$userClassConfig->getIdentityPropertyName(),
                [
                    'type' => 'string',
                    // https://github.com/FriendsOfSymfony/FOSUserBundle/issues/1919
                    'length' => 180,
                    'unique' => true,
                ]
            );
        } else {
            // add normal property
            \$manipulator->addProperty(\$userClassConfig->getIdentityPropertyName());

            \$manipulator->addGetter(
                \$userClassConfig->getIdentityPropertyName(),
                'string',
                true
            );

            \$manipulator->addSetter(
                \$userClassConfig->getIdentityPropertyName(),
                'string',
                false
            );
        }

        // define getUsername (if it was defined above, this will override)
        \$manipulator->addAccessorMethod(
            \$userClassConfig->getIdentityPropertyName(),
            'getUsername',
            'string',
            false,
            [
                'A visual identifier that represents this user.',
                '',
                '@see UserInterface',
            ],
            true
        );
    }

    private function addGetRoles(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        if (\$userClassConfig->isEntity()) {
            // add entity property
            \$manipulator->addEntityField(
                'roles',
                [
                    'type' => 'json',
                ]
            );
        } else {
            // add normal property
            \$manipulator->addProperty(
                'roles',
                [],
                new Node\\Expr\\Array_([], ['kind' => Node\\Expr\\Array_::KIND_SHORT])
            );

            \$manipulator->addGetter(
                'roles',
                'array',
                false
            );

            \$manipulator->addSetter(
                'roles',
                'array',
                false
            );
        }

        // define getRoles (if it was defined above, this will override)
        \$builder = \$manipulator->createMethodBuilder(
            'getRoles',
            'array',
            false,
            ['@see UserInterface']
        );

        // \$roles = \$this->roles
        \$builder->addStmt(
            new Node\\Stmt\\Expression(new Node\\Expr\\Assign(
                new Node\\Expr\\Variable('roles'),
                new Node\\Expr\\PropertyFetch(new Node\\Expr\\Variable('this'), 'roles')
            ))
        );
        // comment line
        \$builder->addStmt(
            \$manipulator->createMethodLevelCommentNode(
                'guarantee every user at least has ROLE_USER'
            )
        );
        // \$roles[] = 'ROLE_USER';
        \$builder->addStmt(
            new Node\\Stmt\\Expression(
                new Node\\Expr\\Assign(
                    new Node\\Expr\\ArrayDimFetch(
                        new Node\\Expr\\Variable('roles')
                    ),
                    new Node\\Scalar\\String_('ROLE_USER')
                )
            )
        );
        \$builder->addStmt(\$manipulator->createMethodLevelBlankLine());
        // return array_unique(\$roles);
        \$builder->addStmt(
            new Node\\Stmt\\Return_(
                new Node\\Expr\\FuncCall(
                    new Node\\Name('array_unique'),
                    [new Node\\Expr\\Variable('roles')]
                )
            )
        );

        \$manipulator->addMethodBuilder(\$builder);
    }

    private function addGetPassword(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        if (!\$userClassConfig->hasPassword()) {
            // add an empty method only
            \$builder = \$manipulator->createMethodBuilder(
                'getPassword',
                null,
                false,
                ['@see UserInterface']
            );
            \$builder->addStmt(
                \$manipulator->createMethodLevelCommentNode(
                    'not needed for apps that do not check user passwords'
                )
            );

            \$manipulator->addMethodBuilder(\$builder);

            return;
        }

        \$propertyDocs = '@var string The hashed password';
        if (\$userClassConfig->isEntity()) {
            // add entity property
            \$manipulator->addEntityField(
                'password',
                [
                    'type' => 'string',
                ],
                [\$propertyDocs]
            );
        } else {
            // add normal property
            \$manipulator->addProperty('password', [\$propertyDocs]);

            \$manipulator->addGetter(
                'password',
                'string',
                true
            );

            \$manipulator->addSetter(
                'password',
                'string',
                false
            );
        }

        // define getPassword (if it was defined above, this will override)
        \$manipulator->addAccessorMethod(
            'password',
            'getPassword',
            'string',
            false,
            [
                '@see UserInterface',
            ],
            true
        );
    }

    private function addGetSalt(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        // add getSalt(): always empty
        \$builder = \$manipulator->createMethodBuilder(
            'getSalt',
            null,
            false,
            ['@see UserInterface']
        );
        if (\$userClassConfig->hasPassword()) {
            \$builder->addStmt(
                \$manipulator->createMethodLevelCommentNode(
                    'not needed when using the \"bcrypt\" algorithm in security.yaml'
                )
            );
        } else {
            \$builder->addStmt(
                \$manipulator->createMethodLevelCommentNode(
                    'not needed for apps that do not check user passwords'
                )
            );
        }

        \$manipulator->addMethodBuilder(\$builder);
    }

    private function addEraseCredentials(ClassSourceManipulator \$manipulator, UserClassConfiguration \$userClassConfig)
    {
        // add eraseCredentials: always empty
        \$builder = \$manipulator->createMethodBuilder(
            'eraseCredentials',
            null,
            false,
            ['@see UserInterface']
        );
        \$builder->addStmt(
            \$manipulator->createMethodLevelCommentNode(
                'If you store any temporary, sensitive data on the user, clear it here'
            )
        );
        \$builder->addStmt(
            \$manipulator->createMethodLevelCommentNode(
                '\$this->plainPassword = null;'
            )
        );

        \$manipulator->addMethodBuilder(\$builder);
    }
}
", "vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php", "/var/www/public/DevLaon/templates/vendor/symfony/maker-bundle/src/Security/UserClassBuilder.php");
    }
}
