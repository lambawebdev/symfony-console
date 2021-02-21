<?php

 namespace App;

 use Symfony\Component\Console\Command\Command;
 use Symfony\Component\Console\Input\InputArgument;
 use Symfony\Component\Console\Input\InputInterface;
 use Symfony\Component\Console\Output\OutputInterface;
 use Symfony\Component\Console\Input\InputOption;
 use Symfony\Component\Console\Question\Question;
 use Symfony\Component\Console\Question\ChoiceQuestion;


 class Interactive extends Command
 {

     protected function configure()
     {
         $this
             ->setName('interactive')
        ;
     }

     public function execute(InputInterface $input, OutputInterface $output)
     {      
        $helper = $this->getHelper('question');

        $question1 = new Question('Введите ваше имя:');
        $name = $helper->ask($input, $output, $question1);

        $question2 = new Question('Введите ваш возраст:');
        $age = $helper->ask($input, $output, $question2);

        $question3 = new ChoiceQuestion(
             'Выберите ваш пол:',
             ['М', 'Ж'],
             0
         );

         $sex = $helper->ask($input, $output, $question3);

        $output->writeln('Здравствуйте, ' . $name . ' Ваш возраст:' . $age . ' Ваш пол: ' . $sex);

         return Command::SUCCESS;
     }
 } 