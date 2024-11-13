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

/* library/orccultinquisitor.html.twig */
class __TwigTemplate_24b5d03061286a0ae4c40adfc566dd75 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=orccultminion\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=orccultfanatic\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Orc Cult Inquisitors</h2> <img src=\"images/library/orccultinquisitor.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>The Orc Cult Inquisitor is a stronger version of <a href=\"?subtopic=creatures&race=orcberserker\">Orc Berserkers</a>.</p> <p>Orc Cult Inquisitors have 1500 hitpoints. They are strong against energy and holy damage. On the other hand, they are weak against death and earth damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Orc Cult Inquisitors yield 1150 experience points. They carry bug meat, cultish robes, gold coins, halberds, ham, orcish gear, strong health potions and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/orccultinquisitor.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/orccultinquisitor.html.twig", "/var/www/html/system/templates/library/orccultinquisitor.html.twig");
    }
}
