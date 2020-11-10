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

/* vendor/fzaninotto/faker/src/Faker/Guesser/Name.php */
class __TwigTemplate_ab9fa243ba2780e24eb4a5f56a082c64640f3727e6e0262e698846e3057f10b1 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Guesser/Name.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Guesser/Name.php"));

        // line 1
        echo "<?php

namespace Faker\\Guesser;

use \\Faker\\Provider\\Base;

class Name
{
    protected \$generator;

    /**
     * @param \\Faker\\Generator \$generator
     */
    public function __construct(\\Faker\\Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @param string \$name
     * @param int|null \$size Length of field, if known
     * @return callable
     */
    public function guessFormat(\$name, \$size = null)
    {
        \$name = Base::toLower(\$name);
        \$generator = \$this->generator;
        if (preg_match('/^is[_A-Z]/', \$name)) {
            return function () use (\$generator) {
                return \$generator->boolean;
            };
        }
        if (preg_match('/(_a|A)t\$/', \$name)) {
            return function () use (\$generator) {
                return \$generator->dateTime;
            };
        }
        switch (str_replace('_', '', \$name)) {
            case 'firstname':
                return function () use (\$generator) {
                    return \$generator->firstName;
                };
            case 'lastname':
                return function () use (\$generator) {
                    return \$generator->lastName;
                };
            case 'username':
            case 'login':
                return function () use (\$generator) {
                    return \$generator->userName;
                };
            case 'email':
            case 'emailaddress':
                return function () use (\$generator) {
                    return \$generator->email;
                };
            case 'phonenumber':
            case 'phone':
            case 'telephone':
            case 'telnumber':
                return function () use (\$generator) {
                    return \$generator->phoneNumber;
                };
            case 'address':
                return function () use (\$generator) {
                    return \$generator->address;
                };
            case 'city':
            case 'town':
                return function () use (\$generator) {
                    return \$generator->city;
                };
            case 'streetaddress':
                return function () use (\$generator) {
                    return \$generator->streetAddress;
                };
            case 'postcode':
            case 'zipcode':
                return function () use (\$generator) {
                    return \$generator->postcode;
                };
            case 'state':
                return function () use (\$generator) {
                    return \$generator->state;
                };
            case 'county':
                if (\$this->generator->locale == 'en_US') {
                    return function () use (\$generator) {
                        return sprintf('%s County', \$generator->city);
                    };
                }

                return function () use (\$generator) {
                    return \$generator->state;
                };
            case 'country':
                switch (\$size) {
                    case 2:
                        return function () use (\$generator) {
                            return \$generator->countryCode;
                        };
                    case 3:
                        return function () use (\$generator) {
                            return \$generator->countryISOAlpha3;
                        };
                    case 5:
                    case 6:
                        return function () use (\$generator) {
                            return \$generator->locale;
                        };
                    default:
                        return function () use (\$generator) {
                            return \$generator->country;
                        };
                }
                break;
            case 'locale':
                return function () use (\$generator) {
                    return \$generator->locale;
                };
            case 'currency':
            case 'currencycode':
                return function () use (\$generator) {
                    return \$generator->currencyCode;
                };
            case 'url':
            case 'website':
                return function () use (\$generator) {
                    return \$generator->url;
                };
            case 'company':
            case 'companyname':
            case 'employer':
                return function () use (\$generator) {
                    return \$generator->company;
                };
            case 'title':
                if (\$size !== null && \$size <= 10) {
                    return function () use (\$generator) {
                        return \$generator->title;
                    };
                }

                return function () use (\$generator) {
                    return \$generator->sentence;
                };
            case 'body':
            case 'summary':
            case 'article':
            case 'description':
                return function () use (\$generator) {
                    return \$generator->text;
                };
        }
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Guesser/Name.php";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Guesser;

use \\Faker\\Provider\\Base;

class Name
{
    protected \$generator;

    /**
     * @param \\Faker\\Generator \$generator
     */
    public function __construct(\\Faker\\Generator \$generator)
    {
        \$this->generator = \$generator;
    }

    /**
     * @param string \$name
     * @param int|null \$size Length of field, if known
     * @return callable
     */
    public function guessFormat(\$name, \$size = null)
    {
        \$name = Base::toLower(\$name);
        \$generator = \$this->generator;
        if (preg_match('/^is[_A-Z]/', \$name)) {
            return function () use (\$generator) {
                return \$generator->boolean;
            };
        }
        if (preg_match('/(_a|A)t\$/', \$name)) {
            return function () use (\$generator) {
                return \$generator->dateTime;
            };
        }
        switch (str_replace('_', '', \$name)) {
            case 'firstname':
                return function () use (\$generator) {
                    return \$generator->firstName;
                };
            case 'lastname':
                return function () use (\$generator) {
                    return \$generator->lastName;
                };
            case 'username':
            case 'login':
                return function () use (\$generator) {
                    return \$generator->userName;
                };
            case 'email':
            case 'emailaddress':
                return function () use (\$generator) {
                    return \$generator->email;
                };
            case 'phonenumber':
            case 'phone':
            case 'telephone':
            case 'telnumber':
                return function () use (\$generator) {
                    return \$generator->phoneNumber;
                };
            case 'address':
                return function () use (\$generator) {
                    return \$generator->address;
                };
            case 'city':
            case 'town':
                return function () use (\$generator) {
                    return \$generator->city;
                };
            case 'streetaddress':
                return function () use (\$generator) {
                    return \$generator->streetAddress;
                };
            case 'postcode':
            case 'zipcode':
                return function () use (\$generator) {
                    return \$generator->postcode;
                };
            case 'state':
                return function () use (\$generator) {
                    return \$generator->state;
                };
            case 'county':
                if (\$this->generator->locale == 'en_US') {
                    return function () use (\$generator) {
                        return sprintf('%s County', \$generator->city);
                    };
                }

                return function () use (\$generator) {
                    return \$generator->state;
                };
            case 'country':
                switch (\$size) {
                    case 2:
                        return function () use (\$generator) {
                            return \$generator->countryCode;
                        };
                    case 3:
                        return function () use (\$generator) {
                            return \$generator->countryISOAlpha3;
                        };
                    case 5:
                    case 6:
                        return function () use (\$generator) {
                            return \$generator->locale;
                        };
                    default:
                        return function () use (\$generator) {
                            return \$generator->country;
                        };
                }
                break;
            case 'locale':
                return function () use (\$generator) {
                    return \$generator->locale;
                };
            case 'currency':
            case 'currencycode':
                return function () use (\$generator) {
                    return \$generator->currencyCode;
                };
            case 'url':
            case 'website':
                return function () use (\$generator) {
                    return \$generator->url;
                };
            case 'company':
            case 'companyname':
            case 'employer':
                return function () use (\$generator) {
                    return \$generator->company;
                };
            case 'title':
                if (\$size !== null && \$size <= 10) {
                    return function () use (\$generator) {
                        return \$generator->title;
                    };
                }

                return function () use (\$generator) {
                    return \$generator->sentence;
                };
            case 'body':
            case 'summary':
            case 'article':
            case 'description':
                return function () use (\$generator) {
                    return \$generator->text;
                };
        }
    }
}
", "vendor/fzaninotto/faker/src/Faker/Guesser/Name.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Guesser/Name.php");
    }
}
