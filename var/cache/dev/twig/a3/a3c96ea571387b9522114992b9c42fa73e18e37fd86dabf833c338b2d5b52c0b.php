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

/* vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Address.php */
class __TwigTemplate_d92ff9a31ed56c2964b7b42041c73cc34cfcd835623e6dcfcfcac2325d8b229e extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Address.php"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Address.php"));

        // line 1
        echo "<?php

namespace Faker\\Provider\\pt_PT;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$streetPrefix = array('Av.', 'Avenida', 'R.', 'Rua', 'Travessa', 'Largo');

    protected static \$streetNameFormats = array(
        '";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 10, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " St. ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 13, $this->source); })()), "html", null, true);
        echo " São. ";
        echo twig_escape_filter($this->env, (isset($context["firstName"]) || array_key_exists("firstName", $context) ? $context["firstName"] : (function () { throw new RuntimeError('Variable "firstName" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["streetPrefix"]) || array_key_exists("streetPrefix", $context) ? $context["streetPrefix"] : (function () { throw new RuntimeError('Variable "streetPrefix" does not exist.', 14, $this->source); })()), "html", null, true);
        echo " de ";
        echo twig_escape_filter($this->env, (isset($context["lastName"]) || array_key_exists("lastName", $context) ? $context["lastName"] : (function () { throw new RuntimeError('Variable "lastName" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "',
    );

    protected static \$streetAddressFormats = array(
        '";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 19, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "',
        '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["streetName"]) || array_key_exists("streetName", $context) ? $context["streetName"] : (function () { throw new RuntimeError('Variable "streetName" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["buildingNumber"]) || array_key_exists("buildingNumber", $context) ? $context["buildingNumber"] : (function () { throw new RuntimeError('Variable "buildingNumber" does not exist.', 20, $this->source); })()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, (isset($context["secondaryAddress"]) || array_key_exists("secondaryAddress", $context) ? $context["secondaryAddress"] : (function () { throw new RuntimeError('Variable "secondaryAddress" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "',
    );

    /** @link http://www.univ-ab.pt/PINTAC/carta_normas.htm address example in letters **/
    protected static \$addressFormats = array(
        \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["streetAddress"]) || array_key_exists("streetAddress", $context) ? $context["streetAddress"] : (function () { throw new RuntimeError('Variable "streetAddress" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["postcode"]) || array_key_exists("postcode", $context) ? $context["postcode"] : (function () { throw new RuntimeError('Variable "postcode" does not exist.', 25, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["city"]) || array_key_exists("city", $context) ? $context["city"] : (function () { throw new RuntimeError('Variable "city" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\",
    );

    /** @link http://www.mapadeportugal.net/indicecidades.asp **/
    private static \$cities = array(
        'Abrantes', 'Agualva-Cacém', 'Águeda', 'Albufeira', 'Alcácer do Sal', 'Alcobaça', 'Almada', 'Almeirim', 'Alverca do Ribatejo', 'Amadora', 'Amarante', 'Amora', 'Anadia', 'Angra do Heroísmo', 'Aveiro', 'Barcelos', 'Barreiro',
        'Beja', 'Braga', 'Bragança', 'Caldas da Rainha', 'Camara de Lobos', 'Cantanhede', 'Cartaxo', 'Castelo Branco', 'Chaves', 'Coimbra', 'Covilhã', 'Elvas', 'Entroncamento', 'Ermesinde', 'Esmoriz', 'Espinho', 'Esposende', 'Estarreja',
        'Estremoz', 'Évora', 'Fafe', 'Faro', 'Fátima', 'Felgueiras', 'Fiães', 'Figueira da Foz', 'Freamunde', 'Funchal', 'Fundão', 'Gafanha da Nazaré', 'Gondomar', 'Gouveia', 'Guarda', 'Guimarães', 'Horta', 'Ílhavo', 'Lagoa', 'Lagos', 'Lamego',
        'Leiria', 'Lisboa', 'Lixa', 'Loulé', 'Loures', 'Lourosa', 'Macedo de Cavaleiros', 'Machico', 'Maia', 'Mangualde', 'Marco de Canaveses', 'Marinha Grande',
        'Matosinhos', 'Mealhada', 'Miranda do Douro', 'Mirandela', 'Montemor-o-Novo', 'Montijo', 'Moura', 'Odivelas', 'Olhão da Restauração', 'Oliveira de Azeméis', 'Oliveira do Hospital', 'Ourém', 'Ovar', 'Paços de Ferreira',
        'Paredes', 'Penafiel', 'Peniche', 'Peso da Régua', 'Pinhel', 'Pombal', 'Ponta Delgada', 'Ponte de Sor', 'Portalegre', 'Portimão', 'Porto', 'Porto Santo', 'Póvoa de Santa Iria', 'Póvoa de Varzim', 'Quarteira', 'Queluz', 'Ribeira Grande', 'Rio Maior',
        'Rio Tinto', 'Sacavém', 'Santa Comba Dão', 'Santa Cruz', 'Santa Maria da Feira', 'Santana', 'Santarém', 'Santiago do Cacém', 'Santo Tirso',
        'São João da Madeira', 'São Mamede de Infesta', 'Seia', 'Seixal', 'Setúbal', 'Silves', 'Sines', 'Tarouca', 'Tavira', 'Tomar', 'Tondela', 'Torres Novas', 'Torres Vedras', 'Valbom', 'Vale de Cambra', 'Valongo', 'Valpaços', 'Vendas Novas',
        'Viana do Castelo', 'Vila do Conde', 'Vila Franca de Xira', 'Vila Nova de Famalicão', 'Vila Nova de Foz Côa', 'Vila Nova de Gaia', 'Vila Praia da Vitória', 'Vila Real', 'Vila Real de Santo António', 'Viseu', 'Vizela'
    );

    protected static \$postcode = array(
        '%##0-###', '%##0',
        '%##1-###', '%##1',
        '%##4-###', '%##4',
        '%##5-###', '%##5',
        '%##9-###', '%##9',
        );

    protected static \$buildingNumber = array('nº %', 'nº %%','nº %%%', '%', '%#', '%##');

    protected static \$secondaryAddressFormats = array(
        'Bloco %', 'Bl. %',
        '%º Dir.', '%#º Dir.', '%º Dr.', '%#º Dr.',
        '%º Esq.', '%#º Esq.', '%º Eq.', '%#º Eq.',
    );

    /**
     * @example '6º Dir.'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /** @link http://www.indexmundi.com/pt/ **/
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
        'Espanha', 'Estados Unidos da América', 'Estónia', 'Etiópia',
        'Filipinas', 'Finlândia', 'Fiji','França', 'Gabão', 'Gâmbia',
        'Georgia', 'Gana', 'Granada', 'Grécia', 'Guatemala',
        'Guiné Equatorial', 'Guiné Bissau', 'Guiana', 'Haiti', 'Honduras',
        'Hungria', 'Índia', 'Indonésia', 'Iraque', 'Irlanda', 'Irã',
        'Islândia', 'Ilhas Marshall', 'Ilhas Maurício', 'Ilhas Salomão',
        'Ilhas Samoa', 'Israel', 'Itália', 'Jamaica', 'Japão', 'Jordânia',
        'Kiribati', 'Kwait', 'Laos', 'Lesoto', 'Letónia', 'Libéria', 'Líbia',
        'Liechtenstein', 'Lituânia', 'Luxemburgo', 'Líbano', 'Macedónia',
        'Madagascar', 'Malásia', 'Malauí', 'Maldivas', 'Mali', 'Malta',
        'Marrocos', 'Mauritânia', 'Micronésia', 'Moldávia', 'Mongólia',
        'Montenegro', 'Moçambique', 'México', 'Mónaco', 'Namíbia', 'Nauru',
        'Nepal', 'Nicarágua', 'Nigéria', 'Noruega', 'Nova Guiné',
        'Nova Zelândia', 'Níger', 'Omã', 'Qatar', 'Quênia','Quirguistão',
        'Paquistão', 'Palaos', 'Panamá', 'Papua Nova Guiné', 'Paraguai',
        'Países Baixos', 'Peru', 'Polónia', 'Portugal', 'Reino Unido',
        'Reino Unido da Grã Bretanha e Irlanda do Norte',
        'República Centroafricana', 'República Checa',
        'República Democrática do Congo', 'República Dominicana', 'Ruanda',
        'Romênia', 'Rússia', 'São Cristovão e Neves', 'San Marino',
        'São Vicente e as Granadinas', 'Santa Luzia', 'São Tomé e Príncipe',
        'Senegal', 'Sérvia', 'Seychelles', 'Serra Leoa', 'Singapura', 'Síria',
        'Somália', 'Sri Lanka', 'Suazilândia', 'Sudão', 'Suécia', 'Suiça',
        'Suriname', 'Tailândia', 'Tanzânia', 'Tajiquistão', 'Timor Leste',
        'Togo', 'Tonga', 'Trinidad e Tobago', 'Turcomenistão', 'Turquia',
        'Tuvalu', 'Tunísia', 'Ucrânia', 'Uganda', 'Uruguai', 'Uzbequistão',
        'Vaticano', 'Vanuatu', 'Venezuela', 'Vietnã', 'Yemen', 'Zâmbia',
        'Zimbábue'
    );

    /**
     * @example 'Avenida' ' Rua'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'Aveiro' 'Oliveira de Azeméis'
     */
    public function city()
    {
        return static::randomElement(static::\$cities);
    }
}
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Address.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  101 => 20,  95 => 19,  91 => 18,  82 => 14,  76 => 13,  68 => 12,  60 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php

namespace Faker\\Provider\\pt_PT;

class Address extends \\Faker\\Provider\\Address
{
    protected static \$streetPrefix = array('Av.', 'Avenida', 'R.', 'Rua', 'Travessa', 'Largo');

    protected static \$streetNameFormats = array(
        '{{streetPrefix}} {{lastName}}',
        '{{streetPrefix}} {{firstName}} {{lastName}}',
        '{{streetPrefix}} St. {{firstName}} {{lastName}}',
        '{{streetPrefix}} São. {{firstName}}',
        '{{streetPrefix}} de {{lastName}}',
    );

    protected static \$streetAddressFormats = array(
        '{{streetName}}',
        '{{streetName}}, {{buildingNumber}}',
        '{{streetName}}, {{buildingNumber}}, {{secondaryAddress}}',
    );

    /** @link http://www.univ-ab.pt/PINTAC/carta_normas.htm address example in letters **/
    protected static \$addressFormats = array(
        \"{{streetAddress}} {{postcode}} {{city}}\",
    );

    /** @link http://www.mapadeportugal.net/indicecidades.asp **/
    private static \$cities = array(
        'Abrantes', 'Agualva-Cacém', 'Águeda', 'Albufeira', 'Alcácer do Sal', 'Alcobaça', 'Almada', 'Almeirim', 'Alverca do Ribatejo', 'Amadora', 'Amarante', 'Amora', 'Anadia', 'Angra do Heroísmo', 'Aveiro', 'Barcelos', 'Barreiro',
        'Beja', 'Braga', 'Bragança', 'Caldas da Rainha', 'Camara de Lobos', 'Cantanhede', 'Cartaxo', 'Castelo Branco', 'Chaves', 'Coimbra', 'Covilhã', 'Elvas', 'Entroncamento', 'Ermesinde', 'Esmoriz', 'Espinho', 'Esposende', 'Estarreja',
        'Estremoz', 'Évora', 'Fafe', 'Faro', 'Fátima', 'Felgueiras', 'Fiães', 'Figueira da Foz', 'Freamunde', 'Funchal', 'Fundão', 'Gafanha da Nazaré', 'Gondomar', 'Gouveia', 'Guarda', 'Guimarães', 'Horta', 'Ílhavo', 'Lagoa', 'Lagos', 'Lamego',
        'Leiria', 'Lisboa', 'Lixa', 'Loulé', 'Loures', 'Lourosa', 'Macedo de Cavaleiros', 'Machico', 'Maia', 'Mangualde', 'Marco de Canaveses', 'Marinha Grande',
        'Matosinhos', 'Mealhada', 'Miranda do Douro', 'Mirandela', 'Montemor-o-Novo', 'Montijo', 'Moura', 'Odivelas', 'Olhão da Restauração', 'Oliveira de Azeméis', 'Oliveira do Hospital', 'Ourém', 'Ovar', 'Paços de Ferreira',
        'Paredes', 'Penafiel', 'Peniche', 'Peso da Régua', 'Pinhel', 'Pombal', 'Ponta Delgada', 'Ponte de Sor', 'Portalegre', 'Portimão', 'Porto', 'Porto Santo', 'Póvoa de Santa Iria', 'Póvoa de Varzim', 'Quarteira', 'Queluz', 'Ribeira Grande', 'Rio Maior',
        'Rio Tinto', 'Sacavém', 'Santa Comba Dão', 'Santa Cruz', 'Santa Maria da Feira', 'Santana', 'Santarém', 'Santiago do Cacém', 'Santo Tirso',
        'São João da Madeira', 'São Mamede de Infesta', 'Seia', 'Seixal', 'Setúbal', 'Silves', 'Sines', 'Tarouca', 'Tavira', 'Tomar', 'Tondela', 'Torres Novas', 'Torres Vedras', 'Valbom', 'Vale de Cambra', 'Valongo', 'Valpaços', 'Vendas Novas',
        'Viana do Castelo', 'Vila do Conde', 'Vila Franca de Xira', 'Vila Nova de Famalicão', 'Vila Nova de Foz Côa', 'Vila Nova de Gaia', 'Vila Praia da Vitória', 'Vila Real', 'Vila Real de Santo António', 'Viseu', 'Vizela'
    );

    protected static \$postcode = array(
        '%##0-###', '%##0',
        '%##1-###', '%##1',
        '%##4-###', '%##4',
        '%##5-###', '%##5',
        '%##9-###', '%##9',
        );

    protected static \$buildingNumber = array('nº %', 'nº %%','nº %%%', '%', '%#', '%##');

    protected static \$secondaryAddressFormats = array(
        'Bloco %', 'Bl. %',
        '%º Dir.', '%#º Dir.', '%º Dr.', '%#º Dr.',
        '%º Esq.', '%#º Esq.', '%º Eq.', '%#º Eq.',
    );

    /**
     * @example '6º Dir.'
     */
    public static function secondaryAddress()
    {
        return static::numerify(static::randomElement(static::\$secondaryAddressFormats));
    }

    /** @link http://www.indexmundi.com/pt/ **/
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
        'Espanha', 'Estados Unidos da América', 'Estónia', 'Etiópia',
        'Filipinas', 'Finlândia', 'Fiji','França', 'Gabão', 'Gâmbia',
        'Georgia', 'Gana', 'Granada', 'Grécia', 'Guatemala',
        'Guiné Equatorial', 'Guiné Bissau', 'Guiana', 'Haiti', 'Honduras',
        'Hungria', 'Índia', 'Indonésia', 'Iraque', 'Irlanda', 'Irã',
        'Islândia', 'Ilhas Marshall', 'Ilhas Maurício', 'Ilhas Salomão',
        'Ilhas Samoa', 'Israel', 'Itália', 'Jamaica', 'Japão', 'Jordânia',
        'Kiribati', 'Kwait', 'Laos', 'Lesoto', 'Letónia', 'Libéria', 'Líbia',
        'Liechtenstein', 'Lituânia', 'Luxemburgo', 'Líbano', 'Macedónia',
        'Madagascar', 'Malásia', 'Malauí', 'Maldivas', 'Mali', 'Malta',
        'Marrocos', 'Mauritânia', 'Micronésia', 'Moldávia', 'Mongólia',
        'Montenegro', 'Moçambique', 'México', 'Mónaco', 'Namíbia', 'Nauru',
        'Nepal', 'Nicarágua', 'Nigéria', 'Noruega', 'Nova Guiné',
        'Nova Zelândia', 'Níger', 'Omã', 'Qatar', 'Quênia','Quirguistão',
        'Paquistão', 'Palaos', 'Panamá', 'Papua Nova Guiné', 'Paraguai',
        'Países Baixos', 'Peru', 'Polónia', 'Portugal', 'Reino Unido',
        'Reino Unido da Grã Bretanha e Irlanda do Norte',
        'República Centroafricana', 'República Checa',
        'República Democrática do Congo', 'República Dominicana', 'Ruanda',
        'Romênia', 'Rússia', 'São Cristovão e Neves', 'San Marino',
        'São Vicente e as Granadinas', 'Santa Luzia', 'São Tomé e Príncipe',
        'Senegal', 'Sérvia', 'Seychelles', 'Serra Leoa', 'Singapura', 'Síria',
        'Somália', 'Sri Lanka', 'Suazilândia', 'Sudão', 'Suécia', 'Suiça',
        'Suriname', 'Tailândia', 'Tanzânia', 'Tajiquistão', 'Timor Leste',
        'Togo', 'Tonga', 'Trinidad e Tobago', 'Turcomenistão', 'Turquia',
        'Tuvalu', 'Tunísia', 'Ucrânia', 'Uganda', 'Uruguai', 'Uzbequistão',
        'Vaticano', 'Vanuatu', 'Venezuela', 'Vietnã', 'Yemen', 'Zâmbia',
        'Zimbábue'
    );

    /**
     * @example 'Avenida' ' Rua'
     */
    public static function streetPrefix()
    {
        return static::randomElement(static::\$streetPrefix);
    }

    /**
     * @example 'Aveiro' 'Oliveira de Azeméis'
     */
    public function city()
    {
        return static::randomElement(static::\$cities);
    }
}
", "vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Address.php", "/var/www/public/DevLaon/templates/vendor/fzaninotto/faker/src/Faker/Provider/pt_PT/Address.php");
    }
}
