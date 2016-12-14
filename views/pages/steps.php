<?php $this->layout('layout/default')?>

<div id="wq_main">
    <p><span class="bold">Your task is to find a job.</span> You are going to take some steps. These steps will help you learn how to get a job. Some of the things you will be doing will help you get to know yourself better.  You will do this part of the WebQuest by yourself.  Other parts of the WebQuest will need to be worked on in groups of three.  If you have trouble understanding some of the <a href="javascript:void(0);" data-toggle="popover" class="bold" title="Bold words" data-content="By clicking on bold words throughout the WebQuest website, you will be given their meaning."><span class="bold">bold words</span>,</a> click on them and you will be given the meaning.</p>

    <div style="float:right;"><img src="<?=$this->asset('assets/img/photo2b.jpg')?>" alt="Photo of Nurse and Patient" width="157" height="188"></div>
    <p class="bold">Select a Step to get started:</p>

    <ul class="indent">
        <li>
            <a href="<?=$this->url('step1')?>">Step 1:  Take the Career Key Test</a><br><br>
        </li>
        <li>
            <a href="<?=$this->url('step2')?>">Step 2:  Read through the advertisements</a><br><br>
        </li>
        <li>
            <a href="<?=$this->url('step3')?>">Step 3:  Fill Out An Application</a><br><br>
        </li>
        <li>
            <a href="<?=$this->url('step4')?>">Step 4:  Write a Resume and Cover Letter</a><br><br>
        </li>
        <li>
            <a href="<?=$this->url('step5')?>">Step 5:  Take Part In A Mock Interview</a><br><br>
        </li>
        <li>
            <a href="<?=$this->url('step6')?>">Step 6:  Write a Follow-Up Letter</a>
        </li>
    </ul>
</div>