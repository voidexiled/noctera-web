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

/* library/piratecutthroat.html.twig */
class __TwigTemplate_c53d86d5307c7e7415314751f37381db extends \Twig\Template
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
        // line 1
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=pirateghost\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=piratecorsair\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Pirate Cutthroats</h2>  <img src=\"images/library/piratecutthroat.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The Pirate Cutthroat has often lived a pirate's life for some years. It proves their competence that they managed to survive for so long. On the other hand, the necessity to prove themselves to be invaluable members of the crew put them up to take incredible risks. Reckless against themselves and others, they employ tactics that everyone else would call crazy or suicidal. Eager to rise in the pirates' ranks, they take risks that everybody else would avoid. Their all-out attacks are a product of this attitude as are their usage of highly explosive weapons which are almost as dangerous to the user as to his opponent. Combine this attitude and armament with their love for incredible amounts of alcohol and an ill temper and you get a good impression of the Pirate Cutthroat and the danger he poses.</p>  <p>Pirate Cutthroats have 325 hitpoints. They are strong against earth and holy damage. On the other hand, they are weak against death, fire and ice damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p>  <p>Pirate Cutthroats yield 175 experience points. They carry compasses, gold coins and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/piratecutthroat.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/piratecutthroat.html.twig", "/var/www/html/system/templates/library/piratecutthroat.html.twig");
    }
}
