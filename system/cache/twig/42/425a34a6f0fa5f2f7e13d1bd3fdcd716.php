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

/* library/ogreruffian.html.twig */
class __TwigTemplate_c573097129c6c509ed9282cb7fad1db1 extends \Twig\Template
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
        echo "<div style=\"position: relative; height: 15px; width: 100%;\"> <a style=\"float: right;\" href=\"?subtopic=creatures&race=ogresage\">next <img src=\"images/arrow_right.gif\" width=\"15\" height=\"11\" border=\"0\"/></a> <a style=\"position: absolute;\" href=\"?subtopic=creatures&race=ogrerowdy\"><img src=\"images/arrow_left.gif\" width=\"15\" height=\"11\" border=\"0\"/> previous</a> <div style=\"position: absolute; width: 80%; margin-left: 10%; margin-right: 10%; text-align: center;\"><a href=\"?subtopic=creatures\"><img src=\"images/arrow_up.gif\" width=\"11\" height=\"15\" border=\"0\"/> back</a></div></div><div style=\"position: relative; top: 25px; clear: both; \"><div style=\"height: 64px; margin-bottom: 5px;\"> <h2 style=\"float: right;\">Ogre Ruffians</h2> <img src=\"images/library/ogreruffian.gif\"/></div><div style=\"margin-bottom: 35px; clear: both;\"> <p>The Ogre Ruffian is a stronger version of <a href=\"?subtopic=creatures&race=ogrebrute\">Ogre Brutes</a>.</p> <p>Ogre Ruffians have 5500 hitpoints. They are strong against physical damage. On the other hand, they are weak against ice damage. These creatures can neither be summoned nor convinced. In addition, they are able to sense invisible creatures.</p> <p>Ogre Ruffians yield 5000 experience points. They carry meat, ogre ear studs, ogre nose rings, platinum coins, small sapphires and sometimes other items with them.</p> </div></div>";
    }

    public function getTemplateName()
    {
        return "library/ogreruffian.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "library/ogreruffian.html.twig", "/var/www/html/system/templates/library/ogreruffian.html.twig");
    }
}
