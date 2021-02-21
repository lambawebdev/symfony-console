<?php

namespace App;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;

class StringTimes extends Command
{

    protected function configure()
    {
        $this
            ->setName('string_times')
            ->setDescription('The command multiply input string on option times')
            ->addArgument('enter_string', InputArgument::OPTIONAL, 'enter input string')
            ->addOption(
            	'times', 
            	NULL,
            	InputOption::VALUE_OPTIONAL,
            	'How many times should the message be printed?',
            	1
            )
		;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {	    
	    	$times = $input->getOption('times') ?? 2;
	  
		    for ($i = 0; $i < $times; $i++) {
			   
			        $output->writeln($input->getArgument('enter_string'));
		    }
        return Command::SUCCESS;
    }
}