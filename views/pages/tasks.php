<?php $this->layout('layout/default')?>

<div id="wq_main">
    <p><span class="bold">You are going to do some tasks.</span> These tasks will help you learn how to get a job.  Some of the things you will be doing will help you get to know yourself better.  You will do this part of the WebQuest by yourself.  Other parts of the WebQuest will need to be worked on in groups of three.  If you have trouble understanding some of the <a href="javascript:void(0);" data-toggle="popover" class="bold" title="Bold words" data-content="By clicking on bold words throughout the WebQuest website, you will be given their meaning."><span class="bold">bold words</span>,</a> click on them and you will be given the meaning.</p>

    <div style="float:right;"><img src="<?=$this->asset('assets/img/photo2b.jpg')?>" alt="Photo of Nurse and Patient" width="157" height="188"></div>
    <p class="bold">Select a Task to get started:</p>

    <ul class="indent">
        <li>
            <a href="<?=$this->url('task1')?>">Task 1:  Take the Career Key Test</a><br><br>
        </li>
        <li>
            <a href="<?=$this->url('task2')?>">Task 2:  Fill Out An Application</a><br><br>
        </li>
        <li>
            <a href="<?=$this->url('task3')?>">Task 3:  Write a Resume and Cover Letter</a><br><br>
        </li>
        <li>
            <a href="<?=$this->url('task4')?>">Task 4:  Take Part In A Mock Interview</a><br><br>
        </li>
        <li>
            <a href="<?=$this->url('task5')?>">Task 5:  Write a Follow-Up Letter</a>
        </li>
    </ul>
</div>