<?php
/*

Template Name: quizzes

*/

get_header(); ?>

<div class="container">
    <div class="quiz-wrap">
		    <div class="quizzes">
		        
		        <div class="count"><span>0</span>/8</div>
    		                
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="display: none;">
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link active"
                        id="question0-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#question0"
                        type="button"
                        role="tab"
                        aria-controls="question0"
                        aria-selected="true"
                      >
                        0
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="question1-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#question1"
                        type="button"
                        role="tab"
                        aria-controls="question1"
                        aria-selected="true"
                      >
                        1
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="question2-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#question2"
                        type="button"
                        role="tab"
                        aria-controls="question2"
                        aria-selected="false"
                      >
                        2
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="question3-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#question3"
                        type="button"
                        role="tab"
                        aria-controls="question3"
                        aria-selected="false"
                      >
                        3
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="question4-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#question4"
                        type="button"
                        role="tab"
                        aria-controls="question4"
                        aria-selected="false"
                      >
                        4
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="question5-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#question5"
                        type="button"
                        role="tab"
                        aria-controls="question5"
                        aria-selected="false"
                      >
                        5
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="question6-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#question6"
                        type="button"
                        role="tab"
                        aria-controls="question6"
                        aria-selected="false"
                      >
                        6
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="question7-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#question7"
                        type="button"
                        role="tab"
                        aria-controls="question7"
                        aria-selected="false"
                      >
                        7
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button
                        class="nav-link"
                        id="question8-tab"
                        data-bs-toggle="pill"
                        data-bs-target="#question8"
                        type="button"
                        role="tab"
                        aria-controls="question8"
                        aria-selected="false"
                      >
                        8
                      </button>
                    </li>
                  </ul>
            
	            <?php echo do_shortcode('[contact-form-7 id="34c5088" title="quiz"]') ?>
                <div class="btn-start"><button class="start" role="button" onclick="showNextTab()">Bắt đầu</button></div>
	            <div class="tab-control">
                    <button
                      class="previous-button"
                      role="button"
                      onclick="showPreviousTab()"
                    >
                      Back
                    </button>
                    <button class="next-button" role="button" onclick="showNextTab()">
                      Next
                    </button>
                </div>
    		          
		    </div>
</div>
</div>

<?php get_footer(); ?>