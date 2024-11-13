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

/* library/clayguardian.html.twig */
class __TwigTemplate_9525adf647256601c4bc84c5ee548af5 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=cliffstrider\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=chokingfear\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Clay Guardians</h2> <img src=\"images/library/clayguardian.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>Clay Guardians are constructs like <a href=\"?subtopic=creatures&race=stonegolem\">Stone Golems</a>, yet stronger.</p> <p>Clay Guardians have 625 hitpoints. They are immune to earth damage and cannot be paralysed. Moreover, they are strong against death, energy, ice and physical damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Clay Guardians yield 400 experience points. They carry blank runes, gold coins, lumps of earth, small stones and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/clayguardian.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/clayguardian.html.twig", "/var/www/html/system/templates/library/clayguardian.html.twig");
    }
}
