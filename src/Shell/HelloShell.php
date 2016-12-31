<?php
namespace App\Shell;

use Cake\Console\Shell;

class HelloShell extends Shell
{
    public function main()
    {
        $this->out('Hello world.');
    }

    public function heyThere($name = 'Anonymous')
    {
        $this->out('Hey there ' . $name);
    }

    /**
     * Display help for this console.
     *
     * @return HelloOptionParser
     */
    public function getOptionParser()
    {
        $parser = parent::getOptionParser();
        $parser->description(
            'This is a simple hello world shell.

            ./bin/cake hello
            : \'Hello world.\'

            or

            ./bin/cake heyThere gavin
            : \'Hey there gavin\'
            '
        );
        return $parser;
    }
}
