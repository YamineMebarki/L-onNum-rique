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

/* vendor/doctrine/dbal/README.md */
class __TwigTemplate_7a2f41a155b649cec983b52afcb0ad8778416805d4614e8164dc4b6f2b8c2be8 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/README.md"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/doctrine/dbal/README.md"));

        // line 1
        echo "# Doctrine DBAL

| [Master][Master] | [2.8][2.8] | [Develop][develop] |
|:----------------:|:----------:|:------------------:|
| [![Build status][Master image]][Master] | [![Build status][2.8 image]][2.8] | [![Build status][develop image]][develop] |
| [![Build Status][ContinuousPHP image]][ContinuousPHP] | [![Build Status][ContinuousPHP 2.8 image]][ContinuousPHP] | [![Build Status][ContinuousPHP develop image]][ContinuousPHP] |
| [![Code Coverage][Coverage image]][Scrutinizer Master] | [![Code Coverage][Coverage 2.8 image]][Scrutinizer 2.8] | [![Code Coverage][Coverage develop image]][Scrutinizer develop] |
| [![Code Quality][Quality image]][Scrutinizer Master] | [![Code Quality][Quality 2.8 image]][Scrutinizer 2.8] | [![Code Quality][Quality develop image]][Scrutinizer develop] |
| [![AppVeyor][AppVeyor master image]][AppVeyor master] | [![AppVeyor][AppVeyor 2.8 image]][AppVeyor 2.8] | [![AppVeyor][AppVeyor develop image]][AppVeyor develop] |

Powerful database abstraction layer with many features for database schema introspection, schema management and PDO abstraction.

## More resources:

* [Website](http://www.doctrine-project.org/projects/dbal.html)
* [Documentation](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/)
* [Issue Tracker](https://github.com/doctrine/dbal/issues)


  [Master image]: https://images.shields.io/travis/doctrine/dbal/master.svg?style=flat-square
  [Coverage image]: https://images.shields.io/scrutinizer/coverage/g/doctrine/dbal/master.svg?style=flat-square
  [Quality image]: https://images.shields.io/scrutinizer/g/doctrine/dbal/master.svg?style=flat-square
  [ContinuousPHP image]: https://images.shields.io/continuousphp/git-hub/doctrine/dbal/master.svg?style=flat-square
  [Master]: https://travis-ci.org/doctrine/dbal
  [Scrutinizer Master]: https://scrutinizer-ci.com/g/doctrine/dbal/
  [AppVeyor master]: https://ci.appveyor.com/project/doctrine/dbal/branch/master
  [AppVeyor master image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/master?svg=true
  [ContinuousPHP]: https://continuousphp.com/git-hub/doctrine/dbal
  [2.8 image]: https://images.shields.io/travis/doctrine/dbal/2.8.svg?style=flat-square
  [Coverage 2.8 image]: https://images.shields.io/scrutinizer/coverage/g/doctrine/dbal/2.8.svg?style=flat-square
  [Quality 2.8 image]: https://images.shields.io/scrutinizer/g/doctrine/dbal/2.8.svg?style=flat-square
  [ContinuousPHP 2.8 image]: https://images.shields.io/continuousphp/git-hub/doctrine/dbal/2.8.svg?style=flat-square
  [2.8]: https://github.com/doctrine/dbal/tree/2.8
  [Scrutinizer 2.8]: https://scrutinizer-ci.com/g/doctrine/dbal/?branch=2.8
  [AppVeyor 2.8]: https://ci.appveyor.com/project/doctrine/dbal/branch/2.8
  [AppVeyor 2.8 image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/2.8?svg=true
  [develop]: https://github.com/doctrine/dbal/tree/develop
  [develop image]: https://images.shields.io/travis/doctrine/dbal/develop.svg?style=flat-square
  [Coverage develop image]: https://images.shields.io/scrutinizer/coverage/g/doctrine/dbal/develop.svg?style=flat-square
  [Quality develop image]: https://images.shields.io/scrutinizer/g/doctrine/dbal/develop.svg?style=flat-square
  [ContinuousPHP develop image]: https://images.shields.io/continuousphp/git-hub/doctrine/dbal/develop.svg?style=flat-square
  [develop]: https://github.com/doctrine/dbal/tree/develop
  [Scrutinizer develop]: https://scrutinizer-ci.com/g/doctrine/dbal/?branch=develop
  [AppVeyor develop]: https://ci.appveyor.com/project/doctrine/dbal/branch/develop
  [AppVeyor develop image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/develop?svg=true
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/doctrine/dbal/README.md";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# Doctrine DBAL

| [Master][Master] | [2.8][2.8] | [Develop][develop] |
|:----------------:|:----------:|:------------------:|
| [![Build status][Master image]][Master] | [![Build status][2.8 image]][2.8] | [![Build status][develop image]][develop] |
| [![Build Status][ContinuousPHP image]][ContinuousPHP] | [![Build Status][ContinuousPHP 2.8 image]][ContinuousPHP] | [![Build Status][ContinuousPHP develop image]][ContinuousPHP] |
| [![Code Coverage][Coverage image]][Scrutinizer Master] | [![Code Coverage][Coverage 2.8 image]][Scrutinizer 2.8] | [![Code Coverage][Coverage develop image]][Scrutinizer develop] |
| [![Code Quality][Quality image]][Scrutinizer Master] | [![Code Quality][Quality 2.8 image]][Scrutinizer 2.8] | [![Code Quality][Quality develop image]][Scrutinizer develop] |
| [![AppVeyor][AppVeyor master image]][AppVeyor master] | [![AppVeyor][AppVeyor 2.8 image]][AppVeyor 2.8] | [![AppVeyor][AppVeyor develop image]][AppVeyor develop] |

Powerful database abstraction layer with many features for database schema introspection, schema management and PDO abstraction.

## More resources:

* [Website](http://www.doctrine-project.org/projects/dbal.html)
* [Documentation](http://docs.doctrine-project.org/projects/doctrine-dbal/en/latest/)
* [Issue Tracker](https://github.com/doctrine/dbal/issues)


  [Master image]: https://images.shields.io/travis/doctrine/dbal/master.svg?style=flat-square
  [Coverage image]: https://images.shields.io/scrutinizer/coverage/g/doctrine/dbal/master.svg?style=flat-square
  [Quality image]: https://images.shields.io/scrutinizer/g/doctrine/dbal/master.svg?style=flat-square
  [ContinuousPHP image]: https://images.shields.io/continuousphp/git-hub/doctrine/dbal/master.svg?style=flat-square
  [Master]: https://travis-ci.org/doctrine/dbal
  [Scrutinizer Master]: https://scrutinizer-ci.com/g/doctrine/dbal/
  [AppVeyor master]: https://ci.appveyor.com/project/doctrine/dbal/branch/master
  [AppVeyor master image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/master?svg=true
  [ContinuousPHP]: https://continuousphp.com/git-hub/doctrine/dbal
  [2.8 image]: https://images.shields.io/travis/doctrine/dbal/2.8.svg?style=flat-square
  [Coverage 2.8 image]: https://images.shields.io/scrutinizer/coverage/g/doctrine/dbal/2.8.svg?style=flat-square
  [Quality 2.8 image]: https://images.shields.io/scrutinizer/g/doctrine/dbal/2.8.svg?style=flat-square
  [ContinuousPHP 2.8 image]: https://images.shields.io/continuousphp/git-hub/doctrine/dbal/2.8.svg?style=flat-square
  [2.8]: https://github.com/doctrine/dbal/tree/2.8
  [Scrutinizer 2.8]: https://scrutinizer-ci.com/g/doctrine/dbal/?branch=2.8
  [AppVeyor 2.8]: https://ci.appveyor.com/project/doctrine/dbal/branch/2.8
  [AppVeyor 2.8 image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/2.8?svg=true
  [develop]: https://github.com/doctrine/dbal/tree/develop
  [develop image]: https://images.shields.io/travis/doctrine/dbal/develop.svg?style=flat-square
  [Coverage develop image]: https://images.shields.io/scrutinizer/coverage/g/doctrine/dbal/develop.svg?style=flat-square
  [Quality develop image]: https://images.shields.io/scrutinizer/g/doctrine/dbal/develop.svg?style=flat-square
  [ContinuousPHP develop image]: https://images.shields.io/continuousphp/git-hub/doctrine/dbal/develop.svg?style=flat-square
  [develop]: https://github.com/doctrine/dbal/tree/develop
  [Scrutinizer develop]: https://scrutinizer-ci.com/g/doctrine/dbal/?branch=develop
  [AppVeyor develop]: https://ci.appveyor.com/project/doctrine/dbal/branch/develop
  [AppVeyor develop image]: https://ci.appveyor.com/api/projects/status/i88kitq8qpbm0vie/branch/develop?svg=true
", "vendor/doctrine/dbal/README.md", "/var/www/public/DevLaon/templates/vendor/doctrine/dbal/README.md");
    }
}
