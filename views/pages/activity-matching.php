<?php $this->layout('layout/activity')?>

<h3 class="headline">
    Matching
</h3>

<p>Print this page and connect the word to the correct meaning.</p>

<!-- Multiple choice quiz -->
<div class="grid">
    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">1. prepare<span class="answers">C</span></div>
        <div class="grid_text">A. Things a person is good at doing.</div>
    </div>

    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">2. resume<span class="answers">G</span></div>
        <div class="grid_text">B. To meet with someone from a company to talk about a job that you are trying to get.</div>
    </div>
    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">3. skills<span class="answers">A</span></div>
        <div class="grid_text">C. To get ready for something.</div>
    </div>
    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">4. application<span class="answers">F</span></div>
        <div class="grid_text">D. A letter that is usually sent with a resume when trying to get a job.</div>
    </div>
    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">5. interview<span class="answers">B</span></div>
        <div class="grid_text">E. A job that someone trains for and does for a living.</div>
    </div>
    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">6. body language<span class="answers">H</span></div>
        <div class="grid_text">F. A form that you fill out when trying to get a job.</div>
    </div>
    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">7. follow-up letter<span class="answers">I</span></div>
        <div class="grid_text">G. A paper that tells employers about you.</div>
    </div>
    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">8. cover letter<span class="answers">D</span></div>
        <div class="grid_text">H. The way your body can tell a person how you are feeling without using words.</div>
    </div>
    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">9. career<span class="answers">E</span></div>
        <div class="grid_text">I. A letter that is usually sent to someone after an interview.</div>
    </div>
    <div class="grid_row" style="height:50px;">
        <div class="grid_text" style="width:200px;">10. contact<span class="answers">J</span></div>
        <div class="grid_text">J. To call or speak with someone.</div>
    </div>
</div>

<div class="button1" style="width:175px; margin:0px auto; margin-top: 20px;">
    <a href="#" class="btn btn-default" onclick="showAnswers(); return false;">Check your answers!</a>
</div>

<script>
    function showAnswers() {
        $(".answers").show();
    }
</script>

<style>
    .answers {
        color: red;
        font-weight:bold;
        padding-left: 10px;
        display: none;
    }
</style>
