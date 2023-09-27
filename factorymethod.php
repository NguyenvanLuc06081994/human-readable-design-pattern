<?php

interface Interviewer
{
    public function askQuestions();
}

class Developer implements Interviewer
{
    public function askQuestions(): void
    {
        echo 'Asking about design pattern';
    }
}

class CommunityExecutive implements Interviewer
{
    public function askQuestions(): void
    {
        echo 'Asking about community building';
    }
}

abstract class HiringManager
{
    // Factory method
     abstract protected function makeInterviewer(): Interviewer;

     public function takeInterview(): void
     {
         $interviewer = $this->makeInterviewer();
         $interviewer->askQuestions();
     }
}

class DevelopmentManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new Developer();
    }
}

class MarketingManager extends HiringManager
{
    public function makeInterviewer(): Interviewer
    {
        return new CommunityExecutive();
    }
}

$devManager = new DevelopmentManager();
$devManager->takeInterview();

$marketingManager = new MarketingManager();
$marketingManager->takeInterview();