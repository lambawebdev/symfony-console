<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class SayHello extends Command
{

    protected function configure()
    {
        $this
            ->setName('say_hello')
            ->setDescription('Command output greeting')
            ->addArgument('enter_string', InputArgument::OPTIONAL, 'enter input string')
		;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {	    
	    $output->writeln('Привет ' . $input->getArgument('enter_string'));

        return Command::SUCCESS;
    }
    
}