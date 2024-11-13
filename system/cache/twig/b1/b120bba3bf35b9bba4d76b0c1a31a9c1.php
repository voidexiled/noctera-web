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

/* library/deeplingspellsinger.html.twig */
class __TwigTemplate_dc464cf2a9e98c47fe1208629d7ecbad extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\">  <a style=\"float: right;\" href=\"?subtopic=creatures&race=deeplingwarrior\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a>  <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=deeplingscout\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a>  <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\">  <h2 style=\"float: right;\">Deepling Spellsingers</h2>  <img src=\"images/library/deeplingspellsinger.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\">  <p>The Deepling Spellsingers were once members of the priest caste. They were the librarians of the greatest treasure of the Deeplings - their amazingly vast knowledge and rich culture. Their turn to violence could be the result of the recent call to arms that made most members of the higher castes abandon their temples and obligations. They are also the keepers of most secrets of the forsaken Drowned Library. However, their vast knowledge of the workings of magic and the labyrinthine caves of the deep make them formidable foes who are not likely to part easily with their sacraments.</p>  <p>Deepling Spellsingers have 850 hitpoints. They are immune to fire and ice damage. Moreover, they are strong against death damage. On the other hand, they are weak against earth and energy damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p>  <p>Deepling Spellsingers yield 1000 experience points. They carry deepling filets, gold coins, key to the Drowned Libraries, platinum coins, spellsinger's seals and sometimes other items with them.</p>  </div></div>";
    }

    public function getTemplateName()
    {
        return "library/deeplingspellsinger.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/deeplingspellsinger.html.twig", "/var/www/html/system/templates/library/deeplingspellsinger.html.twig");
    }
}
