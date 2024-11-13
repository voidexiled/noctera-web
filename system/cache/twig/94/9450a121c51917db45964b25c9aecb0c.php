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

/* library/cobraassassin.html.twig */
class __TwigTemplate_a161aab4b86f1ad01917abdb94f382fb extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=cobrascout\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=clomp\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Cobra Assassins</h2> <img src=\"images/library/cobraassassin.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>When Scarlett Etzel turned towards the shadows, her loyal followers turned away from her. Her change in tactics and the more covert approach has led to the hiring of shady characters to reinforce the order. Cobra Assassins are tough and stealthy, their resilience most likely only matched by their cunning. They attack swiftly, hide in dark corners and could very well end a life before the victim would even realise its imminent fate. Through training and small dosages of snake poison, they are immune to numerous toxic substances.</p> <p>Cobra Assassins have 8200 hitpoints. They are immune to earth damage and cannot be paralysed. Moreover, they are strong against physical damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Cobra Assassins yield 6980 experience points. They carry cobra crests, knives, opals, platinum coins, protection amulets, scimitars, small emeralds and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/cobraassassin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/cobraassassin.html.twig", "/var/www/html/system/templates/library/cobraassassin.html.twig");
    }
}
