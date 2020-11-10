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

/* vendor/symfony/console/Tests/Fixtures/application_1.json */
class __TwigTemplate_61b24d90f323668cac4f7407a26ba675d7d678fb633877f5a0f11164af23c57d extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/application_1.json"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/symfony/console/Tests/Fixtures/application_1.json"));

        // line 1
        echo "{
    \"commands\": [
        {
            \"name\": \"help\",
            \"hidden\": false,
            \"usage\": [
                \"help [--format FORMAT] [--raw] [--] [<command_name>]\"
            ],
            \"description\": \"Displays help for a command\",
            \"help\": \"The <info>help<\\/info> command displays help for a given command:\\n\\n  <info>php app\\/console help list<\\/info>\\n\\nYou can also output the help in other formats by using the <comment>--format<\\/comment> option:\\n\\n  <info>php app\\/console help --format=xml list<\\/info>\\n\\nTo display the list of available commands, please use the <info>list<\\/info> command.\",
            \"definition\": {
                \"arguments\": {
                    \"command_name\": {
                        \"name\": \"command_name\",
                        \"is_required\": false,
                        \"is_array\": false,
                        \"description\": \"The command name\",
                        \"default\": \"help\"
                    }
                },
                \"options\": {
                    \"format\": {
                        \"name\": \"--format\",
                        \"shortcut\": \"\",
                        \"accept_value\": true,
                        \"is_value_required\": true,
                        \"is_multiple\": false,
                        \"description\": \"The output format (AideTxt, xml, json, or md)\",
                        \"default\": \"AideTxt\"
                    },
                    \"raw\": {
                        \"name\": \"--raw\",
                        \"shortcut\": \"\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"To output raw command help\",
                        \"default\": false
                    },
                    \"help\": {
                        \"name\": \"--help\",
                        \"shortcut\": \"-h\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Display this help message\",
                        \"default\": false
                    },
                    \"quiet\": {
                        \"name\": \"--quiet\",
                        \"shortcut\": \"-q\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Do not output any message\",
                        \"default\": false
                    },
                    \"verbose\": {
                        \"name\": \"--verbose\",
                        \"shortcut\": \"-v|-vv|-vvv\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug\",
                        \"default\": false
                    },
                    \"version\": {
                        \"name\": \"--version\",
                        \"shortcut\": \"-V\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Display this application version\",
                        \"default\": false
                    },
                    \"ansi\": {
                        \"name\": \"--ansi\",
                        \"shortcut\": \"\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Force ANSI output\",
                        \"default\": false
                    },
                    \"no-ansi\": {
                        \"name\": \"--no-ansi\",
                        \"shortcut\": \"\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Disable ANSI output\",
                        \"default\": false
                    },
                    \"no-interaction\": {
                        \"name\": \"--no-interaction\",
                        \"shortcut\": \"-n\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Do not ask any interactive question\",
                        \"default\": false
                    }
                }
            }
        },
        {
            \"name\": \"list\",
            \"hidden\": false,
            \"usage\": [
                \"list [--raw] [--format FORMAT] [--] [<namespace>]\"
            ],
            \"description\": \"Lists commands\",
            \"help\": \"The <info>list<\\/info> command lists all commands:\\n\\n  <info>php app\\/console list<\\/info>\\n\\nYou can also display the commands for a specific namespace:\\n\\n  <info>php app\\/console list test<\\/info>\\n\\nYou can also output the information in other formats by using the <comment>--format<\\/comment> option:\\n\\n  <info>php app\\/console list --format=xml<\\/info>\\n\\nIt's also possible to get raw list of commands (useful for embedding command runner):\\n\\n  <info>php app\\/console list --raw<\\/info>\",
            \"definition\": {
                \"arguments\": {
                    \"namespace\": {
                        \"name\": \"namespace\",
                        \"is_required\": false,
                        \"is_array\": false,
                        \"description\": \"The namespace name\",
                        \"default\": null
                    }
                },
                \"options\": {
                    \"raw\": {
                        \"name\": \"--raw\",
                        \"shortcut\": \"\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"To output raw command list\",
                        \"default\": false
                    },
                    \"format\": {
                        \"name\": \"--format\",
                        \"shortcut\": \"\",
                        \"accept_value\": true,
                        \"is_value_required\": true,
                        \"is_multiple\": false,
                        \"description\": \"The output format (AideTxt, xml, json, or md)\",
                        \"default\": \"AideTxt\"
                    }
                }
            }
        }
    ],
    \"namespaces\": [
        {
            \"id\": \"_global\",
            \"commands\": [
                \"help\",
                \"list\"
            ]
        }
    ]
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/symfony/console/Tests/Fixtures/application_1.json";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{
    \"commands\": [
        {
            \"name\": \"help\",
            \"hidden\": false,
            \"usage\": [
                \"help [--format FORMAT] [--raw] [--] [<command_name>]\"
            ],
            \"description\": \"Displays help for a command\",
            \"help\": \"The <info>help<\\/info> command displays help for a given command:\\n\\n  <info>php app\\/console help list<\\/info>\\n\\nYou can also output the help in other formats by using the <comment>--format<\\/comment> option:\\n\\n  <info>php app\\/console help --format=xml list<\\/info>\\n\\nTo display the list of available commands, please use the <info>list<\\/info> command.\",
            \"definition\": {
                \"arguments\": {
                    \"command_name\": {
                        \"name\": \"command_name\",
                        \"is_required\": false,
                        \"is_array\": false,
                        \"description\": \"The command name\",
                        \"default\": \"help\"
                    }
                },
                \"options\": {
                    \"format\": {
                        \"name\": \"--format\",
                        \"shortcut\": \"\",
                        \"accept_value\": true,
                        \"is_value_required\": true,
                        \"is_multiple\": false,
                        \"description\": \"The output format (AideTxt, xml, json, or md)\",
                        \"default\": \"AideTxt\"
                    },
                    \"raw\": {
                        \"name\": \"--raw\",
                        \"shortcut\": \"\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"To output raw command help\",
                        \"default\": false
                    },
                    \"help\": {
                        \"name\": \"--help\",
                        \"shortcut\": \"-h\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Display this help message\",
                        \"default\": false
                    },
                    \"quiet\": {
                        \"name\": \"--quiet\",
                        \"shortcut\": \"-q\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Do not output any message\",
                        \"default\": false
                    },
                    \"verbose\": {
                        \"name\": \"--verbose\",
                        \"shortcut\": \"-v|-vv|-vvv\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Increase the verbosity of messages: 1 for normal output, 2 for more verbose output and 3 for debug\",
                        \"default\": false
                    },
                    \"version\": {
                        \"name\": \"--version\",
                        \"shortcut\": \"-V\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Display this application version\",
                        \"default\": false
                    },
                    \"ansi\": {
                        \"name\": \"--ansi\",
                        \"shortcut\": \"\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Force ANSI output\",
                        \"default\": false
                    },
                    \"no-ansi\": {
                        \"name\": \"--no-ansi\",
                        \"shortcut\": \"\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Disable ANSI output\",
                        \"default\": false
                    },
                    \"no-interaction\": {
                        \"name\": \"--no-interaction\",
                        \"shortcut\": \"-n\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"Do not ask any interactive question\",
                        \"default\": false
                    }
                }
            }
        },
        {
            \"name\": \"list\",
            \"hidden\": false,
            \"usage\": [
                \"list [--raw] [--format FORMAT] [--] [<namespace>]\"
            ],
            \"description\": \"Lists commands\",
            \"help\": \"The <info>list<\\/info> command lists all commands:\\n\\n  <info>php app\\/console list<\\/info>\\n\\nYou can also display the commands for a specific namespace:\\n\\n  <info>php app\\/console list test<\\/info>\\n\\nYou can also output the information in other formats by using the <comment>--format<\\/comment> option:\\n\\n  <info>php app\\/console list --format=xml<\\/info>\\n\\nIt's also possible to get raw list of commands (useful for embedding command runner):\\n\\n  <info>php app\\/console list --raw<\\/info>\",
            \"definition\": {
                \"arguments\": {
                    \"namespace\": {
                        \"name\": \"namespace\",
                        \"is_required\": false,
                        \"is_array\": false,
                        \"description\": \"The namespace name\",
                        \"default\": null
                    }
                },
                \"options\": {
                    \"raw\": {
                        \"name\": \"--raw\",
                        \"shortcut\": \"\",
                        \"accept_value\": false,
                        \"is_value_required\": false,
                        \"is_multiple\": false,
                        \"description\": \"To output raw command list\",
                        \"default\": false
                    },
                    \"format\": {
                        \"name\": \"--format\",
                        \"shortcut\": \"\",
                        \"accept_value\": true,
                        \"is_value_required\": true,
                        \"is_multiple\": false,
                        \"description\": \"The output format (AideTxt, xml, json, or md)\",
                        \"default\": \"AideTxt\"
                    }
                }
            }
        }
    ],
    \"namespaces\": [
        {
            \"id\": \"_global\",
            \"commands\": [
                \"help\",
                \"list\"
            ]
        }
    ]
}
", "vendor/symfony/console/Tests/Fixtures/application_1.json", "/var/www/public/DevLaon/templates/vendor/symfony/console/Tests/Fixtures/application_1.json");
    }
}
