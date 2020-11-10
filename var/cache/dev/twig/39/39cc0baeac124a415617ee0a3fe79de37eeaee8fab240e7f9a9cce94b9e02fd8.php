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

/* vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Address.php */
class __TwigTemplate_621a1dc7413ce35c78b8defd67be3d8e1f467eefb9bf23ab092e0499651eeb99 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pt_BR;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('São', 'Porto', 'Vila', 'Santa');
    protected static \$citySuffix = array('do Norte', 'do Leste', 'do Sul', 'd\\'Oeste');
    protected static \$streetPrefix = array(
        'Av.', 'Avenida', 'R.', 'Rua', 'Travessa', 'Largo'
    );
    protected static \$buildingNumber = array('#####', '####', '###', '##', '#');
    protected static \$postcode = array('#####-###');
    protected static \$state = array(
        'Acre', 'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará',
        'Distrito Federal', 'Espírito Santo', 'Goiás', 'Maranhão',
        'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais', 'Pará', 'Paraíba',
        'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro',
        'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima',
        'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins'
    );
    protected static \$stateAbbr = array(
        'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS',
        'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC',
        'SP', 'SE', 'TO'
    );
    protected static \$region = array(
        'Centro-Oeste', 'Nordeste', 'Norte', 'Sudeste', 'Sul'
    );
    protected static \$regionAbbr = array(
        'CO', 'N', 'NE', 'SE', 'S'
    );
    protected static \$country = array(
        'Afeganistão', 'África do Sul', 'Albânia', 'Alemanha', 'Andorra',
        'Angola', 'Antigua e Barbuda', 'Arabia Saudita', 'Argélia',
        'Argentina', 'Armênia', 'Austrália', 'Áustria', 'Azerbaijão',
        'Bahamas', 'Bangladesh', 'Barbados', 'Barein', 'Belize', 'Benin',
        'Bielorrússia', 'Birmânia', 'Bolívia', 'Bósnia e Herzegovina',
        'Botsuana', 'Brasil', 'Brunei', 'Bulgária', 'Burkina Faso',
        'Burundi', 'Butão', 'Bélgica', 'Cabo Verde', 'Camboja', 'Camarões',
        'Canadá', 'Cazaquistão', 'Chad', 'Chile', 'China', 'Chipre',
        'Colômbia', 'Comoras', 'Congo', 'Coréia do Norte', 'Coréia do Sul',
        'Costa Rica', 'Costa do Marfim', 'Croácia', 'Cuba', 'Dinamarca',
        'Djibouti', 'Domênica', 'Equador', 'Egito', 'El Salvador',
        'Emirados Árabes Unidos', 'Eritrea', 'Eslováquia', 'Eslovênia',
        'Espanha', 'Estados Unidos da América', 'Estônia', 'Etiópia',
        'Filipinas', 'Finlândia', 'Fiji','França', 'Gabão', 'Gâmbia',
        'Georgia', 'Gana', 'Granada', 'Grécia', 'Guatemala',
        'Guiné Equatorial', 'Guiné Bissau', 'Guiana', 'Haiti', 'Honduras',
        'Hungria', 'Índia', 'Indonésia', 'Iraque', 'Irlanda', 'Irã',
        'Islândia', 'Ilhas Marshall', 'Ilhas Maurício', 'Ilhas Salomão',
        'Ilhas Samoa', 'Israel', 'Itália', 'Jamaica', 'Japão', 'Jordânia',
        'Kiribati', 'Kwait', 'Laos', 'Lesoto', 'Letônia', 'Libéria', 'Líbia',
        'Liechtenstein', 'Lituânia', 'Luxemburgo', 'Líbano', 'Macedônia',
        'Madagascar', 'Malásia', 'Malauí', 'Maldivas', 'Mali', 'Malta',
        'Marrocos', 'Mauritânia', 'Micronésia', 'Moldávia', 'Mongólia',
        'Montenegro', 'Moçambique', 'México', 'Mônaco', 'Namíbia', 'Nauru',
        'Nepal', 'Nicarágua', 'Nigéria', 'Noruega', 'Nova Guiné',
        'Nova Zelândia', 'Níger', 'Omã', 'Qatar', 'Quênia','Quirguistão',
        'Paquistão', 'Palaos', 'Panamá', 'Papua Nova Guiné', 'Paraguai',
        'Países Baixos', 'Peru', 'Polônia', 'Portugal', 'Reino Unido',
        'Reino Unido da Grã Bretanha e Irlanda do Norte',
        'República Centroafricana', 'República Checa',
        'República Democrática do Congo', 'República Dominicana', 'Ruanda',
        'Romênia', 'Rússia', 'San Cristõvao e Neves', 'San Marino',
        'São Vicente e as Granadinas', 'Santa Luzia', 'São Tomé e Príncipe',
        'Senegal', 'Sérvia', 'Seychelles', 'Serra Leoa', 'Singapura', 'Síria',
        'Somália', 'Sri Lanka', 'Suazilândia', 'Sudão', 'Suécia', 'Suiça',
        'Suriname', 'Tailândia', 'Tanzânia', 'Tajiquistão', 'Timor Leste',
        'Togo', 'Tonga', 'Trinidad e Tobago', 'Turcomenistão', 'Turquia',
        'Tuvalu', 'Tunísia', 'Ucrânia', 'Uganda', 'Uruguai', 'Uzbequistão',
        'Vaticano', 'Vanuatu', 'Venezuela', 'Vietnã', 'Yemen', 'Zâmbia',
        'Zimbábue'
    );
    protected static \$cityFormats = array(
        '";
        // line 76
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 76, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 76, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 77
        echo twig_escape_filter($this->env, (isset($context["cityPrefix"]) || array_key_exists("cityPrefix", $context) ? $context["cityPrefix"] : (function () { throw new RuntimeError('Variable "cityPrefix" does not exist.', 77, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 77, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 78, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 79, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["citySuffix"]) || array_key_exists("citySuffix", $context) ? $context["citySuffix"] : (function () { throw new RuntimeError('Variable "citySuffix" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$streetNameFormats = array(
        '";
        // line 82
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 82, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 82, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 83
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 83, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 83, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 84
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 84, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 84, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 84, $this->source); })()), "html", null, true);
        echo "'
    );
    protected static \$streetAddressFormats = array(
        '";
        // line 87
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 87, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 87, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 88, $this->source); })()), "html", null, true);
        echo ". ";
        echo twig_escape_filter($this->env, (isset($context["secondaryAddress"]) || array_key_exists("secondaryAddress", $context) ? $context["secondaryAddress"] : (function () { throw new RuntimeError('Variable "secondaryAddress" does not exist.', 88, $this->source); })()), "html", null, true);
        echo "',
    );
    protected static \$addressFormats = array(
        \"";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 91, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\\n";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 91, $this->source); })()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["stateAbbr"]) || array_key_exists("stateAbbr", $context) ? $context["stateAbbr"] : (function () { throw new RuntimeError('Variable "stateAbbr" does not exist.', 91, $this->source); })()), "html", null, true);
        echo "\",
    );
    protected static \$secondaryAddressFormats = array(
        'Bloco A', 'Bloco B', 'Bloco C', 'Bc. # Ap. ##', 'Bc. ## Ap. ##',
        '#º Andar', '##º Andar', '###º Andar', 'Apto #', 'Apto ##', 'Apto ###',
        'Apto ####', 'F', 'Fundos', 'Anexo'
    );

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'São'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example '6º Andar'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Brasília'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'DF'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }
    
    /**
     * @example 'Nordeste'
     */
    public static function region()
    {
        return static::randomElement(static::\$region);
    }
    
    /**
     * @example 'NE'
     */
    public static function regionAbbr()
    {
        return static::randomElement(static::\$regionAbbr);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 91,  176 => 88,  170 => 87,  160 => 84,  154 => 83,  148 => 82,  140 => 79,  134 => 78,  128 => 77,  120 => 76,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pt_BR;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$cityPrefix = array('São', 'Porto', 'Vila', 'Santa');
    protected static \$citySuffix = array('do Norte', 'do Leste', 'do Sul', 'd\\'Oeste');
    protected static \$streetPrefix = array(
        'Av.', 'Avenida', 'R.', 'Rua', 'Travessa', 'Largo'
    );
    protected static \$buildingNumber = array('#####', '####', '###', '##', '#');
    protected static \$postcode = array('#####-###');
    protected static \$state = array(
        'Acre', 'Alagoas', 'Amapá', 'Amazonas', 'Bahia', 'Ceará',
        'Distrito Federal', 'Espírito Santo', 'Goiás', 'Maranhão',
        'Mato Grosso', 'Mato Grosso do Sul', 'Minas Gerais', 'Pará', 'Paraíba',
        'Paraná', 'Pernambuco', 'Piauí', 'Rio de Janeiro',
        'Rio Grande do Norte', 'Rio Grande do Sul', 'Rondônia', 'Roraima',
        'Santa Catarina', 'São Paulo', 'Sergipe', 'Tocantins'
    );
    protected static \$stateAbbr = array(
        'AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS',
        'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC',
        'SP', 'SE', 'TO'
    );
    protected static \$region = array(
        'Centro-Oeste', 'Nordeste', 'Norte', 'Sudeste', 'Sul'
    );
    protected static \$regionAbbr = array(
        'CO', 'N', 'NE', 'SE', 'S'
    );
    protected static \$country = array(
        'Afeganistão', 'África do Sul', 'Albânia', 'Alemanha', 'Andorra',
        'Angola', 'Antigua e Barbuda', 'Arabia Saudita', 'Argélia',
        'Argentina', 'Armênia', 'Austrália', 'Áustria', 'Azerbaijão',
        'Bahamas', 'Bangladesh', 'Barbados', 'Barein', 'Belize', 'Benin',
        'Bielorrússia', 'Birmânia', 'Bolívia', 'Bósnia e Herzegovina',
        'Botsuana', 'Brasil', 'Brunei', 'Bulgária', 'Burkina Faso',
        'Burundi', 'Butão', 'Bélgica', 'Cabo Verde', 'Camboja', 'Camarões',
        'Canadá', 'Cazaquistão', 'Chad', 'Chile', 'China', 'Chipre',
        'Colômbia', 'Comoras', 'Congo', 'Coréia do Norte', 'Coréia do Sul',
        'Costa Rica', 'Costa do Marfim', 'Croácia', 'Cuba', 'Dinamarca',
        'Djibouti', 'Domênica', 'Equador', 'Egito', 'El Salvador',
        'Emirados Árabes Unidos', 'Eritrea', 'Eslováquia', 'Eslovênia',
        'Espanha', 'Estados Unidos da América', 'Estônia', 'Etiópia',
        'Filipinas', 'Finlândia', 'Fiji','França', 'Gabão', 'Gâmbia',
        'Georgia', 'Gana', 'Granada', 'Grécia', 'Guatemala',
        'Guiné Equatorial', 'Guiné Bissau', 'Guiana', 'Haiti', 'Honduras',
        'Hungria', 'Índia', 'Indonésia', 'Iraque', 'Irlanda', 'Irã',
        'Islândia', 'Ilhas Marshall', 'Ilhas Maurício', 'Ilhas Salomão',
        'Ilhas Samoa', 'Israel', 'Itália', 'Jamaica', 'Japão', 'Jordânia',
        'Kiribati', 'Kwait', 'Laos', 'Lesoto', 'Letônia', 'Libéria', 'Líbia',
        'Liechtenstein', 'Lituânia', 'Luxemburgo', 'Líbano', 'Macedônia',
        'Madagascar', 'Malásia', 'Malauí', 'Maldivas', 'Mali', 'Malta',
        'Marrocos', 'Mauritânia', 'Micronésia', 'Moldávia', 'Mongólia',
        'Montenegro', 'Moçambique', 'México', 'Mônaco', 'Namíbia', 'Nauru',
        'Nepal', 'Nicarágua', 'Nigéria', 'Noruega', 'Nova Guiné',
        'Nova Zelândia', 'Níger', 'Omã', 'Qatar', 'Quênia','Quirguistão',
        'Paquistão', 'Palaos', 'Panamá', 'Papua Nova Guiné', 'Paraguai',
        'Países Baixos', 'Peru', 'Polônia', 'Portugal', 'Reino Unido',
        'Reino Unido da Grã Bretanha e Irlanda do Norte',
        'República Centroafricana', 'República Checa',
        'República Democrática do Congo', 'República Dominicana', 'Ruanda',
        'Romênia', 'Rússia', 'San Cristõvao e Neves', 'San Marino',
        'São Vicente e as Granadinas', 'Santa Luzia', 'São Tomé e Príncipe',
        'Senegal', 'Sérvia', 'Seychelles', 'Serra Leoa', 'Singapura', 'Síria',
        'Somália', 'Sri Lanka', 'Suazilândia', 'Sudão', 'Suécia', 'Suiça',
        'Suriname', 'Tailândia', 'Tanzânia', 'Tajiquistão', 'Timor Leste',
        'Togo', 'Tonga', 'Trinidad e Tobago', 'Turcomenistão', 'Turquia',
        'Tuvalu', 'Tunísia', 'Ucrânia', 'Uganda', 'Uruguai', 'Uzbequistão',
        'Vaticano', 'Vanuatu', 'Venezuela', 'Vietnã', 'Yemen', 'Zâmbia',
        'Zimbábue'
    );
    protected static \$cityFormats = array(
        '{{cityPrefix}} {{firstName}} {{citySuffix}}',
        '{{cityPrefix}} {{firstName}}',
        '{{firstName}} {{citySuffix}}',
        '{{lastName}} {{citySuffix}}',
    );
    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{firstName}}',
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}'
    );
    protected static \$streetAddressFormats = array(
        '{{streetName}}, {{buildingNumber}}',
        '{{streetName}}, {{buildingNumber}}. {{secondaryAddress}}',
    );
    protected static \$addressFormats = array(
        \"{{postcode}}, {{streetAddress}}\\n{{city}} - {{stateAbbr}}\",
    );
    protected static \$secondaryAddressFormats = array(
        'Bloco A', 'Bloco B', 'Bloco C', 'Bc. # Ap. ##', 'Bc. ## Ap. ##',
        '#º Andar', '##º Andar', '###º Andar', 'Apto #', 'Apto ##', 'Apto ###',
        'Apto ####', 'F', 'Fundos', 'Anexo'
    );

    /**
     * @example 'Avenida'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'São'
     */
    public static function cityPrefix()
    {
        return static::randomElement(static::\$cityPrefix);
    }

    /**
     * @example '6º Andar'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /**
     * @example 'Brasília'
     */
    public static function state()
    {
        return static::randomElement(static::\$state);
    }

    /**
     * @example 'DF'
     */
    public static function stateAbbr()
    {
        return static::randomElement(static::\$stateAbbr);
    }
    
    /**
     * @example 'Nordeste'
     */
    public static function region()
    {
        return static::randomElement(static::\$region);
    }
    
    /**
     * @example 'NE'
     */
    public static function regionAbbr()
    {
        return static::randomElement(static::\$regionAbbr);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/pt_BR/Address.php");
    }
}
