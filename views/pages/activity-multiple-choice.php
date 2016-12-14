<?php $this->layout('layout/activity')?>

<h3 class="headline">Multiple Choice:</h3>

<p></p>
<p>Print this page and circle a word to fill in the blank in each sentence.</p>

<!-- Multiple choice quiz -->
<p>1. You will be asked questions at an <span class="answer-placeholder">_____</span>.</p>
<ol class="multichoice">
    <li class="spaced" data-correct>interview</li>
    <li class="spaced">application</li>
    <li class="spaced">interests</li>
</ol>
<p>2. <span class="answer-placeholder">_____</span> can tell a person how you are feeling   without you even having to speak.</p>

<ol class="multichoice">
    <li class="spaced">Skills</li>
    <li class="spaced">Templates</li>
    <li class="spaced" data-correct>Body Language</li>
</ol>
<p>3. A person should <span class="answer-placeholder">_____</span> a company before going on   an interview.</p>

<ol class="multichoice">
    <li class="spaced">improve</li>
    <li class="spaced" data-correct>research</li>
    <li class="spaced">career</li>
</ol>
<p>4. A <span class="answer-placeholder">_____</span> letter should always be sent after you   have gone on an interview.</p>

<ol class="multichoice">
    <li class="spaced">cover-letter</li>
    <li class="spaced">friendly</li>
    <li class="spaced" data-correct>follow-up</li>
</ol>
<p>5. A <span class="answer-placeholder">_____</span> is a paper that tells employers about   you.</p>

<ol class="multichoice">
    <li class="spaced" data-correct>resume</li>
    <li class="spaced">rough draft</li>
    <li class="spaced">template</li>
</ol>
<p>6. Most jobs require you to have an <span class="answer-placeholder">_____</span> and/or   experience.</p>

<ol class="multichoice">
    <li class="spaced">interest</li>
    <li class="spaced" data-correct>education</li>
    <li class="spaced">edit</li>
</ol>
<p>7. A <span class="answer-placeholder">_____</span> is a job that you plan to have for a long   time.</p>

<ol class="multichoice">
    <li class="spaced" data-correct>career</li>
    <li class="spaced">prepare</li>
    <li class="spaced">resume</li>
</ol>
<p>8.  It is important to <span class="answer-placeholder">_____</span> your resume to make   necessary changes before you send it to a company.</p>

<ol class="multichoice">
    <li class="spaced">rough draft</li>
    <li class="spaced">template</li>
    <li class="spaced" data-correct>edit</li>
</ol>
<p>9.  There are <span class="answer-placeholder">_____</span> on your computer that can help   you write letters.</p>

<ol class="multichoice">
    <li class="spaced" data-correct>templates</li>
    <li class="spaced">interests</li>
    <li class="spaced">final drafts</li>
</ol>
<p>10. You will need to <span class="answer-placeholder">_____</span> a company to get an   application from them.</p>

<ol class="multichoice">
    <li class="spaced" data-correct>contact</li>
    <li class="spaced">prepare</li>
    <li class="spaced">interview</li>
</ol>

<!-- end quiz -->

<div class="button1" style="text-align: center;">
    <span class="btn btn-default js-show-answers">Check your answers!</span>
</div>

<script>
    var answersShowed = false;

    $(function () {
        $(".js-show-answers").click(function() {
            answersShowed = !answersShowed;
            
            if(answersShowed) {
                $(this).html('Return to quiz');

                $("[data-correct]").each(function() {
                    var el = $(this);

                    el.addClass('correct-answer')
                        //.parent().prev().find('.answer-placeholder')
                        //.addClass('correct-answer').html(el.html())
                    ;
                });
            } else {
                $(this).html('Check your answers!');

                $("[data-correct]").each(function() {
                    var el = $(this);

                    el.removeClass('correct-answer')
                        //.parent().prev().find('.answer-placeholder')
                        //.removeClass('correct-answer').html('_____')
                    ;
                });
            }
        });
    });
</script>

<style>
    .correct-answer {
        color: red;
        font-weight: bold;
    }
</style>