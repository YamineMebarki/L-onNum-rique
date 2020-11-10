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

/* vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Person.php */
class __TwigTemplate_5d8bac030577579a4a6d5afb50dfc073c4ed6cb1d99577ec4cebebb9b5cb8018 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Person.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Person.php"));

        // line 1
        echo "<?php
namespace Faker\\Provider\\ms_MY;

use Faker\\Provider\\DateTime;
use Faker\\Generator;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$firstNameFormat = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleMalay"]) || array_key_exists("firstNameFemaleMalay", $context) ? $context["firstNameFemaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameFemaleMalay" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleChinese"]) || array_key_exists("firstNameMaleChinese", $context) ? $context["firstNameMaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameMaleChinese" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleChinese"]) || array_key_exists("firstNameFemaleChinese", $context) ? $context["firstNameFemaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameFemaleChinese" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleIndian"]) || array_key_exists("firstNameFemaleIndian", $context) ? $context["firstNameFemaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameFemaleIndian" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleChristian"]) || array_key_exists("firstNameMaleChristian", $context) ? $context["firstNameMaleChristian"] : (function () { throw new RuntimeError('Variable "firstNameMaleChristian" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleChristian"]) || array_key_exists("firstNameFemaleChristian", $context) ? $context["firstNameFemaleChristian"] : (function () { throw new RuntimeError('Variable "firstNameFemaleChristian" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_names
     */
    protected static \$maleNameFormats = array(
        //Malay
        '";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["muhammadName"]) || array_key_exists("muhammadName", $context) ? $context["muhammadName"] : (function () { throw new RuntimeError('Variable "muhammadName" does not exist.', 25, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["haji"]) || array_key_exists("haji", $context) ? $context["haji"] : (function () { throw new RuntimeError('Variable "haji" does not exist.', 25, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 25, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " bin ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 25, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["muhammadName"]) || array_key_exists("muhammadName", $context) ? $context["muhammadName"] : (function () { throw new RuntimeError('Variable "muhammadName" does not exist.', 26, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["haji"]) || array_key_exists("haji", $context) ? $context["haji"] : (function () { throw new RuntimeError('Variable "haji" does not exist.', 26, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 26, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 26, $this->source); })()), "html", null, true);
        echo " bin ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 26, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["muhammadName"]) || array_key_exists("muhammadName", $context) ? $context["muhammadName"] : (function () { throw new RuntimeError('Variable "muhammadName" does not exist.', 27, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["haji"]) || array_key_exists("haji", $context) ? $context["haji"] : (function () { throw new RuntimeError('Variable "haji" does not exist.', 27, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 27, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 27, $this->source); })()), "html", null, true);
        echo " bin ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 27, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["muhammadName"]) || array_key_exists("muhammadName", $context) ? $context["muhammadName"] : (function () { throw new RuntimeError('Variable "muhammadName" does not exist.', 28, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["haji"]) || array_key_exists("haji", $context) ? $context["haji"] : (function () { throw new RuntimeError('Variable "haji" does not exist.', 28, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 28, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 28, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["muhammadName"]) || array_key_exists("muhammadName", $context) ? $context["muhammadName"] : (function () { throw new RuntimeError('Variable "muhammadName" does not exist.', 29, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["haji"]) || array_key_exists("haji", $context) ? $context["haji"] : (function () { throw new RuntimeError('Variable "haji" does not exist.', 29, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 29, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " bin ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 29, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 29, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["muhammadName"]) || array_key_exists("muhammadName", $context) ? $context["muhammadName"] : (function () { throw new RuntimeError('Variable "muhammadName" does not exist.', 30, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["haji"]) || array_key_exists("haji", $context) ? $context["haji"] : (function () { throw new RuntimeError('Variable "haji" does not exist.', 30, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 30, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 30, $this->source); })()), "html", null, true);
        echo " bin ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 30, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 30, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["muhammadName"]) || array_key_exists("muhammadName", $context) ? $context["muhammadName"] : (function () { throw new RuntimeError('Variable "muhammadName" does not exist.', 31, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["haji"]) || array_key_exists("haji", $context) ? $context["haji"] : (function () { throw new RuntimeError('Variable "haji" does not exist.', 31, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 31, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 31, $this->source); })()), "html", null, true);
        echo " bin ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 31, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "',
        //Chinese
        '";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 33, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleChinese"]) || array_key_exists("firstNameMaleChinese", $context) ? $context["firstNameMaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameMaleChinese" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 34, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleChinese"]) || array_key_exists("firstNameMaleChinese", $context) ? $context["firstNameMaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameMaleChinese" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 35, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleChinese"]) || array_key_exists("firstNameMaleChinese", $context) ? $context["firstNameMaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameMaleChinese" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 36, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleChinese"]) || array_key_exists("firstNameMaleChinese", $context) ? $context["firstNameMaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameMaleChinese" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 37, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleChinese"]) || array_key_exists("firstNameMaleChinese", $context) ? $context["firstNameMaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameMaleChinese" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleChristian"]) || array_key_exists("firstNameMaleChristian", $context) ? $context["firstNameMaleChristian"] : (function () { throw new RuntimeError('Variable "firstNameMaleChristian" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 38, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleChinese"]) || array_key_exists("firstNameMaleChinese", $context) ? $context["firstNameMaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameMaleChinese" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "',
        //Indian
        '";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["initialIndian"]) || array_key_exists("initialIndian", $context) ? $context["initialIndian"] : (function () { throw new RuntimeError('Variable "initialIndian" does not exist.', 40, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["initialIndian"]) || array_key_exists("initialIndian", $context) ? $context["initialIndian"] : (function () { throw new RuntimeError('Variable "initialIndian" does not exist.', 41, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 42
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 42, $this->source); })()), "html", null, true);
        echo " a/l ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 42, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 43, $this->source); })()), "html", null, true);
        echo " a/l ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 43, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 43, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 44
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 44, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 44, $this->source); })()), "html", null, true);
        echo " a/l ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 44, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " a/l ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 45, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 46, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_names
     */
    protected static \$femaleNameFormats = array(
        //Malay
        '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["nurName"]) || array_key_exists("nurName", $context) ? $context["nurName"] : (function () { throw new RuntimeError('Variable "nurName" does not exist.', 54, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["hajjah"]) || array_key_exists("hajjah", $context) ? $context["hajjah"] : (function () { throw new RuntimeError('Variable "hajjah" does not exist.', 54, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleMalay"]) || array_key_exists("firstNameFemaleMalay", $context) ? $context["firstNameFemaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameFemaleMalay" does not exist.', 54, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 54, $this->source); })()), "html", null, true);
        echo " binti ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 54, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 54, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 54, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["nurName"]) || array_key_exists("nurName", $context) ? $context["nurName"] : (function () { throw new RuntimeError('Variable "nurName" does not exist.', 55, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["hajjah"]) || array_key_exists("hajjah", $context) ? $context["hajjah"] : (function () { throw new RuntimeError('Variable "hajjah" does not exist.', 55, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleMalay"]) || array_key_exists("firstNameFemaleMalay", $context) ? $context["firstNameFemaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameFemaleMalay" does not exist.', 55, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 55, $this->source); })()), "html", null, true);
        echo " binti ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 55, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 55, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["nurName"]) || array_key_exists("nurName", $context) ? $context["nurName"] : (function () { throw new RuntimeError('Variable "nurName" does not exist.', 56, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["hajjah"]) || array_key_exists("hajjah", $context) ? $context["hajjah"] : (function () { throw new RuntimeError('Variable "hajjah" does not exist.', 56, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleMalay"]) || array_key_exists("firstNameFemaleMalay", $context) ? $context["firstNameFemaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameFemaleMalay" does not exist.', 56, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 56, $this->source); })()), "html", null, true);
        echo " binti ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 56, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["nurName"]) || array_key_exists("nurName", $context) ? $context["nurName"] : (function () { throw new RuntimeError('Variable "nurName" does not exist.', 57, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["hajjah"]) || array_key_exists("hajjah", $context) ? $context["hajjah"] : (function () { throw new RuntimeError('Variable "hajjah" does not exist.', 57, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleMalay"]) || array_key_exists("firstNameFemaleMalay", $context) ? $context["firstNameFemaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameFemaleMalay" does not exist.', 57, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["nurName"]) || array_key_exists("nurName", $context) ? $context["nurName"] : (function () { throw new RuntimeError('Variable "nurName" does not exist.', 58, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["hajjah"]) || array_key_exists("hajjah", $context) ? $context["hajjah"] : (function () { throw new RuntimeError('Variable "hajjah" does not exist.', 58, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleMalay"]) || array_key_exists("firstNameFemaleMalay", $context) ? $context["firstNameFemaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameFemaleMalay" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " binti ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 58, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 58, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["nurName"]) || array_key_exists("nurName", $context) ? $context["nurName"] : (function () { throw new RuntimeError('Variable "nurName" does not exist.', 59, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["hajjah"]) || array_key_exists("hajjah", $context) ? $context["hajjah"] : (function () { throw new RuntimeError('Variable "hajjah" does not exist.', 59, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleMalay"]) || array_key_exists("firstNameFemaleMalay", $context) ? $context["firstNameFemaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameFemaleMalay" does not exist.', 59, $this->source); })()), "html", null, true);
        echo " binti ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 59, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleMalay"]) || array_key_exists("firstNameMaleMalay", $context) ? $context["firstNameMaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameMaleMalay" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 60
        echo twig_escape_filter($this->env, (isset($context["nurName"]) || array_key_exists("nurName", $context) ? $context["nurName"] : (function () { throw new RuntimeError('Variable "nurName" does not exist.', 60, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["hajjah"]) || array_key_exists("hajjah", $context) ? $context["hajjah"] : (function () { throw new RuntimeError('Variable "hajjah" does not exist.', 60, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleMalay"]) || array_key_exists("firstNameFemaleMalay", $context) ? $context["firstNameFemaleMalay"] : (function () { throw new RuntimeError('Variable "firstNameFemaleMalay" does not exist.', 60, $this->source); })()), "html", null, true);
        echo " binti ";
        echo twig_escape_filter($this->env, (isset($context["titleMaleMalay"]) || array_key_exists("titleMaleMalay", $context) ? $context["titleMaleMalay"] : (function () { throw new RuntimeError('Variable "titleMaleMalay" does not exist.', 60, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 60, $this->source); })()), "html", null, true);
        echo "',
        //Chinese
        '";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 62, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleChinese"]) || array_key_exists("firstNameFemaleChinese", $context) ? $context["firstNameFemaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameFemaleChinese" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 63, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleChinese"]) || array_key_exists("firstNameFemaleChinese", $context) ? $context["firstNameFemaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameFemaleChinese" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 64
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 64, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleChinese"]) || array_key_exists("firstNameFemaleChinese", $context) ? $context["firstNameFemaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameFemaleChinese" does not exist.', 64, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 65, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleChinese"]) || array_key_exists("firstNameFemaleChinese", $context) ? $context["firstNameFemaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameFemaleChinese" does not exist.', 65, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 66
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 66, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleChinese"]) || array_key_exists("firstNameFemaleChinese", $context) ? $context["firstNameFemaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameFemaleChinese" does not exist.', 66, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleChristian"]) || array_key_exists("firstNameFemaleChristian", $context) ? $context["firstNameFemaleChristian"] : (function () { throw new RuntimeError('Variable "firstNameFemaleChristian" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 67, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleChinese"]) || array_key_exists("firstNameFemaleChinese", $context) ? $context["firstNameFemaleChinese"] : (function () { throw new RuntimeError('Variable "firstNameFemaleChinese" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "',
        //Indian
        '";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["initialIndian"]) || array_key_exists("initialIndian", $context) ? $context["initialIndian"] : (function () { throw new RuntimeError('Variable "initialIndian" does not exist.', 69, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleIndian"]) || array_key_exists("firstNameFemaleIndian", $context) ? $context["firstNameFemaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameFemaleIndian" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["initialIndian"]) || array_key_exists("initialIndian", $context) ? $context["initialIndian"] : (function () { throw new RuntimeError('Variable "initialIndian" does not exist.', 70, $this->source); })()), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 70, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleIndian"]) || array_key_exists("firstNameFemaleIndian", $context) ? $context["firstNameFemaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameFemaleIndian" does not exist.', 71, $this->source); })()), "html", null, true);
        echo " a/l ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 71, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 72
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleIndian"]) || array_key_exists("firstNameFemaleIndian", $context) ? $context["firstNameFemaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameFemaleIndian" does not exist.', 72, $this->source); })()), "html", null, true);
        echo " a/l ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 72, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 72, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 73
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleIndian"]) || array_key_exists("firstNameFemaleIndian", $context) ? $context["firstNameFemaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameFemaleIndian" does not exist.', 73, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 73, $this->source); })()), "html", null, true);
        echo " a/l ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 73, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 74
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleIndian"]) || array_key_exists("firstNameFemaleIndian", $context) ? $context["firstNameFemaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameFemaleIndian" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " a/l ";
        echo twig_escape_filter($this->env, (isset($context["firstNameMaleIndian"]) || array_key_exists("firstNameMaleIndian", $context) ? $context["firstNameMaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameMaleIndian" does not exist.', 74, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 74, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 75
        echo twig_escape_filter($this->env, (isset($context["firstNameFemaleIndian"]) || array_key_exists("firstNameFemaleIndian", $context) ? $context["firstNameFemaleIndian"] : (function () { throw new RuntimeError('Variable "firstNameFemaleIndian" does not exist.', 75, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 75, $this->source); })()), "html", null, true);
        echo "',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malay_people
     * @link https://samttar.edu.my/senarai-nama-pelajar-2016/
     * @link http://smkspkl.edu.my/senarai-nama-pelajar
     */
    protected static \$firstNameMaleMalay = array(
        'A','A.r','A\\'fif','A\\'zizul','Ab','Abadi','Abas','Abd','Abd.','Abd.rahim','Abdel','Abdul','Abdull','Abdullah','Abdulloh','Abu','Adam','Adi','Adib','Adil','Adnan','Ady','Adzmin','Afandy','Afif','Afiq','Afza','Agus','Ahmad','Ahmat','Ahmed','Ahwali','Ahyer','Aidid','Aidil','Aiman','Aimman','Ainol','Ainuddin','Ainul','Aizad','Aizam','Aizat','Aizuddin','Ajis','Ajmal','Ajwad','Akhmal','Akid','Akif','Akmal','Al','Al-afnan','Al-muazrar','Alfian','Ali','Alias','Alif','Aliff','Alilah','Alin','Allif','Amaanullah','Amami','Aman','Amar','Ameershah','Amier','Amierul','Amil','Amin','Aminuddin','Amir','Amiruddin','Amirul','Ammar','Amran','Amri','Amru','Amrullah','Amsyar','Anas','Andri','Aniq','Anuar','Anuwar','Anwar','Aqeel','Aqif','Aqil','Arash','Arbani','Arefin','Arief','Arif','Arifen','Ariff','Ariffin','Arifin','Armi','Ashraf','Ashraff','Ashrof','Ashrul','Aslam','Asmawi','Asmin','Asmuri','Asraf','Asri','Asrialif','Asror','Asrul','Asymawi','Asyraaf','Asyraf','Atan','Athari','Awaludin','Awira','Azam','Azely','Azfar','Azhan','Azhar','Azhari','Azib','Azim','Aziz','Azizan','Azizul','Azizulhasni','Azlan','Azlee','Azli','Azman','Azmi','Azmie','Azmin','Aznan','Aznizam','Azraai','Azri','Azrie','Azrien','Azril','Azrin','Azrul','Azry','Azuan',
        'Badri','Badrullesham','Baharin','Baharuddin','Bahrul','Bakri','Basaruddin','Basiran','Basirin','Basri','Basyir','Bazli','Borhan','Buang','Budi','Bukhari','Bukharudin','Bustaman','Buyung',
        'Chailan',
        'Dahalan','Dailami','Dan','Danial','Danie','Daniel','Danien','Danish','Darimin','Darul','Darus','Darwisy','Dhiyaulhaq','Diah','Djuhandie','Dolbahrin','Dolkefli','Dzikri','Dzul','Dzulfahmi','Dzulfikri','Dzulkarnaen',
        'Eazriq','Effendi','Ehza','Eizkandar','Ekhsan','Elyas','Enidzullah','Ezam','Ezani',
        'Fadhil','Fadly','Fadzil','Fadziruddin','Fadzli','Fahmi','Faiq','Fairuz','Faisal','Faiz','Faizal','Faizurrahman','Fakhrul','Fakhrullah','Farham','Farhan','Farid','Faris','Farisan','Fariz','Fasil','Fateh','Fathi','Fathuddin','Fathul','Fauzan','Fauzi','Fauzul','Fawwaz','Fazal','Fazly','Fazreen','Fazril','Fendi','Fikri','Fikrie','Fikrul','Firdaus','Fithri','Fitiri','Fitri','Fuad',
        'Ghazali',
        'Habib','Haddad','Hadi','Hadif','Hadzir','Haffize','Haffizi','Hafidzuddin','Hafis','Hafiy','Hafiz','Hafizan','Hafizhan','Hafizi','Hafizsyakirin','Hafizuddin','Haikal','Haiqal','Hairol','Hairollkahar','Hairuddin','Hairul','Hairun','Haisyraf','Haizan','Hakeem','Hakim','Hakimi','Hakimie','Halidan','Haliem','Halim','Hamdani','Hamidoon','Hamizan','Hamka','Hamzah','Hanafi','Hanif','Hanit','Hannan','Haqeem','Haqimie','Harez','Haris','Harith','Hariz','Harmaini','Harraz','Harun','Hasan','Hashim','Hasif','Hasnul','Hasrin','Hasrol','Hassan','Hasyim','Haszlan','Hayani','Hazim','Haziq','Haziqh','Hazrie','Hazrul','Hazwan','Hazzam','Helmy','Hermansah','Hidayat','Hidayatullah','Hilmi','Hisam','Hisammudin','Hisyam','Hj','Hoirussalam','Humadu','Hurmin','Husain','Husaini','Husnul','Hussein','Hussin','Huzaifi','Huzaimi','Huzzaini',
        'Ibnu','Ibrahim','Idham','Idlan','Idris','Idrus','Idzwan','Ielman','Ighfar','Ihsan','Ikhmal','Ikhwan','Ikmal','Ilham','Ilhan','Illias','Ilman','Iman','Imran','Indra','Innamul','Iqbal','Iqwan','Iraman','Irfan','Irman','Irsyad','Isa','Ishak','Ishaq','Iskandar','Isma','Ismail','Ismaon','Isyraq','Iwan','Iyad','Izam','Izdihar','Izlan','Izuhail','Izwan','Izz','Izzan','Izzat','Izzikry','Izzuddin','Izzul',
        'Ja\\'afer','Jaf','Jaferi','Jafree','Jafri','Jahari','Jalani','Jamal','Jamali','Jamalludin','Jamaluddin','Jamekon','Jamil','Jamsare','Jani','Jasin','Jasni','Jebat','Jefrie','Johari','Joharudin','Jumat','Junaidi',
        'Kamal','Kamaruddin','Kamarudin','Kamarul','Kamaruzain','Kamaruzaman','Kamaruzzaman','Kasim','Kasturi','Kemat','Khadzromi','Khairi','Khairil','Khairin','Khairiz','Khairol','Khairubi','Khairudin','Khairul','Khairulnizam','Khairun','Khairurrazi','Khalilul','Khasmadi','Khasri','Khatta','Khirul','Khoirul','Kholis','Khusaini','Khuzairey','Kutni',
        'Latiff','Lazim','Lokman','Loqman','Lufty','Lukman','Luqman','Luqmanul','Luthfi','Luthfie',
        'M.','Maamor','Madfaizal','Mahadhir','Mahatdir','Mahmusin','Mansor','Marlizam','Martonis','Mastura','Mat','Mazlan','Mazmin','Mazwan','Md','Md.','Megat','Meor','Midoon','Mie','Mikhail','Mirza','Misbun','Miskan','Misran','Miza','Mohlim','Mohmad','Mokhtar','Mokhzani','Moktar','Mu\\'izzuddin','Muazzam','Mubarak','Muhaimen','Muhaimi','Muhammad','Muhd','Muid','Muizzuddin','Muizzudin','Mukhtar','Mukhriz','Mukminin','Murad','Murshid','Mus\\'ab','Musa','Musiran','Muslim','Mustafa','Mustain','Mustaqim','Musyrif','Muszaphar','Muzami','Muzamil','Muzhafar','Muzzammil',
        'Na\\'imullah','Nabil','Naderi','Nadzeri','Naim','Najhan','Najib','Najmi','Nakimie','Naqib','Naqiuddin','Narul','Nasaruddin','Nashrul','Nasimuddin','Nasir','Nasiruddin','Nasri','Nasrizal','Nasruddin','Nasrul','Nasrullah','Naufal','Nawawi','Nazari','Nazaruddin','Nazarul','Nazeem','Nazeri','Nazhan','Nazim','Nazlan','Nazmi','Nazren','Nazri','Nazril','Nazrin','Nazrul','Nazzab','Ngadinin','Ngasiman','Ngatri','Nik','Nizam','Nizan','Nizar','Noor','Noordin','Noorizman','Nor','Norain','Norazman','Norazmi','Nordanish','Nordiarman','Nordin','Norfadli','Norfahmi','Norhakim','Norhan','Norhisham','Norsilan','Nur','Nur\\'irfaan','Nurakmal','Nurhanafi','Nurhazrul','Nurul','Nuwair','Nuzrul','Nuzul',
        'Omar','Omri','Osama','Osman','Othman',
        'Pauzi','Puadi','Putra',
        'Qairil','Qays','Qusyairi',
        'R','Radin','Radzi','Radzuan','Rafael','Raffioddin','Rafiee','Rafiq','Rafizal','Rahim','Raihan','Raja','Rakmat','Ramdan','Ramlan','Ramli','Rash','Rashdan','Rashid','Rashidi','Rasid','Raulah','Rausyan','Razak','Razali','Razemi','Razif','Razlan','Razuan','Redzuan','Redzuawan','Redzwan','Rehan','Rehman','Rezal','Ridhuan','Ridwan','Ridza','Ridzuan','Ridzwan','Rifqi','Rizal','Rizli','Rohaizad','Rohaizal','Rohman','Roosmadi','Roseli','Roslan','Roslee','Rosli','Roslin','Rosman','Rosnan','Rossafizal','Rozi','Rukaini','Rukmanihakim','Ruknuddin','Ruslan','Rusli','Rusman',
        'S.rozli','Sabana','Sabqi','Sabri','Sadili','Sadri','Saf\\'han','Saffrin','Safie','Safiy','Safrizal','Safuan','Safwan','Sahamudin','Saharil','Said','Saidan','Saidin','Saif','Saiful','Saifullah','Saifullizan','Saipol','Sakri','Salamon','Salihin','Salimi','Salleh','Samad','Samani','Sameer','Samiun','Samsul','Samsur','Sanorhizam','Sardine','Sarudin','Sarwati','Saufishazwi','Sazali','Selamat','Senon','Shafarizal','Shafie','Shafiq','Shah','Shahamirul','Shaharudin','Shaheila','Shaheizy','Shahfiq','Shahmi','Shahnon','Shahquzaifi','Shahril','Shahrin','Shahrizal','Shahrol','Shahru','Shahrul','Shahrulnaim','Shahrun','Shahrunizam','Shahzwan','Shaiful','Shaikh','Shakif','Shakir','Sham','Shameer','Shamhazli','Shamil','Shamizan','Shamizul','Shamsuddin','Shamsudin','Shamsul','Shamsuri','Shamsuzlynn','Shapiein','Sharafuddin','Shari','Sharif','Sharifuddin','Sharifudin','Sharil','Sharizal','Sharsham','Sharudin','Sharul','Shaugi','Shauqi','Shawal','Shazwan','Sheikh','Shmsul','Shohaimi','Shukri','Sirajuddin','Sofian','Sohaini','Solehen','Solekhan','Solleh','Sualman','Subbahi','Subkhiddin','Sudarrahman','Sudirman','Suhaimi','Sukarni','Sukhairi','Sukri','Sukymi','Sulaiman','Sulhan','Suzaili','Suzaman','Syafiq','Syahaziq','Syahid','Syahir','Syahmi','Syahrial','Syahriman','Syahru','Syahzuan','Syakir','Syakirin','Syakirul','Syamirul','Syamsol','Syaqirin','Syarafuddin','Syawal','Syawalludin','Syazani','Syazwan','Syed','Syid','Syukri','Syuqeri',
        'Tajuddin','Takiudin','Talha','Tarmizi','Tasripin','Taufek','Taufik','Tayib','Termizi','Thalahuddin','Thaqif','Tunan',
        'Umair','Umar','Usman',
        'W','Wafi','Wafiq','Wan','Wazir','Wazzirul','Wi',
        'Yani','Yaqzan','Yazid','Yunos','Yusaini','Yusfaisal','Yushafiq','Yusni','Yusof','Yusoff','Yusri','Yussof','Yusuf',
        'Zabayudin','Zabidi','Zahari','Zahid','Zahiruddin','Zahrul','Zaid','Zaidi','Zainal','Zaini','Zainodin','Zainordin','Zainuddin','Zainul','Zairy','Zaiyon','Zakaria','Zaki','Zakii','Zakri','Zakwan','Zambri','Zamre','Zamri','Zamrul','Zan','Zaqiyuddin','Zar\\'ai','Zarif','Zariq','Zarith','Zarul','Zaukepli','Zawawi','Zharaubi','Zikri','Zikril','Zikry','Zizi','Zol','Zolkifle','Zubair','Zubir','Zufayri','Zufrie','Zuheeryrizal','Zuhri','Zuki','Zul','Zulfadhli','Zulfadli','Zulfahmi','Zulfaqar','Zulfaqqar','Zulfikar','Zulhaikal','Zulhakim','Zulhakimi','Zulhelmi','Zulhilmi','Zulkapli','Zulkarnain','Zulkefli','Zulkfli','Zulkifli','Zulkipli','Zulman','Zuri'
    );
    protected static \$firstNameFemaleMalay = array(
        '\\'Abidah','\\'Alyaa','\\'Aqilah','\\'Atiqah','\\'Afiqah','\\'Alia','\\'Aqilah','A\\'ishah','A\\'in','A\\'zizah','Abdah','Abiatul','Adani','Adawiyah','Adha','Adharina','Adhwa','Adibah','Adilah','Adilla','Adina','Adini','Adira','Adlina','Adlyna','Adriana','Adzlyana','Afifa','Afifah','Afina','Afiqah','Afiza','Afrina','Afzan','Ahda','Aida','Aidatul','Aidila','Aifa','Aiman','Aimi','Aimuni','Ain','Aina','Ainaa','Ainaanasuha','Aini','Ainin','Ainn','Ainnaziha','Ainul','Ainun','Ainur','Airin','Aishah','Aisya','Aisyah','Aiza','Akmal','Aleeya','Aleeza','Aleya','Aleza','Alia','Aliaa','Aliah','Aliffa','Aliffatus','Alina','Alis','Alisya','Aliya','Alkubra','Alleisya','Ally','Alya','Alyaa','Amalia','Amalien','Amalin','Amalina','Amani','Amanina','Amiera','Aminy','Amira','Amirah','Amisha','Amrina','Amylia','Amyra','An-nur','Anas','Andani','Andi','Anesha','Ani','Aninafishah','Anis','Anisah','Anisha','Anissa','Aniza','Anna','Anne','Antaza','Aqeem','Aqeera','Aqila','Aqilah','Arfahrina','Ariana','Ariena','Ariessa','Arifah','Arina','Ariqah','Arissa','Arisya','Armira','Arwina','Aryani','Ashika','Ashriyana','Asiah','Asma\\'rauha','Asmaa\\'','Asmaleana','Asniati','Asnie','Asniza','Aswana','Asy','Asyiqin','Asykin','Athirah','Atifa','Atifah','Atifahajar','Atikah','Atiqa','Atiqah','Atirah','Atyqah','Auni','Awatif','Awatiff','Ayesha','Ayu','Ayuni','Ayunie','Az','Azashahira','Aziah','Aziemah','Azika','Azira','Azizah','Azliah','Azliatul','Azlin','Azlina','Azmina','Azni','Azrah','Azrina','Azua','Azuin','Azwa','Azwani','Azyan','Azyyati',
        'Badrina','Bahirah','Balqis','Basyirah','Batrisya','Batrisyia','Bilqis','Bismillah',
        'Camelia','Cempaka',
        'Dalila','Dalili','Damia','Dania','Danish','Darlina','Darwisyah','Deni','Dhani','\\'Dhiya','Diana','Dianah','Dini','Diyana','Diyanah','Dylaila',
        'Eizzah','Eliya','Ellynur','Elpiya','Elyana','Elysha','Ema','Emylia','Erika','Eva','Ezzatul',
        'Faathihah','Fadhilah','Fadzliana','Fahda','Fahimah','Fahira','Fairuz','Faizah','Faiznur','Faizyani','Fakhira','Falah','Faqihah','Fara','Faradieba','Farah','Faraheira','Farahin','Farahiyah','Farahtasha','Farha','Farhah','Farhana','Faridatul','Fariha','Farina','Farisah','Farisha','Farrah','Fartinah','Farzana','Fasehah','Fasha','Fateha','Fatehah','Fathiah','Fathiha','Fathihah','Fathimah','Fatiha','Fatihah','Fatimatul','Fatin','Fatini','Fauziah','Faza','Fazlina','Fezrina','Filza','Filzah','Firzanah','Fitrah','Fitri','Fitriah','Fizra',
        'Hadfina','Hadiyatul','Hafezah','Hafidzah','Hafieza','Hafizah','Hahizah','Hajar','Hakimah','Halimatul','Halimatussa\\'diah','Halisah','Hamira','Hamizah','Hana','Hanaani','Hanani','Hani','Hanim','Hanini','Hanis','Hanisah','Hanna','Hannan','Hannani','Hanni','Hanun','Harma','Hasmalinda','Hasya','Hasyimah','Hayani','Hayati','Hayatul','Hayaty','Hazira','Hazirah','Hazmeera','Hazwani','Hazwanie','Herlina','Herliyana','Hidayah','Hidzwati','Huda','Humaira','Hureen','Husna','Husnina',
        'Ida','Iffah','Iklil','Ili','Ilyana','Iman','Imelda','Insyira','Insyirah','Intan','\\'Irdhina','Irdina','\\'Irdina','Irsa','Iryani','\\'Isdmah','Islamiah','Isnur','Izaiti','Izati','Izatie','Izatul','Izaty','Izlin','\\'Izzah','Izzah','Izzani','Izzati','Izzatul','Izzaty','Izziani',
        'Jaf','Jajuenne','Jani','Jannah','Jannatul','Jaslina','Jihan','Ju','Julia','Juliana','Juliya',
        'Kamarlia','Kamelia','Kausthar','Kauthar','Khadijah','Khahirah','Khairina','Khairun','Khairunisa','Khairunnisa','Khairunnisak','Khaleeda','Khaleisya','Khaliesah','Khalisa','Khodijah',
        'Laila','Liana','Lina','Lisa','Liyana',
        'Madihah','Maheran','Mahfuzah','Mahirah','Maisara','Maisarah','Maizatul','Malihah','Mardhiah','Mariam','Marina','Mariska','Marlina','Marni','Maryam','Mas','Mashitah','Masitah','Mastura','Maswah','Masyikah','Masyitah','Maszlina','Mawaddah','Maya','Mazdiyana','Mazlyn','Melisa','Melissa','Mimi','Mira','Mirsha','Miskon','Miza','Muazzah','Mumtaz','Mursyidah','Muti\\'ah','Muyassarah','Muzainah','Mysara','Mysarah',
        'Nabihah','Nabila','Nabilah','Nabilla','Nabillah','Nadhilah','Nadhirah','Nadhrah','Nadia','Nadiah','Nadiatun','Nadilla','Nadira','Nadirah','Nadwah','Nadzirah','Nafisah','Nafizah','Najah','Najian','Najiha','Najihah','Najla','Najwa','Najwani','Naliny','Naqibahuda','Nashrah','Nashuha','Nasliha','Nasrin','Nasuha','Natasa','Natasha','Natasya','Nathasa','Natrah','Naurah','Nayli','Nazatul','Nazihah','Nazira','Nazirah','Nazura','Nazurah','Nikmah','Nina','Nisa','Nisak','Nisrina','Noorain','Noorazmiera','Noorfarzanah','Noornazratul','Norafizah','Norain','Noraisyah','Noralia','Noranisa','Noratasha','Nordhiya','Nordiana','Norelliana','Norerina','Norfaezah','Norfahanna','Norhafiza','Norhamiza','Norhidayah','Noridayu','Norliyana','Norsakinah','Norshaera','Norshahirah','Norshuhailah','Norsolehah','Norsuhana','Norsyafiqah','Norsyahirah','Norsyamimie','Norsyarah','Norsyazmira','Norsyazwani','Norsyuhada','Norul','Noryshah',
        'Nuradilah','Nurafifah','Nurafrina','Nurain','Nuraina','Nuralia','Nuraliah','Nuralifah','Nuralya','Nurani','Nuranisya','Nuraqilah','Nurarisha','Nurasyikin','Nuratiqah','Nuraveena','Nureen','Nurfaatihah','Nurfadlhlin','Nurfaizah','Nurfarah','Nurfarahin','Nurfarhana','Nurfarrah','Nurfatehah','Nurfatiha','Nurfatin','Nurfirzanah','Nurfitrah','Nurfizatul','Nurhafizah','Nurhajar','Nurhani','Nurhanida','Nurhanis','Nurhanisah','Nurhanna','Nurhawa','Nurhazwani','Nurhazzimah','Nurhidayah','Nurhidayatul','Nurhuda','Nurilyani','Nurin','Nurjazriena','Nurmuzdalifah','Nurnajiha','Nurnatasha','Nurnazhimah','Nurnazhirah','Nurqurratuain','Nursabrina','Nursahira','Nursarah','Nursarwindah','Nursham','Nurshammeza','Nursofiah','Nursuhaila','Nursyaffira','Nursyafika','Nursyahindah','Nursyakirah','Nursyarina','Nursyazwani','Nursyazwina','Nursyuhadah','Nurulhuda','Nurulsyahida','Nurun','Nurwadiyah','Nurwahidah','Nurzafira','Nurzarith','Nurzulaika',
        'Pesona','Puteri','Putri',
        'Qairina','Qamarina','Qasrina','Qhistina','Qistina','Quintasya','Qurratu','Qurratuaini','Qurratul',
        'Rabi\\'atul','Rabiatul','Rafidah','Rahiemah','Rahmah','Raihah','Raihana','Raihanah','Raja','Rashmi','Rasyaratul','Rasyiqah','Rasyiqqah','Raudatul','Ridiatul','Rieni','Rifhan','Rihhadatul','Ros','Rosalinda','Rosyadah','Rusyda','Rusydina',
        'Sa\\'adah','Saadiah','Sabrina','Safi','Safiah','Safiyah','Sahira','Saidatul','Sakinah','Sakirah','Salwa','Sameera','Sarah','Sarwati','Sasya','Serene','Sha','Shabariah','Shafiah','Shafiera','Shafikah','Shafinaz','Shafiqa','Shafiqah','Shah','Shahida','Shahidah','Shahiera','Shahila','Shahira','Shahirah','Shahrazy','Shahrina','Shakilah','Shakinah','Shalina','Shameera','Shamila','Shamimie','Shamira','Shar\\'fiera','Sharifah','Sharizah','Shauqina','Shayira','Shazana','Shazieda','Shazlien','Shazwana','Shazwani','Shonia','Shuhada','Siti','Siti','Siti','Siti','Siti','Siti','Sitti','Sofea','Sofeah','Soffia','Sofia','Sofiya','Sofiyah','Sofya','Solehah','Sopie','Suaidah','Suhada','Suhadah','Suhaida','Suhaila','Suhailah','Suhaina','Suhana','Suhani','Sulaiha','Sumayyah','Suraya','Suziyanis','Syaffea','Syafika','Syafikah','Syafina','Syafiqa','Syafiqah','Syafirah','Syafiyah','Syafiyana','Syahada','Syahadatullah','Syahera','Syaherah','Syahidah','Syahidatul','Syahiera','Syahira','Syahirah','Syahmimi','Syahmina','Syahzani','Syaidatul','Syairah','Syakila','Syakira','Syakirah','Syamien','Syamilah','Syamimi','Syamina','Syamirah','Syara','Syarafana','Syarafina','Syarah','Syarina','Syasyabila','Syauqina','Syaza','Syazana','Syazliya','Syazmin','Syazryana','Syazwana','Syazwani','Syazwanie','Syazwina','Syifa\\'','Syuhada','Syuhada`','Syuhaida','Syuhaidah',
        'Taqiah','Tasnim','Tengku','Tihany',
        'Umairah','Umi','Umira','Ummi',
        'Wadiha','Wafa','Waheeda','Wahida','Wahidah','Wan','Wardatul','Wardina','Wardinah','Wazira','Weni',
        'Yasmeen','Yasmin','Yetri','Yunalis','Yusra','Yusrinaa','Yusyilaaida',
        'Zaffan','Zafirah','Zaharah','Zahirah','Zahrah','Zahrak','Zaidalina','Zaidatulkhoiriyah','Zainab','Zainatul','Zakdatul','Zatalini','Zati','Zayani','Zeqafazri','Zilhaiza','Zubaidah','Zulaika','Zulaikha'
    );
    protected static \$lastNameMalay = array(
        '\\'Aizat','A\\'liyyuddin','Abas','Abdillah','Abdullah','Abidin','Adam','Adha','Adham','Adi','Adieka','Adip','Adli','Adnan','Adrus','Afandi','Afiq','Afizi','Afnan','Afsyal','Ahmad','Ahwali','Aidi','Aidil','Aiman','Aizad','Aizam','Aizat','Ajllin','Ajmal','Akashah','Akasyah','Akbar','Akhmal','Akid','Akif','Akmal','Al-amin','Al-hakim','Albukhary','Ali','Alias','Alif','Alimi','Aliuddin','Amaluddin','Amin','Aminnudin','Aminrullah','Aminuddin','Amiran','Amiruddin','Amirul','Amirullah','Ammar','Ammer','Amni','Amran','Amri','Amry','Amsyar','Amzah','Anam','Anaqi','Andalis','Anuar','Anwar','Apizan','Aqashah','Aqil','Arfan','Arfandi','Arias','Arief','Arif','Ariff','Ariffin','Arifin','Arifuddin','Arman','Arshad','Arziman','As','Asa','Ashraf','Ashraff','Asmadi','Asmar','Asmawi','Asri','Asyraf','Asyran','Asyrani','Aszahari','Awal','Awalluddin','Awaluddin','Awaludin','Awira','Ayyadi','Azahar','Azahari','Azam','Azhan','Azhar','Azhari','Azim','Aziz','Azizan','Azizi','Azizy','Azlan','Azlansyhah','Azli','Azlim','Azman','Azmee','Azmi','Azmin','Aznai','Azni','Azraai','Azrai','Azri','Azril','Azrin','Azriq','Azrul','Azuan',
        'Badrulhisham','Baha','Bahaman','Bahari','Baharin','Baharruddin','Baharuddin','Baharudin','Bahri','Bahrin','Bahrodin','Bakar','Bakri','Bakry','Bakti','Basaruddin','Bashah','Basri','Basyir','Batisah','Bella','Berman','Borhan','Buhari','Bukhari',
        'Chai',
        'Dahalan','Dahari','Dahlan','Daiman','Daneal','Daniael','Danial','Daniel','Danish','Darmawi','Daryusman','Daud','Dazila','Din','Dini','Djuhandie','Dolkefli','Draman','Dzikri','Dzolkefli','Dzulkifli','Dzullutfi',
        'Effendi','Effindi','Ekhsan','Elfin','Erfan',
        'Fadhil','Fadhilah','Fadil','Fadillah','Fadlullah','Fadzil','Faez','Fahi','Fahim','Fahmi','Fahmie','Fairos','Fairuz','Faiser','Faiz','Faizal','Faizul','Faizun','Fakhri','Fakhrurrazi','Fareesnizra','Fareez','Farhan','Farid','Farihan','Faris','Farris','Fathi','Fatullah','Faudzi','Fauzi','Fauzy','Fayyad','Fazal','Fazil','Fazira','Fikri','Firdaus','Firdoz','Fiteri','Fitri','Fuad','Fuart','Fuzi',
        'Garapar','Ghani','Ghazi',
        'Haddi','Hadi','Hadzis','Haeizan','Hafandi','Hafiz','Hafizam','Hafizee','Hafizh','Hafizi','Hafizuddin','Haidie','Haikal','Haiqal','Hairizan','Hairuddin','Hairulnizam','Hairunnezam','Haizam','Haizan','Hajar','Hakam','Hakiem','Hakim','Hakimi','Hakimie','Halib','Halil','Halim','Halin','Hamdan','Hamdani','Hamid','Hamidi','Hamizie','Hamizuddin','Hamjah','Hammani','Hamzah','Hanafi','Hanafia','Hanief','Hanif','Hanifah','Haniff','Hanim','Hapani','Haqim','Haqimi','Haramaini','Hardinal','Hariff','Haris','Harith','Hariz','Harmaini','Harman','Haron','Harris','Haruddin','Harun','Hasadi','Hasan','Hasbi','Hasbullah','Hashan','Hasif','Hasim','Hasmawi','Hasnan','Hasri','Hassan','Hassim','Hassimon','Haszlan','Hazambi','Hazaril','Hazim','Hazimie','Haziq','Hazizan','Hazlin','Hazre','Hazrin','Hazrol','Helmi','Hi\\'qal','Hikmee','Hilmi','Hisam','Hisham','Hishhram','Hizam','Husaini','Husin','Husna','Husni','Hussin','Huzaify','Huzain',
        'Ibrahim','Idham','Idris','\\'Iffat','Ifwat','Ikhmal','Ikhram','Ikhwan','Ikmal','Ikram','Ilman','Iman','Imran','Imtiyaz','Iqbal','Iqmal','Irfan','Irham','Irsyad','Is\\'ad','Isa','Isfarhan','Ishak','Ishsyal','Iskandar','Ismadi','Ismail','Ismayudin','Isroman','Isyrafi','Izad','Izam','Izani','Izman','Izwan','Izzat','Izzuddin','Izzudin',
        'Jainal','Jaini','Jamahari','Jamal','Jamaluddin','Jamaludin','Jaman','Jamri','Jani','Jasni','Jaya','Jeffri','Jefri','Jelani','Jemadin','Johan','Johari','Juhari','Jumat','Junaidi',
        'Kahar','Kamal','Kamaruddin','Kamarudin','Kamarul','Kamaruzaman','Kamil','Kamslian','Karzin','Kasim','Kasturi','Khafiz','Khairani','Khairuddin','Khaleed','Khaliq','Khan','Kharmain','Khatta','Khilmi','Khir-ruddin','Khirulrezal','Khusaini',
        'Latif','Latip','Lazim','Lukman',
        'Maarof','Mahadi','Mahat','Mahathir','Mahmudin','Mahmusin','Mahyuddin','Mahyus','Majid','Malek','Malik','Maliki','Mamhuri','Man','Manaf','Manan','Manap','Mansor','Margono','Martunus','Maruzi','Marzuki','Maserun','Maskor','Maslan','Maswari','Maszuni','Mazalan','Mazlan','Midali','Mikhail','Mirza','Miskan','Miskoulan','Mislan','Misnan','Mizan','Mohhidin','Mohsin','Mokhtar','Moktar','Molkan','Mon','Montahar','Mossanif','Mu','Muaddib','Muain','Muhaimi','Muhaimin','Muhdi','Muiz','Mujamek','Mukmin','Mukromin','Muneer','Muqriz','Murad','Murshed','Murshidi','Musa','Muslim','Musliman','Mustafa','Mustapha','Mustaqim','Musyrif','Mutaali','Mutalib','Muti\\'i','Muzamil','Muzammil',
        'Na\\'im','Nabil','Nadzri','Nafiz','Naim','Najhi','Najib','Najmi','Najmuddin','Naqiyuddin','Nasaruddin','Nashriq','Nasiman','Nasir','Nasrodin','Nasrullah','Naufal','Nawawi','Nazairi','Nazar','Nazarudin','Nazeri','Nazhan','Nazirin','Nazmi','Nazree','Nazri','Nazrin','Nazry','Ngadenan','Ngadun','Niszan','Nizam','Noh','Noor','Noordin','Noorhakim','Noorismadi','Noorizman','Nor','Noradhzmi','Noraffendi','Noraslan','Norazam','Norazim','Norazman','Norazmi','Nordin','Norhisam','Norhisham','Norizal','Norizan','Norlisam','Normansah','Norrizam','Norsilan','Norzamri','Nurfairuz','Nurhaliza','Nurnaim',
        'Omar','Osman','Othman',
        'Pa\\'aing','Pauzi','Pisol','Putra','Putra',
        'Qayum','Qayyum','Qayyuum','Qusyairi',
        'Ra\\'ais','Radzi','Raffioddin','Raffiq','Rafi','Rafizal','Rahamad','Rahim','Rahman','Rahmat','Rais','Raizal','Raman','Ramdan','Ramdzan','Ramlan','Ramlee','Ramli','Ramly','Rani','Ranjit','Raqi','Rashid','Rashidi','Rashidin','Rasid','Rassid','Rasyid','Razak','Razali','Raze','Razi','Razin','Razlan','Razman','Redha','Redzuan','Rembli','Remi','Ridduan','Ridhwan','Ridzuan','Ridzwan','Rifin','Rifqi','Rifqie','Rithwan','Rizal','Rizuan','Rizwan','Robani','Rohaizan','Rohem','Rohman','Ros','Rosdan','Roshman','Roslan','Roslee','Rosli','Rosly','Rosmawi','Rosnan','Rossaimi','Rostam','Rostan','Roszainal','Rozi','Rubi','Rusdi','Ruslan','Rusli','Rustam','Rusyaidi',
        'Sa\\'ari','Saad','Sabaruddin','Sabarudin','Sabki','Sabri','Sabrie','Safee','Saffuan','Safie','Safingi','Safrifarizal','Safrizal','Safwan','Sahidi','Sahril','Sahroni','Saifuddin','Saifudin','Saifulzakher','Saifuzin','Saihun','Saizol','Sakdon','Sakri','Salam','Saleh','Salehudin','Salim','Salleh','Salman','Sam','Samad','Samae','Samah','Saman','Samsani','Samsuddin','Samsul','Samsuri','Sandha','Sani','Sanorhizam','Sapuan','Sarim','Satar','Saudi','Sazali','Sedek','Selamat','Senon','Sha\\'ril','Shabana','Shafei','Shafie','Shafiq','Shah','Shaharuddin','Shaharudin','Shahiman','Shahrazy','Shahrizan','Shaidi','Shaifuddin','Shaihuddin','Sham','Shameer','Shamizan','Shamsuddin','Shamsudin','Shamsul','Shapiein','Sharasan','Sharif','Sharifudin','Shariman','Sharin','Sharollizam','Sharum','Shazani','Shazman','Shmsul','Shobi','Shueib','Shukor','Shukri','Sidek','Sinuzulan','Soberi','Sobirin','Sofi','Solehin','Solekhan','Sonan','Suami','Subhi','Subzan','Sudirman','Sueib','Sufi','Sufian','Suhaimi','Suhiman','Sukarsek','Sulaiman','Sulong','Suraji','Surya','Sutrisno','Suz\\'ian','Suzaimi','Syafiq','Syafrin','Syahir','Syahmi','Syahril','Syahrin','Syakir','Syamil','Syauqi','Syazwan','Syukran','Syukri','Syuraih',
        'Tajudin','Takiudin','Talib','Taqiuddin','Tarjuddin','Tarmizi','Tarudin','Taufek','Thaqif','Tuah','Tukimin','Tumiran',
        'Ubaidillah','Ulum','Umar','Usman','Usri','Uzair',
        'Wafi','Wahab','Wahbillah','Wahid','Wahidan','Wahidin','Wardi','Wasil','Wazif','Wildani',
        'Ya\\'accob','Yaacob','Yaakob','Yaacup','Yacob','Yahaya','Yahya','Yajid','Yamani','Yanis','Yaqin','Yasin','Yazid','Yunus','Yusaini','Yusihasbi','Yusni','Yusof','Yusoff','Yusri','Yusrin','Yusseri','Yussof','Yusuf','Yuszelan','Yuzli',
        'Zafran','Zahani','Zahar','Zahareman','Zahari','Zahin','Zaid','Zaidi','Zailan','Zailani','Zaimi','Zaiminuddin','Zain','Zainal','Zaini','Zainorazman','Zainordin','Zainuddin','Zainudin','Zainul-\\'alam','Zainun','Zainuri','Zairi','Zairulaizam','Zakaria','Zaki','Zakir','Zakuan','Zakwan','Zam','Zamanhuri','Zamani','Zamhari','Zamran','Zamre','Zamree','Zamri','Zamzuri','Zani','Zar\\'ai','Zawawi','Zawi','Zazlan','Zehnei','Zhafran','Zihni','Zikry','Zin','Zizi','Zol','Zolkafeli','Zolkifli','Zuanuar','Zubair','Zubir','Zufayri','Zuhaili','Zuki','Zukri','Zulamin','Zulfadhli','Zulfikar','Zulfikri','Zulhazril','Zulhelmi','Zulkafli','Zulkanine','Zulkarnaen','Zulkefle','Zulkefli','Zulkernain','Zulkhairie','Zulkifli','Zulqurnainin','Zumali','Zuraidi','Zuri','Zuwairi',
    );
    
    /**
     * Note: The empty elements are for names without the title, chances increase by number of empty elements.
     * 
     * @link https://en.wikipedia.org/wiki/Muhammad_(name)
     */
    protected static \$muhammadName = array('', '', '', '', 'Mohamad ','Mohamed ','Mohammad ','Mohammed ','Muhamad ','Muhamed ','Muhammad ','Muhammed ','Muhammet ','Mohd ');
    /**
     * 
     * @link https://en.wikipedia.org/wiki/Noor_(name)
     */
    protected static \$nurName = array('', '', '', '', 'Noor ', 'Nor ', 'Nur ', 'Nur ', 'Nur ', 'Nurul ','Nuur ');

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_names#Haji_or_Hajjah
     */
    protected static \$haji = array('', '', '', '', 'Haji ', 'Hj ');
    protected static \$hajjah = array('', '', '', '', 'Hajjah ', 'Hjh ');

    /**
     * @link https://en.wikipedia.org/wiki/Malay_styles_and_titles
     */
    protected static \$titleMaleMalay = array('', '', '', '', '', '', 'Syed ','Wan ','Nik ','Che ');

    /**
     * Chinese family name or surname
     * 
     * @link https://en.wikipedia.org/wiki/List_of_common_Chinese_surnames
     * @link https://en.wikipedia.org/wiki/Hundred_Family_Surnames
     * 
     */
    protected static \$lastNameChinese = array(
        'An','Ang','Au','Au-Yong','Aun','Aw',
        'Bai','Ban','Bok','Bong',
        'Ch\\'ng','Cha','Chai','Cham','Chan','Chang','Cheah','Cheam','Chee','Chen','Cheng','Cheok','Cheong','Chew','Chia','Chiam','Chiang',
        'Chieng','Chiew','Chin','Ching','Chong','Choong','Chou','Chow','Choy','Chu','Chua','Chuah','Chung',
        'Dee','Die','Ding',
        'Ee','En','Eng','Er','Ewe',
        'Fam','Fan','Fang','Feng','Foo','Foong',
        'Gan','Gao','Gee','Gnai','Go','Goh','Gong','Guan','Gun',
        'H\\'ng','Hang','Hao','Haw','Hee','Heng','Hew','Hiew','Hii','Ho','Hoo','Hong','Hooi','Hui',
        'Jong',
        'Kam','Kang','Kar','Kee','Khoo','Khor','Khu','Kia','Kim','King','Ko','Koay','Koh','Kok','Kong','Kow','Kwok','Kwong','Ku','Kua','Kuan','Kum',
        'Lah','Lai','Lam','Lau','Law','Leau','Lee','Leng','Leong','Leow','Leung','Lew','Li','Lian','Liang','Liao','Liew','Lim','Ling','Liong','Liow',
        'Lo','Loh','Loi','Lok','Loke','Loo','Looi','Low','Lu','Luo','Lum','Lye',
        'Ma','Mah','Mak','Meng','Mok',
        'Neo','Neoh','New','Ng','Nga','Ngan','Ngeh','Ngeow','Ngo','Ngu','Nguei','Nii',
        'Ong','Oo','Ooi','Oon','Oong','OuYang',
        'P\\'ng','Pang','Phang','Phoon','Phor','Phua','Phuah','Poh','Poon',
        'Qian','Qu','Quah','Quak','Quan','Quek',
        'Sam','Sau','Seah','See','Seetho','Seng','Seoh','Seow','Shee','Shi','Shum','Sia','Siah','Siao','Siauw','Siaw','Siew','Sim','Sin','Sio','Siong','Siow','Siu','Soh','Song','Soo','Soon','Su','Sum',
        'T\\'ng','Tai','Tam','Tan','Tay','Tang','Tea','Tee','Teh','Tek','Teng','Teo','Teoh','Tern','Tew','Tey','Thang','Thew','Thong','Thoo','Thum','Thun','Ting','Tiong','Toh','Tong','Tse','Tung',
        'Vong',
        'Wah','Waiy','Wan','Wee','Wen','Wong','Woo','Woon','Wu',
        'Xia','Xiong','Xu',
        'Yam','Yao','Yiaw','Ying','Yip','Yang','Yap','Yau','Yee','Yen','Yeo','Yeoh','Yeong','Yeow','Yep','Yew','Yong','Yow','You','Yu','Yuan','Yuen',
        'Zhong','Zhang','Zheng','Zhu','Zu'
    );

    /**
     * Chinese second character
     * 
     * @link https://en.wikipedia.org/wiki/Chinese_given_name
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Cantonese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_politicians_of_Chinese_descent
     */
    protected static \$firstNameChinese = array(
        'Ah','Ai','Aik','An','Ann','Ang','Au','Aun','Aw',
        'Bae','Bai','Bak','Ban','Bang','Bao','Bau','Bee','Beh','Bei','Ben','Beng','Bi','Bik','Bin','Bing','Bo','Bok','Bong','Boo','Boon','Bow','Bu','Bui','Buk','Bun','Bung',
        'Cai','Car','Caw','Cee','Ceh','Cek','Cen','Cer',
        'Cha','Chah','Chai','Chak','Cham','Chan','Chang','Chao','Chap','Char','Chat','Chau','Chaw',
        'Chea','Cheah','Cheam','Chean','Cheang','Chee','Cheen','Chek','Chen','Cheng','Cheok','Cheong','Cher','Chet','Chew',
        'Chi','Chia','Chih','Chik','Chin','Ching','Chio','Chit','Chiu',
        'Cho','Choi','Chok','Chon','Chong','Choo','Chooi','Choon','Choong','Chor','Chou','Chow','Choy',
        'Chu','Chua','Chuah','Chuan','Chua','Chui','Chuk','Chum','Chun','Chung','Chuo','Chye',
        'Da','Dai','Dan','Dang','Dao','Dau','Dee','Deng','Di','Dim','Din','Ding','Diong','Do','Dong','Doo','Dou','Du','Dui','Duo',
        'Ee','Eh','En','Enn','Er','Ern','Eu','Ew',
        'Fa','Fah','Fai','Fam','Fan','Fang','Fat','Fatt','Fay','Faye','Fee','Fei','Fen','Feng','Fern','Fey','Fok','Fon','Fong','Foo','Foon','Foong','Fu','Fui','Fuk','Fun','Fung',
        'Gai','Gak','Gam','Gan','Gao','Gau','Gee','Gek','Geng','Gi','Giap','Gin','Git','Go','Goh','Gok','Gon','Gong','Goo','Goon','Gu','Gui','Guk','Gun','Gung','Gunn',
        'Ha','Haa','Hah','Hai','Han','Hang','Hao','Har','Haw','He','Hee','Hei','Hen','Heng','Heong','Her','Hew','Hi','Hii','Hin','Hing','Hiong','Hiu',
        'Ho','Hoe','Hoi','Hok','Hom','Hon','Hong','Hoo','Hooi','Hook','Hoon','Hoong','Hor','Hou','How','Hoy','Hu','Hua','Huan','Huang','Hue','Hui','Hun','Hung','Huo','Hup',
        'Jan','Jang','Jao','Jee','Jei','Jen','Jeng','Jeong','Jer','Jet','Jett','Jeu','Ji','Jia','Jian','Jiang','Jie','Jien','Jiet','Jim','Jin','Jing','Jio','Jiong','Jit','Jiu',
        'Jo','Joe','Jong','Joo','Joon','Joong','Joy','Ju','Jun','Jung','Jye',
        'Ka','Kaa','Kah','Kai','Kak','Kam','Kan','Kang','Kao','Kap','Kar','Kat','Kau','Kaw','Kay','Ke','Kean','Keang','Keat','Kee','Kei','Kek','Ken','Keng','Ker','Keu','Kew','Key',
        'Kha','Khai','Khan','Khang','Khar','Khaw','Khay','Khean','Kheang','Khee','Khi','Khia','Khian','Khiang','Kho','Khoh','Khoi','Khoo','Khor','Khu','Khum','Khung',
        'Ki','Kia','Kian','Kiang','Kiap','Kiat','Kien','Kiet','Kim','Kin','King','Kit','Ko','Koe','Koh','Koi','Kok','Kong','Koo','Koong','Koor','Kor','Kou','Kow','Koy',
        'Ku','Kua','Kuang','Kui','Kum','Kun','Kung','Kuo','Kuong','Kuu',
        'La','Lai','Lak','Lam','Lan','Lang','Lao','Lap','Lar','Lat','Lau','Law','Lay',
        'Le','Lea','Lean','Leang','Leat','Lee','Leen','Leet','Lei','Lein','Leik','Leiu','Lek','Len','Leng','Leon','Leong','Leow','Ler','Leu','Leung','Lew','Lex','Ley',
        'Li','Liah','Lian','Liang','Liao','Liat','Liau','Liaw','Lie','Liek','Liem','Lien','Liet','Lieu','Liew','Lih','Lik','Lim','Lin','Ling','Lio','Lion','Liong','Liow','Lip','Lit','Liu',
        'Lo','Loh','Loi','Lok','Long','Loo','Looi','Look','Loon','Loong','Lor','Lou','Low','Loy',
        'Lu','Lua','Lui','Luk','Lum','Lun','Lung','Luo','Lup','Luu',
        'Ma','Mae','Mag','Mah','Mai','Mak','Man','Mang','Mao','Mar','Mat','Mau','Maw','May','Me','Mea','Mee','Meg','Meh','Mei','Mek','Mel','Men','Meu','Mew',
        'Mi','Mie','Miin','Miing','Min','Ming','Miu','Mo','Moh','Moi','Mok','Mon','Mong','Moo','Moon','Moong','Mou','Mow','Moy','Mu','Mua','Mui','Mum','Mun','Muu',
        'Na','Naa','Nah','Nai','Nam','Nan','Nao','Nau','Nee','Nei','Neng','Neo','Neu','New','Nga','Ngah','Ngai','Ngan','Ngao','Ngau','Ngaw','Ngo','Ngu','Ni','Nian','Niang','Niao','Niau','Nien','Nik','Nin','Niu','Nong','Nyet',
        'Oh','Oi','Ong','Onn','Oo','Ooi',
        'Pah','Pai','Pak','Pam','Pan','Pang','Pao','Pat','Pau','Paw','Pay','Peh','Pei','Peik','Pek','Pen','Peng','Pey',
        'Phang','Pheng','Phong','Pik','Pin','Ping','Po','Poh','Pok','Pom','Pong','Pooi','Pou','Pow','Pu','Pua','Puah','Pui','Pun',
        'Qi','Qin','Qing','Qiu','Qu','Quan','Quay','Quen','Qui','Quek','Quok',
        'Rei','Ren','Rin','Ring','Rinn','Ron','Rong','Rou','Ru','Rui','Ruo',
        'Sai','Sam','San','Sang','Say','Sha','Shak','Sham','Shan','Shang','Shao','Shar','Shau','Shaw','Shay','She','Shea','Shee','Shei','Shek','Shen','Sher','Shew','Shey','Shi','Shia','Shian','Shiang','Shiao','Shie','Shih','Shik','Shim','Shin','Shing','Shio','Shiu',
        'Sho','Shok','Shong','Shoo','Shou','Show','Shu','Shui','Shuk','Shum','Shun','Shung','Shuo','Si','Sia','Siah','Siak','Siam','Sian','Siang','Siao','Siau','Siaw','Sien','Sieu','Siew','Sih','Sik','Sim','Sin','Sing','Sio','Siong','Siou','Siow','Sit','Siu',
        'So','Soh','Soi','Sok','Son','Song','Soo','Soon','Soong','Sou','Sow','Su','Suan','Suang','Sue','Suen','Sui','Suk','Sum','Sun','Sung','Suo',
        'Ta','Tai','Tak','Tam','Tan','Tang','Tao','Tar','Tat','Tatt','Tau','Tay','Tea','Teak','Tean','Tee','Teh','Tei','Tek','Ten','Teng','Teo','Teoh','Ter','Tet','Teu','Tew','Tey',
        'Tha','Thai','Tham','Thang','Thau','Thay','Thee','Theo','Ther','Thew','They','Thia','Thian','Thien','Tho','Thok','Thong','Thoo','Thor','Thou','Thu','Thuk','Thum','Thung','Thur','Ti','Tia','Tiah','Tiak','Tiam','Tian','Tiang','Tiek','Tien','Tik','Tim','Tin','Ting','Tio','Tiong','Tiu',
        'To','Toh','Tok','Tong','Too','Tor','Tou','Tow','Tu','Tuk','Tung',
        'Ung',
        'Vin','Von','Voon',
        'Wa','Wah','Wai','Wan','Wang','Way','Wee','Wei','Wen','Weng','Wey','Whay','Whey','Wi','Win','Wing','Wo','Woh','Woi','Wok','Won','Wong','Woo','Woon','Wu','Wui',
        'Xi','Xia','Xiah','Xian','Xiang','Xiao','Xiau','Xie','Xin','Xing','Xiong','Xiu','Xu','Xun',
        'Yam','Yan','Yang','Yao','Yat','Yatt','Yau','Yaw','Ye','Yee','Yen','Yeng','Yeo','Yeoh','Yeong','Yep','Yet','Yeu','Yew','Yi','Yih','Yii','Yik','Yin','Ying','Yip','Yit','Yo','Yok','Yon','Yong','Yoo','You','Yow','Yu','Yuan','Yue','Yuen','Yuet','Yuk','Yun','Yung','Yup','Yut','Yutt',
        'Za','Zai','Zang','Zao','Zau','Zea','Zeah','Zed','Zee','Zen','Zeng','Zeo','Zet',
        'Zha','Zhai','Zhan','Zhang','Zhao','Zhau','Zhee','Zhen','Zheng','Zhet','Zhi','Zhong','Zhu','Zhung',
        'Zi','Zia','Ziah','Ziak','Zian','Ziang','Ziao','Ziau','Zit','Zo','Zoe','Zou','Zu','Zui','Zuk','Zung',
    );

    /**
     * Chinese male third character
     * 
     * @link https://en.wikipedia.org/wiki/Chinese_given_name
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Cantonese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_politicians_of_Chinese_descent
     */
    protected static \$firstNameMaleChinese = array(
        'Aik','Ang','Au','Aun',
        'Bak','Ban','Bang','Bao','Bau','Ben','Beng','Bing','Bok','Bong','Boo','Boon','Bow','Buk','Bun','Bung',
        'Chai','Chak','Chan','Chang','Chao','Chap','Chat','Chau','Chaw',
        'Cheah','Chee','Cheen','Chek','Chen','Cheong','Cher','Chet','Chew',
        'Chia','Chih','Chik','Chin','Ching','Chit','Chiu',
        'Cho','Choi','Chok','Chon','Chong','Choo','Chooi','Choon','Choong','Chor','Chou','Chow','Choy',
        'Chua','Chuah','Chuan','Chua','Chui','Chuk','Chum','Chun','Chung','Chuo','Chye',
        'Dan','Dao','Dau','Dee','Deng','Di','Dim','Din','Diong','Dong','Dou','Du','Dui','Duo',
        'Eu','Ew',
        'Fai','Fam','Fat','Fatt','Fee','Feng','Fok','Fon','Fong','Foo','Foon','Foong','Fu','Fui','Fuk',
        'Gai','Gak','Gam','Gan','Gao','Gau','Gee','Gek','Geng','Giap','Gin','Git','Go','Goh','Gok','Gon','Gong','Gu','Guk','Gun','Gung','Gunn',
        'Hai','Han','Hang','Har','Haw','Hei','Hen','Heng','Hing',
        'Ho','Hoe','Hoi','Hok','Hom','Hon','Hong','Hoo','Hook','Hoon','Hoong','Hor','Hou','How','Hoy','Hu','Huan','Huang','Hun','Hung','Huo','Hup',
        'Jeong','Jer','Jet','Jett','Jeu','Ji','Jian','Jiang','Jiet','Jim','Jin','Jio','Jiong','Jit','Jiu','Jo','Joe','Joong','Jung','Jye',
        'Kai','Kan','Kang','Kao','Kap','Kau','Kaw','Kean','Keang','Keat','Kek','Ken','Keng','Ker','Keu','Kew',
        'Khai','Khan','Khang','Khaw','Khean','Kheang','Khia','Khian','Khiang','Kho','Khoh','Khoi','Khoo','Khu','Khung',
        'Kia','Kian','Kiang','Kiap','Kiat','Kien','Kiet','Kin','King','Kit','Ko','Koi','Kok','Kong','Koo','Koong','Koor','Kou','Kow','Koy',
        'Ku','Kuang','Kui','Kun','Kung','Kuo','Kuong','Kuu',
        'Lak','Lam','Lang','Lao','Lap','Lar','Lat','Lau','Law',
        'Lean','Leang','Leat','Lee','Leet','Leik','Leiu','Lek','Len','Leon','Leong','Leow','Leung','Lew','Lex',
        'Liang','Liao','Liat','Liau','Liaw','Liek','Liem','Liet','Lieu','Liew','Lih','Lik','Lim','Lio','Lion','Liong','Liow','Lip','Lit','Liu',
        'Lo','Loh','Loi','Lok','Long','Loo','Looi','Look','Loon','Loong','Lor','Lou','Low','Loy',
        'Lu','Luk','Lum','Lun','Lung','Lup',
        'Man','Mang','Mao','Mar','Mat','Mau','Maw','Mek','Men',
        'Mo','Mok','Mon','Mong','Moong','Mou','Mow','Mu',
        'Nam','Nan','Nau','Neng','Neo','Neu','Ngai','Ngao','Ngau','Ngaw','Ngo','Niao','Niau','Nien','Nik','Niu','Nyet',
        'Oh','Oi','Ong','Onn','Oo',
        'Pah','Pai','Pak','Pang','Pao','Pat','Pau','Paw','Pen','Peng',
        'Phang','Pheng','Phong','Pok','Pou','Pow','Pu','Pua','Puah',
        'Quan','Quen','Quek','Quok',
        'Ren','Ron',
        'Sai','Sam','San','Sang','Shak','Sham','Shang','Shao','Shau','Shaw','Shek','Shen','Shiang','Shih','Shik','Shim','Shing','Shio','Shiu',
        'Sho','Shong','Shoo','Shou','Show','Shun','Shung','Shuo','Siam','Siang','Siau','Siaw','Sieu','Sih','Sik','Sing','Sio','Siong','Siou','Siow','Sit',
        'Son','Song','Soon','Soong','Sou','Sow','Suang','Sum','Sung','Suo',
        'Ta','Tak','Tan','Tang','Tao','Tar','Tat','Tatt','Tau','Teak','Tean','Tee','Teh','Tei','Tek','Ten','Teng','Teo','Teoh','Ter','Tet','Teu','Tew',
        'Tha','Thai','Tham','Thang','Thau','Thay','Thee','Theo','Ther','Thew','They','Thian','Thien','Tho','Thok','Thong','Thoo','Thor','Thou','Thu','Thuk','Thum','Thung','Thur','Tiak','Tiam','Tian','Tiang','Tiek','Tien','Tik','Tim','Tin','Tio','Tiong','Tiu',
        'To','Toh','Tok','Tong','Too','Tor','Tou','Tow','Tu','Tuk','Tung',
        'Ung',
        'Vin','Von',
        'Wa','Wah','Wai','Wang','Way','Wee','Wei','Weng','Whay','Win','Wing','Wo','Woh','Woi','Wok','Won','Wong','Woo','Wu','Wui',
        'Xiang','Xiong',
        'Yang','Yao','Yat','Yatt','Yau','Yaw','Ye','Yeng','Yeo','Yeoh','Yeong','Yet','Yih','Yii','Yik','Yip','Yit','Yo','Yok','Yon','Yong','Yoo','You','Yow','Yu','Yuen','Yuet','Yuk','Yut','Yutt',
        'Za','Zai','Zang','Zao','Zau','Zea','Zeah','Zed','Zee','Zen','Zeng','Zeo','Zet',
        'Zha','Zhai','Zhan','Zhang','Zhao','Zhau','Zhee','Zheng','Zhet','Zhong','Zhu','Zhung',
        'Ziak','Zian','Ziang','Ziao','Ziau','Zit','Zuk','Zung',
    );

    /**
     * Chinese female third character
     * 
     * @link https://en.wikipedia.org/wiki/Chinese_given_name
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Cantonese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_politicians_of_Chinese_descent
     */
    protected static \$firstNameFemaleChinese = array(
        'Ai','An','Ann','Aw',
        'Bae','Bai','Bee','Beh','Bei','Bi','Bik','Bin','Bui',
        'Cai','Cee','Cen','Cham','Cheam','Chean','Cheang','Cheng','Cheok','Chi','Ching','Chio','Chu',
        'Dai','Dang','Ding','Do','Doo',
        'Ee','En','Enn','Er','Ern',
        'Fah','Fan','Fang','Fay','Faye','Fei','Fen','Fern','Fey','Fong','Fun','Fung',
        'Gi','Goo','Goon','Gui',
        'Ha','Haa','Hah','Hao','He','Hee','Heong','Her','Hew','Hi','Hii','Hin','Hiong','Hiu','Hooi','Hua','Hue','Hui',
        'Jan','Jang','Jao','Jee','Jei','Jen','Jeng','Jia','Jie','Jien','Jing','Jong','Joo','Joon','Joy','Ju','Jun',
        'Ka','Kaa','Kah','Kak','Kam','Kar','Kat','Kay','Ke','Kee','Kei','Key',
        'Kha','Khar','Khay','Khee','Khi','Khor','Khum',
        'Ki','Kim','Koe','Koh','Kor','Kum','Kua',
        'Lai','Lan','Lay',
        'Le','Lea','Leen','Lei','Lein','Leng','Ler','Leu','Ley',
        'Li','Liah','Lian','Lie','Lien','Lin','Ling',
        'Lua','Lui','Luo','Luu',
        'Ma','Mae','Mag','Mah','Mai','Mak','May','Me','Mea','Mee','Meg','Meh','Mei','Mel','Meu','Mew',
        'Mi','Mie','Miin','Miing','Min','Ming','Miu','Moh','Moi','Moo','Moon','Moy','Mua','Mui','Mum','Mun','Muu',
        'Na','Naa','Nah','Nai','Nao','Nee','Nei','New','Nga','Ngah','Ngan','Ngu','Ni','Nian','Niang','Nin','Nong',
        'Ooi',
        'Pam','Pan','Pay','Peh','Pei','Peik','Pek','Pey','Pik','Pin','Ping','Po','Poh','Pom','Pong','Pooi','Pui','Pun',
        'Qi','Qin','Qing','Qiu','Qu','Quay','Qui',
        'Rei','Rin','Ring','Rinn','Rong','Rou','Ru','Rui','Ruo',
        'Say','Sha','Shan','Shar','Shay','She','Shea','Shee','Shei','Sher','Shew','Shey','Shi','Shia','Shian','Shiao','Shie','Shin',
        'Shok','Shu','Shui','Shuk','Shum','Si','Sia','Siah','Siak','Sian','Siao','Sien','Siew','Sim','Sin','Siu',
        'So','Soh','Soi','Sok','Soo','Su','Suan','Sue','Suen','Sui','Suk','Sun',
        'Tai','Tam','Tay','Tea','Teng','Tey','Thia','Ti','Tia','Tiah','Ting',
        'Voon',
        'Wan','Wen','Wey','Whey','Wi','Woon',
        'Xi','Xia','Xiah','Xian','Xiao','Xiau','Xie','Xin','Xing','Xiu','Xu','Xun',
        'Yam','Yan','Yee','Yen','Yep','Yeu','Yew','Yi','Yin','Ying','Yong','Yuan','Yue','Yuen','Yun','Yung','Yup',
        'Zhen','Zhi','Zi','Zia','Ziah','Zo','Zoe','Zou','Zu','Zui',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Cantonese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Chaoshanese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_English_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Hakka_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Hockchew_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Hokkien_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Peranakan_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_politicians_of_Chinese_descent
     */
    protected static \$firstNameMaleChristian = array(
        'Aaron','Addy','Adrian','Alex','Amos','Anthony',
        'Bernard','Billy',
        'Chris','Christopher','Colin',
        'Danell','Daniel','Danny','David','Douglas',
        'Eddie','Eddy','Edmund','Eric',
        'Francis','Frankie',
        'Gary','Gavin','George','Gregory',
        'Henry',
        'Isaac',
        'James','Jason','Jeff','Jeffrey','Jimmy','John','Jonathan','Josiah','Julian',
        'Kevin','Kris',
        'Mark','Martin','Mavin','Melvin','Michael',
        'Nathaniel','Nelson','Nicholas',
        'Peter','Philip',
        'Richard','Robert','Roger','Ronny','Rynn',
        'Shaun','Simon','Stephen','Steven',
        'Terry','Tony',
        'Victor','Vince','Vincent',
        'Welson','William','Willie',
    );
    protected static \$firstNameFemaleChristian = array(
        'Alice','Alyssa','Amber','Amy','Andrea','Angelica','Angie','Apple','Aslina',
        'Bernice','Betty','Boey','Bonnie',
        'Caemen','Carey','Carmen','Carrie','Cindy',
        'Debbie',
        'Elaine','Elena',
        'Felixia','Fish','Freya',
        'Genervie','Gin',
        'Hannah','Heidi','Helena',
        'Janet','Jemie','Jess','Jesseca','Jessie','Joanna','Jolene','Joyce','Juliana',
        'Karen','Kathleen',
        'Lilian','Linda','Lydia','Lyndel',
        'Maria','Marilyn','Maya','Meeia','Melinda','Melissa','Michelle','Michele',
        'Nadia','Natalie','Nicole',
        'Penny',
        'Phyllis',
        'Quincy',
        'Rachel','Rena','Rose',
        'Samantha','Sarah','Sheena','Sherine','Shevon','Sonia','Stella',
        'Teresa','Tiffany','Tracy','Tricia',
        'Vera','Violet','Vivian','Vivien',
        'Yvonne',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_politicians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_sportspeople_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/Tamil_Malaysians#Notable_people
     */
    protected static \$initialIndian = array(
        'B. ','B. C. ',
        'C. ',
        'D. ','D. R. ','D. S. ',
        'E. ',
        'G. ',
        'K. ','K. L. ','K. R.','K. S. ',
        'M. ','M. G. ','M. G. G. ','M. K. ',
        'N. ','N. K. ',
        'P. ',
        'R. ','R. G. ','R. S. ',
        'S. ','S. A. ',
        'T. ',
        'V. ','V. T. ',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/K._L._Devaser
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_politicians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_sportspeople_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/Tamil_Malaysians#Notable_people
     */
    protected static \$firstNameMaleIndian = array(
        'Anbil','Ananda','Arasu','Arul','Arulraj','Arumugam','Ash',
        'Babu','Balachandra','Balasubramaniam','Balden','Baljit','Baltej','Bishan',
        'Canagasabai','Cecil','Chakra','Chanturu',
        'Depan','Darma Raja','Devaki','Devamany','Devan','Devasagayam','Diljit','Doraisingam',
        'Ganesh','Ganga','Gengadharan','Gobalakrishnan','Gobind','Gopinathan','Govindasamy','Gunasekaran','Gurmit',
        'Haran','Harikrish','Hiresh','Huzir',
        'Indi',
        'Jagdeep','Janil','Jeevandran','Jegathesan','Jeyakumar','Jomo Kwame',
        'Kamal','Kamalanathan','Kanagaraj','Kandasamy','Kandiah','Karamjit','Karnail','Karpal','Kasi','Kasinather','Kavi','Kavidhai','Kishor','Krishen','Krishnamoorthy','Krishnamurthi','Krishnasamy','Kulasegaran','Kumar','Kumutha','Kuhan','Kunanlan','Kundan Lal','Kunjiraman',
        'Loganathan',
        'Magendran','Maha','Mahadev','Mahaletchumy','Mahathir','Maniam','Manickavasagam','Manikavasagam','Manjit','Manogaran','Manoharan','Manrick','Marimuthu','Merican','Mogan','Mohanadas','Munshi','Murugayan','Murugesan','Mutahir',
        'Nadarajan','Nandakumar','Nanthakumar','Naraina','Nethaji','Ninian',
        'Padathan','Palanivel','Param','Paramjit','Pavandeep','Praboo','Pragash','Premnath','Prema','Pria','Puvaneswaran',
        'Rabinder','Rajagobal','Rajesh','Rajeswary','Rajiv','Rakesh','Rama','Ramasamy','Ramesh','Ramkarpal','Ramon','Rattan','Ravichandran','Rehman','Renuga','Rohan','Rueben',
        'Saarvindran','Samy','Sanisvara','Sanjay','Santhara','Santokh','Sarath','Saravanan','Sarjit','Sasikumar','Satwant','Selvakkumar','Selvaraju','Serbegeth','Shan','Shankar','Shanmugam','Sittampalam','Sivakumar','Sivarasa','Solamalay','Sothinathan','Subramaniam','Sukhjit','Sumisha','Surendran','Suresh','Suriaprakash',
        'Tatparanandam','Tanasekharan','Thamboosamy','Thamil','Thayaparan','Thirumurugan','Thirunavuk',
        'Uthayakumar',
        'Varatharaju','Veenod','Veerappan','Veerappen','Veloo','Vasudevan','Vellu','Viatilingam','Vijandren','Vinod','Vishnu','Vivasvan',
        'Waythamoorthy','Weeratunge',
        'Yosri','Yugendran',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_politicians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_sportspeople_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/Tamil_Malaysians#Notable_people
     */
    protected static \$firstNameFemaleIndian = array(
        'Ambiga','Anaika','Anand','Anita','Asha','Athi',
        'Gheetha',
        'Haanii',
        'Janaky',
        'Kasthuriraani','Kavita','Kiran',
        'Melinder',
        'Nithya',
        'Prashanthini','Preeta','Priya','Pushpa',
        'Ramya','Rani','Rasammah','Renuga',
        'Sangeeta','Sannatasah','Saraswati','Shamini','Shanthi','Shanti','Shoba','Shuba','Siva','Sutheaswari','Swarna','Sybil',
        'Thanuja','Theiviya','Thripura',
        'Umasundari','Uthaya',
        'Vijaya',
        'Zabrina',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_politicians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_sportspeople_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/Tamil_Malaysians#Notable_people
     */
    protected static \$lastNameIndian = array(
        'Alagaratnam','Ambumamee','Ammasee','Ampalavanar','Ananthan','Arivanathan','Arujunan','Arumugam','Asirvatham','Autherapady',
        'Balakrishnan','Balan','Bamadhaj','Bastianpillai','Bhullar','Bhupalan',
        'Chandran','Cumaraswamy','Chelvan','Chengara',
        'Dairiam','Davies','Devaraj','Devandran','Devaser','Dhaliwal','Dharmalingam','Dhillon',
        'Elavarasan',
        'Fernandes','Fernandez',
        'Ganapathy','Ganesan','Gnanalingam','Goundar','Govindasamy','Gunalan','Gurusamy',
        'Haridas',
        'Iyer',
        'Jaidka','Jassal','Jayaram','Jayaseelan','Jayawardene','Jeevananthan',
        'Kaliappan','Kamalesvaran','Kandasamy','Karathu','Kathigasu','Kathiripillai','Kaveri','Kayveas','Krishnan','Krishnasamy','Kumar','Kumaresan','Kumari','Kunalan','Kundargal','Kuppusamy',
        'Lakshmi','Linggam','Lourdenadin',
        'Madhavan','Mahathevan','Malayalam','Manicka','Manikavasagam','Marimuthu','Menon','Mohinder','Moorthy','Mudukasan','Muniandy','Munisamy','Munusamy','Murugan','Murugeson',
        'Nadarajah','Nagapan','Nagappan','Nagaraj','Nagarajan','Nahappan','Naidu','Nair','Namasivayam','Narayan','Navaratnam','Navarednam','Nayar','Nijhar',
        'Pakiam','Palaniappan','Palanisamy','Panchanathan','Pandithan','Parthiban','Pathmanaban','Patto','Pereira','Perera','Periasamy','Perumal','Pillai','Pillay','Ponnusamy','Prakash','Puaneswaran','Purushothaman','Puspanathan','Puthucheary',
        'Raj Kaur','Rajakumar','Rajan','Rajannaidu','Rajendra','Rajendran','Rajhans','Raju','Ramachandra','Ramadas','Ramadass','Ramanathan','Ramani','Ramasamy','Raj','Rao','Rasiah','Ratnam','Ravindran','Rayer','Retinam','Rishyakaran','Robbat',
        'Sachithanandan','Sakadivan','Sakwati','Samarasan','Sambanthan','Sandrakasi','Sangalimuthu','Saniru','Sankar','Saravanan','Sathasivam','Sathianathan','Saunthararajah','Seenivasagam','Sekhar','Sellan','Selvanayagam','Selvarajoo','Selvaratnam','Shanmuganathan','Shanmugaratnam','Shekhar','Shivraj','Shree','Sidhu','Sinnandavar','Sinnathamby','Sinnathuray','Sivanesan','Singh','Sivalingam','Sivanesan','Shankar','Sodhy','Somasundram','Sooryapparad','Soti','Sreenevasan','Subramaniam','Sundram','Suppiah','Surendran',
        'Thajudeen','Thalalla','Thambu','Thanabalasingam','Thanenthiran','Theseira','Thevandran','Thiru','Thirunavukarasu','Thivy','Thuraisingham','Tikaram',
        'Vadaketh','Vadiveloo','Vanajah','Varman','Vasudevan','Veeran','Veerasamy','Veerasenan','Veerathan','Veetil','Velappan','Vello','Vengatarakoo','Vethamuthu','Viswalingam',
        'Xavier',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malay_styles_and_titles
     */
    protected static \$titleMale = array('En.','Dr.','Prof.','Datuk','Dato\\'','Datuk Seri','Dato\\' Sri','Tan Sri','Tun');
    protected static \$titleFemale = array('Pn.','Cik','Dr.','Prof.','Datin','Datin Paduka','Datin Paduka Seri','Puan Sri','Toh Puan');

    /**
     * Return a Malay male first name
     * 
     * @example 'Ahmad'
     * 
     * @return string
     */
    public static function firstNameMaleMalay()
    {
        return static::randomElement(static::\$firstNameMaleMalay);
    }

    /**
     * Return a Malay female first name
     * 
     * @example 'Adibah'
     * 
     * @return string
     */
    public static function firstNameFemaleMalay()
    {
        return static::randomElement(static::\$firstNameFemaleMalay);
    }

    /**
     * Return a Malay last name
     * 
     * @example 'Abdullah'
     * 
     * @return string
     */
    public function lastNameMalay()
    {
        return static::randomElement(static::\$lastNameMalay);
    }

    /**
     * Return a Malay male 'Muhammad' name
     * 
     * @example 'Muhammad'
     * 
     * @return string
     */
    public static function muhammadName()
    {
        return static::randomElement(static::\$muhammadName);
    }

    /**
     * Return a Malay female 'Nur' name
     * 
     * @example 'Nur'
     * 
     * @return string
     */
    public static function nurName()
    {
        return static::randomElement(static::\$nurName);
    }

    /**
     * Return a Malay male 'Haji' title
     * 
     * @example 'Haji'
     * 
     * @return string
     */
    public static function haji()
    {
        return static::randomElement(static::\$haji);
    }

    /**
     * Return a Malay female 'Hajjah' title
     * 
     * @example 'Hajjah'
     * 
     * @return string
     */
    public static function hajjah()
    {
        return static::randomElement(static::\$hajjah);
    }

    /**
     * Return a Malay title
     * 
     * @example 'Syed'
     * 
     * @return string
     */
    public static function titleMaleMalay()
    {
        return static::randomElement(static::\$titleMaleMalay);
    }

    /**
     * Return a Chinese last name
     * 
     * @example 'Lim'
     * 
     * @return string
     */
    public static function lastNameChinese()
    {
        return static::randomElement(static::\$lastNameChinese);
    }

    /**
     * Return a Chinese male first name
     * 
     * @example 'Goh Tong'
     * 
     * @return string
     */
    public static function firstNameMaleChinese()
    {
        return static::randomElement(static::\$firstNameChinese) . ' ' . static::randomElement(static::\$firstNameMaleChinese);
    }

    /**
     * Return a Chinese female first name
     * 
     * @example 'Mew Choo'
     * 
     * @return string
     */
    public static function firstNameFemaleChinese()
    {
        return static::randomElement(static::\$firstNameChinese) . ' ' . static::randomElement(static::\$firstNameFemaleChinese);
    }

    /**
     * Return a Christian male name
     * 
     * @example 'Aaron'
     * 
     * @return string
     */
    public static function firstNameMaleChristian()
    {
        return static::randomElement(static::\$firstNameMaleChristian);
    }

    /**
     * Return a Christian female name
     * 
     * @example 'Alice'
     * 
     * @return string
     */
    public static function firstNameFemaleChristian()
    {
        return static::randomElement(static::\$firstNameFemaleChristian);
    }

    /**
     * Return an Indian initial
     * 
     * @example 'S. '
     * 
     * @return string
     */
    public static function initialIndian()
    {
        return static::randomElement(static::\$initialIndian);
    }

    /**
     * Return an Indian male first name
     * 
     * @example 'Arumugam'
     * 
     * @return string
     */
    public static function firstNameMaleIndian()
    {
        return static::randomElement(static::\$firstNameMaleIndian);
    }

    /**
     * Return an Indian female first name
     * 
     * @example 'Ambiga'
     * 
     * @return string
     */
    public static function firstNameFemaleIndian()
    {
        return static::randomElement(static::\$firstNameFemaleIndian);
    }

    /**
     * Return an Indian last name
     * 
     * @example 'Subramaniam'
     * 
     * @return string
     */
    public static function lastNameIndian()
    {
        return static::randomElement(static::\$lastNameIndian);
    }

    /**
     * Return a random last name
     * 
     * @example 'Lee'
     * 
     * @return string
     */
    public function lastName()
    {
        \$formats = array(
            '";
        // line 757
        echo twig_escape_filter($this->env, (isset($context["lastNameMalay"]) || array_key_exists("lastNameMalay", $context) ? $context["lastNameMalay"] : (function () { throw new RuntimeError('Variable "lastNameMalay" does not exist.', 757, $this->source); })()), "html", null, true);
        echo "',
            '";
        // line 758
        echo twig_escape_filter($this->env, (isset($context["lastNameChinese"]) || array_key_exists("lastNameChinese", $context) ? $context["lastNameChinese"] : (function () { throw new RuntimeError('Variable "lastNameChinese" does not exist.', 758, $this->source); })()), "html", null, true);
        echo "',
            '";
        // line 759
        echo twig_escape_filter($this->env, (isset($context["lastNameIndian"]) || array_key_exists("lastNameIndian", $context) ? $context["lastNameIndian"] : (function () { throw new RuntimeError('Variable "lastNameIndian" does not exist.', 759, $this->source); })()), "html", null, true);
        echo "',
        );

        return \$this->generator->parse(static::randomElement(\$formats));
    }

    /**
     * Return a Malaysian I.C. No.
     * 
     * @example '890123-45-6789'
     * 
     * @link https://en.wikipedia.org/wiki/Malaysian_identity_card#Structure_of_the_National_Registration_Identity_Card_Number_(NRIC)
     * 
     * @param string|null      \$gender 'male', 'female' or null for any
     * @param bool|string|null \$hyphen true, false, or any separator characters
     * 
     * @return string
     */
    public static function myKadNumber(\$gender = null, \$hyphen = false)
    {
        // year of birth
        \$yy = mt_rand(0, 99);

        // month of birth
        \$mm = DateTime::month();

        // day of birth
        \$dd = DateTime::dayOfMonth();

        // place of birth (1-59 except 17-20)
        while (in_array((\$pb = mt_rand(1, 59)), array(17, 18, 19, 20))) {
        };

        // random number
        \$nnn = mt_rand(0, 999);

        // gender digit. Odd = MALE, Even = FEMALE
        \$g = mt_rand(0, 9);
        //Credit: https://gist.github.com/mauris/3629548
        if (\$gender === static::GENDER_MALE) {
            \$g = \$g | 1;
        } elseif (\$gender === static::GENDER_FEMALE) {
            \$g = \$g & ~1;
        }

        // formatting with hyphen
        if (\$hyphen === true) {
            \$hyphen = \"-\";
        } else if (\$hyphen === false) {
            \$hyphen = \"\";
        }

        return sprintf(\"%02d%02d%02d%s%02d%s%03d%01d\", \$yy, \$mm, \$dd, \$hyphen, \$pb, \$hyphen, \$nnn, \$g);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Person.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1118 => 759,  1114 => 758,  1110 => 757,  423 => 75,  413 => 74,  405 => 73,  397 => 72,  391 => 71,  386 => 70,  381 => 69,  372 => 67,  366 => 66,  360 => 65,  354 => 64,  348 => 63,  342 => 62,  332 => 60,  323 => 59,  312 => 58,  304 => 57,  293 => 56,  282 => 55,  269 => 54,  256 => 46,  246 => 45,  238 => 44,  230 => 43,  224 => 42,  218 => 41,  212 => 40,  203 => 38,  197 => 37,  191 => 36,  185 => 35,  179 => 34,  173 => 33,  162 => 31,  152 => 30,  140 => 29,  131 => 28,  119 => 27,  107 => 26,  93 => 25,  82 => 17,  78 => 16,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
namespace Faker\\Provider\\ms_MY;

use Faker\\Provider\\DateTime;
use Faker\\Generator;

class Person extends \\Faker\\Provider\\Person
{
    protected static \$firstNameFormat = array(
        '{{firstNameMaleMalay}}',
        '{{firstNameFemaleMalay}}',
        '{{firstNameMaleChinese}}',
        '{{firstNameFemaleChinese}}',
        '{{firstNameMaleIndian}}',
        '{{firstNameFemaleIndian}}',
        '{{firstNameMaleChristian}}',
        '{{firstNameFemaleChristian}}',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_names
     */
    protected static \$maleNameFormats = array(
        //Malay
        '{{muhammadName}}{{haji}}{{titleMaleMalay}}{{firstNameMaleMalay}} {{lastNameMalay}} bin {{titleMaleMalay}}{{firstNameMaleMalay}} {{lastNameMalay}}',
        '{{muhammadName}}{{haji}}{{titleMaleMalay}}{{firstNameMaleMalay}} {{lastNameMalay}} bin {{titleMaleMalay}}{{firstNameMaleMalay}}',
        '{{muhammadName}}{{haji}}{{titleMaleMalay}}{{firstNameMaleMalay}} {{lastNameMalay}} bin {{titleMaleMalay}}{{lastNameMalay}}',
        '{{muhammadName}}{{haji}}{{titleMaleMalay}}{{firstNameMaleMalay}} {{lastNameMalay}}',
        '{{muhammadName}}{{haji}}{{titleMaleMalay}}{{firstNameMaleMalay}} bin {{titleMaleMalay}}{{firstNameMaleMalay}} {{lastNameMalay}}',
        '{{muhammadName}}{{haji}}{{titleMaleMalay}}{{firstNameMaleMalay}} bin {{titleMaleMalay}}{{firstNameMaleMalay}}',
        '{{muhammadName}}{{haji}}{{titleMaleMalay}}{{firstNameMaleMalay}} bin {{titleMaleMalay}}{{lastNameMalay}}',
        //Chinese
        '{{lastNameChinese}} {{firstNameMaleChinese}}',
        '{{lastNameChinese}} {{firstNameMaleChinese}}',
        '{{lastNameChinese}} {{firstNameMaleChinese}}',
        '{{lastNameChinese}} {{firstNameMaleChinese}}',
        '{{lastNameChinese}} {{firstNameMaleChinese}}',
        '{{firstNameMaleChristian}} {{lastNameChinese}} {{firstNameMaleChinese}}',
        //Indian
        '{{initialIndian}} {{firstNameMaleIndian}}',
        '{{initialIndian}} {{lastNameIndian}}',
        '{{firstNameMaleIndian}} a/l {{firstNameMaleIndian}}',
        '{{firstNameMaleIndian}} a/l {{firstNameMaleIndian}} {{lastNameIndian}}',
        '{{firstNameMaleIndian}} {{lastNameIndian}} a/l {{lastNameIndian}}',
        '{{firstNameMaleIndian}} {{lastNameIndian}} a/l {{firstNameMaleIndian}} {{lastNameIndian}}',
        '{{firstNameMaleIndian}} {{lastNameIndian}}',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_names
     */
    protected static \$femaleNameFormats = array(
        //Malay
        '{{nurName}}{{hajjah}}{{firstNameFemaleMalay}} {{lastNameMalay}} binti {{titleMaleMalay}}{{firstNameMaleMalay}} {{lastNameMalay}}',
        '{{nurName}}{{hajjah}}{{firstNameFemaleMalay}} {{lastNameMalay}} binti {{titleMaleMalay}}{{firstNameMaleMalay}}',
        '{{nurName}}{{hajjah}}{{firstNameFemaleMalay}} {{lastNameMalay}} binti {{titleMaleMalay}}{{lastNameMalay}}',
        '{{nurName}}{{hajjah}}{{firstNameFemaleMalay}} {{lastNameMalay}}',
        '{{nurName}}{{hajjah}}{{firstNameFemaleMalay}} binti {{titleMaleMalay}}{{firstNameMaleMalay}} {{lastNameMalay}}',
        '{{nurName}}{{hajjah}}{{firstNameFemaleMalay}} binti {{titleMaleMalay}}{{firstNameMaleMalay}}',
        '{{nurName}}{{hajjah}}{{firstNameFemaleMalay}} binti {{titleMaleMalay}}{{lastNameMalay}}',
        //Chinese
        '{{lastNameChinese}} {{firstNameFemaleChinese}}',
        '{{lastNameChinese}} {{firstNameFemaleChinese}}',
        '{{lastNameChinese}} {{firstNameFemaleChinese}}',
        '{{lastNameChinese}} {{firstNameFemaleChinese}}',
        '{{lastNameChinese}} {{firstNameFemaleChinese}}',
        '{{firstNameFemaleChristian}} {{lastNameChinese}} {{firstNameFemaleChinese}}',
        //Indian
        '{{initialIndian}}{{firstNameFemaleIndian}}',
        '{{initialIndian}}{{lastNameIndian}}',
        '{{firstNameFemaleIndian}} a/l {{firstNameMaleIndian}}',
        '{{firstNameFemaleIndian}} a/l {{firstNameMaleIndian}} {{lastNameIndian}}',
        '{{firstNameFemaleIndian}} {{lastNameIndian}} a/l {{firstNameMaleIndian}}',
        '{{firstNameFemaleIndian}} {{lastNameIndian}} a/l {{firstNameMaleIndian}} {{lastNameIndian}}',
        '{{firstNameFemaleIndian}} {{lastNameIndian}}',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malay_people
     * @link https://samttar.edu.my/senarai-nama-pelajar-2016/
     * @link http://smkspkl.edu.my/senarai-nama-pelajar
     */
    protected static \$firstNameMaleMalay = array(
        'A','A.r','A\\'fif','A\\'zizul','Ab','Abadi','Abas','Abd','Abd.','Abd.rahim','Abdel','Abdul','Abdull','Abdullah','Abdulloh','Abu','Adam','Adi','Adib','Adil','Adnan','Ady','Adzmin','Afandy','Afif','Afiq','Afza','Agus','Ahmad','Ahmat','Ahmed','Ahwali','Ahyer','Aidid','Aidil','Aiman','Aimman','Ainol','Ainuddin','Ainul','Aizad','Aizam','Aizat','Aizuddin','Ajis','Ajmal','Ajwad','Akhmal','Akid','Akif','Akmal','Al','Al-afnan','Al-muazrar','Alfian','Ali','Alias','Alif','Aliff','Alilah','Alin','Allif','Amaanullah','Amami','Aman','Amar','Ameershah','Amier','Amierul','Amil','Amin','Aminuddin','Amir','Amiruddin','Amirul','Ammar','Amran','Amri','Amru','Amrullah','Amsyar','Anas','Andri','Aniq','Anuar','Anuwar','Anwar','Aqeel','Aqif','Aqil','Arash','Arbani','Arefin','Arief','Arif','Arifen','Ariff','Ariffin','Arifin','Armi','Ashraf','Ashraff','Ashrof','Ashrul','Aslam','Asmawi','Asmin','Asmuri','Asraf','Asri','Asrialif','Asror','Asrul','Asymawi','Asyraaf','Asyraf','Atan','Athari','Awaludin','Awira','Azam','Azely','Azfar','Azhan','Azhar','Azhari','Azib','Azim','Aziz','Azizan','Azizul','Azizulhasni','Azlan','Azlee','Azli','Azman','Azmi','Azmie','Azmin','Aznan','Aznizam','Azraai','Azri','Azrie','Azrien','Azril','Azrin','Azrul','Azry','Azuan',
        'Badri','Badrullesham','Baharin','Baharuddin','Bahrul','Bakri','Basaruddin','Basiran','Basirin','Basri','Basyir','Bazli','Borhan','Buang','Budi','Bukhari','Bukharudin','Bustaman','Buyung',
        'Chailan',
        'Dahalan','Dailami','Dan','Danial','Danie','Daniel','Danien','Danish','Darimin','Darul','Darus','Darwisy','Dhiyaulhaq','Diah','Djuhandie','Dolbahrin','Dolkefli','Dzikri','Dzul','Dzulfahmi','Dzulfikri','Dzulkarnaen',
        'Eazriq','Effendi','Ehza','Eizkandar','Ekhsan','Elyas','Enidzullah','Ezam','Ezani',
        'Fadhil','Fadly','Fadzil','Fadziruddin','Fadzli','Fahmi','Faiq','Fairuz','Faisal','Faiz','Faizal','Faizurrahman','Fakhrul','Fakhrullah','Farham','Farhan','Farid','Faris','Farisan','Fariz','Fasil','Fateh','Fathi','Fathuddin','Fathul','Fauzan','Fauzi','Fauzul','Fawwaz','Fazal','Fazly','Fazreen','Fazril','Fendi','Fikri','Fikrie','Fikrul','Firdaus','Fithri','Fitiri','Fitri','Fuad',
        'Ghazali',
        'Habib','Haddad','Hadi','Hadif','Hadzir','Haffize','Haffizi','Hafidzuddin','Hafis','Hafiy','Hafiz','Hafizan','Hafizhan','Hafizi','Hafizsyakirin','Hafizuddin','Haikal','Haiqal','Hairol','Hairollkahar','Hairuddin','Hairul','Hairun','Haisyraf','Haizan','Hakeem','Hakim','Hakimi','Hakimie','Halidan','Haliem','Halim','Hamdani','Hamidoon','Hamizan','Hamka','Hamzah','Hanafi','Hanif','Hanit','Hannan','Haqeem','Haqimie','Harez','Haris','Harith','Hariz','Harmaini','Harraz','Harun','Hasan','Hashim','Hasif','Hasnul','Hasrin','Hasrol','Hassan','Hasyim','Haszlan','Hayani','Hazim','Haziq','Haziqh','Hazrie','Hazrul','Hazwan','Hazzam','Helmy','Hermansah','Hidayat','Hidayatullah','Hilmi','Hisam','Hisammudin','Hisyam','Hj','Hoirussalam','Humadu','Hurmin','Husain','Husaini','Husnul','Hussein','Hussin','Huzaifi','Huzaimi','Huzzaini',
        'Ibnu','Ibrahim','Idham','Idlan','Idris','Idrus','Idzwan','Ielman','Ighfar','Ihsan','Ikhmal','Ikhwan','Ikmal','Ilham','Ilhan','Illias','Ilman','Iman','Imran','Indra','Innamul','Iqbal','Iqwan','Iraman','Irfan','Irman','Irsyad','Isa','Ishak','Ishaq','Iskandar','Isma','Ismail','Ismaon','Isyraq','Iwan','Iyad','Izam','Izdihar','Izlan','Izuhail','Izwan','Izz','Izzan','Izzat','Izzikry','Izzuddin','Izzul',
        'Ja\\'afer','Jaf','Jaferi','Jafree','Jafri','Jahari','Jalani','Jamal','Jamali','Jamalludin','Jamaluddin','Jamekon','Jamil','Jamsare','Jani','Jasin','Jasni','Jebat','Jefrie','Johari','Joharudin','Jumat','Junaidi',
        'Kamal','Kamaruddin','Kamarudin','Kamarul','Kamaruzain','Kamaruzaman','Kamaruzzaman','Kasim','Kasturi','Kemat','Khadzromi','Khairi','Khairil','Khairin','Khairiz','Khairol','Khairubi','Khairudin','Khairul','Khairulnizam','Khairun','Khairurrazi','Khalilul','Khasmadi','Khasri','Khatta','Khirul','Khoirul','Kholis','Khusaini','Khuzairey','Kutni',
        'Latiff','Lazim','Lokman','Loqman','Lufty','Lukman','Luqman','Luqmanul','Luthfi','Luthfie',
        'M.','Maamor','Madfaizal','Mahadhir','Mahatdir','Mahmusin','Mansor','Marlizam','Martonis','Mastura','Mat','Mazlan','Mazmin','Mazwan','Md','Md.','Megat','Meor','Midoon','Mie','Mikhail','Mirza','Misbun','Miskan','Misran','Miza','Mohlim','Mohmad','Mokhtar','Mokhzani','Moktar','Mu\\'izzuddin','Muazzam','Mubarak','Muhaimen','Muhaimi','Muhammad','Muhd','Muid','Muizzuddin','Muizzudin','Mukhtar','Mukhriz','Mukminin','Murad','Murshid','Mus\\'ab','Musa','Musiran','Muslim','Mustafa','Mustain','Mustaqim','Musyrif','Muszaphar','Muzami','Muzamil','Muzhafar','Muzzammil',
        'Na\\'imullah','Nabil','Naderi','Nadzeri','Naim','Najhan','Najib','Najmi','Nakimie','Naqib','Naqiuddin','Narul','Nasaruddin','Nashrul','Nasimuddin','Nasir','Nasiruddin','Nasri','Nasrizal','Nasruddin','Nasrul','Nasrullah','Naufal','Nawawi','Nazari','Nazaruddin','Nazarul','Nazeem','Nazeri','Nazhan','Nazim','Nazlan','Nazmi','Nazren','Nazri','Nazril','Nazrin','Nazrul','Nazzab','Ngadinin','Ngasiman','Ngatri','Nik','Nizam','Nizan','Nizar','Noor','Noordin','Noorizman','Nor','Norain','Norazman','Norazmi','Nordanish','Nordiarman','Nordin','Norfadli','Norfahmi','Norhakim','Norhan','Norhisham','Norsilan','Nur','Nur\\'irfaan','Nurakmal','Nurhanafi','Nurhazrul','Nurul','Nuwair','Nuzrul','Nuzul',
        'Omar','Omri','Osama','Osman','Othman',
        'Pauzi','Puadi','Putra',
        'Qairil','Qays','Qusyairi',
        'R','Radin','Radzi','Radzuan','Rafael','Raffioddin','Rafiee','Rafiq','Rafizal','Rahim','Raihan','Raja','Rakmat','Ramdan','Ramlan','Ramli','Rash','Rashdan','Rashid','Rashidi','Rasid','Raulah','Rausyan','Razak','Razali','Razemi','Razif','Razlan','Razuan','Redzuan','Redzuawan','Redzwan','Rehan','Rehman','Rezal','Ridhuan','Ridwan','Ridza','Ridzuan','Ridzwan','Rifqi','Rizal','Rizli','Rohaizad','Rohaizal','Rohman','Roosmadi','Roseli','Roslan','Roslee','Rosli','Roslin','Rosman','Rosnan','Rossafizal','Rozi','Rukaini','Rukmanihakim','Ruknuddin','Ruslan','Rusli','Rusman',
        'S.rozli','Sabana','Sabqi','Sabri','Sadili','Sadri','Saf\\'han','Saffrin','Safie','Safiy','Safrizal','Safuan','Safwan','Sahamudin','Saharil','Said','Saidan','Saidin','Saif','Saiful','Saifullah','Saifullizan','Saipol','Sakri','Salamon','Salihin','Salimi','Salleh','Samad','Samani','Sameer','Samiun','Samsul','Samsur','Sanorhizam','Sardine','Sarudin','Sarwati','Saufishazwi','Sazali','Selamat','Senon','Shafarizal','Shafie','Shafiq','Shah','Shahamirul','Shaharudin','Shaheila','Shaheizy','Shahfiq','Shahmi','Shahnon','Shahquzaifi','Shahril','Shahrin','Shahrizal','Shahrol','Shahru','Shahrul','Shahrulnaim','Shahrun','Shahrunizam','Shahzwan','Shaiful','Shaikh','Shakif','Shakir','Sham','Shameer','Shamhazli','Shamil','Shamizan','Shamizul','Shamsuddin','Shamsudin','Shamsul','Shamsuri','Shamsuzlynn','Shapiein','Sharafuddin','Shari','Sharif','Sharifuddin','Sharifudin','Sharil','Sharizal','Sharsham','Sharudin','Sharul','Shaugi','Shauqi','Shawal','Shazwan','Sheikh','Shmsul','Shohaimi','Shukri','Sirajuddin','Sofian','Sohaini','Solehen','Solekhan','Solleh','Sualman','Subbahi','Subkhiddin','Sudarrahman','Sudirman','Suhaimi','Sukarni','Sukhairi','Sukri','Sukymi','Sulaiman','Sulhan','Suzaili','Suzaman','Syafiq','Syahaziq','Syahid','Syahir','Syahmi','Syahrial','Syahriman','Syahru','Syahzuan','Syakir','Syakirin','Syakirul','Syamirul','Syamsol','Syaqirin','Syarafuddin','Syawal','Syawalludin','Syazani','Syazwan','Syed','Syid','Syukri','Syuqeri',
        'Tajuddin','Takiudin','Talha','Tarmizi','Tasripin','Taufek','Taufik','Tayib','Termizi','Thalahuddin','Thaqif','Tunan',
        'Umair','Umar','Usman',
        'W','Wafi','Wafiq','Wan','Wazir','Wazzirul','Wi',
        'Yani','Yaqzan','Yazid','Yunos','Yusaini','Yusfaisal','Yushafiq','Yusni','Yusof','Yusoff','Yusri','Yussof','Yusuf',
        'Zabayudin','Zabidi','Zahari','Zahid','Zahiruddin','Zahrul','Zaid','Zaidi','Zainal','Zaini','Zainodin','Zainordin','Zainuddin','Zainul','Zairy','Zaiyon','Zakaria','Zaki','Zakii','Zakri','Zakwan','Zambri','Zamre','Zamri','Zamrul','Zan','Zaqiyuddin','Zar\\'ai','Zarif','Zariq','Zarith','Zarul','Zaukepli','Zawawi','Zharaubi','Zikri','Zikril','Zikry','Zizi','Zol','Zolkifle','Zubair','Zubir','Zufayri','Zufrie','Zuheeryrizal','Zuhri','Zuki','Zul','Zulfadhli','Zulfadli','Zulfahmi','Zulfaqar','Zulfaqqar','Zulfikar','Zulhaikal','Zulhakim','Zulhakimi','Zulhelmi','Zulhilmi','Zulkapli','Zulkarnain','Zulkefli','Zulkfli','Zulkifli','Zulkipli','Zulman','Zuri'
    );
    protected static \$firstNameFemaleMalay = array(
        '\\'Abidah','\\'Alyaa','\\'Aqilah','\\'Atiqah','\\'Afiqah','\\'Alia','\\'Aqilah','A\\'ishah','A\\'in','A\\'zizah','Abdah','Abiatul','Adani','Adawiyah','Adha','Adharina','Adhwa','Adibah','Adilah','Adilla','Adina','Adini','Adira','Adlina','Adlyna','Adriana','Adzlyana','Afifa','Afifah','Afina','Afiqah','Afiza','Afrina','Afzan','Ahda','Aida','Aidatul','Aidila','Aifa','Aiman','Aimi','Aimuni','Ain','Aina','Ainaa','Ainaanasuha','Aini','Ainin','Ainn','Ainnaziha','Ainul','Ainun','Ainur','Airin','Aishah','Aisya','Aisyah','Aiza','Akmal','Aleeya','Aleeza','Aleya','Aleza','Alia','Aliaa','Aliah','Aliffa','Aliffatus','Alina','Alis','Alisya','Aliya','Alkubra','Alleisya','Ally','Alya','Alyaa','Amalia','Amalien','Amalin','Amalina','Amani','Amanina','Amiera','Aminy','Amira','Amirah','Amisha','Amrina','Amylia','Amyra','An-nur','Anas','Andani','Andi','Anesha','Ani','Aninafishah','Anis','Anisah','Anisha','Anissa','Aniza','Anna','Anne','Antaza','Aqeem','Aqeera','Aqila','Aqilah','Arfahrina','Ariana','Ariena','Ariessa','Arifah','Arina','Ariqah','Arissa','Arisya','Armira','Arwina','Aryani','Ashika','Ashriyana','Asiah','Asma\\'rauha','Asmaa\\'','Asmaleana','Asniati','Asnie','Asniza','Aswana','Asy','Asyiqin','Asykin','Athirah','Atifa','Atifah','Atifahajar','Atikah','Atiqa','Atiqah','Atirah','Atyqah','Auni','Awatif','Awatiff','Ayesha','Ayu','Ayuni','Ayunie','Az','Azashahira','Aziah','Aziemah','Azika','Azira','Azizah','Azliah','Azliatul','Azlin','Azlina','Azmina','Azni','Azrah','Azrina','Azua','Azuin','Azwa','Azwani','Azyan','Azyyati',
        'Badrina','Bahirah','Balqis','Basyirah','Batrisya','Batrisyia','Bilqis','Bismillah',
        'Camelia','Cempaka',
        'Dalila','Dalili','Damia','Dania','Danish','Darlina','Darwisyah','Deni','Dhani','\\'Dhiya','Diana','Dianah','Dini','Diyana','Diyanah','Dylaila',
        'Eizzah','Eliya','Ellynur','Elpiya','Elyana','Elysha','Ema','Emylia','Erika','Eva','Ezzatul',
        'Faathihah','Fadhilah','Fadzliana','Fahda','Fahimah','Fahira','Fairuz','Faizah','Faiznur','Faizyani','Fakhira','Falah','Faqihah','Fara','Faradieba','Farah','Faraheira','Farahin','Farahiyah','Farahtasha','Farha','Farhah','Farhana','Faridatul','Fariha','Farina','Farisah','Farisha','Farrah','Fartinah','Farzana','Fasehah','Fasha','Fateha','Fatehah','Fathiah','Fathiha','Fathihah','Fathimah','Fatiha','Fatihah','Fatimatul','Fatin','Fatini','Fauziah','Faza','Fazlina','Fezrina','Filza','Filzah','Firzanah','Fitrah','Fitri','Fitriah','Fizra',
        'Hadfina','Hadiyatul','Hafezah','Hafidzah','Hafieza','Hafizah','Hahizah','Hajar','Hakimah','Halimatul','Halimatussa\\'diah','Halisah','Hamira','Hamizah','Hana','Hanaani','Hanani','Hani','Hanim','Hanini','Hanis','Hanisah','Hanna','Hannan','Hannani','Hanni','Hanun','Harma','Hasmalinda','Hasya','Hasyimah','Hayani','Hayati','Hayatul','Hayaty','Hazira','Hazirah','Hazmeera','Hazwani','Hazwanie','Herlina','Herliyana','Hidayah','Hidzwati','Huda','Humaira','Hureen','Husna','Husnina',
        'Ida','Iffah','Iklil','Ili','Ilyana','Iman','Imelda','Insyira','Insyirah','Intan','\\'Irdhina','Irdina','\\'Irdina','Irsa','Iryani','\\'Isdmah','Islamiah','Isnur','Izaiti','Izati','Izatie','Izatul','Izaty','Izlin','\\'Izzah','Izzah','Izzani','Izzati','Izzatul','Izzaty','Izziani',
        'Jaf','Jajuenne','Jani','Jannah','Jannatul','Jaslina','Jihan','Ju','Julia','Juliana','Juliya',
        'Kamarlia','Kamelia','Kausthar','Kauthar','Khadijah','Khahirah','Khairina','Khairun','Khairunisa','Khairunnisa','Khairunnisak','Khaleeda','Khaleisya','Khaliesah','Khalisa','Khodijah',
        'Laila','Liana','Lina','Lisa','Liyana',
        'Madihah','Maheran','Mahfuzah','Mahirah','Maisara','Maisarah','Maizatul','Malihah','Mardhiah','Mariam','Marina','Mariska','Marlina','Marni','Maryam','Mas','Mashitah','Masitah','Mastura','Maswah','Masyikah','Masyitah','Maszlina','Mawaddah','Maya','Mazdiyana','Mazlyn','Melisa','Melissa','Mimi','Mira','Mirsha','Miskon','Miza','Muazzah','Mumtaz','Mursyidah','Muti\\'ah','Muyassarah','Muzainah','Mysara','Mysarah',
        'Nabihah','Nabila','Nabilah','Nabilla','Nabillah','Nadhilah','Nadhirah','Nadhrah','Nadia','Nadiah','Nadiatun','Nadilla','Nadira','Nadirah','Nadwah','Nadzirah','Nafisah','Nafizah','Najah','Najian','Najiha','Najihah','Najla','Najwa','Najwani','Naliny','Naqibahuda','Nashrah','Nashuha','Nasliha','Nasrin','Nasuha','Natasa','Natasha','Natasya','Nathasa','Natrah','Naurah','Nayli','Nazatul','Nazihah','Nazira','Nazirah','Nazura','Nazurah','Nikmah','Nina','Nisa','Nisak','Nisrina','Noorain','Noorazmiera','Noorfarzanah','Noornazratul','Norafizah','Norain','Noraisyah','Noralia','Noranisa','Noratasha','Nordhiya','Nordiana','Norelliana','Norerina','Norfaezah','Norfahanna','Norhafiza','Norhamiza','Norhidayah','Noridayu','Norliyana','Norsakinah','Norshaera','Norshahirah','Norshuhailah','Norsolehah','Norsuhana','Norsyafiqah','Norsyahirah','Norsyamimie','Norsyarah','Norsyazmira','Norsyazwani','Norsyuhada','Norul','Noryshah',
        'Nuradilah','Nurafifah','Nurafrina','Nurain','Nuraina','Nuralia','Nuraliah','Nuralifah','Nuralya','Nurani','Nuranisya','Nuraqilah','Nurarisha','Nurasyikin','Nuratiqah','Nuraveena','Nureen','Nurfaatihah','Nurfadlhlin','Nurfaizah','Nurfarah','Nurfarahin','Nurfarhana','Nurfarrah','Nurfatehah','Nurfatiha','Nurfatin','Nurfirzanah','Nurfitrah','Nurfizatul','Nurhafizah','Nurhajar','Nurhani','Nurhanida','Nurhanis','Nurhanisah','Nurhanna','Nurhawa','Nurhazwani','Nurhazzimah','Nurhidayah','Nurhidayatul','Nurhuda','Nurilyani','Nurin','Nurjazriena','Nurmuzdalifah','Nurnajiha','Nurnatasha','Nurnazhimah','Nurnazhirah','Nurqurratuain','Nursabrina','Nursahira','Nursarah','Nursarwindah','Nursham','Nurshammeza','Nursofiah','Nursuhaila','Nursyaffira','Nursyafika','Nursyahindah','Nursyakirah','Nursyarina','Nursyazwani','Nursyazwina','Nursyuhadah','Nurulhuda','Nurulsyahida','Nurun','Nurwadiyah','Nurwahidah','Nurzafira','Nurzarith','Nurzulaika',
        'Pesona','Puteri','Putri',
        'Qairina','Qamarina','Qasrina','Qhistina','Qistina','Quintasya','Qurratu','Qurratuaini','Qurratul',
        'Rabi\\'atul','Rabiatul','Rafidah','Rahiemah','Rahmah','Raihah','Raihana','Raihanah','Raja','Rashmi','Rasyaratul','Rasyiqah','Rasyiqqah','Raudatul','Ridiatul','Rieni','Rifhan','Rihhadatul','Ros','Rosalinda','Rosyadah','Rusyda','Rusydina',
        'Sa\\'adah','Saadiah','Sabrina','Safi','Safiah','Safiyah','Sahira','Saidatul','Sakinah','Sakirah','Salwa','Sameera','Sarah','Sarwati','Sasya','Serene','Sha','Shabariah','Shafiah','Shafiera','Shafikah','Shafinaz','Shafiqa','Shafiqah','Shah','Shahida','Shahidah','Shahiera','Shahila','Shahira','Shahirah','Shahrazy','Shahrina','Shakilah','Shakinah','Shalina','Shameera','Shamila','Shamimie','Shamira','Shar\\'fiera','Sharifah','Sharizah','Shauqina','Shayira','Shazana','Shazieda','Shazlien','Shazwana','Shazwani','Shonia','Shuhada','Siti','Siti','Siti','Siti','Siti','Siti','Sitti','Sofea','Sofeah','Soffia','Sofia','Sofiya','Sofiyah','Sofya','Solehah','Sopie','Suaidah','Suhada','Suhadah','Suhaida','Suhaila','Suhailah','Suhaina','Suhana','Suhani','Sulaiha','Sumayyah','Suraya','Suziyanis','Syaffea','Syafika','Syafikah','Syafina','Syafiqa','Syafiqah','Syafirah','Syafiyah','Syafiyana','Syahada','Syahadatullah','Syahera','Syaherah','Syahidah','Syahidatul','Syahiera','Syahira','Syahirah','Syahmimi','Syahmina','Syahzani','Syaidatul','Syairah','Syakila','Syakira','Syakirah','Syamien','Syamilah','Syamimi','Syamina','Syamirah','Syara','Syarafana','Syarafina','Syarah','Syarina','Syasyabila','Syauqina','Syaza','Syazana','Syazliya','Syazmin','Syazryana','Syazwana','Syazwani','Syazwanie','Syazwina','Syifa\\'','Syuhada','Syuhada`','Syuhaida','Syuhaidah',
        'Taqiah','Tasnim','Tengku','Tihany',
        'Umairah','Umi','Umira','Ummi',
        'Wadiha','Wafa','Waheeda','Wahida','Wahidah','Wan','Wardatul','Wardina','Wardinah','Wazira','Weni',
        'Yasmeen','Yasmin','Yetri','Yunalis','Yusra','Yusrinaa','Yusyilaaida',
        'Zaffan','Zafirah','Zaharah','Zahirah','Zahrah','Zahrak','Zaidalina','Zaidatulkhoiriyah','Zainab','Zainatul','Zakdatul','Zatalini','Zati','Zayani','Zeqafazri','Zilhaiza','Zubaidah','Zulaika','Zulaikha'
    );
    protected static \$lastNameMalay = array(
        '\\'Aizat','A\\'liyyuddin','Abas','Abdillah','Abdullah','Abidin','Adam','Adha','Adham','Adi','Adieka','Adip','Adli','Adnan','Adrus','Afandi','Afiq','Afizi','Afnan','Afsyal','Ahmad','Ahwali','Aidi','Aidil','Aiman','Aizad','Aizam','Aizat','Ajllin','Ajmal','Akashah','Akasyah','Akbar','Akhmal','Akid','Akif','Akmal','Al-amin','Al-hakim','Albukhary','Ali','Alias','Alif','Alimi','Aliuddin','Amaluddin','Amin','Aminnudin','Aminrullah','Aminuddin','Amiran','Amiruddin','Amirul','Amirullah','Ammar','Ammer','Amni','Amran','Amri','Amry','Amsyar','Amzah','Anam','Anaqi','Andalis','Anuar','Anwar','Apizan','Aqashah','Aqil','Arfan','Arfandi','Arias','Arief','Arif','Ariff','Ariffin','Arifin','Arifuddin','Arman','Arshad','Arziman','As','Asa','Ashraf','Ashraff','Asmadi','Asmar','Asmawi','Asri','Asyraf','Asyran','Asyrani','Aszahari','Awal','Awalluddin','Awaluddin','Awaludin','Awira','Ayyadi','Azahar','Azahari','Azam','Azhan','Azhar','Azhari','Azim','Aziz','Azizan','Azizi','Azizy','Azlan','Azlansyhah','Azli','Azlim','Azman','Azmee','Azmi','Azmin','Aznai','Azni','Azraai','Azrai','Azri','Azril','Azrin','Azriq','Azrul','Azuan',
        'Badrulhisham','Baha','Bahaman','Bahari','Baharin','Baharruddin','Baharuddin','Baharudin','Bahri','Bahrin','Bahrodin','Bakar','Bakri','Bakry','Bakti','Basaruddin','Bashah','Basri','Basyir','Batisah','Bella','Berman','Borhan','Buhari','Bukhari',
        'Chai',
        'Dahalan','Dahari','Dahlan','Daiman','Daneal','Daniael','Danial','Daniel','Danish','Darmawi','Daryusman','Daud','Dazila','Din','Dini','Djuhandie','Dolkefli','Draman','Dzikri','Dzolkefli','Dzulkifli','Dzullutfi',
        'Effendi','Effindi','Ekhsan','Elfin','Erfan',
        'Fadhil','Fadhilah','Fadil','Fadillah','Fadlullah','Fadzil','Faez','Fahi','Fahim','Fahmi','Fahmie','Fairos','Fairuz','Faiser','Faiz','Faizal','Faizul','Faizun','Fakhri','Fakhrurrazi','Fareesnizra','Fareez','Farhan','Farid','Farihan','Faris','Farris','Fathi','Fatullah','Faudzi','Fauzi','Fauzy','Fayyad','Fazal','Fazil','Fazira','Fikri','Firdaus','Firdoz','Fiteri','Fitri','Fuad','Fuart','Fuzi',
        'Garapar','Ghani','Ghazi',
        'Haddi','Hadi','Hadzis','Haeizan','Hafandi','Hafiz','Hafizam','Hafizee','Hafizh','Hafizi','Hafizuddin','Haidie','Haikal','Haiqal','Hairizan','Hairuddin','Hairulnizam','Hairunnezam','Haizam','Haizan','Hajar','Hakam','Hakiem','Hakim','Hakimi','Hakimie','Halib','Halil','Halim','Halin','Hamdan','Hamdani','Hamid','Hamidi','Hamizie','Hamizuddin','Hamjah','Hammani','Hamzah','Hanafi','Hanafia','Hanief','Hanif','Hanifah','Haniff','Hanim','Hapani','Haqim','Haqimi','Haramaini','Hardinal','Hariff','Haris','Harith','Hariz','Harmaini','Harman','Haron','Harris','Haruddin','Harun','Hasadi','Hasan','Hasbi','Hasbullah','Hashan','Hasif','Hasim','Hasmawi','Hasnan','Hasri','Hassan','Hassim','Hassimon','Haszlan','Hazambi','Hazaril','Hazim','Hazimie','Haziq','Hazizan','Hazlin','Hazre','Hazrin','Hazrol','Helmi','Hi\\'qal','Hikmee','Hilmi','Hisam','Hisham','Hishhram','Hizam','Husaini','Husin','Husna','Husni','Hussin','Huzaify','Huzain',
        'Ibrahim','Idham','Idris','\\'Iffat','Ifwat','Ikhmal','Ikhram','Ikhwan','Ikmal','Ikram','Ilman','Iman','Imran','Imtiyaz','Iqbal','Iqmal','Irfan','Irham','Irsyad','Is\\'ad','Isa','Isfarhan','Ishak','Ishsyal','Iskandar','Ismadi','Ismail','Ismayudin','Isroman','Isyrafi','Izad','Izam','Izani','Izman','Izwan','Izzat','Izzuddin','Izzudin',
        'Jainal','Jaini','Jamahari','Jamal','Jamaluddin','Jamaludin','Jaman','Jamri','Jani','Jasni','Jaya','Jeffri','Jefri','Jelani','Jemadin','Johan','Johari','Juhari','Jumat','Junaidi',
        'Kahar','Kamal','Kamaruddin','Kamarudin','Kamarul','Kamaruzaman','Kamil','Kamslian','Karzin','Kasim','Kasturi','Khafiz','Khairani','Khairuddin','Khaleed','Khaliq','Khan','Kharmain','Khatta','Khilmi','Khir-ruddin','Khirulrezal','Khusaini',
        'Latif','Latip','Lazim','Lukman',
        'Maarof','Mahadi','Mahat','Mahathir','Mahmudin','Mahmusin','Mahyuddin','Mahyus','Majid','Malek','Malik','Maliki','Mamhuri','Man','Manaf','Manan','Manap','Mansor','Margono','Martunus','Maruzi','Marzuki','Maserun','Maskor','Maslan','Maswari','Maszuni','Mazalan','Mazlan','Midali','Mikhail','Mirza','Miskan','Miskoulan','Mislan','Misnan','Mizan','Mohhidin','Mohsin','Mokhtar','Moktar','Molkan','Mon','Montahar','Mossanif','Mu','Muaddib','Muain','Muhaimi','Muhaimin','Muhdi','Muiz','Mujamek','Mukmin','Mukromin','Muneer','Muqriz','Murad','Murshed','Murshidi','Musa','Muslim','Musliman','Mustafa','Mustapha','Mustaqim','Musyrif','Mutaali','Mutalib','Muti\\'i','Muzamil','Muzammil',
        'Na\\'im','Nabil','Nadzri','Nafiz','Naim','Najhi','Najib','Najmi','Najmuddin','Naqiyuddin','Nasaruddin','Nashriq','Nasiman','Nasir','Nasrodin','Nasrullah','Naufal','Nawawi','Nazairi','Nazar','Nazarudin','Nazeri','Nazhan','Nazirin','Nazmi','Nazree','Nazri','Nazrin','Nazry','Ngadenan','Ngadun','Niszan','Nizam','Noh','Noor','Noordin','Noorhakim','Noorismadi','Noorizman','Nor','Noradhzmi','Noraffendi','Noraslan','Norazam','Norazim','Norazman','Norazmi','Nordin','Norhisam','Norhisham','Norizal','Norizan','Norlisam','Normansah','Norrizam','Norsilan','Norzamri','Nurfairuz','Nurhaliza','Nurnaim',
        'Omar','Osman','Othman',
        'Pa\\'aing','Pauzi','Pisol','Putra','Putra',
        'Qayum','Qayyum','Qayyuum','Qusyairi',
        'Ra\\'ais','Radzi','Raffioddin','Raffiq','Rafi','Rafizal','Rahamad','Rahim','Rahman','Rahmat','Rais','Raizal','Raman','Ramdan','Ramdzan','Ramlan','Ramlee','Ramli','Ramly','Rani','Ranjit','Raqi','Rashid','Rashidi','Rashidin','Rasid','Rassid','Rasyid','Razak','Razali','Raze','Razi','Razin','Razlan','Razman','Redha','Redzuan','Rembli','Remi','Ridduan','Ridhwan','Ridzuan','Ridzwan','Rifin','Rifqi','Rifqie','Rithwan','Rizal','Rizuan','Rizwan','Robani','Rohaizan','Rohem','Rohman','Ros','Rosdan','Roshman','Roslan','Roslee','Rosli','Rosly','Rosmawi','Rosnan','Rossaimi','Rostam','Rostan','Roszainal','Rozi','Rubi','Rusdi','Ruslan','Rusli','Rustam','Rusyaidi',
        'Sa\\'ari','Saad','Sabaruddin','Sabarudin','Sabki','Sabri','Sabrie','Safee','Saffuan','Safie','Safingi','Safrifarizal','Safrizal','Safwan','Sahidi','Sahril','Sahroni','Saifuddin','Saifudin','Saifulzakher','Saifuzin','Saihun','Saizol','Sakdon','Sakri','Salam','Saleh','Salehudin','Salim','Salleh','Salman','Sam','Samad','Samae','Samah','Saman','Samsani','Samsuddin','Samsul','Samsuri','Sandha','Sani','Sanorhizam','Sapuan','Sarim','Satar','Saudi','Sazali','Sedek','Selamat','Senon','Sha\\'ril','Shabana','Shafei','Shafie','Shafiq','Shah','Shaharuddin','Shaharudin','Shahiman','Shahrazy','Shahrizan','Shaidi','Shaifuddin','Shaihuddin','Sham','Shameer','Shamizan','Shamsuddin','Shamsudin','Shamsul','Shapiein','Sharasan','Sharif','Sharifudin','Shariman','Sharin','Sharollizam','Sharum','Shazani','Shazman','Shmsul','Shobi','Shueib','Shukor','Shukri','Sidek','Sinuzulan','Soberi','Sobirin','Sofi','Solehin','Solekhan','Sonan','Suami','Subhi','Subzan','Sudirman','Sueib','Sufi','Sufian','Suhaimi','Suhiman','Sukarsek','Sulaiman','Sulong','Suraji','Surya','Sutrisno','Suz\\'ian','Suzaimi','Syafiq','Syafrin','Syahir','Syahmi','Syahril','Syahrin','Syakir','Syamil','Syauqi','Syazwan','Syukran','Syukri','Syuraih',
        'Tajudin','Takiudin','Talib','Taqiuddin','Tarjuddin','Tarmizi','Tarudin','Taufek','Thaqif','Tuah','Tukimin','Tumiran',
        'Ubaidillah','Ulum','Umar','Usman','Usri','Uzair',
        'Wafi','Wahab','Wahbillah','Wahid','Wahidan','Wahidin','Wardi','Wasil','Wazif','Wildani',
        'Ya\\'accob','Yaacob','Yaakob','Yaacup','Yacob','Yahaya','Yahya','Yajid','Yamani','Yanis','Yaqin','Yasin','Yazid','Yunus','Yusaini','Yusihasbi','Yusni','Yusof','Yusoff','Yusri','Yusrin','Yusseri','Yussof','Yusuf','Yuszelan','Yuzli',
        'Zafran','Zahani','Zahar','Zahareman','Zahari','Zahin','Zaid','Zaidi','Zailan','Zailani','Zaimi','Zaiminuddin','Zain','Zainal','Zaini','Zainorazman','Zainordin','Zainuddin','Zainudin','Zainul-\\'alam','Zainun','Zainuri','Zairi','Zairulaizam','Zakaria','Zaki','Zakir','Zakuan','Zakwan','Zam','Zamanhuri','Zamani','Zamhari','Zamran','Zamre','Zamree','Zamri','Zamzuri','Zani','Zar\\'ai','Zawawi','Zawi','Zazlan','Zehnei','Zhafran','Zihni','Zikry','Zin','Zizi','Zol','Zolkafeli','Zolkifli','Zuanuar','Zubair','Zubir','Zufayri','Zuhaili','Zuki','Zukri','Zulamin','Zulfadhli','Zulfikar','Zulfikri','Zulhazril','Zulhelmi','Zulkafli','Zulkanine','Zulkarnaen','Zulkefle','Zulkefli','Zulkernain','Zulkhairie','Zulkifli','Zulqurnainin','Zumali','Zuraidi','Zuri','Zuwairi',
    );
    
    /**
     * Note: The empty elements are for names without the title, chances increase by number of empty elements.
     * 
     * @link https://en.wikipedia.org/wiki/Muhammad_(name)
     */
    protected static \$muhammadName = array('', '', '', '', 'Mohamad ','Mohamed ','Mohammad ','Mohammed ','Muhamad ','Muhamed ','Muhammad ','Muhammed ','Muhammet ','Mohd ');
    /**
     * 
     * @link https://en.wikipedia.org/wiki/Noor_(name)
     */
    protected static \$nurName = array('', '', '', '', 'Noor ', 'Nor ', 'Nur ', 'Nur ', 'Nur ', 'Nurul ','Nuur ');

    /**
     * @link https://en.wikipedia.org/wiki/Malaysian_names#Haji_or_Hajjah
     */
    protected static \$haji = array('', '', '', '', 'Haji ', 'Hj ');
    protected static \$hajjah = array('', '', '', '', 'Hajjah ', 'Hjh ');

    /**
     * @link https://en.wikipedia.org/wiki/Malay_styles_and_titles
     */
    protected static \$titleMaleMalay = array('', '', '', '', '', '', 'Syed ','Wan ','Nik ','Che ');

    /**
     * Chinese family name or surname
     * 
     * @link https://en.wikipedia.org/wiki/List_of_common_Chinese_surnames
     * @link https://en.wikipedia.org/wiki/Hundred_Family_Surnames
     * 
     */
    protected static \$lastNameChinese = array(
        'An','Ang','Au','Au-Yong','Aun','Aw',
        'Bai','Ban','Bok','Bong',
        'Ch\\'ng','Cha','Chai','Cham','Chan','Chang','Cheah','Cheam','Chee','Chen','Cheng','Cheok','Cheong','Chew','Chia','Chiam','Chiang',
        'Chieng','Chiew','Chin','Ching','Chong','Choong','Chou','Chow','Choy','Chu','Chua','Chuah','Chung',
        'Dee','Die','Ding',
        'Ee','En','Eng','Er','Ewe',
        'Fam','Fan','Fang','Feng','Foo','Foong',
        'Gan','Gao','Gee','Gnai','Go','Goh','Gong','Guan','Gun',
        'H\\'ng','Hang','Hao','Haw','Hee','Heng','Hew','Hiew','Hii','Ho','Hoo','Hong','Hooi','Hui',
        'Jong',
        'Kam','Kang','Kar','Kee','Khoo','Khor','Khu','Kia','Kim','King','Ko','Koay','Koh','Kok','Kong','Kow','Kwok','Kwong','Ku','Kua','Kuan','Kum',
        'Lah','Lai','Lam','Lau','Law','Leau','Lee','Leng','Leong','Leow','Leung','Lew','Li','Lian','Liang','Liao','Liew','Lim','Ling','Liong','Liow',
        'Lo','Loh','Loi','Lok','Loke','Loo','Looi','Low','Lu','Luo','Lum','Lye',
        'Ma','Mah','Mak','Meng','Mok',
        'Neo','Neoh','New','Ng','Nga','Ngan','Ngeh','Ngeow','Ngo','Ngu','Nguei','Nii',
        'Ong','Oo','Ooi','Oon','Oong','OuYang',
        'P\\'ng','Pang','Phang','Phoon','Phor','Phua','Phuah','Poh','Poon',
        'Qian','Qu','Quah','Quak','Quan','Quek',
        'Sam','Sau','Seah','See','Seetho','Seng','Seoh','Seow','Shee','Shi','Shum','Sia','Siah','Siao','Siauw','Siaw','Siew','Sim','Sin','Sio','Siong','Siow','Siu','Soh','Song','Soo','Soon','Su','Sum',
        'T\\'ng','Tai','Tam','Tan','Tay','Tang','Tea','Tee','Teh','Tek','Teng','Teo','Teoh','Tern','Tew','Tey','Thang','Thew','Thong','Thoo','Thum','Thun','Ting','Tiong','Toh','Tong','Tse','Tung',
        'Vong',
        'Wah','Waiy','Wan','Wee','Wen','Wong','Woo','Woon','Wu',
        'Xia','Xiong','Xu',
        'Yam','Yao','Yiaw','Ying','Yip','Yang','Yap','Yau','Yee','Yen','Yeo','Yeoh','Yeong','Yeow','Yep','Yew','Yong','Yow','You','Yu','Yuan','Yuen',
        'Zhong','Zhang','Zheng','Zhu','Zu'
    );

    /**
     * Chinese second character
     * 
     * @link https://en.wikipedia.org/wiki/Chinese_given_name
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Cantonese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_politicians_of_Chinese_descent
     */
    protected static \$firstNameChinese = array(
        'Ah','Ai','Aik','An','Ann','Ang','Au','Aun','Aw',
        'Bae','Bai','Bak','Ban','Bang','Bao','Bau','Bee','Beh','Bei','Ben','Beng','Bi','Bik','Bin','Bing','Bo','Bok','Bong','Boo','Boon','Bow','Bu','Bui','Buk','Bun','Bung',
        'Cai','Car','Caw','Cee','Ceh','Cek','Cen','Cer',
        'Cha','Chah','Chai','Chak','Cham','Chan','Chang','Chao','Chap','Char','Chat','Chau','Chaw',
        'Chea','Cheah','Cheam','Chean','Cheang','Chee','Cheen','Chek','Chen','Cheng','Cheok','Cheong','Cher','Chet','Chew',
        'Chi','Chia','Chih','Chik','Chin','Ching','Chio','Chit','Chiu',
        'Cho','Choi','Chok','Chon','Chong','Choo','Chooi','Choon','Choong','Chor','Chou','Chow','Choy',
        'Chu','Chua','Chuah','Chuan','Chua','Chui','Chuk','Chum','Chun','Chung','Chuo','Chye',
        'Da','Dai','Dan','Dang','Dao','Dau','Dee','Deng','Di','Dim','Din','Ding','Diong','Do','Dong','Doo','Dou','Du','Dui','Duo',
        'Ee','Eh','En','Enn','Er','Ern','Eu','Ew',
        'Fa','Fah','Fai','Fam','Fan','Fang','Fat','Fatt','Fay','Faye','Fee','Fei','Fen','Feng','Fern','Fey','Fok','Fon','Fong','Foo','Foon','Foong','Fu','Fui','Fuk','Fun','Fung',
        'Gai','Gak','Gam','Gan','Gao','Gau','Gee','Gek','Geng','Gi','Giap','Gin','Git','Go','Goh','Gok','Gon','Gong','Goo','Goon','Gu','Gui','Guk','Gun','Gung','Gunn',
        'Ha','Haa','Hah','Hai','Han','Hang','Hao','Har','Haw','He','Hee','Hei','Hen','Heng','Heong','Her','Hew','Hi','Hii','Hin','Hing','Hiong','Hiu',
        'Ho','Hoe','Hoi','Hok','Hom','Hon','Hong','Hoo','Hooi','Hook','Hoon','Hoong','Hor','Hou','How','Hoy','Hu','Hua','Huan','Huang','Hue','Hui','Hun','Hung','Huo','Hup',
        'Jan','Jang','Jao','Jee','Jei','Jen','Jeng','Jeong','Jer','Jet','Jett','Jeu','Ji','Jia','Jian','Jiang','Jie','Jien','Jiet','Jim','Jin','Jing','Jio','Jiong','Jit','Jiu',
        'Jo','Joe','Jong','Joo','Joon','Joong','Joy','Ju','Jun','Jung','Jye',
        'Ka','Kaa','Kah','Kai','Kak','Kam','Kan','Kang','Kao','Kap','Kar','Kat','Kau','Kaw','Kay','Ke','Kean','Keang','Keat','Kee','Kei','Kek','Ken','Keng','Ker','Keu','Kew','Key',
        'Kha','Khai','Khan','Khang','Khar','Khaw','Khay','Khean','Kheang','Khee','Khi','Khia','Khian','Khiang','Kho','Khoh','Khoi','Khoo','Khor','Khu','Khum','Khung',
        'Ki','Kia','Kian','Kiang','Kiap','Kiat','Kien','Kiet','Kim','Kin','King','Kit','Ko','Koe','Koh','Koi','Kok','Kong','Koo','Koong','Koor','Kor','Kou','Kow','Koy',
        'Ku','Kua','Kuang','Kui','Kum','Kun','Kung','Kuo','Kuong','Kuu',
        'La','Lai','Lak','Lam','Lan','Lang','Lao','Lap','Lar','Lat','Lau','Law','Lay',
        'Le','Lea','Lean','Leang','Leat','Lee','Leen','Leet','Lei','Lein','Leik','Leiu','Lek','Len','Leng','Leon','Leong','Leow','Ler','Leu','Leung','Lew','Lex','Ley',
        'Li','Liah','Lian','Liang','Liao','Liat','Liau','Liaw','Lie','Liek','Liem','Lien','Liet','Lieu','Liew','Lih','Lik','Lim','Lin','Ling','Lio','Lion','Liong','Liow','Lip','Lit','Liu',
        'Lo','Loh','Loi','Lok','Long','Loo','Looi','Look','Loon','Loong','Lor','Lou','Low','Loy',
        'Lu','Lua','Lui','Luk','Lum','Lun','Lung','Luo','Lup','Luu',
        'Ma','Mae','Mag','Mah','Mai','Mak','Man','Mang','Mao','Mar','Mat','Mau','Maw','May','Me','Mea','Mee','Meg','Meh','Mei','Mek','Mel','Men','Meu','Mew',
        'Mi','Mie','Miin','Miing','Min','Ming','Miu','Mo','Moh','Moi','Mok','Mon','Mong','Moo','Moon','Moong','Mou','Mow','Moy','Mu','Mua','Mui','Mum','Mun','Muu',
        'Na','Naa','Nah','Nai','Nam','Nan','Nao','Nau','Nee','Nei','Neng','Neo','Neu','New','Nga','Ngah','Ngai','Ngan','Ngao','Ngau','Ngaw','Ngo','Ngu','Ni','Nian','Niang','Niao','Niau','Nien','Nik','Nin','Niu','Nong','Nyet',
        'Oh','Oi','Ong','Onn','Oo','Ooi',
        'Pah','Pai','Pak','Pam','Pan','Pang','Pao','Pat','Pau','Paw','Pay','Peh','Pei','Peik','Pek','Pen','Peng','Pey',
        'Phang','Pheng','Phong','Pik','Pin','Ping','Po','Poh','Pok','Pom','Pong','Pooi','Pou','Pow','Pu','Pua','Puah','Pui','Pun',
        'Qi','Qin','Qing','Qiu','Qu','Quan','Quay','Quen','Qui','Quek','Quok',
        'Rei','Ren','Rin','Ring','Rinn','Ron','Rong','Rou','Ru','Rui','Ruo',
        'Sai','Sam','San','Sang','Say','Sha','Shak','Sham','Shan','Shang','Shao','Shar','Shau','Shaw','Shay','She','Shea','Shee','Shei','Shek','Shen','Sher','Shew','Shey','Shi','Shia','Shian','Shiang','Shiao','Shie','Shih','Shik','Shim','Shin','Shing','Shio','Shiu',
        'Sho','Shok','Shong','Shoo','Shou','Show','Shu','Shui','Shuk','Shum','Shun','Shung','Shuo','Si','Sia','Siah','Siak','Siam','Sian','Siang','Siao','Siau','Siaw','Sien','Sieu','Siew','Sih','Sik','Sim','Sin','Sing','Sio','Siong','Siou','Siow','Sit','Siu',
        'So','Soh','Soi','Sok','Son','Song','Soo','Soon','Soong','Sou','Sow','Su','Suan','Suang','Sue','Suen','Sui','Suk','Sum','Sun','Sung','Suo',
        'Ta','Tai','Tak','Tam','Tan','Tang','Tao','Tar','Tat','Tatt','Tau','Tay','Tea','Teak','Tean','Tee','Teh','Tei','Tek','Ten','Teng','Teo','Teoh','Ter','Tet','Teu','Tew','Tey',
        'Tha','Thai','Tham','Thang','Thau','Thay','Thee','Theo','Ther','Thew','They','Thia','Thian','Thien','Tho','Thok','Thong','Thoo','Thor','Thou','Thu','Thuk','Thum','Thung','Thur','Ti','Tia','Tiah','Tiak','Tiam','Tian','Tiang','Tiek','Tien','Tik','Tim','Tin','Ting','Tio','Tiong','Tiu',
        'To','Toh','Tok','Tong','Too','Tor','Tou','Tow','Tu','Tuk','Tung',
        'Ung',
        'Vin','Von','Voon',
        'Wa','Wah','Wai','Wan','Wang','Way','Wee','Wei','Wen','Weng','Wey','Whay','Whey','Wi','Win','Wing','Wo','Woh','Woi','Wok','Won','Wong','Woo','Woon','Wu','Wui',
        'Xi','Xia','Xiah','Xian','Xiang','Xiao','Xiau','Xie','Xin','Xing','Xiong','Xiu','Xu','Xun',
        'Yam','Yan','Yang','Yao','Yat','Yatt','Yau','Yaw','Ye','Yee','Yen','Yeng','Yeo','Yeoh','Yeong','Yep','Yet','Yeu','Yew','Yi','Yih','Yii','Yik','Yin','Ying','Yip','Yit','Yo','Yok','Yon','Yong','Yoo','You','Yow','Yu','Yuan','Yue','Yuen','Yuet','Yuk','Yun','Yung','Yup','Yut','Yutt',
        'Za','Zai','Zang','Zao','Zau','Zea','Zeah','Zed','Zee','Zen','Zeng','Zeo','Zet',
        'Zha','Zhai','Zhan','Zhang','Zhao','Zhau','Zhee','Zhen','Zheng','Zhet','Zhi','Zhong','Zhu','Zhung',
        'Zi','Zia','Ziah','Ziak','Zian','Ziang','Ziao','Ziau','Zit','Zo','Zoe','Zou','Zu','Zui','Zuk','Zung',
    );

    /**
     * Chinese male third character
     * 
     * @link https://en.wikipedia.org/wiki/Chinese_given_name
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Cantonese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_politicians_of_Chinese_descent
     */
    protected static \$firstNameMaleChinese = array(
        'Aik','Ang','Au','Aun',
        'Bak','Ban','Bang','Bao','Bau','Ben','Beng','Bing','Bok','Bong','Boo','Boon','Bow','Buk','Bun','Bung',
        'Chai','Chak','Chan','Chang','Chao','Chap','Chat','Chau','Chaw',
        'Cheah','Chee','Cheen','Chek','Chen','Cheong','Cher','Chet','Chew',
        'Chia','Chih','Chik','Chin','Ching','Chit','Chiu',
        'Cho','Choi','Chok','Chon','Chong','Choo','Chooi','Choon','Choong','Chor','Chou','Chow','Choy',
        'Chua','Chuah','Chuan','Chua','Chui','Chuk','Chum','Chun','Chung','Chuo','Chye',
        'Dan','Dao','Dau','Dee','Deng','Di','Dim','Din','Diong','Dong','Dou','Du','Dui','Duo',
        'Eu','Ew',
        'Fai','Fam','Fat','Fatt','Fee','Feng','Fok','Fon','Fong','Foo','Foon','Foong','Fu','Fui','Fuk',
        'Gai','Gak','Gam','Gan','Gao','Gau','Gee','Gek','Geng','Giap','Gin','Git','Go','Goh','Gok','Gon','Gong','Gu','Guk','Gun','Gung','Gunn',
        'Hai','Han','Hang','Har','Haw','Hei','Hen','Heng','Hing',
        'Ho','Hoe','Hoi','Hok','Hom','Hon','Hong','Hoo','Hook','Hoon','Hoong','Hor','Hou','How','Hoy','Hu','Huan','Huang','Hun','Hung','Huo','Hup',
        'Jeong','Jer','Jet','Jett','Jeu','Ji','Jian','Jiang','Jiet','Jim','Jin','Jio','Jiong','Jit','Jiu','Jo','Joe','Joong','Jung','Jye',
        'Kai','Kan','Kang','Kao','Kap','Kau','Kaw','Kean','Keang','Keat','Kek','Ken','Keng','Ker','Keu','Kew',
        'Khai','Khan','Khang','Khaw','Khean','Kheang','Khia','Khian','Khiang','Kho','Khoh','Khoi','Khoo','Khu','Khung',
        'Kia','Kian','Kiang','Kiap','Kiat','Kien','Kiet','Kin','King','Kit','Ko','Koi','Kok','Kong','Koo','Koong','Koor','Kou','Kow','Koy',
        'Ku','Kuang','Kui','Kun','Kung','Kuo','Kuong','Kuu',
        'Lak','Lam','Lang','Lao','Lap','Lar','Lat','Lau','Law',
        'Lean','Leang','Leat','Lee','Leet','Leik','Leiu','Lek','Len','Leon','Leong','Leow','Leung','Lew','Lex',
        'Liang','Liao','Liat','Liau','Liaw','Liek','Liem','Liet','Lieu','Liew','Lih','Lik','Lim','Lio','Lion','Liong','Liow','Lip','Lit','Liu',
        'Lo','Loh','Loi','Lok','Long','Loo','Looi','Look','Loon','Loong','Lor','Lou','Low','Loy',
        'Lu','Luk','Lum','Lun','Lung','Lup',
        'Man','Mang','Mao','Mar','Mat','Mau','Maw','Mek','Men',
        'Mo','Mok','Mon','Mong','Moong','Mou','Mow','Mu',
        'Nam','Nan','Nau','Neng','Neo','Neu','Ngai','Ngao','Ngau','Ngaw','Ngo','Niao','Niau','Nien','Nik','Niu','Nyet',
        'Oh','Oi','Ong','Onn','Oo',
        'Pah','Pai','Pak','Pang','Pao','Pat','Pau','Paw','Pen','Peng',
        'Phang','Pheng','Phong','Pok','Pou','Pow','Pu','Pua','Puah',
        'Quan','Quen','Quek','Quok',
        'Ren','Ron',
        'Sai','Sam','San','Sang','Shak','Sham','Shang','Shao','Shau','Shaw','Shek','Shen','Shiang','Shih','Shik','Shim','Shing','Shio','Shiu',
        'Sho','Shong','Shoo','Shou','Show','Shun','Shung','Shuo','Siam','Siang','Siau','Siaw','Sieu','Sih','Sik','Sing','Sio','Siong','Siou','Siow','Sit',
        'Son','Song','Soon','Soong','Sou','Sow','Suang','Sum','Sung','Suo',
        'Ta','Tak','Tan','Tang','Tao','Tar','Tat','Tatt','Tau','Teak','Tean','Tee','Teh','Tei','Tek','Ten','Teng','Teo','Teoh','Ter','Tet','Teu','Tew',
        'Tha','Thai','Tham','Thang','Thau','Thay','Thee','Theo','Ther','Thew','They','Thian','Thien','Tho','Thok','Thong','Thoo','Thor','Thou','Thu','Thuk','Thum','Thung','Thur','Tiak','Tiam','Tian','Tiang','Tiek','Tien','Tik','Tim','Tin','Tio','Tiong','Tiu',
        'To','Toh','Tok','Tong','Too','Tor','Tou','Tow','Tu','Tuk','Tung',
        'Ung',
        'Vin','Von',
        'Wa','Wah','Wai','Wang','Way','Wee','Wei','Weng','Whay','Win','Wing','Wo','Woh','Woi','Wok','Won','Wong','Woo','Wu','Wui',
        'Xiang','Xiong',
        'Yang','Yao','Yat','Yatt','Yau','Yaw','Ye','Yeng','Yeo','Yeoh','Yeong','Yet','Yih','Yii','Yik','Yip','Yit','Yo','Yok','Yon','Yong','Yoo','You','Yow','Yu','Yuen','Yuet','Yuk','Yut','Yutt',
        'Za','Zai','Zang','Zao','Zau','Zea','Zeah','Zed','Zee','Zen','Zeng','Zeo','Zet',
        'Zha','Zhai','Zhan','Zhang','Zhao','Zhau','Zhee','Zheng','Zhet','Zhong','Zhu','Zhung',
        'Ziak','Zian','Ziang','Ziao','Ziau','Zit','Zuk','Zung',
    );

    /**
     * Chinese female third character
     * 
     * @link https://en.wikipedia.org/wiki/Chinese_given_name
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Cantonese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_politicians_of_Chinese_descent
     */
    protected static \$firstNameFemaleChinese = array(
        'Ai','An','Ann','Aw',
        'Bae','Bai','Bee','Beh','Bei','Bi','Bik','Bin','Bui',
        'Cai','Cee','Cen','Cham','Cheam','Chean','Cheang','Cheng','Cheok','Chi','Ching','Chio','Chu',
        'Dai','Dang','Ding','Do','Doo',
        'Ee','En','Enn','Er','Ern',
        'Fah','Fan','Fang','Fay','Faye','Fei','Fen','Fern','Fey','Fong','Fun','Fung',
        'Gi','Goo','Goon','Gui',
        'Ha','Haa','Hah','Hao','He','Hee','Heong','Her','Hew','Hi','Hii','Hin','Hiong','Hiu','Hooi','Hua','Hue','Hui',
        'Jan','Jang','Jao','Jee','Jei','Jen','Jeng','Jia','Jie','Jien','Jing','Jong','Joo','Joon','Joy','Ju','Jun',
        'Ka','Kaa','Kah','Kak','Kam','Kar','Kat','Kay','Ke','Kee','Kei','Key',
        'Kha','Khar','Khay','Khee','Khi','Khor','Khum',
        'Ki','Kim','Koe','Koh','Kor','Kum','Kua',
        'Lai','Lan','Lay',
        'Le','Lea','Leen','Lei','Lein','Leng','Ler','Leu','Ley',
        'Li','Liah','Lian','Lie','Lien','Lin','Ling',
        'Lua','Lui','Luo','Luu',
        'Ma','Mae','Mag','Mah','Mai','Mak','May','Me','Mea','Mee','Meg','Meh','Mei','Mel','Meu','Mew',
        'Mi','Mie','Miin','Miing','Min','Ming','Miu','Moh','Moi','Moo','Moon','Moy','Mua','Mui','Mum','Mun','Muu',
        'Na','Naa','Nah','Nai','Nao','Nee','Nei','New','Nga','Ngah','Ngan','Ngu','Ni','Nian','Niang','Nin','Nong',
        'Ooi',
        'Pam','Pan','Pay','Peh','Pei','Peik','Pek','Pey','Pik','Pin','Ping','Po','Poh','Pom','Pong','Pooi','Pui','Pun',
        'Qi','Qin','Qing','Qiu','Qu','Quay','Qui',
        'Rei','Rin','Ring','Rinn','Rong','Rou','Ru','Rui','Ruo',
        'Say','Sha','Shan','Shar','Shay','She','Shea','Shee','Shei','Sher','Shew','Shey','Shi','Shia','Shian','Shiao','Shie','Shin',
        'Shok','Shu','Shui','Shuk','Shum','Si','Sia','Siah','Siak','Sian','Siao','Sien','Siew','Sim','Sin','Siu',
        'So','Soh','Soi','Sok','Soo','Su','Suan','Sue','Suen','Sui','Suk','Sun',
        'Tai','Tam','Tay','Tea','Teng','Tey','Thia','Ti','Tia','Tiah','Ting',
        'Voon',
        'Wan','Wen','Wey','Whey','Wi','Woon',
        'Xi','Xia','Xiah','Xian','Xiao','Xiau','Xie','Xin','Xing','Xiu','Xu','Xun',
        'Yam','Yan','Yee','Yen','Yep','Yeu','Yew','Yi','Yin','Ying','Yong','Yuan','Yue','Yuen','Yun','Yung','Yup',
        'Zhen','Zhi','Zi','Zia','Ziah','Zo','Zoe','Zou','Zu','Zui',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Cantonese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Chaoshanese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Chinese_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_English_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Hakka_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Hockchew_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Hokkien_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_people_of_Peranakan_descent
     * @link https://en.wikipedia.org/wiki/Category:Malaysian_politicians_of_Chinese_descent
     */
    protected static \$firstNameMaleChristian = array(
        'Aaron','Addy','Adrian','Alex','Amos','Anthony',
        'Bernard','Billy',
        'Chris','Christopher','Colin',
        'Danell','Daniel','Danny','David','Douglas',
        'Eddie','Eddy','Edmund','Eric',
        'Francis','Frankie',
        'Gary','Gavin','George','Gregory',
        'Henry',
        'Isaac',
        'James','Jason','Jeff','Jeffrey','Jimmy','John','Jonathan','Josiah','Julian',
        'Kevin','Kris',
        'Mark','Martin','Mavin','Melvin','Michael',
        'Nathaniel','Nelson','Nicholas',
        'Peter','Philip',
        'Richard','Robert','Roger','Ronny','Rynn',
        'Shaun','Simon','Stephen','Steven',
        'Terry','Tony',
        'Victor','Vince','Vincent',
        'Welson','William','Willie',
    );
    protected static \$firstNameFemaleChristian = array(
        'Alice','Alyssa','Amber','Amy','Andrea','Angelica','Angie','Apple','Aslina',
        'Bernice','Betty','Boey','Bonnie',
        'Caemen','Carey','Carmen','Carrie','Cindy',
        'Debbie',
        'Elaine','Elena',
        'Felixia','Fish','Freya',
        'Genervie','Gin',
        'Hannah','Heidi','Helena',
        'Janet','Jemie','Jess','Jesseca','Jessie','Joanna','Jolene','Joyce','Juliana',
        'Karen','Kathleen',
        'Lilian','Linda','Lydia','Lyndel',
        'Maria','Marilyn','Maya','Meeia','Melinda','Melissa','Michelle','Michele',
        'Nadia','Natalie','Nicole',
        'Penny',
        'Phyllis',
        'Quincy',
        'Rachel','Rena','Rose',
        'Samantha','Sarah','Sheena','Sherine','Shevon','Sonia','Stella',
        'Teresa','Tiffany','Tracy','Tricia',
        'Vera','Violet','Vivian','Vivien',
        'Yvonne',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_politicians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_sportspeople_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/Tamil_Malaysians#Notable_people
     */
    protected static \$initialIndian = array(
        'B. ','B. C. ',
        'C. ',
        'D. ','D. R. ','D. S. ',
        'E. ',
        'G. ',
        'K. ','K. L. ','K. R.','K. S. ',
        'M. ','M. G. ','M. G. G. ','M. K. ',
        'N. ','N. K. ',
        'P. ',
        'R. ','R. G. ','R. S. ',
        'S. ','S. A. ',
        'T. ',
        'V. ','V. T. ',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/K._L._Devaser
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_politicians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_sportspeople_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/Tamil_Malaysians#Notable_people
     */
    protected static \$firstNameMaleIndian = array(
        'Anbil','Ananda','Arasu','Arul','Arulraj','Arumugam','Ash',
        'Babu','Balachandra','Balasubramaniam','Balden','Baljit','Baltej','Bishan',
        'Canagasabai','Cecil','Chakra','Chanturu',
        'Depan','Darma Raja','Devaki','Devamany','Devan','Devasagayam','Diljit','Doraisingam',
        'Ganesh','Ganga','Gengadharan','Gobalakrishnan','Gobind','Gopinathan','Govindasamy','Gunasekaran','Gurmit',
        'Haran','Harikrish','Hiresh','Huzir',
        'Indi',
        'Jagdeep','Janil','Jeevandran','Jegathesan','Jeyakumar','Jomo Kwame',
        'Kamal','Kamalanathan','Kanagaraj','Kandasamy','Kandiah','Karamjit','Karnail','Karpal','Kasi','Kasinather','Kavi','Kavidhai','Kishor','Krishen','Krishnamoorthy','Krishnamurthi','Krishnasamy','Kulasegaran','Kumar','Kumutha','Kuhan','Kunanlan','Kundan Lal','Kunjiraman',
        'Loganathan',
        'Magendran','Maha','Mahadev','Mahaletchumy','Mahathir','Maniam','Manickavasagam','Manikavasagam','Manjit','Manogaran','Manoharan','Manrick','Marimuthu','Merican','Mogan','Mohanadas','Munshi','Murugayan','Murugesan','Mutahir',
        'Nadarajan','Nandakumar','Nanthakumar','Naraina','Nethaji','Ninian',
        'Padathan','Palanivel','Param','Paramjit','Pavandeep','Praboo','Pragash','Premnath','Prema','Pria','Puvaneswaran',
        'Rabinder','Rajagobal','Rajesh','Rajeswary','Rajiv','Rakesh','Rama','Ramasamy','Ramesh','Ramkarpal','Ramon','Rattan','Ravichandran','Rehman','Renuga','Rohan','Rueben',
        'Saarvindran','Samy','Sanisvara','Sanjay','Santhara','Santokh','Sarath','Saravanan','Sarjit','Sasikumar','Satwant','Selvakkumar','Selvaraju','Serbegeth','Shan','Shankar','Shanmugam','Sittampalam','Sivakumar','Sivarasa','Solamalay','Sothinathan','Subramaniam','Sukhjit','Sumisha','Surendran','Suresh','Suriaprakash',
        'Tatparanandam','Tanasekharan','Thamboosamy','Thamil','Thayaparan','Thirumurugan','Thirunavuk',
        'Uthayakumar',
        'Varatharaju','Veenod','Veerappan','Veerappen','Veloo','Vasudevan','Vellu','Viatilingam','Vijandren','Vinod','Vishnu','Vivasvan',
        'Waythamoorthy','Weeratunge',
        'Yosri','Yugendran',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_politicians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_sportspeople_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/Tamil_Malaysians#Notable_people
     */
    protected static \$firstNameFemaleIndian = array(
        'Ambiga','Anaika','Anand','Anita','Asha','Athi',
        'Gheetha',
        'Haanii',
        'Janaky',
        'Kasthuriraani','Kavita','Kiran',
        'Melinder',
        'Nithya',
        'Prashanthini','Preeta','Priya','Pushpa',
        'Ramya','Rani','Rasammah','Renuga',
        'Sangeeta','Sannatasah','Saraswati','Shamini','Shanthi','Shanti','Shoba','Shuba','Siva','Sutheaswari','Swarna','Sybil',
        'Thanuja','Theiviya','Thripura',
        'Umasundari','Uthaya',
        'Vijaya',
        'Zabrina',
    );

    /**
     * @link https://en.wikipedia.org/wiki/List_of_Malaysians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_politicians_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/List_of_Malaysian_sportspeople_of_Indian_descent
     * @link https://en.wikipedia.org/wiki/Tamil_Malaysians#Notable_people
     */
    protected static \$lastNameIndian = array(
        'Alagaratnam','Ambumamee','Ammasee','Ampalavanar','Ananthan','Arivanathan','Arujunan','Arumugam','Asirvatham','Autherapady',
        'Balakrishnan','Balan','Bamadhaj','Bastianpillai','Bhullar','Bhupalan',
        'Chandran','Cumaraswamy','Chelvan','Chengara',
        'Dairiam','Davies','Devaraj','Devandran','Devaser','Dhaliwal','Dharmalingam','Dhillon',
        'Elavarasan',
        'Fernandes','Fernandez',
        'Ganapathy','Ganesan','Gnanalingam','Goundar','Govindasamy','Gunalan','Gurusamy',
        'Haridas',
        'Iyer',
        'Jaidka','Jassal','Jayaram','Jayaseelan','Jayawardene','Jeevananthan',
        'Kaliappan','Kamalesvaran','Kandasamy','Karathu','Kathigasu','Kathiripillai','Kaveri','Kayveas','Krishnan','Krishnasamy','Kumar','Kumaresan','Kumari','Kunalan','Kundargal','Kuppusamy',
        'Lakshmi','Linggam','Lourdenadin',
        'Madhavan','Mahathevan','Malayalam','Manicka','Manikavasagam','Marimuthu','Menon','Mohinder','Moorthy','Mudukasan','Muniandy','Munisamy','Munusamy','Murugan','Murugeson',
        'Nadarajah','Nagapan','Nagappan','Nagaraj','Nagarajan','Nahappan','Naidu','Nair','Namasivayam','Narayan','Navaratnam','Navarednam','Nayar','Nijhar',
        'Pakiam','Palaniappan','Palanisamy','Panchanathan','Pandithan','Parthiban','Pathmanaban','Patto','Pereira','Perera','Periasamy','Perumal','Pillai','Pillay','Ponnusamy','Prakash','Puaneswaran','Purushothaman','Puspanathan','Puthucheary',
        'Raj Kaur','Rajakumar','Rajan','Rajannaidu','Rajendra','Rajendran','Rajhans','Raju','Ramachandra','Ramadas','Ramadass','Ramanathan','Ramani','Ramasamy','Raj','Rao','Rasiah','Ratnam','Ravindran','Rayer','Retinam','Rishyakaran','Robbat',
        'Sachithanandan','Sakadivan','Sakwati','Samarasan','Sambanthan','Sandrakasi','Sangalimuthu','Saniru','Sankar','Saravanan','Sathasivam','Sathianathan','Saunthararajah','Seenivasagam','Sekhar','Sellan','Selvanayagam','Selvarajoo','Selvaratnam','Shanmuganathan','Shanmugaratnam','Shekhar','Shivraj','Shree','Sidhu','Sinnandavar','Sinnathamby','Sinnathuray','Sivanesan','Singh','Sivalingam','Sivanesan','Shankar','Sodhy','Somasundram','Sooryapparad','Soti','Sreenevasan','Subramaniam','Sundram','Suppiah','Surendran',
        'Thajudeen','Thalalla','Thambu','Thanabalasingam','Thanenthiran','Theseira','Thevandran','Thiru','Thirunavukarasu','Thivy','Thuraisingham','Tikaram',
        'Vadaketh','Vadiveloo','Vanajah','Varman','Vasudevan','Veeran','Veerasamy','Veerasenan','Veerathan','Veetil','Velappan','Vello','Vengatarakoo','Vethamuthu','Viswalingam',
        'Xavier',
    );

    /**
     * @link https://en.wikipedia.org/wiki/Malay_styles_and_titles
     */
    protected static \$titleMale = array('En.','Dr.','Prof.','Datuk','Dato\\'','Datuk Seri','Dato\\' Sri','Tan Sri','Tun');
    protected static \$titleFemale = array('Pn.','Cik','Dr.','Prof.','Datin','Datin Paduka','Datin Paduka Seri','Puan Sri','Toh Puan');

    /**
     * Return a Malay male first name
     * 
     * @example 'Ahmad'
     * 
     * @return string
     */
    public static function firstNameMaleMalay()
    {
        return static::randomElement(static::\$firstNameMaleMalay);
    }

    /**
     * Return a Malay female first name
     * 
     * @example 'Adibah'
     * 
     * @return string
     */
    public static function firstNameFemaleMalay()
    {
        return static::randomElement(static::\$firstNameFemaleMalay);
    }

    /**
     * Return a Malay last name
     * 
     * @example 'Abdullah'
     * 
     * @return string
     */
    public function lastNameMalay()
    {
        return static::randomElement(static::\$lastNameMalay);
    }

    /**
     * Return a Malay male 'Muhammad' name
     * 
     * @example 'Muhammad'
     * 
     * @return string
     */
    public static function muhammadName()
    {
        return static::randomElement(static::\$muhammadName);
    }

    /**
     * Return a Malay female 'Nur' name
     * 
     * @example 'Nur'
     * 
     * @return string
     */
    public static function nurName()
    {
        return static::randomElement(static::\$nurName);
    }

    /**
     * Return a Malay male 'Haji' title
     * 
     * @example 'Haji'
     * 
     * @return string
     */
    public static function haji()
    {
        return static::randomElement(static::\$haji);
    }

    /**
     * Return a Malay female 'Hajjah' title
     * 
     * @example 'Hajjah'
     * 
     * @return string
     */
    public static function hajjah()
    {
        return static::randomElement(static::\$hajjah);
    }

    /**
     * Return a Malay title
     * 
     * @example 'Syed'
     * 
     * @return string
     */
    public static function titleMaleMalay()
    {
        return static::randomElement(static::\$titleMaleMalay);
    }

    /**
     * Return a Chinese last name
     * 
     * @example 'Lim'
     * 
     * @return string
     */
    public static function lastNameChinese()
    {
        return static::randomElement(static::\$lastNameChinese);
    }

    /**
     * Return a Chinese male first name
     * 
     * @example 'Goh Tong'
     * 
     * @return string
     */
    public static function firstNameMaleChinese()
    {
        return static::randomElement(static::\$firstNameChinese) . ' ' . static::randomElement(static::\$firstNameMaleChinese);
    }

    /**
     * Return a Chinese female first name
     * 
     * @example 'Mew Choo'
     * 
     * @return string
     */
    public static function firstNameFemaleChinese()
    {
        return static::randomElement(static::\$firstNameChinese) . ' ' . static::randomElement(static::\$firstNameFemaleChinese);
    }

    /**
     * Return a Christian male name
     * 
     * @example 'Aaron'
     * 
     * @return string
     */
    public static function firstNameMaleChristian()
    {
        return static::randomElement(static::\$firstNameMaleChristian);
    }

    /**
     * Return a Christian female name
     * 
     * @example 'Alice'
     * 
     * @return string
     */
    public static function firstNameFemaleChristian()
    {
        return static::randomElement(static::\$firstNameFemaleChristian);
    }

    /**
     * Return an Indian initial
     * 
     * @example 'S. '
     * 
     * @return string
     */
    public static function initialIndian()
    {
        return static::randomElement(static::\$initialIndian);
    }

    /**
     * Return an Indian male first name
     * 
     * @example 'Arumugam'
     * 
     * @return string
     */
    public static function firstNameMaleIndian()
    {
        return static::randomElement(static::\$firstNameMaleIndian);
    }

    /**
     * Return an Indian female first name
     * 
     * @example 'Ambiga'
     * 
     * @return string
     */
    public static function firstNameFemaleIndian()
    {
        return static::randomElement(static::\$firstNameFemaleIndian);
    }

    /**
     * Return an Indian last name
     * 
     * @example 'Subramaniam'
     * 
     * @return string
     */
    public static function lastNameIndian()
    {
        return static::randomElement(static::\$lastNameIndian);
    }

    /**
     * Return a random last name
     * 
     * @example 'Lee'
     * 
     * @return string
     */
    public function lastName()
    {
        \$formats = array(
            '{{lastNameMalay}}',
            '{{lastNameChinese}}',
            '{{lastNameIndian}}',
        );

        return \$this->generator->parse(static::randomElement(\$formats));
    }

    /**
     * Return a Malaysian I.C. No.
     * 
     * @example '890123-45-6789'
     * 
     * @link https://en.wikipedia.org/wiki/Malaysian_identity_card#Structure_of_the_National_Registration_Identity_Card_Number_(NRIC)
     * 
     * @param string|null      \$gender 'male', 'female' or null for any
     * @param bool|string|null \$hyphen true, false, or any separator characters
     * 
     * @return string
     */
    public static function myKadNumber(\$gender = null, \$hyphen = false)
    {
        // year of birth
        \$yy = mt_rand(0, 99);

        // month of birth
        \$mm = DateTime::month();

        // day of birth
        \$dd = DateTime::dayOfMonth();

        // place of birth (1-59 except 17-20)
        while (in_array((\$pb = mt_rand(1, 59)), array(17, 18, 19, 20))) {
        };

        // random number
        \$nnn = mt_rand(0, 999);

        // gender digit. Odd = MALE, Even = FEMALE
        \$g = mt_rand(0, 9);
        //Credit: https://gist.github.com/mauris/3629548
        if (\$gender === static::GENDER_MALE) {
            \$g = \$g | 1;
        } elseif (\$gender === static::GENDER_FEMALE) {
            \$g = \$g & ~1;
        }

        // formatting with hyphen
        if (\$hyphen === true) {
            \$hyphen = \"-\";
        } else if (\$hyphen === false) {
            \$hyphen = \"\";
        }

        return sprintf(\"%02d%02d%02d%s%02d%s%03d%01d\", \$yy, \$mm, \$dd, \$hyphen, \$pb, \$hyphen, \$nnn, \$g);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Person.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/ms_MY/Person.php");
    }
}